<?php
use Illuminate\Support\Facades\Route;

Route::get('/cc', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});
Route::get('/keypress',function(){
	return view('keypress');
});
Route::get('/outofservice',function(){
	return view('outofservice');
});
Route::get('/exit_checklistform', function () {
    return view('exit_checklistform');
});
Route::get('/yajrapage', function () {
    return view('admin.yajra');
});
Route::get('/pre_employment_application_form', function () {
    return view('pre_employment_application_form');
});
Route::get('/forget', function () {
    return view('forgot-password');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/mainDashboard', function () {
    return view('layout.apptheme');
});
Route::middleware('email.superadmin.check')->group(function(){
});
Route::get('/mcallforinterview', function () {
    return view('manager.mcallforinterview');
});
Route::get('/uploadsheet', function () {
    return view('payroll.uploadsheet');
});
Route::get('/uploadsheetdata', function () {
    return view('uploaddatasheet');
});

Route::get('/','MyController@logout');

Route::get('/reservemeetingroom','ReservationController@reservemeetingroom');
Route::any('/submitreservtion','ReservationController@submitreservtion');
Route::get('/reservationreport','ReservationController@reservationreport');

Route::get('/itticket','ItController@itticket');
Route::any('/submititticket','ItController@submititticket');
Route::get('itticketrequest','ItController@itticketrequest');
Route::get('itticketresolverequest','ItController@itticketresolverequest');
Route::get('itticketrejectrequest','ItController@itticketrejectrequest');
Route::any('/updateitticket/{id}/{comment}/{status}', 'ItController@updateitticket');
Route::any('submitresolveitticket','ItController@submitresolveitticket');
Route::get('itinventorylist','ItController@itinventorylist');
Route::any('addtoinventory','ItController@addtoinventory');
Route::any('submitaddtoinventory','ItController@submitaddtoinventory');
Route::any('editinventory/{id}','ItController@editinventory');
Route::any('submiteditinventory','ItController@submiteditinventory');
Route::any('removefrominventory/{id}','ItController@removefrominventory');
Route::any('submititreview','ItController@submititreview');
Route::any('itreviewreport','ItController@itreviewreport');

Route::get('composeemail','EmailController@composeemail');
Route::any('sendcomposeemail','EmailController@sendcomposeemail');

Route::get('bizzwelcome','welcomeController@bizzwelcome');
Route::get('bizzwelcomemodal','welcomeController@bizzwelcomemodal');

Route::get('selecttemplate','postController@selecttemplate');
Route::any('posteditor','postController@posteditor');

Route::get('/maindashboard','UserController@maindashboard');
Route::get('/viewdetails/{id}','UserController@viewdetails');
Route::get('/empreminder','UserController@empreminder');
Route::any('/addreminder','UserController@addreminder');
Route::get('/complain','UserController@complain');
Route::any('/addcomplain','UserController@addcomplain');
Route::any('/viewcomment/{id}','UserController@viewcomment');
Route::get('/trainingmanualvideo','UserController@trainingmanualvideo');
Route::get('/trainingmanualaudio','UserController@trainingmanualaudio');
Route::get('/trainingmanualpdf','UserController@trainingmanualpdf');
Route::get('/bizzlibrary','UserController@bizzlibrary');
Route::get('/hrpolicy','UserController@hrpolicy');
Route::get('/myforms','UserController@myforms');
Route::get('/games','UserController@games');
Route::get('/websites','UserController@websites');
Route::get('submitpostreply/{id}/{value}','UserController@submitpostreply');
Route::get('selectannouncementforcomment','UserController@selectannouncementforcomment');
Route::any('submitselectannouncement','UserController@submitselectannouncement');
Route::any('approvedcomment/{id}','UserController@approvedcomment');
Route::any('declinedcomment/{id}','UserController@declinedcomment');
Route::get('submitcomment/{id}/{value}','UserController@submitcomment');
Route::get('/yajratabledata','UserController@yajratable')->name('datatable.empdata');

