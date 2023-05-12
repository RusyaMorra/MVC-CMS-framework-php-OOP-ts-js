import log from '../../log';
import defaultContainer from './defaultContainer';
import ProfileService from './ProfileService/ProfileService';
import {interfaces} from 'inversify/lib/interfaces/interfaces';
import serviceConstrictors from './serviceConstrictors';
import {Context, Services} from './types';
import * as R from 'ramda';
import {onStart} from '../../systemHooks';
import {KafkaContext} from '../../clients/kafka/getKafkaContext';
import {getQueueContext} from '../../clients/queue/getQueueContext';
import {PrismaClient} from '@prisma/client';
import {Knex} from 'knex';
import {Client} from 'pg';
import {WorkerUtils} from 'graphile-worker';
import {ElasticClient} from '../../clients/elastic';
import {UserData} from './ProfileService/BaseProfileService';

let willRunOnce = true;

export const createContext = async (container: interfaces.Container = defaultContainer): Promise<Context> => {
  const close = async () => {
    await Promise.all([
      container.unbindAsync('Prisma'),
      container.unbindAsync('PrismaReadOnly'),
      container.unbindAsync('Knex'),
      container.unbindAsync('Postgres'),
      container.unbindAsync('Kafka'),
    ]);
  };

  const [
    prisma,
    prismaReadOnly,
    knex,
    postgres,
    elastic,
    worker,
    kafka,
  ] = await Promise.all([
    container.getAsync<PrismaClient>('Prisma'),
    container.getAsync<PrismaClient>('PrismaReadOnly'),
    container.getAsync<Knex>('Knex'),
    container.getAsync<Client>('Postgres'),
    container.getAsync<ElasticClient>('Elastic'),
    container.getAsync<WorkerUtils>('Queue'),
    container.getAsync<KafkaContext>('Kafka'),
  ]);

  const context: Context = {
    prisma,
    prismaReadOnly,
    knex,
    postgres,
    worker,
    elastic,
    log,
    close,
    service: (name: keyof Services) => container.get(name),
    container,
    kafka,
    queue: getQueueContext(kafka),
  };

  const pairs = R.toPairs(serviceConstrictors);

  for (const [name, constructor] of pairs) {
    if (!container.isBound(name)) {
      container.bind(name)
        .toDynamicValue((ctx) => constructor({
          ...context,
          container: ctx.container,
          service: (name: keyof Services) => ctx.container.get(name),
        }))
        .inTransientScope();
    }
  }

  if (willRunOnce) {
    willRunOnce = false;
    await onStart(context);
  }

  return context;
};

export const createUserAwareContext = (context: Context, userId: number): Context => {
  const Context = {
    ...context,
    userId,
  };

  return Context;
};

export const createUsersAwareContext = async (
  {userId, managerId}: UserData,
  container: interfaces.Container = defaultContainer,
): Promise<Context> => {
  const child = container.createChild();

  const created = await createContext(child);

  const profile = new ProfileService(created);

  if (userId) {
    profile.setUserId(userId);
  }

  if (managerId) {
    profile.setManagerId(managerId);
  }

  child.bind<ProfileService>('profile')
    .toConstantValue(profile);

  return {
    ...created,
    container: child,
  };
};
