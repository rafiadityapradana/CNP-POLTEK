<?php
defined('BASEPATH') or exit('No direct script access allowed');


//$route['api/welcome'] = 'api/welcome_api/restLTP'; // Example 4
// $route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
// $route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
$route['api/access-app/(:any)/(:any)'] = 'api/welcome_api/app/$1/$2';
$route['api/chart/(:any)'] = 'api/CNP_Api/chart/$1';
$route['api/new-color/(:any)'] = 'api/CNP_Api/color/$1';
$route['api/cv/(:any)'] = 'api/CNP_Api/cv/$1';
$route['api/app/lang/(:any)'] = 'api/welcome_api/leng/$1';
$route['register'] = 'cnp/register';
$route['look-screen'] = 'cnp/screen';
$route['look'] = 'cnp/lookScreen';

$route['app/control'] = 'control';
$route['app/control/(:any)'] = 'control/year/$1';
$route['app/control/account/(:any)'] = 'control/account/$1';
$route['app/control/account/set-color/(:any)'] = 'control/setcolor/$1';
$route['app/control/account/delete-color/(:any)'] = 'control/deletecolor/$1';
$route['app/control/account-password/(:any)'] = 'control/password/$1';
$route['app/control/account-data/(:any)'] = 'control/accountdata/$1';
$route['app/control/account-photo/(:any)'] = 'control/photo/$1';
$route['app/control/users/(:any)'] = 'control/users/$1';
$route['app/control/users/data/college-students/detail/(:any)'] = 'control/usersdetailstudents/$1';
$route['app/control/users/data/company/detail/(:any)'] = 'control/usersdetailcompany/$1';
$route['app/control/users/data/delete/(:any)'] = 'control/usersdelete/$1';
$route['app/control/users/new-request/(:any)'] = 'control/usersnewrequest/$1';
$route['app/control/users/new-request/detail/(:any)'] = 'control/usersnewrequestdetail/$1';
$route['app/control/users/view-request/(:any)'] = 'control/usersviewrequest/$1';
$route['app/control/users/view-request/detail/(:any)'] = 'control/usersviewrequestdetail/$1';
$route['app/control/users/activate-request/(:any)'] = 'control/usersaktivate/$1';
$route['app/control/users/disable-request/(:any)'] = 'control/usersdisable/$1';
$route['app/control/users/data/college-students/(:any)'] = 'control/usersstudents/$1';
$route['app/control/users/data/company/(:any)'] = 'control/userscompany/$1';
$route['app/control/users/account/download-cv/(:any)'] = 'control/usersdownloadcv/$1';
$route['app/control/users/account/download-certificate/(:any)'] = 'control/usersdownloadcertificate/$1';
$route['app/control/users/reset-password/(:any)'] = 'control/usersresetpass/$1';
$route['app/control/users/account/update/(:any)'] = 'control/usersupdate/$1';
$route['app/control/users/account-company/update/(:any)'] = 'control/usersupdatecompany/$1';
$route['app/control/users/new-company/account/(:any)'] = 'control/userscreatecompanyaccount/$1';
$route['app/control/users/new-company/account/data/(:any)'] = 'control/userscreateaccount/$1';
$route['app/control/company/company-data/(:any)'] = 'control/usersdatacompany/$1';
$route['app/control/company/company-data/status/(:any)'] = 'control/datacompanystatus/$1';
$route['app/control/company/(:any)'] = 'control/company/$1';
$route['app/control/company/data/delete/(:any)'] = 'control/companydelete/$1';
$route['app/control/company/data/create/(:any)'] = 'control/companycreate/$1';
$route['app/control/company/data/detail/(:any)'] = 'control/companydetail/$1';
$route['app/control/company/data/job-vacancy/(:any)'] = 'control/companyjobvacncydetail/$1';
$route['app/control/company/data/job-vacancy/download-cv/(:any)'] = 'control/companyjobvacncydownloadcv/$1';
$route['app/control/job-vacancy/(:any)'] =  'control/jobvacncy/$1';
$route['app/control/job-vacancy/new/(:any)'] =  'control/createjobvacncy/$1';
$route['app/control/job-vacancy/data/(:any)'] =  'control/detailjobvacncy/$1';
$route['app/control/job-vacancy/data/delete/(:any)'] =  'control/deletejobvacncy/$1';
$route['app/control/job-vacancy/job-app/delete/(:any)'] =  'control/deletejobapp/$1';
$route['app/control/job-vacancy/job-app/data/(:any)'] =  'control/deteiljobapp/$1';
$route['app/control/job-application/(:any)'] =  'control/jobapplication/$1';
$route['app/control/activity-information/(:any)'] =  'control/activity/$1';
$route['app/control/activity-information/info/(:any)'] =  'control/activityinfo/$1';
$route['app/control/activity-information/delete/(:any)'] =  'control/activitydelete/$1';
$route['app/control/activity-information/create/(:any)'] =  'control/activitycreate/$1';
$route['app/control/setting/lang/(:any)'] =  'control/settinglang/$1';
$route['app/control/setting/lang/put/(:any)'] =  'control/langput/$1';
$route['app/control/users-access/(:any)'] =  'control/usersallaceess/$1';
$route['app/control/ip-access/(:any)'] =  'control/ipaceess/$1';
$route['app/control/lang/create/(:any)'] =  'control/langcreate/$1';
$route['app/control/lang/delete/(:any)'] =  'control/langdelete/$1';