Route::any('/complainreport','AdminController@complainreport');
Route::any('/processcomplain/{id}','AdminController@processcomplain');
Route::any('/rejectcomplain/{id}','AdminController@rejectcomplain');
Route::any('/resolvecomplain/{id}','AdminController@resolvecomplain');
Route::get('submitcomplaincomment/{id}/{value}','AdminController@submitcomplaincomment');
Route::get('/testserver','AdminController@testserver');
Route::get('/testserversearchmonth/{month}/{name}','AdminController@testserversearchmonth');

Route::any('selectattendance','attendanceController@selectattendance');
Route::any('uploadeattendance','attendanceController@uploadeattendance');
Route::any('markattendancereport','attendanceController@markattendancereport');
Route::any('markattendance','attendanceController@markattendance');
Route::any('submitmarkattendance','attendanceController@submitmarkattendance');


Route::any('/mylogin','hrmcontroller@hrmlogin');
Route::get('/canLogin','hrmcontroller@canlopage');
Route::any('/candidatelogin','hrmcontroller@hrmcandatelogin');
Route::get('/newempform','hrmcontroller@newpreemployeeform');
Route::any('/submitjobapplicant','hrmcontroller@submitjobapplicant');
Route::get('/jobform','hrmcontroller@jobforminput');
Route::get('/subdept/{id}','hrmcontroller@subd');
Route::any('/saveJobee','hrmcontroller@savecandi');

