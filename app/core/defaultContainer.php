import 'reflect-metadata';
import {PrismaClient} from '@prisma/client';
import {WorkerUtils} from 'graphile-worker';
import {Container} from 'inversify';
import {Knex} from 'knex';
import {Client} from 'pg';
import {getPrisma} from '../../clients/getPrisma';
import {getKnex} from '../../clients/knex';
import {getPostgres} from '../../clients/postgres';
import getQueue from '../../clients/queue/getQueue';
import getKafkaContext, {KafkaContext} from '../../clients/kafka/getKafkaContext';
import {ElasticClient, getElastic} from '../../clients/elastic';

const defaultContainer = new Container({defaultScope: 'Singleton'});

defaultContainer.bind<PrismaClient>('Prisma')
  .toDynamicValue(() => getPrisma('write'))
  .onDeactivation((prisma: PrismaClient) => prisma.$disconnect());
defaultContainer.bind<PrismaClient>('PrismaReadOnly')
  .toDynamicValue(() => getPrisma('readOnly'))
  .onDeactivation((prisma: PrismaClient) => prisma.$disconnect());
defaultContainer.bind<Knex>('Knex')
  .toDynamicValue(() => getKnex())
  .onDeactivation((knex: Knex) => knex.destroy());
defaultContainer.bind<Client>('Postgres')
  .toDynamicValue(() => getPostgres())
  .onDeactivation((postgres: Client) => postgres.end());
defaultContainer.bind<WorkerUtils>('Queue')
  .toDynamicValue(() => getQueue())
  .onDeactivation((queue: WorkerUtils) => queue.release());
defaultContainer.bind<ElasticClient>('Elastic')
  .toDynamicValue(() => getElastic());
defaultContainer.bind<KafkaContext>('Kafka')
  .toDynamicValue(() => getKafkaContext())
  .onDeactivation((kafka) => kafka.close());

export default defaultContainer;