$route['app/company'] = 'pt';
$route['app/company/account/(:any)'] = 'pt/account/$1';
$route['app/company/account-data/(:any)'] = 'pt/accountupdate/$1';
$route['app/company/account-photo/(:any)'] = 'pt/photo/$1';
$route['app/company/account-photo-sampul/(:any)'] = 'pt/photosampul/$1';
$route['app/company/account-password/(:any)'] = 'pt/password/$1';
$route['app/company/account-company-data/(:any)'] = 'pt/companyupdateaccount/$1';
$route['app/company/gallery-photo/(:any)'] = 'pt/uploadgallery/$1';
$route['app/company/gallery-update/(:any)'] = 'pt/updategallery/$1';
$route['app/company/make-job/(:any)'] = 'pt/makejob/$1';
$route['app/company/job-vacancy/data/(:any)'] = 'pt/jobvacancydetail/$1';
$route['app/company/job-vacancy/status/(:any)'] = 'pt/jobvacancystatus/$1';
$route['app/company/job-vacancy/delete/(:any)'] = 'pt/jobvacancydelete/$1';
$route['app/company/job-application/data/user/(:any)'] ='pt/downloadcv/$1';
$route['app/company/job-application/data/decision/(:any)'] ='pt/decision/$1';
$route['app/company/job-vacancy/data/user/(:any)/(:any)/(:any)'] = 'pt/jobvacancyuserdata/$1/$2/$3';
$route['app/company/job-vacancy/data/user-certificate/(:any)/(:any)/(:any)/(:any)'] = 'pt/usercertificate/$1/$2/$3/$4';






$route['app/account'] = 'mahasiswa';
$route['app/account/(:any)'] = 'mahasiswa/profile/$1';
$route['app/account-password/(:any)'] = 'mahasiswa/password/$1';
$route['app/account-update/(:any)'] = 'mahasiswa/account/$1';
$route['app/account-photo/(:any)'] = 'mahasiswa/photo/$1';
$route['app/personal-data/(:any)'] = 'mahasiswa/personaldata/$1';

$route['app/cv-data/(:any)'] = 'mahasiswa/cvdata/$1';
$route['app/cv-data/commanditaire-vennootschap/(:any)'] = 'mahasiswa/commanditaire/$1';
$route['app/cv-data/commanditaire-vennootschap/delete/(:any)'] = 'mahasiswa/commanditairedelete/$1';
$route['app/cv-data/commanditaire-vennootschap/primary/(:any)'] = 'mahasiswa/commanditaireprimary/$1';

$route['app/experience-data/(:any)'] = 'mahasiswa/experience/$1';
$route['app/experience-data/delete/(:any)'] = 'mahasiswa/experiencedelete/$1';

$route['app/job-application-data/(:any)'] = 'mahasiswa/jobapplication/$1';
$route['app/job-application/delete/(:any)'] = 'mahasiswa/jobapplicationdelete/$1';

$route['app/ability-data/(:any)'] = 'mahasiswa/abilitydata/$1';
$route['app/ability-data/delete/(:any)'] = 'mahasiswa/abilitydelete/$1';

$route['app/certificate-data/(:any)'] = 'mahasiswa/certificate/$1';
$route['app/certificate-data/view/(:any)'] = 'mahasiswa/certificatedetail/$1';
$route['app/certificate-data/update/(:any)'] = 'mahasiswa/certificateupdate/$1';
$route['app/certificate-data/delete/(:any)'] = 'mahasiswa/certificatedelete/$1';

$route['job-vacancy'] = 'cnp/jobvacancy';
$route['job-vacancy/(:any)'] = 'cnp/jobvacancydeteil/$1';
$route['job-vacancy/file/download/(:any)'] = 'cnp/downloadposterfile/$1';
$route['job-vacancy/send/job-application/(:any)'] = 'cnp/sendjopapplication/$1';

$route['job-seekers'] = 'cnp/jobseekres';
$route['job-seekers/data/(:any)'] = 'cnp/jobseekresdetail/$1';
$route['job-seekers/data/certificate/(:any)'] = 'cnp/jobseekrescertificate/$1';
$route['job-seekers/major/(:any)'] = 'cnp/jobseekresmajors/$1';

$route['company'] = 'cnp/company';
$route['company-profile/(:any)'] = 'cnp/companyprofile/$1';

$route['activity-information'] = 'cnp/activity';
$route['activity-information/(:any)'] = 'cnp/activitydetail/$1';
$route['language'] = 'cnp/language';

$route['app/logout'] = 'cnp/logout';
$route['default_controller'] = 'cnp';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/