Route::middleware('email.admin.check')->group(function(){
	Route::get('/filteradminDashboard/{filter}','AdminController@filteradminDashboard');
	Route::get('/adminDashboard','AdminController@admindashboard');
	Route::get('/allrequest','AdminController@alllist');
	Route::get('/candidatelist','AdminController@candidatelist');
	Route::get('/downloadExcel','elscontroller@downloadExcel');
	Route::get('/candidate_list','AdminController@candidate_list');
	Route::get('/candidate_listdata','AdminController@candidate_listdata');
	Route::get('/searchcan/{id}','AdminController@searchcandidate_list');
	Route::any('/getimageview/{id}','AdminController@getimageview');
	Route::get('/screening_list','AdminController@screening_list');
	Route::get('/screening_listdata','AdminController@screening_listdata');
	Route::get('/searchscr/{id}','AdminController@searchscreening_list');
	Route::get('/irexperience_list','AdminController@irexperience_list');
	Route::get('/irexperience_listdata','AdminController@irexperience_listdata');
	Route::get('/searchire/{id}','AdminController@searchirexperience_list');
	Route::get('/irrelevent_list','AdminController@irrelevent_list');
	Route::get('/irrelevent_listdata','AdminController@irrelevent_listdata');
	Route::get('/searchirr/{id}','AdminController@searchirrelevent_list');
	Route::get('/candidatelistdata','AdminController@yajratable')->name('datatable.candata');
	Route::get('/screeninglistdata','AdminController@yajrascrtable')->name('datatable.scrdata');
	Route::get('/irreleventlistdata','AdminController@yajrairrtable')->name('datatable.irrdata');
	Route::get('/irexperiencelist','AdminController@yajraintable')->name('datatable.irxdata');
	Route::get('/adamaction/{id}','AdminController@candiaction');
	Route::get('/inprocesscandidates','AdminController@inprocandidatelist');
	Route::get('/emailtocallfiorawait/{id}','AdminController@cfinterview');
	Route::any('/submicallfiorawait','AdminController@savecallfiorawait');
	Route::get('/callforinterview','AdminController@callforinter');
	Route::get('/interview_evalution_form/{id}','AdminController@inevfor');
	Route::any('/submithrevucanform','AdminController@adminsdevuform');
	Route::get('/adattendaction/{id}','AdminController@candiacttoattend');
	Route::get('/evalutioncandidate','AdminController@evalutedcandi');
	Route::get('/hiredcandidates','AdminController@hiredcandi');
	Route::get('/modalemployeeview/{id}','AdminController@modalemployeeview');
	Route::any('/submitjobapplicantmodel','AdminController@submitcanmodel');
	Route::get('/modalademployeeviewol/{id}','AdminController@modalemployeeviewjust');
	Route::get('/lastevalution/{id}','AdminController@finallastevau');
	Route::any('/submithrevulastform','AdminController@finalaction');
	Route::get('/hirejoiin/{id}','AdminController@hire');
	Route::get('/rejandhol','AdminController@horejld');
	Route::get('/changechannel/{id}','AdminController@prhchannel');
});
Route::middleware('email.manager.check')->group(function(){
	Route::get('/managerDashboard', 'ManagerController@mngerdash');
	Route::get('/mcandidatelist','ManagerController@candidatelimgst');
	Route::get('/mngeaction/{id}','ManagerController@candmiaction');
	Route::get('/modviewmng/{id}','ManagerController@modalmanagerview');
	Route::any('/submitjobapplicantmng','ManagerController@submitcanmngmodel');
	Route::get('/mcandidate_list','ManagerController@mcandidate_list');
	Route::get('/mcandidate_listdata','ManagerController@mcandidate_listdata');
	Route::get('/searchmcan/{id}','ManagerController@searchmcandidate_list');
	Route::get('/callforinterview_list','ManagerController@callforinterview_list');
	Route::get('/callforinterview_listdata','ManagerController@callforinterview_listdata');
	Route::get('/searchintcan/{id}','ManagerController@searchintcan_list');
	Route::get('/rejected_list','ManagerController@rejected_list');
	Route::get('/rejectedcan_listdata','ManagerController@rejectedcan_listdata');
	Route::get('/searchrejcan/{id}','ManagerController@searchrejectedcan_list');
	Route::get('/mirrelevent_list','ManagerController@mirrelevent_list');
	Route::get('/mirreleventcan_listdata','ManagerController@mirreleventcan_listdata');
	Route::get('/searchmirrcan/{id}','ManagerController@searchmirreleventcan_list');
	Route::get('/mevalutioncandidate','ManagerController@maevucan');
	Route::get('/interview_assessment_form/{id}','ManagerController@inasfo');
	Route::any('/submitevaluatemng','ManagerController@formsubmitevu');
	Route::get('/modalemployeeviewol/{id}','ManagerController@modalemployeeviewjust');
	Route::get('/candidatelistcoo','SuperAdminController@cancoolist');
	Route::get('/cevalutioncandidate','SuperAdminController@adminevalist');
	Route::get('/coo_interview_evalution_form/{id}','SuperAdminController@incooevfor');
	Route::any('/submithrevucancooform','SuperAdminController@coodevuform');
	Route::get('/candidate_listcoo','SuperAdminController@candidate_listcoo');
	Route::get('/coocandidate_listdata','SuperAdminController@coocandidate_listdata');
	Route::get('/searchcoocan/{id}','SuperAdminController@searchcoocan_list');
	Route::get('/approved','SuperAdminController@cooapprovelist');		
	Route::get('/declined','SuperAdminController@coodeclist');
	Route::get('/editdepartmentmodal/{id}','hrmcontroller@editdepartmentmodal');
	Route::any('/editsubmitdepartment', 'hrmcontroller@editsubmitdepartment');
});
	Route::get('/employeetimings','hrmcontroller@employeetimings');	
	Route::get('/addemployeetimingsmodal','hrmcontroller@addemployeetimingsmodal');
	Route::any('/addemployeetimings', 'hrmcontroller@addemployeetimings');
	Route::get('/editemployeetiming/{id}','hrmcontroller@editemployeetiming');
	Route::any('/submiteditemployeetiming', 'hrmcontroller@submiteditemployeetiming');
