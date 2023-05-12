import ProfileService from './ProfileService/ProfileService';
import {ReportsService} from './Reports/ReportsService';
import {SendingEmailsService} from './SendingEmails/SendingEmailsService';
import {SaveFileMethods} from './SaveFiles/SaveFileMethods';
import {VersionsService} from './VersionsService/VersionsService';
import {BackChartsService} from './BackChartsService/BackChartsService';

export interface AdditionalServices {
  profile: ProfileService;
  reports: ReportsService;
  sendingEmails: SendingEmailsService;
  saveFiles: SaveFileMethods;
  versions: VersionsService;
  backCharts: BackChartsService;
}
