import * as R from 'ramda';
import {baseServiceConstrictors} from './serviceConstrictors';
import additionalServiceConstrictors from './additionalServiceConstrictors';
import {Context} from './types';

export interface RuntimePermission {
  id: string;
  service: string;
  name: string;
}

// eslint-disable-next-line max-len
const withoutSystemFields = (key: string) => !['constructor', '_hooks', 'hooksAdd', 'getSearchString', 'augmentByDefault', 'ctx', 'prismaService', 'config', 'prismaExternalService', 'needToSyncCount', 'getIdsToSyncWithElastic', 'markSynced', 'markToSync', 'getRegistryEntries', 'getPostOperations', 'getUnPostOperations'].includes(key);

export const getRuntimePermissions = (ctx: Context): RuntimePermission[] => {
  const services = R.fromPairs(
    R.toPairs(
      R.mergeLeft(additionalServiceConstrictors, baseServiceConstrictors),
    )
      .map(([name, constructor]) => [name, constructor(ctx)]),
  );

  const runtimePermissions = [];

  for (const [service, value] of R.toPairs(services)) {
    const methods = R.keysIn(value);
    let prototypeInstance = Object.getPrototypeOf(value);

    while (Object.getPrototypeOf(prototypeInstance)) {
      methods.push(...Object.getOwnPropertyNames(prototypeInstance));
      prototypeInstance = Object.getPrototypeOf(prototypeInstance);
    }

    runtimePermissions.push(methods
      .filter(withoutSystemFields)
      .map((method) => ({
        id: `${service}.${method}`,
        service,
        name: method,
      })),
    );
  }

  return R.flatten(runtimePermissions);
};