Route::middleware('email.user.check')->group(function(){
	Route::get('/userDashboard','UserController@userdash');	
});

Route::get('/searchemp/{id}','elscontroller@searchemployee_list');
Route::get('/employee_list','elscontroller@employee_list');
Route::get('/employee_listdata','elscontroller@employee_listdata');
Route::get('/changepicturemodal/{id}','elscontroller@changepicturemodal');
Route::any('/submitchangeemployeepicture','elscontroller@submitchangeemployeepicture');
Route::get('/empleavechart','elscontroller@empleavechart');
Route::get('/depleavechart','elscontroller@depleavechart');
Route::get('/depleavesearchchart','elscontroller@depleavesearchchart');
Route::get('/depleavesearchmonthchart/{month}','elscontroller@depleavesearchmonthchart');
Route::get('/employeeprofile/{id}','elscontroller@employeeprofile');
Route::get('/attendance','elscontroller@attendance');
Route::any('/login','elscontroller@login');
Route::get('/dashboard','elscontroller@dashboard');
Route::get('/getimage','elscontroller@getimage');
Route::any('/loadimage','elscontroller@loadimage');
Route::get('/getcover','elscontroller@getcover');
Route::any('/loadcover','elscontroller@loadcover');
Route::get('/addemployeenos','elscontroller@createemployee');
Route::any('/saveemp','elscontroller@empsave');
Route::get('/employeelist','elscontroller@employeelist');
Route::get('/notactiveemployeelist','elscontroller@notactiveemployeelist');
Route::any('/deptemp','elscontroller@deptemp');
Route::get('/hamza','elscontroller@emailtemp');
Route::get('/usertimeout','elscontroller@usertimeout');
Route::get('/viewattendnceout','elscontroller@viewattendnceout');
Route::get('/viewempattendanceout/{id}','elscontroller@viewempattendanceout');
Route::get('/selectattendanceoutmonth','elscontroller@selectattendanceoutmonth');
Route::any('/submitselectattendanceout','elscontroller@submitselectattendanceout');
Route::get('/usertimein','elscontroller@usertimein');
Route::get('/viewattendnce','elscontroller@viewattendnce');
Route::get('/viewempattendance/{id}','elscontroller@viewempattendance');
Route::get('submitupdateattendance/{value}/{d}','elscontroller@submitupdateattendance');
Route::get('/viewattendancedw/{dt}/{df}','elscontroller@viewattendancedw');
Route::get('/viewempattendancedw/{dt}/{df}','elscontroller@viewempattendancedw');
Route::get('/editattendance/{id}','elscontroller@editattendance');
Route::any('/submiteditattendancerequest','elscontroller@submiteditattendancerequest');
Route::any('/submitattendance','elscontroller@submitattendance');
Route::get('/attendancereport','elscontroller@attendancereport');
Route::get('/selectattendancemonth','elscontroller@selectattendancemonth');
Route::any('/submitselectattendance','elscontroller@submitselectattendance');
Route::get('/attendancereport','elscontroller@attendancereport');
Route::get('/attendancecorrectionforadmin','elscontroller@attendancecorrectionforadmin');
Route::get('/attendancecorrectionlist','elscontroller@attendancecorrection');
Route::get('/addcorrectionmodal/{date}','elscontroller@addcorrectionmodal');
Route::any('/submitcorrection', 'elscontroller@submitcorrection');
Route::get('deletecorrection/{id}','elscontroller@deletecorrection');
Route::any('/approvecorrection/{id}/{comment}', 'elscontroller@approvecorrection');
Route::any('/declinecorrection/{id}/{comment}', 'elscontroller@declinecorrection');
Route::any('/approvedmulti_correction','elscontroller@approvedmulti_correction');
Route::any('/updatemulticorrection','elscontroller@updatemulticorrection');
Route::any('/proceedcorrection/{id}/{comment}', 'elscontroller@proceedcorrection');
Route::any('/managerdeclinecorrection/{id}/{comment}', 'elscontroller@managerdeclinecorrection');
Route::any('/correctionreport', 'elscontroller@correctionreport');
Route::get('/editcorrectionmodal/{id}','elscontroller@editcorrectionmodal');
Route::any('/submiteditcorrection', 'elscontroller@submiteditcorrection');
Route::get('/editemployee/{id}','elscontroller@editemployee');
Route::any('/updateemployee','elscontroller@updateemployee');
Route::get('/selfpaginator', 'elscontroller@datapaginator');
Route::get('/selfrequest','elscontroller@selfrequest');
Route::get('/viewrequest/{id}','elscontroller@viewreq');
Route::get('/emprequestshow/{id}','elscontroller@showempreq');
Route::get('/emprequestedit/{id}','elscontroller@emprequestedit');
Route::any('/updateeditrequest','elscontroller@updateeditrequest');
Route::get('/addrequest/{date}','elscontroller@addrequest');
Route::any('/submitrequest','elscontroller@submitrequest');
Route::get('/emprequest','elscontroller@emprequest');
Route::get('/viewemprequest','elscontroller@viewemprequest');
Route::any('/approvedmulti_request','elscontroller@approvedmulti_request');
Route::any('/updatemultirequest','elscontroller@updatemultirequest');
Route::get('approve/{id}/{comment}','elscontroller@approve');
Route::get('done/{id}','elscontroller@done');
Route::get('decline/{id}','elscontroller@decline');
Route::get('declinecomment/{id}/{comment}','elscontroller@deccom');
Route::get('/chapass','elscontroller@passchange');
Route::any('/passwordchange','elscontroller@passubmit');
Route::get('/addrequestemp','elscontroller@addrequestemp');
Route::get('/getemployeeDetail','elscontroller@getemployeeDetail');
Route::any('/submitrequestemp','elscontroller@submitrequestemp');
Route::get('/viewdatewisereport/{dt}/{df}','elscontroller@viewdatewisereport');
Route::get('/test','elscontroller@test');
Route::get('/forgetpassword', 'elscontroller@forgetpassword');
Route::any('/forget_submit', 'elscontroller@forget_submit');
Route::get('/forget/{token}', 'elscontroller@forget');
Route::any('/reset_submit', 'elscontroller@reset_submit');
Route::get('generatepdf/{id}', 'hrmcontroller@generatepdf')->name('generatepdf');
Route::get('preemployementpdf/{id}', 'hrmcontroller@preemployementpdf');
Route::get('evalution_formpdf/{id}', 'hrmcontroller@evalution_formpdf')->name('hrevalutionformpdf');
Route::get('/departmentlist','elscontroller@departmentlist');
Route::get('/adddepartmentmodal','elscontroller@adddepartmentmodal');
Route::get('/editdepartmentmodal/{id}','elscontroller@editdepartmentmodal');
Route::any('/adddepartment', 'elscontroller@adddepartment');
Route::any('/editsubmitdepartment', 'elscontroller@editsubmitdepartment');
Route::any('/deletedepartment/{id}', 'elscontroller@deletedepartment');
Route::get('/designationlist','elscontroller@designationlist');
Route::get('/adddesignationmodal','elscontroller@adddesignationmodal');
Route::get('/editdesignationmodal/{id}','elscontroller@editdesignationmodal');
Route::any('/adddesignation', 'elscontroller@adddesignation');
Route::any('/editsubmitdesignation', 'elscontroller@editsubmitdesignation');
Route::get('/holidayslist','elscontroller@holidayslist');
Route::get('/addholidaysmodal','elscontroller@addholidaysmodal');
Route::get('/editholidaysmodal/{id}','elscontroller@editholidaysmodal');
Route::any('/addholidays', 'elscontroller@addholidays');
Route::any('/editsubmitholidays', 'elscontroller@editsubmitholidays');
Route::get('/deleteholidaysmodal/{id}','elscontroller@deleteholidaysmodal');
Route::get('delete_holiday/{id}','elscontroller@destroyholiday');
Route::get('/resignationlist','elscontroller@resignationlist');
Route::get('/addresignationmodal','elscontroller@addresignationmodal');
Route::get('/editresignationmodal/{id}','elscontroller@editresignationmodal');
Route::any('/addresignation', 'elscontroller@addresignation');
Route::any('/editsubmitresignation', 'elscontroller@editsubmitresignation');
Route::get('destroyresignation/{id}','elscontroller@destroyresignation');
Route::get('/viewresignationmodal/{id}','elscontroller@viewresignationmodal');
Route::any('/viewsubmitresignation', 'elscontroller@viewsubmitresignation');
Route::get('/announcementlist','elscontroller@announcementlist');
Route::get('/addannouncementmodal','elscontroller@addannouncementmodal');
Route::get('/editannouncementmodal/{id}','elscontroller@editannouncementmodal');
Route::any('/addannouncement', 'elscontroller@addannouncement');
Route::any('/editsubmitannouncement', 'elscontroller@editsubmitannouncement');
Route::get('delete_announcement/{id}','elscontroller@destroy');
Route::get('/hrmform', 'elscontroller@departmentpictures');
Route::any('/savepictures', 'elscontroller@savepictures');
Route::get('/hrmreport','elscontroller@hrmreport');
Route::get('/viewpicture/{id}','elscontroller@viewpicture');

Route::get('/dailyattendance','payrollController@dailyattendancesearch');
Route::get('/attendancedashboarddata','payrollController@attendancedatumdashboard');
Route::get('/attendancedashboardsearchmonth/{year}/{month}/{name}','payrollController@attendancesearchmondatumdashboard');
Route::get('/monthlydepartbiomatric','payrollController@monthlydepartbiomatric');
Route::any('/submitmonthdepartattendance','payrollController@submitmonthdepartattendance');
Route::get('/selectbioattendancemonth','payrollController@selectbioattendancemonth');
Route::any('/submitselectbioattendance','payrollController@submitselectbioattendance');
Route::get('/selectmonthforattendance','payrollController@selectmonthforattendance');
Route::any('/submitselectmonthforattendance','payrollController@submitselectmonthforattendance');
Route::get('/misreportmonth','payrollController@misreportmonth');
Route::any('/submitmisreportmonth','payrollController@submitmisreportmonth');
Route::any('monthlylistattendance','payrollController@monthlylistattendance');
Route::any('acknowledgedpay/{id}','payrollController@acknowledgedpay');
Route::any('deliveredpay/{id}/{amount}','payrollController@deliveredpay');
Route::any('holdsalary/{id}','payrollController@holdsalary');
Route::any('activeholdsalary/{id}','payrollController@activeholdsalary');
Route::any('deliverreamining/{id}/{amount}','payrollController@deliverreamining');
Route::any('viewdeliversalarylog/{id}','payrollController@viewdeliversalarylog');
Route::get('/payroll', 'payrollController@mainPayroll');
Route::get('/payrollitems', 'payrollController@allDataShow');
Route::any('/monthwisepayrollitems', 'payrollController@monthwisepayrollitems');
Route::get('/editpaydata/{id}','payrollController@editpaydata');
Route::any('/updatepaydata','payrollController@update');
Route::get('/Adjustmentdata','payrollController@Adjustmentdata');
Route::get('/Adjustmentcreate','payrollController@Adjustmentcreate');
Route::any('/saveAdjustment','payrollController@saveAdjustment');
Route::get('/editAdjustment/{id}','payrollController@editAdjustment');
Route::get('destroyAdjustment/{id}','payrollController@destroyAdjustment');
Route::any('/updateAdjustment','payrollController@updateAdjustment');
Route::get('/Deductioncreate','payrollController@Deductioncreate');
Route::any('/saveDeduction','payrollController@saveDeduction');
Route::get('/ondaylist','payrollController@ondaylist');
Route::get('/addonday','payrollController@addonday');
Route::any('/submitonday','payrollController@submitonday');
Route::get('/employeesalaries','payrollController@payrollSalaries');
Route::get('/payrollSalariesdata','payrollController@payrollSalariesData');
Route::get('/payrollSalariescreate','payrollController@payrollSalariescreate');
Route::any('/savepayrollSalaries','payrollController@savepayrollSalaries');
Route::get('payrollsalarieshistory/{batchid}','payrollController@payrollSalarieshistory');
Route::get('/editSalaries/{id}','payrollController@editSalaries');
Route::any('/SalariesUpdate','payrollController@SalariesUpdate');
Route::get('/loanlist','payrollController@loanlist');
Route::get('/addloan','payrollController@addloan');
Route::any('/submitloan','payrollController@submitloan');
Route::get('/editloan/{id}','payrollController@editloan');
Route::any('/submiteditloan','payrollController@submiteditloan');
Route::get('/payrolldashboard','payrollController@payrolldashboardsearch');
Route::get('/payrolldashboarddata','payrollController@payrolldatumdashboard');
Route::get('/payrolldashboardsearchmonth/{month}/{name}','payrollController@payrollsearchmondatumdashboard');
Route::get('/payrolldatabuttonshow','payrollController@payrollbuttonshow');
Route::get('/payrolldashboarddatabutton','payrollController@payrolldatumsetter');
Route::get('/payrollwithsearchdashboard','payrollController@payrolldashboardsearch');
Route::get('/incrementlist','payrollController@incrementlist');
Route::get('/addincrementmodal','payrollController@addincrementmodal');
Route::any('/addincrement', 'payrollController@addincrement');
Route::get('/editincrementmodal/{id}','payrollController@editincrementmodal');
Route::any('/editsubmitincrement', 'payrollController@editsubmitincrement');
Route::get('deleteincrement/{id}','payrollController@deleteincrement');
Route::get('/decrementlist','payrollController@decrementlist');
Route::get('/adddecrementmodal','payrollController@adddecrementmodal');
Route::any('/adddecrement', 'payrollController@adddecrement');
Route::get('/editdecrementmodal/{id}','payrollController@editdecrementmodal');
Route::any('/editsubmitdecrement', 'payrollController@editsubmitdecrement');
Route::get('deletedecrement/{id}','payrollController@deletedecrement');
Route::get('/deleteemployeesalary/{id}','payrollController@deleteemployeesalary');

Route::any('/submitprobationaeryform','hrmcontroller@submitprobationaeryform');
Route::any('/submitprobationaeryempform','hrmcontroller@submitprobationaeryempform');
Route::any('/submitprobationaeryCOOform','hrmcontroller@submitprobationaeryCOOform');
Route::any('/submitprobationaeryhrform','hrmcontroller@submitprobationaeryhrform');
Route::get('/probationemployee/{id}','hrmcontroller@probationemployee');
Route::any('/employeesubmit','hrmcontroller@employeesubmit');
Route::get('/probationaryformlist','hrmcontroller@probationaryformlist');
Route::get('/probationaryreport','hrmcontroller@probationaryreport');
Route::get('/probationaryreportview/{id}','hrmcontroller@probationaryreportview');
Route::get('/probationaryemppdf/{id}','hrmcontroller@probationaryemppdf');
Route::get('/probation_manageremail/{id}','hrmcontroller@probation_manageremail');
Route::get('confirmationletterpdf/{id}', 'hrmcontroller@confirmationletterpdf')->name('confirmationletterpdf');

Route::get('/restaurantlist','foodcontroller@restaurantlist');
Route::get('/addrestaurantmodal','foodcontroller@addrestaurantmodal');
Route::any('/submitaddrestaurant', 'foodcontroller@submitaddrestaurant');
Route::get('/editrestaurantmodal/{id}','foodcontroller@editrestaurantmodal');
Route::any('/submiteditretaurant', 'foodcontroller@submiteditretaurant');
Route::get('deleterestaurant/{id}','foodcontroller@deleterestaurant');
Route::get('/productlist/{id}','foodcontroller@productlist');
Route::get('/addproductmodal/{id}','foodcontroller@addproductmodal');
Route::any('/submitaddproduct', 'foodcontroller@submitaddproduct');
Route::get('/editproductmodal/{id}','foodcontroller@editproductmodal');
Route::any('/submiteditproduct', 'foodcontroller@submiteditproduct');
Route::get('deleteproduct/{id}','foodcontroller@deleteproduct');
Route::any('/addtocart/{id}','foodcontroller@addtocart');
Route::get('/usercartlist/{id}','foodcontroller@usercartlist');
Route::get('/userorderlist','foodcontroller@userorderlist');
Route::any('/proceedorder','foodcontroller@proceedorder');
Route::any('/addmoretocart/{id}','foodcontroller@addmoretocart');
Route::any('/deletefromcart/{id}','foodcontroller@deletefromcart');
Route::any('/deliverd/{id}','foodcontroller@deliverd');
Route::any('/canceled/{id}','foodcontroller@canceled');
Route::any('/deliveryordertlist', 'foodcontroller@deliveryordertlist');
Route::any('/cancelorcompleteorderlist', 'foodcontroller@cancelorcompleteorderlist');

Route::get('/selecttargetmonth','ManagerController@selecttargetmonth');
Route::any('/employeetargetlist','ManagerController@employeetargetlist');
Route::get('/addtargetmodal','ManagerController@addtargetmodal');
Route::any('/submitaddtarget', 'ManagerController@submitaddtarget');
Route::get('/edittargetmodal/{id}','ManagerController@edittargetmodal');
Route::any('/submitedittarget', 'ManagerController@submitedittarget');
Route::get('deletetarget/{id}','ManagerController@deletetarget');
Route::get('/addachievedmodal/{id}','ManagerController@addachievedmodal');
Route::any('/submitaddachieved', 'ManagerController@submitaddachieved');
Route::get('/employeeachievedlist/{id}','ManagerController@employeeachievedlist');
Route::get('/editachievedmodal/{id}','ManagerController@editachievedmodal');
Route::any('/submiteditachieved', 'ManagerController@submiteditachieved');
Route::get('deleteachived/{id}','ManagerController@deleteachived');

Route::get('/albumlist','AdminController@albumlist');
Route::get('/albumlistdata','AdminController@albumlistdata');
Route::get('/createalbummodal','AdminController@createalbummodal');
Route::any('/submitcreatealbum', 'AdminController@submitcreatealbum');
Route::get('/editalbummodal/{id}','AdminController@editalbummodal');
Route::any('/submiteditalbum', 'AdminController@submiteditalbum');
Route::get('deletealbum/{id}','AdminController@deletealbum');
Route::get('/gallerylist/{id}','AdminController@gallerylist');
Route::get('/gallerylistdata/{id}','AdminController@gallerylistdata');
Route::get('/uploadgallerymodal/{id}','AdminController@uploadgallerymodal');
Route::any('/submituploadgallery', 'AdminController@submituploadgallery');
Route::get('deletegallery/{id}/{aid}','AdminController@deletegallery');

Route::any('selectexpensemonth','ExpenseController@selectexpensemonth');
Route::any('submitselectexpense/{year}/{month}','ExpenseController@submitselectexpense');
Route::any('addexpense/{id}','ExpenseController@addexpense');
Route::any('submitexpense','ExpenseController@submitexpense');
Route::any('editexpense/{id}','ExpenseController@editexpense');
Route::any('submiteditexpense','ExpenseController@submiteditexpense');