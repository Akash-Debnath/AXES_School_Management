<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
 use App\Http\Controllers\Backend\Setup\StudentSemesterController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\FeeAmountControllere;
use App\Http\Controllers\Backend\Setup\FeesgroupController;
use App\Http\Controllers\Backend\Setup\FeestypeController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\UniversitySubjectController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\DepartmentController;
use App\Http\Controllers\Backend\Setup\CourseController;
use App\Http\Controllers\Backend\Setup\FacultyController;
use App\Http\Controllers\Backend\Setup\ProgramController;
use App\Http\Controllers\Backend\Newsevents\NewseventsController;
use App\Http\Controllers\Backend\Website\Visitorsays\VisitorsaysController;

//FrontOffice

use App\Http\Controllers\Backend\Frontoffice\AdmissionEnquiryController;
use App\Http\Controllers\Backend\Frontoffice\ComplainController;
use App\Http\Controllers\Backend\Frontoffice\PhoneCallLogController;
use App\Http\Controllers\Backend\Frontoffice\PostalReceiveController;
use App\Http\Controllers\Backend\Frontoffice\PostalDispatchController;
use App\Http\Controllers\Backend\Frontoffice\SetupFrontOfficeController;
use App\Http\Controllers\Backend\Frontoffice\VisitorBookController;




//Hostel
use App\Http\Controllers\Backend\Hostel\HostelController;
use App\Http\Controllers\Backend\Hostel\HostelRoomController;

use App\Http\Controllers\Backend\Hostel\RoomTypeController;


//System setting
use App\Http\Controllers\Backend\system\smssetingController;
use App\Http\Controllers\Backend\system\GeneralSettingController;
use App\Http\Controllers\Backend\system\SessionSetingController;
use App\Http\Controllers\Backend\system\NotificationSettingController;
use App\Http\Controllers\Backend\system\EmailSettingController;
use App\Http\Controllers\Backend\system\PaymentMethodController;
use App\Http\Controllers\Backend\system\PrintHeaderController;
use App\Http\Controllers\Backend\system\FrontcmcSettingController;
use App\Http\Controllers\Backend\system\RolespermissionController;
use App\Http\Controllers\Backend\system\BackupSettingController;
use App\Http\Controllers\Backend\system\LanguageSettingController;
use App\Http\Controllers\Backend\system\UserSettingController;
use App\Http\Controllers\Backend\system\ModuleSettingController;
use App\Http\Controllers\Backend\system\CustomSettingController;
use App\Http\Controllers\Backend\system\CaptchaSettingController;
use App\Http\Controllers\Backend\system\SystemFieldsController;
use App\Http\Controllers\Backend\system\StudentProfileSettingController;
use App\Http\Controllers\Backend\system\FileTypesController;
use App\Http\Controllers\Backend\system\SystemUpdateController;



//Transport controller
use App\Http\Controllers\Backend\Transport\AssignVehicleController;

use App\Http\Controllers\Backend\Transport\VehiclesController;
use App\Http\Controllers\Backend\Transport\TransportrouteController;

//others for form
use App\Http\Controllers\user\others\AdmitCardController;
use App\Http\Controllers\user\others\permissionController;
use App\Http\Controllers\user\others\improvementExamController;
use App\Http\Controllers\user\others\courseAddordropController;
use App\Http\Controllers\user\others\DepartmentChangeController;
use App\Http\Controllers\user\others\RegisterSlipController;
use App\Http\Controllers\FormBackendController;


//Inventory
use App\Http\Controllers\Backend\Inventory\IssueItemController;
use App\Http\Controllers\Backend\Inventory\AddItemStockController;
use App\Http\Controllers\Backend\Inventory\AddItemController;
use App\Http\Controllers\Backend\Inventory\ItemCategoryController;
use App\Http\Controllers\Backend\Inventory\ItemStoreController;
use App\Http\Controllers\Backend\Inventory\ItemSupplierController;




use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Student\RegistrationFeeController;
use App\Http\Controllers\Backend\Student\MonthlyFeeController;
use App\Http\Controllers\Backend\Student\ExamFeeController;
use App\Http\Controllers\Backend\Student\StudentAttendanceController;
use App\Http\Controllers\Backend\Teacher\TeacherRegController;
use App\Http\Controllers\Backend\Employee\EmployeeRegController;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendanceController;
use App\Http\Controllers\Backend\Employee\MonthlySalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeDepartmentController;
use App\Http\Controllers\Backend\Employee\EmployeeDesignationController;
 use App\Http\Controllers\Backend\Employee\EmployeeleaveTypeController;
use App\Http\Controllers\Backend\Marks\MarksController;
use App\Http\Controllers\Backend\Marks\GradeController;

use App\Http\Controllers\Backend\Library\AddStudentController;
use App\Http\Controllers\Backend\Library\AddStaffMemberController;
use App\Http\Controllers\Backend\Library\IssueReturnController;


use App\Http\Controllers\Backend\Library\BookController;

use App\Http\Controllers\Backend\Content\UploadContentController;

use App\Http\Controllers\Backend\DefaultController;

use App\Http\Controllers\Backend\Account\StudentFeeController;
use App\Http\Controllers\Backend\Account\AccountSalaryController;
use App\Http\Controllers\Backend\Account\GroupController;
use App\Http\Controllers\Backend\Account\AccountledgerController;
use App\Http\Controllers\Backend\Account\AccountsubgroupController;
use App\Http\Controllers\Backend\Account\AccountclassController;
use App\Http\Controllers\Backend\Account\BankController;
use App\Http\Controllers\Backend\Account\BankaccountController;
use App\Http\Controllers\Backend\Account\MobileaccountController;
use App\Http\Controllers\Backend\Account\OtherCostController;
use App\Http\Controllers\Backend\Account\PaymentController;
use App\Http\Controllers\Backend\Account\ReceiveVoucherController;
use App\Http\Controllers\Backend\Account\SubgroupController;
use App\Http\Controllers\Backend\Account\ExpenseVoucherController;
use App\Http\Controllers\Backend\Account\JournalEntryController;
use App\Http\Controllers\Backend\Report\ProfiteController;
use App\Http\Controllers\Backend\Report\MarkSheetController;
use App\Http\Controllers\Backend\Report\AttenReportController;
use App\Http\Controllers\Backend\Report\ResultReportController;
use App\Http\Controllers\Backend\Notice\NoticeboardController;


//academic
use App\Http\Controllers\Backend\Academic\AllClassController;
use App\Http\Controllers\Backend\Academic\AssignClassTeacherController;
use App\Http\Controllers\Backend\Academic\ClassTimetableController;
use App\Http\Controllers\Backend\Academic\PromoteStudentsController;
use App\Http\Controllers\Backend\Academic\SectionsController;
use App\Http\Controllers\Backend\Academic\ClassRoomController;
use App\Http\Controllers\Backend\Academic\SubjectGroupController;
use App\Http\Controllers\Backend\Academic\SubjectsController;



use App\Http\Controllers\Backend\Website\WebsiteinfoController;
use App\Http\Controllers\Backend\Website\Slider\SliderController;
use App\Http\Controllers\Backend\Website\Gallery\GalleryController;
use App\Http\Controllers\Backend\Website\Bot\BotController;
use App\Http\Controllers\Backend\Website\Fincom\FincomController ;
use App\Http\Controllers\Backend\Website\Complaintcom\ComplaintcommitteeController ;
use App\Http\Controllers\Backend\Website\Disciplinarycom\DisciplinarycommitteeController;
use App\Http\Controllers\Backend\Website\Syndicate\SyndicateController;
use App\Http\Controllers\Backend\Website\Administration\AdministrationController ;
use App\Http\Controllers\Backend\Website\Dean\DeanController;
use App\Http\Controllers\Backend\Website\Academiccouncil\AcademiccouncilController;

use App\Http\Controllers\Backend\Setup\FeesmasterController;
use App\Http\Controllers\Backend\Setup\FeesreminderController;
use App\Http\Controllers\Backend\Setup\FeesdiscountController;
use App\Http\Controllers\Backend\Setup\FeesCollectionController;

use App\Http\Controllers\Onlineadd\OnlineinfoController;

use App\Http\Controllers\SslCommerzPaymentController;

// Frontend Controller  
use App\Http\Controllers\Frontend\User\VisionMissionController; 
use App\Http\Controllers\Frontend\User\applicationprocessController;
use App\Http\Controllers\Frontend\onlineadmissionController;
use App\Http\Controllers\Frontend\User\UserhomeController;
use App\Http\Controllers\Frontend\User\StudentloginController;
use App\Http\Controllers\Frontend\User\AboutController;
use App\Http\Controllers\Frontend\User\UserGalleryController;

use App\Http\Controllers\Frontend\User\RegisterController;
use App\Http\Controllers\Frontend\User\PrivacyController ;
use App\Http\Controllers\Frontend\User\UserBotController ;
use App\Http\Controllers\Frontend\User\FaqController ;
use App\Http\Controllers\Frontend\User\MessagefromchairmanController ;
 use App\Http\Controllers\Frontend\User\MessagefromfounderController ;
  use App\Http\Controllers\Frontend\User\MessagefromvicechancellorController ;
  use App\Http\Controllers\Frontend\User\Brief_history_rmuController ;
  use App\Http\Controllers\Frontend\User\DepartmentbanglaController ;
  use App\Http\Controllers\Frontend\User\DepartmentenglishController ;
  use App\Http\Controllers\Frontend\User\PhysicalEducationandsportsscienceController ;
  use App\Http\Controllers\Frontend\User\IctController;
  use App\Http\Controllers\Frontend\User\CseController;
  use App\Http\Controllers\Frontend\User\AgricultureController;
  use App\Http\Controllers\Frontend\User\EeeController;
  use App\Http\Controllers\Frontend\User\MicrobiologyController;
  use App\Http\Controllers\Frontend\User\BusinessAdministrationController ;

  use App\Http\Controllers\Frontend\User\EligibilityController;
  use App\Http\Controllers\Frontend\User\FinanceCommitteeController;
  use App\Http\Controllers\Frontend\User\UserAcademicCouncilController;
  use App\Http\Controllers\Frontend\User\UserSyndicateController;
  use App\Http\Controllers\Frontend\User\UserDisciplinarycommitteeController;
  use App\Http\Controllers\Frontend\User\UserComplaintcommitteeController;
  use App\Http\Controllers\Frontend\User\UserDeanofthefacultiesController;
  use App\Http\Controllers\Frontend\User\UserAdministrationController;
  use App\Http\Controllers\Frontend\User\DeanofthefacultiesController;
  
  use App\Http\Controllers\Frontend\User\TuitionfeeController;
  use App\Http\Controllers\Frontend\User\WaiverpolicyController;
  use App\Http\Controllers\Frontend\User\ScholarshipandfinancialaidsController;
  use App\Http\Controllers\Frontend\User\AvailableprogramsController;
  
use App\Http\Controllers\Backend\Website\Socialgroup\SocialgroupController;
use App\Http\Controllers\Backend\Website\Contact\ContactController;

  
use App\Http\Controllers\Backend\AlumniController;


    //Student


use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 





// Frontend routes
//User theme

Route::get('/applicationprocess',[applicationprocessController::class,'applicationprocess'])->name('applicationprocess');
Route::get('/Vision&Mission',[VisionMissionController::class,'VisionMission'])->name('Vision&Mission');
Route::get('/',[UserhomeController::class,'Userhome'])->name('userhome');
Route::get('/invoice',[UserhomeController::class,'invoice'])->name('invoice');
Route::get('/allnews',[UserhomeController::class,'Allnews'])->name('allnews');
Route::get('/newsdetails/{id}',[UserhomeController::class,'Newsdetails'])->name('newsdetails');
Route::get('/allnotice',[UserhomeController::class,'Allnotice'])->name('allnotice');
Route::get('/noticedetails/{id}',[UserhomeController::class,'Noticedetails'])->name('noticedetails');

Route::get('/circular',[UserhomeController::class,'Circular'])->name('circular');
Route::get('/journals',[UserhomeController::class,'journals'])->name('journals');
Route::get('/convocation',[UserhomeController::class,'convocation'])->name('convocation');
Route::get('/conference',[UserhomeController::class,'conference'])->name('conference');
Route::get('/research',[UserhomeController::class,'research'])->name('research');
Route::get('/alldepartment',[UserhomeController::class,'Alldepartment'])->name('alldepartment');
Route::get('/departmentdetails/{id}',[UserhomeController::class,'Departmentdetails'])->name('departmentdetails');

Route::get('/allcourse',[UserhomeController::class,'Allcourse'])->name('allcourse');
Route::get('/coursedetails/{id}',[UserhomeController::class,'Coursedetails'])->name('coursedetails');


Route::get('/allfaculty',[UserhomeController::class,'Allfaculty'])->name('allfaculty');
Route::get('/facultydetails/{id}',[UserhomeController::class,'Facultydetails'])->name('facultydetails');



Route::get('/studentlogin',[StudentloginController::class,'studentlogin'])->name('studentlogin');
Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::get('/privacy',[PrivacyController::class,'privacy'])->name('privacy');
Route::get('/bot',[UserBotController::class,'Bot'])->name('bot');
Route::get('/faq',[FaqController::class,'faq'])->name('faq');
Route::get('/gallery',[UserGalleryController::class,'Gallery'])->name('gallery');
Route::get('/messagefromfounder',[MessagefromfounderController::class,'messagefromfounder'])->name('messagefromfounder');
Route::get('/messagefromchairman',[MessagefromchairmanController::class,'messagefromchairman'])->name('messagefromchairman');
Route::get('/messagefromvicechancellor',[MessagefromvicechancellorController::class,'messagefromvicechancellor'])->name('messagefromvicechancellor');
Route::get('/brief_history_rmu',[Brief_history_rmuController::class,'brief_history_rmu'])->name('brief_history_rmu');
Route::get('/fincom',[FinanceCommitteeController::class,'FinanceCommittee'])->name('fincom');
Route::get('/syndicate',[UserSyndicateController::class,'syndicate'])->name('syndicate');
Route::get('/academiccouncil',[UserAcademicCouncilController::class,'UserAcademicCouncil'])->name('academiccouncil');
Route::get('/disciplinarycommittee',[UserDisciplinarycommitteeController::class,'Disciplinarycommittee'])->name('disciplinarycommittee');
Route::get('/complaintcommittee',[UserComplaintcommitteeController::class,'complaintcommittee'])->name('complaintcommittee');
Route::get('/deanofthefaculties',[UserDeanofthefacultiesController::class,'Deanofthefaculties'])->name('deanofthefaculties');
Route::get('/faculty_members',[UserDeanofthefacultiesController::class,'facultyMembers'])->name('faculty_members');
Route::get('/profile_view/{id}',[UserDeanofthefacultiesController::class,'profileView'])->name('profile_view');
Route::get('/administration',[UserAdministrationController::class,'administration'])->name('administration');
Route::get('/tuitionfee',[TuitionfeeController::class,'tuitionfee'])->name('tuitionfee');
Route::get('/waiverpolicy',[WaiverpolicyController::class,'waiverpolicy'])->name('waiverpolicy');
Route::get('/scholarshipandfinancialaids',[ScholarshipandfinancialaidsController::class,'scholarshipandfinancialaids'])->name('scholarshipandfinancialaids');
Route::get('/availableprograms',[AvailableprogramsController::class,'availableprograms'])->name('availableprograms');



/// Home Contact Page Route 
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name('contact.form');
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');


//Newsevent User 
Route::get('/newsevent',[NewseventsController::class,'Newseventview'])->name('newsevent');
Route::get('/view/{id}', [NewseventsController::class, 'view'])->name('newsevent.view');
//Department Route

Route::get('/departmentbangla',[DepartmentbanglaController::class,'departmentbangla'])->name('departmentbangla');
Route::get('/departmentenglish',[DepartmentenglishController::class,'departmentenglish'])->name('departmentenglish');
Route::get('/physicalEducationandsportsscience',[PhysicalEducationandsportsscienceController::class,'physicalEducationandsportsscience'])->name('physicalEducationandsportsscience');
Route::get('/ict',[IctController ::class,'ict'])->name('ict');
Route::get('/cse',[CseController ::class,'cse'])->name('cse');  
Route::get('/eee',[EeeController ::class,'eee'])->name('eee');  
Route::get('/agriculture',[AgricultureController ::class,'agriculture'])->name('agriculture');  
Route::get('/microbiology',[MicrobiologyController ::class,'microbiology'])->name('microbiology');
Route::get('/businessadministration',[BusinessAdministrationController  ::class,'businessadministration'])->name('businessadministration');
Route::get('/eligibility',[EligibilityController ::class,'eligibility'])->name('eligibility'); 

//Online Addmission

Route::get('/basic.details',[onlineadmissionController::class,'studentbasicinfodetails'])->name('student.basic.information');
Route::get('/addmission',[onlineadmissionController::class,'onlineadd'])->name('onlineadd');


Route::get('/confirmapplication',[onlineadmissionController::class,'confirmmess'])->name('confirmmess');
Route::get('/applyaddmission',[onlineadmissionController::class,'applyaddmission'])->name('applyaddmission');
Route::post('/storeinfo',[onlineadmissionController::class,'infostore'])->name('infostore');

Route::get('/approve/{id}', [OnlineinfoController::class, 'Approve'])->name('onlineapp.approve');
Route::get('/reject/{id}', [OnlineinfoController::class, 'Reject'])->name('onlineapp.reject');

Route::get('/enroll/{id}', [OnlineinfoController::class, 'Enroll'])->name('onlineapp.enroll');

Route::get('/details/{id}', [OnlineinfoController::class, 'details'])->name('onlineapp.view.details');


//Notice user 

Route::get('/notice',[NoticeboardController::class,'Noticeview'])->name('notice');
Route::get('/view/{id}', [NoticeboardController::class, 'view'])->name('notice.view');


//others
Route::get('admit_card',[AdmitCardController::class,'admitCard'])->name('admit_card');
Route::post('save_admit_card',[AdmitCardController::class,'saveAdmitCard'])->name('save_admit_card');
Route::get('student_permission',[permissionController::class,'studentPermission'])->name('student_permission');
Route::post('save_permission',[permissionController::class,'savePermission'])->name('save_permission');
Route::get('improvement_exam',[improvementExamController::class,'improvementExam'])->name('improvement_exam');
Route::post('improvement_post',[improvementExamController::class,'improvementpost'])->name('improvement_post');
// Route::post('save_permission',[improvementExamController::class,'improvementExam'])->name('save_permission');
Route::get('course_add',[courseAddordropController::class,'courseAdd'])->name('course_add');
Route::post('save_course_add',[courseAddordropController::class,'saveCourseAdd'])->name('save_course_add');
Route::get('department_change',[DepartmentChangeController::class,'departmentDhange'])->name('department_change');
Route::post('save_department_change',[DepartmentChangeController::class,'saveDepartmentChange'])->name('save_department_change');
Route::get('register_slipe',[RegisterSlipController::class,'registerSlip'])->name('register_slipe');
Route::post('save_register_slip',[RegisterSlipController::class,'saveRegisterSlip'])->name('save_register_slip');


Route::get('/accomodation',function(){
    return view('user.accomodation');
})->name('accomodation');
Route::get('/health',function(){
    return view('user.health');
})->name('health');

//student portal route

Route::get('/student', function () {
    return view('student.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/studentdashboard', function () {
    return view('student.index');
})->name('studentdashboard');

Route::get('/student/logout', [StudentController::class, 'Logout'])->name('student.logout');
 



Route::get('/admin', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return redirect()->route('admin.dashboard');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
 
 
Route::group(['middleware' => 'auth'],function(){

Route::prefix('dashboard')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    
}); 

//AdmissionEnquiry FrontOffice Routes 

Route::get('admissionenquiry/view', [AdmissionEnquiryController::class, 'ViewAdmissionEnquiry'])->name('admissionenquiry.view');

Route::get('admissionenquiry/add', [AdmissionEnquiryController::class, 'AdmissionEnquiryAdd'])->name('admissionenquiry.add');

Route::post('admissionenquiry/store', [AdmissionEnquiryController::class, 'AdmissionEnquiryStore'])->name('store.admissionenquiry');

Route::get('admissionenquiry/edit/{id}', [AdmissionEnquiryController::class, 'AdmissionEnquiryEdit'])->name('admissionenquiry.edit');

Route::put('admissionenquiry/update/{id}', [AdmissionEnquiryController::class, 'AdmissionEnquiryUpdate'])->name('update.admissionenquiry');

Route::get('admissionenquiry/delete/{id}', [AdmissionEnquiryController::class, 'AdmissionEnquiryDelete'])->name('admissionenquiry.delete');


//Complain FrontOffice Routes 

Route::get('complain/view', [ComplainController::class, 'ViewComplain'])->name('complain.view');

Route::get('complain/add', [ComplainController::class, 'ComplainAdd'])->name('complain.add');

Route::post('complain/store', [ComplainController::class, 'ComplainStore'])->name('store.complain');

Route::get('complain/edit/{id}', [ComplainController::class, 'ComplainEdit'])->name('complain.edit');

Route::post('complain/update/{id}', [ComplainController::class, 'ComplainUpdate'])->name('update.complain');

Route::get('complain/delete/{id}', [ComplainController::class, 'ComplainDelete'])->name('complain.delete');


//PhoneCallLog Frontoffice Routes 

Route::get('phonecalllog/view', [PhoneCallLogController::class, 'ViewPhoneCallLog'])->name('phonecalllog.view');

Route::get('phonecalllog/add', [PhoneCallLogController::class, 'PhoneCallLogAdd'])->name('phonecalllog.add');

Route::post('phonecalllog/store', [PhoneCallLogController::class, 'PhoneCallLogStore'])->name('store.phonecalllog');

Route::get('phonecalllog/edit/{id}', [PhoneCallLogController::class, 'PhoneCallLogEdit'])->name('phonecalllog.edit');

Route::put('phonecalllog/update/{id}', [PhoneCallLogController::class, 'PhoneCallLogUpdate'])->name('update.phonecalllog');

Route::get('phonecalllog/delete/{id}', [PhoneCallLogController::class, 'PhoneCallLogDelete'])->name('phonecalllog.delete');




Route::get('newsevents/view', [NewseventsController::class, 'ViewNewsevents'])->name('newsevent.view');

Route::get('newsevents/create', [NewseventsController::class, 'NewseventsAdd'])->name('newsevent.add');

Route::post('newsevents/store', [NewseventsController::class, 'NewseventsStore'])->name('newsevent.store');

Route::get('newsevents/edit/{id}', [NewseventsController::class, 'NewseventsEdit'])->name('newsevent.edit');

Route::put('newsevents/update{id}', [NewseventsController::class, 'NewseventsUpdate'])->name('newsevent.update');

Route::get('newsevents/delete/{id}', [NewseventsController::class, 'newseventDelete'])->name('newsevent.delete');



//VisitorBook FrontOffice Routes 

Route::get('visitorsays/view', [VisitorsaysController::class, 'ViewVisitorsays'])->name('visitorsays.view');

Route::get('visitorsays/add', [VisitorsaysController::class, 'VisitorsaysAdd'])->name('visitorsays.add');

Route::post('visitorsays/store', [VisitorsaysController::class, 'VisitorsaysStore'])->name('visitorsays.store');

Route::get('visitorsays/edit/{id}', [VisitorsaysController::class, 'VisitorsaysEdit'])->name('visitorsays.edit');

Route::put('visitorsays/update/{id}', [VisitorsaysController::class, 'VisitorsaysUpdate'])->name('update.visitorsays');

Route::get('visitorsays/delete/{id}', [VisitorsaysController::class, 'VisitorsaysDelete'])->name('visitorsays.delete');


//PosatalReceive FrontOffice Routes 

Route::get('postalreceive/view', [PostalReceiveController::class, 'ViewPostalReceive'])->name('postalreceive.view');

Route::get('postalreceive/add', [PostalReceiveController::class, 'PostalReceiveAdd'])->name('postalreceive.add');

Route::post('postalreceive/store', [PostalReceiveController::class, 'PostalReceiveStore'])->name('store.postalreceive');

Route::get('postalreceive/edit/{id}', [PostalReceiveController::class, 'PostalReceiveEdit'])->name('postalreceive.edit');

Route::post('postalreceive/update/{id}', [PostalReceiveController::class, 'PostalReceiveUpdate'])->name('update.postalreceive');

Route::get('postalreceive/delete/{id}', [PostalReceiveController::class, 'PostalReceiveDelete'])->name('postalreceive.delete');


//PostalDispatch FrontOffice Routes 

Route::get('postaldispatch/view', [PostalDispatchController::class, 'ViewPostalDispatch'])->name('postaldispatch.view');

Route::get('postaldispatch/add', [PostalDispatchController::class, 'PostalDispatchAdd'])->name('postaldispatch.add');

Route::post('postaldispatch/store', [PostalDispatchController::class, 'PostalDispatchStore'])->name('store.postaldispatch');

Route::get('postaldispatch/edit/{id}', [PostalDispatchController::class, 'PostalDispatchEdit'])->name('postaldispatch.edit');

Route::put('postaldispatch/update/{id}', [PostalDispatchController::class, 'PostalDispatchUpdate'])->name('update.postaldispatch');

Route::get('postaldispatch/delete/{id}', [PostalDispatchController::class, 'PostalDispatchDelete'])->name('postaldispatch.delete');


//SetupFrontOffice FrontOffice Routes 

Route::get('setupfrontoffice/view', [SetupFrontOfficeController::class, 'ViewSetupFrontOffice'])->name('setupfrontoffice.view');

Route::get('setupfrontoffice/add', [SetupFrontOfficeController::class, 'SetupFrontOfficeAdd'])->name('setupfrontoffice.add');

Route::post('setupfrontoffice/store', [SetupFrontOfficeController::class, 'SetupFrontOfficeStore'])->name('store.setupfrontoffice');

Route::get('setupfrontoffice/edit/{id}', [SetupFrontOfficeController::class, 'SetupFrontOfficeEdit'])->name('setupfrontoffice.edit');

Route::post('setupfrontoffice/update/{id}', [SetupFrontOfficeController::class, 'SetupFrontOfficeUpdate'])->name('update.setupfrontoffice');

Route::get('setupfrontoffice/delete/{id}', [SetupFrontOfficeController::class, 'SetupFrontOfficeDelete'])->name('setupfrontoffice.delete');


//VisitorBook FrontOffice Routes 

Route::get('visitorbook/view', [VisitorBookController::class, 'ViewVisitorBook'])->name('visitorbook.view');

Route::get('visitorbook/add', [VisitorBookController::class, 'VisitorBookAdd'])->name('visitorbook.add');

Route::post('visitorbook/store', [VisitorBookController::class, 'VisitorBookStore'])->name('visitorbook.store');

Route::get('visitorbook/edit/{id}', [VisitorBookController::class, 'VisitorBookEdit'])->name('visitorbook.edit');

Route::put('visitorbook/update/{id}', [VisitorBookController::class, 'VisitorBookUpdate'])->name('update.visitorbook');

Route::get('visitorbook/delete/{id}', [VisitorBookController::class, 'VisitorBookDelete'])->name('visitorbook.delete');




 // User Management All Routes 

Route::prefix('users')->group(function(){

Route::get('/view', [UserController::class, 'UserView'])->name('user.view');

Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');

Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');

Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');

Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');

}); 

/// User Profile and Change Password 
Route::prefix('profile')->group(function(){

Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');

Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');

Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');

Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');

Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');

}); 
Route::prefix('notice')->group(function(){

Route::get('/view/list', [NoticeboardController::class, 'Noticeviewlist'])->name('notice.viewlist');

Route::get('/notice/create',[NoticeboardController::class,'Noticecreate'])->name('notice.create');
Route::post('/notice/store',[NoticeboardController::class,'noticestore'])->name('notice.store');
Route::get('/delete/{id}', [NoticeboardController::class, 'noticeDelete'])->name('notice.delete');

}); 


Route::prefix('addmission')->group(function(){

    Route::get('/onlineapplication/view', [OnlineinfoController::class, 'OnlineapplicationView'])->name('onlineapplication.viewlist');
    
    }); 




//Inventory Route
Route::prefix('inventory')->group(function(){
    //Inventory
Route::get('/inventory/issueitem/view',[IssueItemController::class,'IssueItem'])->name('inventory.issueitem.view');
Route::get('/inventory/issueitem/add',[IssueItemController::class,'IssueItemAdd'])->name('inventory.issueitem.add_issueitem');
Route::post('/inventory/issueitem/store',[IssueItemController::class,'store'])->name('store.inventory.issueitem');
Route::get('/editissueitem/{id}',[IssueItemController::class,'editissueItem'])->name('editissueitem');
Route::post('/update_issue/{id}',[IssueItemController::class,'updateissueItem'])->name('update_issue');
Route::get('/deleteissueitem/{id}',[IssueItemController::class,'deleteissueItem'])->name('deleteissueitem');

Route::get('/inventory/additemstock/view',[AddItemStockController::class,'ItemStock'])->name('inventory.additemstock.view');
Route::get('/inventory/additemstock/add',[AddItemStockController::class,'AddItemStock'])->name('inventory.additemstock.add_itemstock');
Route::post('/inventory/additemstock/store',[AddItemStockController::class,'store'])->name('store.inventory.additemstock');
Route::get('/edit_item_stock/{id}',[AddItemStockController::class,'editItemStock'])->name('edit_item_stock');
Route::post('/update_item_stock/{id}',[AddItemStockController::class,'updateItemStock'])->name('update_item_stock');
Route::get('/delete_item_stock/{id}',[AddItemStockController::class,'deleteItemStock'])->name('delete_item_stock');

Route::get('/inventory/create_add_item_stock',[AddItemStockController::class,'create'])->name('inventory.create_add_item_stock');
Route::get('/inventory/additem/view',[AddItemController::class,'Item'])->name('inventory.additem.view');
Route::get('/inventory/additem/add',[AddItemController::class,'AddItem'])->name('inventory.additem.add');
Route::post('/inventory/additem/store',[AddItemController::class,'store'])->name('inventory.additem.store');
Route::get('/edit_item/{id}',[AddItemController::class,'editItem'])->name('edit_item');
Route::post('/upsate_item/{id}',[AddItemController::class,'upsateItem'])->name('upsate_item');
Route::get('/delete_item/{id}',[AddItemController::class,'deleteItem'])->name('delete_item');



Route::get('/inventory/itemcategory/view',[ItemCategoryController::class,'ItemCategory'])->name('inventory.itemcategory.view');
Route::get('/inventory/itemcategory/add',[ItemCategoryController::class,'ItemCategoryAdd'])->name('inventory.itemcategory.add_itemcategory');
Route::post('/inventory/itemcategory/store',[ItemCategoryController::class,'store'])->name('store.inventory.itemcategory');
Route::get('/edit_Category/{id}',[ItemCategoryController::class,'editCategory'])->name('edit_Category');
Route::post('/update_category/{id}',[ItemCategoryController::class,'updateCategory'])->name('update_category');
Route::get('/delete_Category/{id}',[ItemCategoryController::class,'deleteCategory'])->name('delete_Category');


Route::get('/inventory/itemstore/view',[ItemStoreController::class,'ItemStore'])->name('inventory.itemstore.view');
Route::get('/inventory/itemstore/add',[ItemStoreController::class,'AddItemStore'])->name('inventory.itemstore.add');
Route::post('/inventory/itemstore/store',[ItemStoreController::class,'store'])->name('store.inventory.itemstore');
Route::get('/edit_itemstore/{id}',[ItemStoreController::class,'editItemstore'])->name('edit_itemstore');
Route::post('/update_itemstore/{id}',[ItemStoreController::class,'updateItemstore'])->name('update_itemstore');
Route::get('/delete_itemstore/{id}',[ItemStoreController::class,'deleteItemstore'])->name('delete_itemstore');


Route::get('/inventory/itemsupplier/view',[ItemSupplierController::class,'Itemsupplier'])->name('inventory.itemsupplier.view');
Route::get('/inventory/itemsupplier/add',[ItemSupplierController::class,'AddItemsupplier'])->name('inventory.itemsupplier.add');
Route::post('/inventory/itemsupplier/store',[ItemSupplierController::class,'store'])->name('store.inventory.itemsupplier');
Route::get('/edit_supplier/{id}',[ItemSupplierController::class,'editSupplier'])->name('edit_supplier');
Route::post('/update_itemSupplier/{id}',[ItemSupplierController::class,'updateItemSupplier'])->name('update_itemSupplier');
Route::get('/delete_supplier/{id}',[ItemSupplierController::class,'deleteSupplier'])->name('delete_supplier');

});


/// User Profile and Change Password 
Route::prefix('hostel')->group(function(){
//Hostel Hostel Routes 

Route::get('/hostel/hosteldetail/view', [HostelController::class, 'ViewHostel'])->name('hostel.hosteldetail.view');

Route::get('/hostel/hosteldetail/add', [HostelController::class, 'HostelAdd'])->name('hostel.hosteldetail.add');

Route::post('/hostel/hosteldetail/store', [HostelController::class, 'HostelStore'])->name('store.hostel.hosteldetail');

Route::get('/hostel/hosteldetail/edit/{id}', [HostelController::class, 'HostelEdit'])->name('hostel.hosteldetail.edit');

Route::post('/hostel/hosteldetail/update/{id}', [HostelController::class, 'HostelUpdate'])->name('update.hostel');

Route::get('/hostel/hosteldetail/delete/{id}', [HostelController::class, 'HostelDelete'])->name('hostel.hosteldetail.delete');


//HostelRooms Hostel Routes 

Route::get('/hostelroom/view', [HostelRoomController::class, 'ViewHostelRoom'])->name('hostelroom.view');

Route::get('/hostelroom/add', [HostelRoomController::class, 'HostelRoomAdd'])->name('hostelroom.add');

Route::post('/hostelroom/store', [HostelRoomController::class, 'HostelRoomStore'])->name('store.hostelroom');

Route::get('/hostelroom/edit/{id}', [HostelRoomController::class, 'HostelRoomEdit'])->name('hostelroom.edit');

Route::put('/hostelroom/update/{id}', [HostelRoomController::class, 'HostelRoomUpdate'])->name('update.hostelroom');

Route::get('/hostelroom/delete/{id}', [HostelRoomController::class, 'HostelRoomDelete'])->name('hostelroom.delete');


//RoomType Hostel Routes 

Route::get('roomtype/view', [RoomTypeController::class, 'ViewRoomType'])->name('roomtype.view');

Route::get('roomtype/add', [RoomTypeController::class, 'RoomTypeAdd'])->name('roomtype.add');

Route::post('roomtype/store', [RoomTypeController::class, 'RoomTypeStore'])->name('store.roomtype');

Route::get('roomtype/edit/{id}', [RoomTypeController::class, 'RoomTypeEdit'])->name('roomtype.edit');

Route::put('roomtype/update/{id}', [RoomTypeController::class, 'RoomTypeUpdate'])->name('update.roomtype');

Route::get('roomtype/delete/{id}', [RoomTypeController::class, 'RoomTypeDelete'])->name('roomtype.delete');
});


Route::prefix('setups')->group(function(){

// Student Class Routes 
Route::get('student/class/view', [StudentClassController::class, 'ViewStudent'])->name('student.class.view');

Route::get('student/class/add', [StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');

Route::post('student/class/store', [StudentClassController::class, 'StudentClassStore'])->name('store.student.class');

Route::get('student/class/edit/{id}', [StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');

Route::post('student/class/update/{id}', [StudentClassController::class, 'StudentClassUpdate'])->name('update.student.class');

Route::get('student/class/delete/{id}', [StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');

// Student Semester Routes 
Route::get('student/semester/view', [StudentSemesterController::class, 'ViewStudent'])->name('student.semester.view');

Route::get('student/semester/add', [StudentSemesterController::class, 'StudentSemesterAdd'])->name('student.semester.add');

Route::post('student/semester/store', [StudentSemesterController::class, 'StudentSemesterStore'])->name('store.student.semester');

Route::get('student/semester/edit/{id}', [StudentSemesterController::class, 'StudentSemesterEdit'])->name('student.semester.edit');

Route::post('student/semester/update/{id}', [StudentSemesterController::class, 'StudentSemesterUpdate'])->name('update.student.semester');

Route::get('student/semester/delete/{id}', [StudentSemesterController::class, 'StudentSemesterDelete'])->name('student.semester.delete');


// Student Year Routes 

Route::get('student/year/view', [StudentYearController::class, 'ViewYear'])->name('student.year.view');

Route::get('student/year/add', [StudentYearController::class, 'StudentYearAdd'])->name('student.year.add');

Route::post('student/year/store', [StudentYearController::class, 'StudentYearStore'])->name('store.student.year');

Route::get('student/year/edit/{id}', [StudentYearController::class, 'StudentYearEdit'])->name('student.year.edit');

Route::post('student/year/update/{id}', [StudentYearController::class, 'StudentYearUpdate'])->name('update.student.year');

Route::get('student/year/delete/{id}', [StudentYearController::class, 'StudentYearDelete'])->name('student.year.delete');


// Student Group Routes 

Route::get('student/group/view', [StudentGroupController::class, 'ViewGroup'])->name('student.group.view');

Route::get('student/group/add', [StudentGroupController::class, 'StudentGroupAdd'])->name('student.group.add');

Route::post('student/group/store', [StudentGroupController::class, 'StudentGroupStore'])->name('store.student.group');

Route::get('student/group/edit/{id}', [StudentGroupController::class, 'StudentGroupEdit'])->name('student.group.edit');

Route::post('student/group/update/{id}', [StudentGroupController::class, 'StudentGroupUpdate'])->name('update.student.group');

Route::get('student/group/delete/{id}', [StudentGroupController::class, 'StudentGroupDelete'])->name('student.group.delete');

// Student Shift Routes 

Route::get('student/shift/view', [StudentShiftController::class, 'ViewShift'])->name('setup.shift.view');

Route::get('student/shift/add', [StudentShiftController::class, 'StudentShiftAdd'])->name('setup.shift.add');

Route::post('student/shift/store', [StudentShiftController::class, 'StudentShiftStore'])->name('store.setup.shift');

Route::get('student/shift/edit/{id}', [StudentShiftController::class, 'StudentShiftEdit'])->name('setup.shift.edit');

Route::post('student/shift/update/{id}', [StudentShiftController::class, 'StudentShiftUpdate'])->name('update.setup.shift');

Route::get('student/shift/delete/{id}', [StudentShiftController::class, 'StudentShiftDelete'])->name('setup.shift.delete');


// Fee Category Routes 

Route::get('fee/category/view', [FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');

Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');

Route::post('fee/category/store', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');

Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');

Route::post('fee/category/update/{id}', [FeeCategoryController::class, 'FeeCategoryUpdate'])->name('update.fee.category');

Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCategoryDelete'])->name('fee.category.delete');

// Fee Category Amount Routes 

Route::get('fee/amount/view', [FeeAmountControllere::class, 'ViewFeeAmount'])->name('fee.amount.view');

Route::get('fee/amount/add', [FeeAmountControllere::class, 'AddFeeAmount'])->name('fee.amount.add');

Route::post('fee/amount/store', [FeeAmountControllere::class, 'StoreFeeAmount'])->name('store.fee.amount');

Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountControllere::class, 'EditFeeAmount'])->name('fee.amount.edit');

Route::post('fee/amount/update/{fee_category_id}', [FeeAmountControllere::class, 'UpdateFeeAmount'])->name('update.fee.amount');

Route::get('fee/amount/details/{fee_category_id}', [FeeAmountControllere::class, 'DetailsFeeAmount'])->name('fee.amount.details');


// Exam Type Routes 

Route::get('exam/type/view', [ExamTypeController::class, 'ViewExamType'])->name('exam.type.view');

Route::get('exam/type/add', [ExamTypeController::class, 'ExamTypeAdd'])->name('exam.type.add');

Route::post('exam/type/store', [ExamTypeController::class, 'ExamTypeStore'])->name('store.exam.type');

Route::get('exam/type/edit/{id}', [ExamTypeController::class, 'ExamTypeEdit'])->name('exam.type.edit');

Route::post('exam/type/update/{id}', [ExamTypeController::class, 'ExamTypeUpdate'])->name('update.exam.type');

Route::get('exam/type/delete/{id}', [ExamTypeController::class, 'ExamTypeDelete'])->name('exam.type.delete');


// University Subject All Routes 

Route::get('university/subject/view', [UniversitySubjectController::class, 'ViewSubject'])->name('university.subject.view');

Route::get('university/subject/add', [UniversitySubjectController::class, 'SubjectAdd'])->name('university.subject.add');

Route::post('university/subject/store', [UniversitySubjectController::class, 'SubjectStore'])->name('store.university.subject');

Route::get('suniversity/subject/edit/{id}', [UniversitySubjectController::class, 'SubjectEdit'])->name('university.subject.edit');

Route::post('university/subject/update/{id}', [UniversitySubjectController::class, 'SubjectUpdate'])->name('update.university.subject');

Route::get('university/subject/delete/{id}', [UniversitySubjectController::class, 'SubjectDelete'])->name('university.subject.delete');


// Assign Subject Routes 

Route::get('assign/subject/view', [AssignSubjectController::class, 'ViewAssignSubject'])->name('assign.subject.view');

Route::get('assign/subject/add', [AssignSubjectController::class, 'AddAssignSubject'])->name('assign.subject.add');

Route::post('assign/subject/store', [AssignSubjectController::class, 'StoreAssignSubject'])->name('store.assign.subject');

Route::get('assign/subject/edit/{class_id}', [AssignSubjectController::class, 'EditAssignSubject'])->name('assign.subject.edit');

Route::post('assign/subject/update/{class_id}', [AssignSubjectController::class, 'UpdateAssignSubject'])->name('update.assign.subject');

Route::get('assign/subject/details/{class_id}', [AssignSubjectController::class, 'DetailsAssignSubject'])->name('assign.subject.details');


// Designation All Routes 

Route::get('designation/view', [DesignationController::class, 'ViewDesignation'])->name('designation.view');

Route::get('designation/add', [DesignationController::class, 'DesignationAdd'])->name('designation.add');

Route::post('designation/store', [DesignationController::class, 'DesignationStore'])->name('store.designation');

Route::get('designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');

Route::post('designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');

Route::get('designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');


// Faculty
Route::get('faculty/view', [FacultyController::class, 'ViewFaculty'])->name('faculty.view');

Route::get('faculty/add', [FacultyController::class, 'FacultyAdd'])->name('faculty.add');

Route::post('faculty/store', [FacultyController::class, 'FacultyStore'])->name('store.faculty');

Route::get('faculty/edit/{id}', [FacultyController::class, 'FacultyEdit'])->name('faculty.edit');

Route::post('faculty/update/{id}', [FacultyController::class, 'FacultyUpdate'])->name('update.faculty');

Route::get('faculty/delete/{id}', [FacultyController::class, 'FacultyDelete'])->name('faculty.delete');





//Department
Route::get('department/view', [DepartmentController::class, 'ViewDepartment'])->name('department.view');

Route::get('department/add', [DepartmentController::class, 'DepartmentAdd'])->name('department.add');

Route::post('department/store', [DepartmentController::class, 'DepartmentStore'])->name('store.department');

Route::get('department/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('department.edit');

Route::post('department/update/{id}', [DepartmentController::class, 'DepartmentUpdate'])->name('update.department');

Route::get('department/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('department.delete');

//Course
Route::get('course/view', [CourseController::class, 'ViewCourse'])->name('course.view');

Route::get('course/add', [CourseController::class, 'CourseAdd'])->name('course.add');

Route::post('course/store', [CourseController::class, 'CourseStore'])->name('store.course');

Route::get('course/edit/{id}', [CourseController::class, 'CourseEdit'])->name('course.edit');

Route::post('course/update/{id}', [CourseController::class, 'CourseUpdate'])->name('update.course');

Route::get('course/delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');



//Program

Route::get('program/view', [ProgramController::class, 'ViewProgram'])->name('program.view');

Route::get('program/add', [ProgramController::class, 'ProgramAdd'])->name('program.add');

Route::post('program/store', [ProgramController::class, 'ProgramStore'])->name('store.program');

Route::get('program/edit/{id}', [ProgramController::class, 'ProgramEdit'])->name('program.edit');

Route::post('program/update/{id}', [ProgramController::class, 'ProgramUpdate'])->name('update.program');

Route::get('program/delete/{id}', [ProgramController::class, 'ProgramDelete'])->name('program.delete');

}); 



Route::prefix('feescollection')->group(function(){
// Fees Master Routes 

Route::get('fees/master/view', [FeesmasterController::class, 'ViewFeesMaster'])->name('fees.master.view');

Route::get('fees/master/add', [FeesmasterController::class, 'FeesMasterAdd'])->name('fees.master.add');

Route::post('fees/master/store', [FeesmasterController::class, 'FeesMasterStore'])->name('store.fees.master');

Route::get('fees/master/edit/{id}', [FeesmasterController::class, 'FeesMasterEdit'])->name('fees.master.edit');

Route::post('fees/master/update/{id}', [FeesmasterController::class, 'FeesMasterUpdate'])->name('update.fees.master');

Route::get('fees/master/delete/{id}', [FeesmasterController::class, 'FeesMasterDelete'])->name('fees.master.delete');

Route::get('fees/master/asing/student/{id}', [FeesmasterController::class, 'FeesMasterAsign'])->name('fees.master.asign');

// Fees Discount Routes 

Route::get('fees/discount/view', [FeesdiscountController::class, 'ViewFeesDiscount'])->name('fees.discount.view');

Route::get('fees/discount/add', [FeesdiscountController::class, 'FeesDiscountAdd'])->name('fees.discount.add');

Route::post('fees/discount/store', [FeesdiscountController::class, 'FeesDiscountStore'])->name('store.fees.discount');

Route::get('fees/discount/edit/{id}', [FeesdiscountController::class, 'FeesDiscountEdit'])->name('fees.discount.edit');

Route::post('fees/discount/update/{id}', [FeesdiscountController::class, 'FeesDiscountUpdate'])->name('update.fees.discount');

Route::get('fees/discount/delete/{id}', [FeesdiscountController::class, 'FeesDiscountDelete'])->name('fees.discount.delete');

// Fees Reminder Routes

Route::get('fees/reminder/view', [FeesreminderController::class, 'ViewFeesReminder'])->name('fees.reminder.view');

Route::get('fees/reminder/add', [FeesreminderController::class, 'FeesReminderAdd'])->name('fees.reminder.add');

Route::post('fees/reminder/store', [FeesreminderController::class, 'FeesReminderStore'])->name('store.fees.reminder');

Route::get('fees/reminder/edit/{id}', [FeesreminderController::class, 'FeesReminderEdit'])->name('fees.reminder.edit');

Route::post('fees/reminder/update/{id}', [FeesreminderController::class, 'FeesReminderUpdate'])->name('update.fees.reminder');

Route::get('fees/reminder/delete/{id}', [FeesreminderController::class, 'FeesReminderDelete'])->name('fees.reminder.delete');


// Fees Group Routes 

    Route::get('fees/group/view', [FeesgroupController::class, 'ViewFeesGroup'])->name('fees.group.view');
    Route::get('fees/group/add', [FeesgroupController::class, 'FeesGroupAdd'])->name('fees.group.add');
    Route::post('fees/group/store', [FeesgroupController::class, 'FeesGroupStore'])->name('store.fees.group');
    Route::get('fees/group/edit/{id}', [FeesgroupController::class, 'FeesGroupEdit'])->name('fees.group.edit');
    Route::post('fees/group/update/{id}', [FeesgroupController::class, 'FeesGroupUpdate'])->name('update.fees.group');
    Route::get('fees/group/delete/{id}', [FeesgroupController::class, 'FeesGroupDelete'])->name('fees.group.delete');


    // Fees Type Routes 

    Route::get('fees/type/view', [FeestypeController::class, 'ViewFeesType'])->name('fees.type.view');
    Route::get('fees/type/add', [FeestypeController::class, 'FeesTypeAdd'])->name('fees.type.add');
    Route::post('fees/type/store', [FeestypeController::class, 'FeesTypeStore'])->name('store.setup.fees_type');
    Route::get('fees/type/edit/{id}', [FeestypeController::class, 'FeesTypeEdit'])->name('fees.type.edit');
    Route::post('exam/type/update/{id}', [FeestypeController::class, 'FeesTypeUpdate'])->name('update.fees.type');
    Route::get('fees/type/delete/{id}', [FeestypeController::class, 'FeesTypeDelete'])->name('fees.type.delete');


    
//Accounts Expensevoucher

Route::get('collections/create', [FeesCollectionController::class, 'create'])->name('fees.feescollectionvoucher.create');
Route::get('collections/index', [FeesCollectionController::class, 'index'])->name('fees.feescollectionvoucher.index');
Route::post('collections/store', [FeesCollectionController::class, 'store'])->name('fees.feescollectionvoucher.store');
Route::get('collections/delete/{id}', [FeesCollectionController::class, 'delete'])->name('fees.feescollectionvoucher.delete');
Route::get('collections/view/{id}', [FeesCollectionController::class, 'view'])->name('fees.feescollectionvoucher.view');

}); 

/// Student Registration Routes  
Route::prefix('students')->group(function(){

Route::get('/reg/view', [StudentRegController::class, 'StudentRegView'])->name('student.registration.view');

Route::get('/reg/Add', [StudentRegController::class, 'StudentRegAdd'])->name('student.registration.add');

Route::post('/reg/store', [StudentRegController::class, 'StudentRegStore'])->name('store.student.registration');
 
Route::get('/year/class/wise', [StudentRegController::class, 'StudentClassYearWise'])->name('student.year.class.wise');

Route::get('/reg/edit/{student_id}', [StudentRegController::class, 'StudentRegEdit'])->name('student.registration.edit');

Route::post('/reg/update/{student_id}', [StudentRegController::class, 'StudentRegUpdate'])->name('update.student.registration');

Route::get('/reg/promotion/{student_id}', [StudentRegController::class, 'StudentRegPromotion'])->name('student.registration.promotion');

Route::post('/reg/update/promotion/{student_id}', [StudentRegController::class, 'StudentUpdatePromotion'])->name('promotion.student.registration');

Route::get('/reg/details/{student_id}', [StudentRegController::class, 'StudentRegDetails'])->name('student.registration.details');

Route::get('/reg/profile/{student_id}', [StudentRegController::class, 'StudentRegProfile'])->name('student.registration.view_profile');
Route::get('/reg/delete/{student_id}', [StudentRegController::class, 'StudentRegDelete'])->name('student.registration.delete');

// Student Roll Generate Routes 
Route::get('/roll/generate/view', [StudentRollController::class, 'StudentRollView'])->name('roll.generate.view');

Route::get('/reg/getstudents', [StudentRollController::class, 'GetStudents'])->name('student.registration.getstudents');

Route::post('/roll/generate/store', [StudentRollController::class, 'StudentRollStore'])->name('roll.generate.store');

// Registration Fee Routes 
Route::get('/reg/fee/view', [RegistrationFeeController::class, 'RegFeeView'])->name('registration.fee.view');

Route::get('/reg/fee/classwisedata', [RegistrationFeeController::class, 'RegFeeClassData'])->name('student.registration.fee.classwise.get');

Route::get('/reg/fee/payslip', [RegistrationFeeController::class, 'RegFeePayslip'])->name('student.registration.fee.payslip');


// Monthly Fee Routes 
Route::get('/monthly/fee/view', [MonthlyFeeController::class, 'MonthlyFeeView'])->name('monthly.fee.view');

Route::get('/monthly/fee/classwisedata', [MonthlyFeeController::class, 'MonthlyFeeClassData'])->name('student.monthly.fee.classwise.get');

Route::get('/monthly/fee/payslip', [MonthlyFeeController::class, 'MonthlyFeePayslip'])->name('student.monthly.fee.payslip');

// Exam Fee Routes 
Route::get('/exam/fee/view', [ExamFeeController::class, 'ExamFeeView'])->name('exam.fee.view');

Route::get('/exam/fee/classwisedata', [ExamFeeController::class, 'ExamFeeClassData'])->name('student.exam.fee.classwise.get');

Route::get('/exam/fee/payslip', [ExamFeeController::class, 'ExamFeePayslip'])->name('student.exam.fee.payslip');

}); 


Route::prefix('attendance')->group(function(){
    // Student Attendance 
Route::get('/attendance/view', [StudentAttendanceController::class, 'index'])->name('student.attendance.index');
Route::get('/attendance/create', [StudentAttendanceController::class, 'create'])->name('student.attendance.create');
Route::get('/attendance/class/wise', [StudentAttendanceController::class, 'createattendance'])->name('student.attendance.class.wise');
Route::post('/attendance/store', [StudentAttendanceController::class, 'store'])->name('student.attendance.store');
 


});

/// Teacher Registration Routes  
Route::prefix('teacher')->group(function(){

    Route::get('/reg/view', [TeacherRegController::class, 'TeacherRegView'])->name('teacher.registration.view');
    
    Route::get('/reg/Add', [TeacherRegController::class, 'TeacherRegAdd'])->name('teacher.registration.add');
    
    Route::post('/reg/store', [TeacherRegController::class, 'TeacherRegStore'])->name('store.teacher.registration');
     
    Route::get('/year/class/wise', [TeacherRegController::class, 'TeacherClassYearWise'])->name('teacher.year.class.wise');
    
    Route::get('/reg/edit/{teacher_id}', [TeacherRegController::class, 'TeacherRegEdit'])->name('teacher.registration.edit');
    
    Route::post('/reg/update/{teacher_id}', [TeacherRegController::class, 'TeacherRegUpdate'])->name('update.teacher.registration');
    
    Route::get('/reg/promotion/{teacher_id}', [TeacherRegController::class, 'TeacherRegPromotion'])->name('teacher.registration.promotion');
    
    Route::post('/reg/update/promotion/{teacher_id}', [TeacherRegController::class, 'TeacherUpdatePromotion'])->name('promotion.teacher.registration');
    
    Route::get('/reg/details/{teacher_id}', [TeacherRegController::class, 'TeacherRegDetails'])->name('teacher.registration.details');
    Route::get('/reg/delete/{teacher_id}', [TeacherRegController::class, 'TeacherRegDelete'])->name('teacher.registration.delete');
    
}); 



/// Employee Registration Routes
Route::prefix('employees')->group(function(){

Route::get('reg/employee/view', [EmployeeRegController::class, 'EmployeeView'])->name('employee.registration.view');

Route::get('reg/employee/add', [EmployeeRegController::class, 'EmployeeAdd'])->name('employee.registration.add');

Route::post('reg/employee/store', [EmployeeRegController::class, 'EmployeeStore'])->name('store.employee.registration');
 
Route::get('reg/employee/edit/{id}', [EmployeeRegController::class, 'EmployeeEdit'])->name('employee.registration.edit');

Route::post('reg/employee/update/{id}', [EmployeeRegController::class, 'EmployeeUpdate'])->name('update.employee.registration');

Route::get('reg/employee/details/{id}', [EmployeeRegController::class, 'EmployeeDetails'])->name('employee.registration.details');

// Employee Salary All Routes 
Route::get('salary/employee/view', [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');

Route::get('salary/employee/increment/{id}', [EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');

Route::post('salary/employee/store/{id}', [EmployeeSalaryController::class, 'SalaryStore'])->name('update.increment.store');

Route::get('salary/employee/details/{id}', [EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');


// Employee Leave All Routes 
Route::get('leave/employee/view', [EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view');

Route::get('leave/employee/add', [EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');

Route::post('leave/employee/store', [EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');

Route::get('leave/employee/edit/{id}', [EmployeeLeaveController::class, 'LeaveEdit'])->name('employee.leave.edit');

Route::post('leave/employee/update/{id}', [EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');

Route::get('leave/employee/delete/{id}', [EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');


// Employee Attendance All Routes 
Route::get('attendance/employee/view', [EmployeeAttendanceController::class, 'AttendanceView'])->name('employee.attendance.view');

Route::get('attendance/employee/add', [EmployeeAttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');

Route::post('attendance/employee/store', [EmployeeAttendanceController::class, 'AttendanceStore'])->name('store.employee.attendance');

Route::get('attendance/employee/edit/{date}', [EmployeeAttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');

Route::get('attendance/employee/details/{date}', [EmployeeAttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');


// Employee Monthly Salary All Routes 
Route::get('monthly/salary/view', [MonthlySalaryController::class, 'MonthlySalaryView'])->name('employee.monthly.salary');

Route::get('monthly/salary/get', [MonthlySalaryController::class, 'MonthlySalaryGet'])->name('employee.monthly.salary.get');

Route::get('monthly/salary/payslip/{employee_id}', [MonthlySalaryController::class, 'MonthlySalaryPayslip'])->name('employee.monthly.salary.payslip');

//Employee Department Route
Route::get('employee/department/view', [EmployeeDepartmentController::class, 'ViewEmployeeDepartment'])->name('employee.department.view');

Route::get('employee/department/add', [EmployeeDepartmentController::class, 'EmployeeDepartmentAdd'])->name('employee.department.add');

Route::post('employee/department/store', [EmployeeDepartmentController::class, 'EmployeeDepartmentStore'])->name('employee.store.department');

Route::get('employee/department/edit/{id}', [EmployeeDepartmentController::class, 'EmployeeDepartmentEdit'])->name('employee.department.edit');

Route::post('employee/department/update/{id}', [EmployeeDepartmentController::class, 'EmployeeDepartmentUpdate'])->name('employee.update.department');

Route::get('employee/department/delete/{id}', [EmployeeDepartmentController::class, 'EmployeeDepartmentDelete'])->name('employee.department.delete');


//Employee Leave Type Route

Route::get('employee/leavetype/view', [EmployeeleaveTypeController::class, 'ViewEmployeeleavetype'])->name('employee.leavetype.view');

Route::get('employee/leavetype/add', [EmployeeleaveTypeController::class, 'EmployeeleavetypeAdd'])->name('employee.leavetype.add');

Route::post('employee/leavetype/store', [EmployeeleaveTypeController::class, 'EmployeeleavetypeStore'])->name('employee.store.leavetype');

Route::get('employee/leavetype/edit/{id}', [EmployeeleaveTypeController::class, 'EmployeeleavetypeEdit'])->name('employee.leavetype.edit');

Route::post('employee/leavetype/update/{id}', [EmployeeleaveTypeController::class, 'EmployeeleavetypeUpdate'])->name('employee.update.leavetype');

Route::get('employee/leavetype/delete/{id}', [EmployeeleaveTypeController::class, 'EmployeeleavetypeDelete'])->name('employee.leavetype.delete');

// Designation All Routes 

Route::get('employee/designation/view', [EmployeeDesignationController::class, 'EmployeeViewDesignation'])->name('employee.designation.view');

Route::get('employee/designation/add', [EmployeeDesignationController::class, 'EmployeeDesignationAdd'])->name('employee.designation.add');

Route::post('employee/designation/store', [EmployeeDesignationController::class, 'EmployeeDesignationStore'])->name('employee.store.designation');

Route::get('employee/designation/edit/{id}', [EmployeeDesignationController::class, 'EmployeeDesignationEdit'])->name('employee.designation.edit');

Route::post('employee/designation/update/{id}', [EmployeeDesignationController::class, 'EmployeeDesignationUpdate'])->name('employee.update.designation');

Route::get('employee/designation/delete/{id}', [EmployeeDesignationController::class, 'EmployeeDesignationDelete'])->name('employee.designation.delete');



}); 


/// Marks Management Routes  
Route::prefix('marks')->group(function(){

Route::get('marks/entry/add', [MarksController::class, 'MarksAdd'])->name('marks.entry.add');

Route::post('marks/entry/store', [MarksController::class, 'MarksStore'])->name('marks.entry.store'); 

Route::get('marks/entry/edit', [MarksController::class, 'MarksEdit'])->name('marks.entry.edit'); 

Route::get('marks/getstudents/edit', [MarksController::class, 'MarksEditGetStudents'])->name('student.edit.getstudents');

Route::post('marks/entry/update', [MarksController::class, 'MarksUpdate'])->name('marks.entry.update');  

// Marks Entry Grade 

Route::get('marks/grade/view', [GradeController::class, 'MarksGradeView'])->name('marks.entry.grade');

Route::get('marks/grade/add', [GradeController::class, 'MarksGradeAdd'])->name('marks.grade.add');

Route::post('marks/grade/store', [GradeController::class, 'MarksGradeStore'])->name('store.marks.grade');

Route::get('marks/grade/edit/{id}', [GradeController::class, 'MarksGradeEdit'])->name('marks.grade.edit');

Route::post('marks/grade/update/{id}', [GradeController::class, 'MarksGradeUpdate'])->name('update.marks.grade');

}); 
 
Route::get('marks/getsubject', [DefaultController::class, 'GetSubject'])->name('marks.getsubject');

Route::get('student/marks/getstudents', [DefaultController::class, 'GetStudents'])->name('student.marks.getstudents');





/// Account Management Routes  
Route::prefix('accounts')->group(function(){

Route::get('student/fee/view', [StudentFeeController::class, 'StudentFeeView'])->name('student.fee.view');

Route::get('student/fee/add', [StudentFeeController::class, 'StudentFeeAdd'])->name('student.fee.add');

Route::get('student/fee/getstudent', [StudentFeeController::class, 'StudentFeeGetStudent'])->name('account.fee.getstudent'); 

Route::post('student/fee/store', [StudentFeeController::class, 'StudentFeeStore'])->name('account.fee.store'); 

// Employee Salary Routes
Route::get('account/salary/view', [AccountSalaryController::class, 'AccountSalaryView'])->name('account.salary.view');

Route::get('account/salary/add', [AccountSalaryController::class, 'AccountSalaryAdd'])->name('account.salary.add');

Route::get('account/salary/getemployee', [AccountSalaryController::class, 'AccountSalaryGetEmployee'])->name('account.salary.getemployee');

Route::post('account/salary/store', [AccountSalaryController::class, 'AccountSalaryStore'])->name('account.salary.store');


//Accounts class

Route::get('account/class/create', [AccountclassController::class, 'create'])->name('account.class.create');
Route::get('account/class/index', [AccountclassController::class, 'index'])->name('account.class.index');
Route::post('account/class/store', [AccountclassController::class, 'store'])->name('account.class.store');
Route::get('account/class/edit/{id}', [AccountclassController::class, 'edit'])->name('account.class.edit');
Route::post('account/class/update/{id}', [AccountclassController::class, 'update'])->name('account.class.update');
Route::get('account/class/delete/{id}', [AccountclassController::class, 'delete'])->name('account.class.delete');


//Accounts Groups

Route::get('account/groups/create', [GroupController::class, 'create'])->name('account.group.create');
Route::get('account/groups/index', [GroupController::class, 'index'])->name('account.group.index');
Route::post('account/group/store', [GroupController::class, 'store'])->name('account.group.store');
Route::get('account/group/edit/{id}', [GroupController::class, 'edit'])->name('account.group.edit');
Route::post('account/group/update/{id}', [GroupController::class, 'update'])->name('account.group.update');
Route::get('account/group/delete/{id}', [GroupController::class, 'delete'])->name('account.group.delete');


//Accounts Sub_Groups

Route::get('account/subgroups/create', [AccountsubgroupController::class, 'create'])->name('account.subgroup.create');
Route::get('account/subgroups/index', [AccountsubgroupController::class, 'index'])->name('account.subgroup.index');
Route::post('account/subgroups/store', [AccountsubgroupController::class, 'store'])->name('account.subgroup.store');
Route::get('account/subgroups/edit/{id}', [AccountsubgroupController::class, 'edit'])->name('account.subgroup.edit');
Route::post('account/subgroups/update/{id}', [AccountsubgroupController::class, 'update'])->name('account.subgroup.update');
Route::get('account/subgroups/delete/{id}', [AccountsubgroupController::class, 'delete'])->name('account.subgroup.delete');


//Accounts Ledgar

Route::get('account/ledger/create', [AccountledgerController::class, 'create'])->name('account.ledger.create');
Route::get('account/ledger/index', [AccountledgerController::class, 'index'])->name('account.ledger.index');
Route::post('account/ledger/store', [AccountledgerController::class, 'store'])->name('account.ledger.store');
Route::get('account/ledger/edit/{id}', [AccountledgerController::class, 'edit'])->name('account.ledger.edit');
Route::post('account/ledger/update/{id}', [AccountledgerController::class, 'update'])->name('account.ledger.update');
Route::get('account/ledger/delete/{id}', [AccountledgerController::class, 'delete'])->name('account.ledger.delete');


//Accounts Bank

Route::get('account/bank/create', [BankController::class, 'create'])->name('account.bank.create');
Route::get('account/bank/index', [BankController::class, 'index'])->name('account.bank.index');
Route::post('account/bank/store', [BankController::class, 'store'])->name('account.bank.store');
Route::get('account/bank/edit/{id}', [BankController::class, 'edit'])->name('account.bank.edit');
Route::post('account/bank/update/{id}', [BankController::class, 'update'])->name('account.bank.update');
Route::get('account/bank/delete/{id}', [BankController::class, 'delete'])->name('account.bank.delete');
//Accounts Bankaccount
Route::get('account/bankaccount/create', [BankaccountController::class, 'create'])->name('account.bankaccount.create');
Route::get('account/bankaccount/index', [BankaccountController::class, 'index'])->name('account.bankaccount.index');
Route::post('account/bankaccount/store', [BankaccountController::class, 'store'])->name('account.bankaccount.store');
Route::get('account/bankaccount/edit/{id}', [BankaccountController::class, 'edit'])->name('account.bankaccount.edit');
Route::post('account/bankaccount/update/{id}', [BankaccountController::class, 'update'])->name('account.bankaccount.update');
Route::get('account/bankaccount/delete/{id}', [BankaccountController::class, 'delete'])->name('account.bankaccount.delete');

//Accounts Mobile Account

Route::get('account/mobileaccount/create', [MobileaccountController::class, 'create'])->name('account.mobileaccount.create');
Route::get('account/mobileaccount/index', [MobileaccountController::class, 'index'])->name('account.mobileaccount.index');
Route::post('account/mobileaccount/store', [MobileaccountController::class, 'store'])->name('account.mobileaccount.store');
Route::get('account/mobileaccount/edit/{id}', [MobileaccountController::class, 'edit'])->name('account.mobileaccount.edit');
Route::post('account/mobileaccount/update/{id}', [MobileaccountController::class, 'update'])->name('account.mobileaccount.update');
Route::get('account/mobileaccount/delete/{id}', [MobileaccountController::class, 'delete'])->name('account.mobileaccount.delete');

//Accounts Paymentvoucher

Route::get('account/payment/create', [PaymentController::class, 'create'])->name('account.paymentvoucher.create');
Route::get('account/payment/index', [PaymentController::class, 'index'])->name('account.paymentvoucher.index');
Route::post('account/payment/store', [PaymentController::class, 'store'])->name('account.paymentvoucher.store');
Route::get('account/payment/delete/{id}', [PaymentController::class, 'delete'])->name('account.paymentvoucher.delete');
Route::get('account/payment/view/{id}', [PaymentController::class, 'view'])->name('account.paymentvoucher.view');


//Accounts Receivevoucher

Route::get('account/receive/create', [ReceiveVoucherController::class, 'create'])->name('account.receivevoucher.create');
Route::get('account/receive/index', [ReceiveVoucherController::class, 'index'])->name('account.receivevoucher.index');
Route::post('account/receive/store', [ReceiveVoucherController::class, 'store'])->name('account.receivevoucher.store');
Route::get('account/receive/delete/{id}', [ReceiveVoucherController::class, 'delete'])->name('account.receivevoucher.delete');
Route::get('account/receive/view/{id}', [ReceiveVoucherController::class, 'view'])->name('account.receivevoucher.view');


//Accounts Expensevoucher

Route::get('account/expense/create', [ExpenseVoucherController::class, 'create'])->name('account.expensevoucher.create');
Route::get('account/expense/index', [ExpenseVoucherController::class, 'index'])->name('account.expensevoucher.index');
Route::post('account/expense/store', [ExpenseVoucherController::class, 'store'])->name('account.expensevoucher.store');
Route::get('account/expense/delete/{id}', [ExpenseVoucherController::class, 'delete'])->name('account.expensevoucher.delete');
//Accounts Journalvoucher

Route::get('account/journal/create', [JournalEntryController::class, 'create'])->name('account.journal.create');
Route::get('account/journal/index', [JournalEntryController::class, 'index'])->name('account.journal.index');
Route::post('account/journal/store', [JournalEntryController::class, 'store'])->name('account.journal.store');
Route::get('account/journal/delete/{id}', [JournalEntryController::class, 'delete'])->name('account.journal.delete');
Route::get('account/journal/view/{id}', [JournalEntryController::class, 'view'])->name('account.journal.view');


// Other Cost Rotues 

Route::get('other/cost/view', [OtherCostController::class, 'OtherCostView'])->name('other.cost.view');

Route::get('other/cost/add', [OtherCostController::class, 'OtherCostAdd'])->name('other.cost.add');

Route::post('other/cost/store', [OtherCostController::class, 'OtherCostStore'])->name('store.other.cost');

Route::get('other/cost/edit/{id}', [OtherCostController::class, 'OtherCostEdit'])->name('edit.other.cost');

Route::post('other/cost/update/{id}', [OtherCostController::class, 'OtherCostUpdate'])->name('update.other.cost');

}); 

// Library Management All Routes  
Route::prefix('library')->group(function(){
    //Book List Library Routes 
    Route::get('library/book/view', [BookController::class, 'ViewBook'])->name('library.book.view_book');

    Route::get('library/book/add', [BookController::class, 'BookAdd'])->name('library.book.add_book');
    
    Route::post('library/book/store', [BookController::class, 'BookStore'])->name('store.library.book');
    
    Route::get('library/book/edit/{id}', [BookController::class, 'BookEdit'])->name('library.book.edit');
    
    Route::post('library/book/update/{id}', [BookController::class, 'BookUpdate'])->name('library.update.book');
    
    Route::get('library/book/delete/{id}', [BookController::class, 'BookDelete'])->name('library.book.delete');
    
    //AddStaffMember Library Routes 
    
    Route::get('addstaffmember/view', [AddStaffMemberController::class, 'ViewAddStaffMember'])->name('addstaffmember.view');
    
    Route::get('addstaffmember/add', [AddStaffMemberController::class, 'AddStaffMemberAdd'])->name('addstaffmember.add');
    
    Route::post('addstaffmember/store', [AddStaffMemberController::class, 'AddStaffMemberStore'])->name('store.addstaffmember');
    
    Route::get('addstaffmember/edit/{id}', [AddStaffMemberController::class, 'AddStaffMemberEdit'])->name('addstaffmember.edit');
    
    Route::post('addstaffmember/update/{id}', [AddStaffMemberController::class, 'AddStaffMemberUpdate'])->name('update.addstaffmember');
    
    Route::get('addstaffmember/delete/{id}', [AddStaffMemberController::class, 'AddStaffMemberDelete'])->name('addstaffmember.delete');
    
    
    
    //IssueReturn Library Routes 

Route::get('issuereturn/create', [IssueReturnController::class, 'create'])->name('library.issuereturn.create');
Route::get('issuereturn/index', [IssueReturnController::class, 'index'])->name('library.issuereturn.index');
Route::post('issuereturn/store', [IssueReturnController::class, 'store'])->name('library.issuereturn.store');
Route::get('issuereturn/delete/{id}', [IssueReturnController::class, 'delete'])->name('library.issuereturn.delete');
Route::get('issuereturn/view/{id}', [IssueReturnController::class, 'view'])->name('library.issuereturn.view');   

    
    

// Add Student Library Routes 

Route::get('addstudent/view', [AddStudentController::class, 'ViewAddStudent'])->name('addstudent.view');

Route::get('addstudent/add', [AddStudentController::class, 'AddStudentAdd'])->name('addstudent.add');
Route::get('addstudent/add/info', [AddStudentController::class, 'AddStudentinfo'])->name('addstudentinfo.add');

Route::get('addstudent/store/{id}/{type}', [AddStudentController::class, 'AddStudentStore'])->name('store.addstudent');

Route::get('addstudent/edit/{id}', [AddStudentController::class, 'AddStudentEdit'])->name('addstudent.edit');

Route::post('addstudent/update/{id}', [AddStudentController::class, 'AddStudentUpdate'])->name('update.addstudent');

Route::get('addstudent/delete/{id}', [AddStudentController::class, 'AddStudentDelete'])->name('addstudent.delete');



}); 
//Upload Content

Route::prefix('content')->group(function(){

Route::get('/uploadcontent/index',[UploadContentController::class,'index'])->name('uploadcontent.index');

Route::get('/uploadcontent/syllabus',[UploadContentController::class,'syllabus'])->name('uploadcontent.syllabus');
Route::get('/uploadcontent/assignment',[UploadContentController::class,'assignment'])->name('uploadcontent.assignment');
Route::get('/uploadcontent/others',[UploadContentController::class,'others'])->name('uploadcontent.others');
Route::get('/uploadcontent/create',[UploadContentController::class,'create'])->name('uploadcontent.create');
Route::post('/uploadcontent/store',[UploadContentController::class,'store'])->name('uploadcontent.store');
Route::get('/uploadcontent/edit/{id}',[UploadContentController::class,'edit'])->name('uploadcontent.edit');
Route::get('/uploadcontent/update{id}',[UploadContentController::class,'update'])->name('uploadcontent.update');
Route::get('/uploadcontent/delete/{id}',[UploadContentController::class,'delete'])->name('uploadcontent.delete');
}); 


/// Report Management All Routes  
Route::prefix('reports')->group(function(){

Route::get('monthly/profit/view', [ProfiteController::class, 'MonthlyProfitView'])->name('monthly.profit.view');

Route::get('monthly/profit/datewais', [ProfiteController::class, 'MonthlyProfitDatewais'])->name('report.profit.datewais.get');

Route::get('monthly/profit/pdf', [ProfiteController::class, 'MonthlyProfitPdf'])->name('report.profit.pdf');

// MarkSheet Generate Routes 
Route::get('marksheet/generate/view', [MarkSheetController::class, 'MarkSheetView'])->name('marksheet.generate.view');

Route::get('marksheet/generate/get', [MarkSheetController::class, 'MarkSheetGet'])->name('report.marksheet.get');


// Attendance Report Routes 
Route::get('attendance/report/view', [AttenReportController::class, 'AttenReportView'])->name('attendance.report.view');

Route::get('report/attendance/get', [AttenReportController::class, 'AttenReportGet'])->name('report.attendance.get');

// Student Result Report Routes 
Route::get('student/result/view', [ResultReportController::class, 'ResultView'])->name('student.result.view');

Route::get('student/result/get', [ResultReportController::class, 'ResultGet'])->name('report.student.result.get');

// Student ID Card Routes 
Route::get('student/idcard/view', [ResultReportController::class, 'IdcardView'])->name('student.idcard.view');

Route::get('student/idcard/get', [ResultReportController::class, 'IdcardGet'])->name('report.student.idcard.get');

}); 

Route::prefix('academic')->group(function(){
//AllClass Academic Routes 

// Route::get('allclass/view', [AllClassController::class, 'ViewAllClass'])->name('allclass.view');

// Route::get('allclass/add', [AllClassController::class, 'AllClassAdd'])->name('allclass.add');

// Route::post('allclass/store', [AllClassController::class, 'AllClassStore'])->name('store.allclass');

// Route::get('allclass/edit/{id}', [AllClassController::class, 'AllClassEdit'])->name('allclass.edit');

// Route::post('allclass/update/{id}', [AllClassController::class, 'AllClassUpdate'])->name('update.allclass');

// Route::get('allclass/delete/{id}', [AllClassController::class, 'AllClassDelete'])->name('allclass.delete');

Route::get('student/classall/view', [StudentClassController::class, 'ViewStudent'])->name('student.classall.view');

//AssignClassTeacher Academic Routes 

Route::get('assignclassteacher/view', [AssignClassTeacherController::class, 'View'])->name('assignclassteacher.view');

Route::get('assignclassteacher/add', [AssignClassTeacherController::class, 'Add'])->name('assignclassteacher.add');

Route::post('assignclassteacher/store', [AssignClassTeacherController::class, 'Store'])->name('store.assignclassteacher');

Route::get('assignclassteacher/edit/{id}', [AssignClassTeacherController::class, 'Edit'])->name('assignclassteacher.edit');

Route::post('assignclassteacher/update/{id}', [AssignClassTeacherController::class, 'Update'])->name('update.assignclassteacher');

Route::get('assignclassteacher/delete/{id}', [AssignClassTeacherController::class, 'Delete'])->name('assignclassteacher.delete');


//ClassTimetable Academic Routes 

Route::get('classtimetable/view', [ClassTimetableController::class, 'View'])->name('classtimetable.view');

Route::get('classtimetable/add', [ClassTimetableController::class, 'Add'])->name('classtimetable.add');

Route::post('classtimetable/store', [ClassTimetableController::class, 'Store'])->name('store.classtimetable');

Route::get('classtimetable/edit/{id}', [ClassTimetableController::class, 'Edit'])->name('classtimetable.edit');

Route::post('classtimetable/update/{id}', [ClassTimetableController::class, 'Update'])->name('update.classtimetable');

Route::get('classtimetable/delete/{id}', [ClassTimetableController::class, 'Delete'])->name('classtimetable.delete');


//PromoteStudents Academic Routes 

Route::get('promotestudents/view', [PromoteStudentsController::class, 'ViewPromoteStudents'])->name('promotestudents.view');

Route::get('promotestudents/add', [PromoteStudentsController::class, 'PromoteStudentsAdd'])->name('promotestudents.add');

Route::post('promotestudents/store', [PromoteStudentsController::class, 'PromoteStudentsStore'])->name('store.promotestudents');

Route::get('promotestudents/edit/{id}', [PromoteStudentsController::class, 'PromoteStudentsEdit'])->name('promotestudents.edit');

Route::post('promotestudents/update/{id}', [PromoteStudentsController::class, 'PromoteStudentsUpdate'])->name('update.promotestudents');

Route::get('promotestudents/delete/{id}', [PromoteStudentsController::class, 'PromoteStudentsDelete'])->name('promotestudents.delete');


//Sections Academic Routes 

Route::get('sections/view', [SectionsController::class, 'ViewSections'])->name('sections.view');

Route::get('sections/add', [SectionsController::class, 'SectionsAdd'])->name('sections.add');

Route::post('sections/store', [SectionsController::class, 'SectionsStore'])->name('store.sections');

Route::get('sections/edit/{id}', [SectionsController::class, 'SectionsEdit'])->name('sections.edit');

Route::post('sections/update/{id}', [SectionsController::class, 'SectionsUpdate'])->name('update.sections');

Route::get('sections/delete/{id}', [SectionsController::class, 'SectionsDelete'])->name('sections.delete');
// Class room Add

Route::get('classrooms/view', [ClassRoomController::class, 'View'])->name('classrooms.view');

Route::get('classrooms/add', [ClassRoomController::class, 'Add'])->name('classrooms.add');

Route::post('classrooms/store', [ClassRoomController::class, 'Store'])->name('store.classrooms');

Route::get('classrooms/edit/{id}', [ClassRoomController::class, 'Edit'])->name('classrooms.edit');

Route::post('classrooms/update/{id}', [ClassRoomController::class, 'Update'])->name('update.classrooms');

Route::get('classrooms/delete/{id}', [ClassRoomController::class, 'Delete'])->name('classrooms.delete');


//SubjectGroup Academic Routes 

// Route::get('subjectgroup/view', [SubjectGroupController::class, 'ViewSubjectGroup'])->name('subjectgroup.view');

// Route::get('subjectgroup/add', [SubjectGroupController::class, 'SubjectGroupAdd'])->name('subjectgroup.add');

// Route::post('subjectgroup/store', [SubjectGroupController::class, 'SubjectGroupStore'])->name('store.subjectgroup');

// Route::get('subjectgroup/edit/{id}', [SubjectGroupController::class, 'SubjectGroupEdit'])->name('subjectgroup.edit');

// Route::post('subjectgroup/update/{id}', [SubjectGroupController::class, 'SubjectGroupUpdate'])->name('update.subjectgroup');

// Route::get('subjectgroup/delete/{id}', [SubjectGroupController::class, 'SubjectGroupDelete'])->name('subjectgroup.delete');



//Subjects Academic Routes 

Route::get('subjects/view', [SchoolSubjectController::class, 'ViewSubject'])->name('subjects.view');

// Route::get('subjects/view', [SubjectsController::class, 'ViewSubjects'])->name('subjects.view');

// Route::get('subjects/add', [SubjectsController::class, 'SubjectsAdd'])->name('subjects.add');

// Route::post('subjects/store', [SubjectsController::class, 'SubjectsStore'])->name('store.subjects');

// Route::get('subjects/edit/{id}', [SubjectsController::class, 'SubjectsEdit'])->name('subjects.edit');

// Route::post('subjects/update/{id}', [SubjectsController::class, 'SubjectsUpdate'])->name('update.subjects');

// Route::get('subjects/delete/{id}', [SubjectsController::class, 'SubjectsDelete'])->name('subjects.delete');
}); 


Route::prefix('webmenagement')->group(function(){
    Route::get('/websiteinfo/view/', [WebsiteinfoController::class, 'Websiteinfo'])->name('Websiteinfo.view');

    Route::post('/websiteinfo/update/{id}', [WebsiteinfoController::class, 'WebsiteinfoUpdate'])->name('update.Websiteinfo');
    //slider  add route
    Route::get('/slider/index',[SliderController::class,'index'])->name('slider.index');
    Route::get('/slider/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('/slider/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::put('/slider/update{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
// BOT add route 
Route::get('/bot/index',[BotController::class,'index'])->name('bot.index');
Route::get('/bot/create',[BotController::class,'create'])->name('bot.create');
Route::post('/bot/store',[BotController::class,'store'])->name('bot.store');
Route::get('/bot/edit/{id}',[BotController::class,'edit'])->name('bot.edit');
Route::put('/bot/update{id}',[BotController::class,'update'])->name('bot.update');
Route::get('/bot/delete/{id}',[BotController::class,'delete'])->name('bot.delete');

// Finance Committee add route 
Route::get('/fincom/index',[FincomController::class,'index'])->name('fincom.index');
Route::get('/fincom/create',[FincomController::class,'create'])->name('fincom.create');
Route::post('/fincom/store',[FincomController::class,'store'])->name('fincom.store');
Route::get('/fincom/edit/{id}',[FincomController::class,'edit'])->name('fincom.edit');
Route::put('/fincom/update{id}',[FincomController::class,'update'])->name('fincom.update');
Route::get('/fincom/delete/{id}',[FincomController::class,'delete'])->name('fincom.delete');
// Disciplinarycommittee add route
Route::get('/disciplinarycommittee/index',[DisciplinarycommitteeController::class,'index'])->name('disciplinarycommittee.index');
Route::get('/disciplinarycommittee/create',[DisciplinarycommitteeController::class,'create'])->name('disciplinarycommittee.create');
Route::post('/disciplinarycommittee/store',[DisciplinarycommitteeController::class,'store'])->name('disciplinarycommittee.store');
Route::get('/disciplinarycommittee/edit/{id}',[DisciplinarycommitteeController::class,'edit'])->name('disciplinarycommittee.edit');
Route::put('/disciplinarycommittee/update{id}',[DisciplinarycommitteeController::class,'update'])->name('disciplinarycommittee.update');
Route::get('/disciplinarycommittee/delete/{id}',[DisciplinarycommitteeController::class,'delete'])->name('disciplinarycommittee.delete');

//Social Group
Route::get('/socialgroup/index',[SocialgroupController::class,'Socialgroupindex'])->name('socialgroup.index');
Route::get('/socialgroup/create',[SocialgroupController::class,'Socialgroupcreate'])->name('socialgroup.create');
Route::post('/socialgroup/store',[SocialgroupController::class,'Socialgroupstore'])->name('socialgroup.store');
Route::get('/socialgroup/edit/{id}',[SocialgroupController::class,'Socialgroupedit'])->name('socialgroup.edit');
Route::put('/socialgroup/update/{id}',[SocialgroupController::class,'Socialgroupupdate'])->name('socialgroup.update');
Route::get('/socialgroup/delete/{id}',[SocialgroupController::class,'Socialgroupdelete'])->name('socialgroup.delete');


// Amdin Contact Page Route 
Route::get('/webinfo/contact/index', [ContactController::class,'AdminContact'])->name('contact.index');
Route::get('backend/webinfo/contact/create', [ContactController::class, 'AdminAddContact'])->name('webinfo.contact.create');
Route::post('backend/webinfo/contact/store', [ContactController::class, 'AdminStoreContact'])->name('store.webinfo.contact');
Route::get('backend/webinfo/contact/message', [ContactController::class, 'AdminMessage'])->name('webinfo.contact.message');
Route::put('backend/webinfo/contact/update/{id}',[ ContactController::class, 'Update'])->name('contact.update');
Route::get('backend/webinfo/contact/edit/{id}', [ContactController::class, 'Edit'])->name('contact.edit');
Route::get('backend/webinfo/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');

// Complaintcommittee add route
Route::get('/complaintcommittee/index',[ComplaintcommitteeController::class,'index'])->name('complaintcom.index');
Route::get('/complaintcommittee/create',[ComplaintcommitteeController::class,'create'])->name('complaintcom.create');
Route::post('/complaintcommittee/store',[ComplaintcommitteeController::class,'store'])->name('complaintcom.store');
Route::get('/complaintcommittee/edit/{id}',[ComplaintcommitteeController::class,'edit'])->name('complaintcom.edit');
Route::put('/complaintcommittee/update/{id}',[ComplaintcommitteeController::class,'update'])->name('complaintcom.update');
Route::get('/complaintcommittee/delete/{id}',[ComplaintcommitteeController::class,'delete'])->name('complaintcom.delete');


//Alumni
Route::get('manage_alumni',[AlumniController::class,'manageAlumni'])->name('manage_alumni');
Route::get('alumni_view',[AlumniController::class,'alumniView'])->name('alumni_view');


Route::get('manage_events',[AlumniController::class,'manageEvents'])->name('manage_events');
Route::get('new_event',[AlumniController::class,'newEvent'])->name('new_event');
Route::get('delete_event,{id}',[AlumniController::class,'deleteEvent'])->name('delete_event');

// SyndicateController add route
Route::get('/syndicate/index',[SyndicateController::class,'index'])->name('syndicate.index');
Route::get('/syndicate/create',[SyndicateController::class,'create'])->name('syndicate.create');
Route::post('/syndicate/store',[SyndicateController::class,'store'])->name('syndicate.store');
Route::get('/syndicate/edit/{id}',[SyndicateController::class,'edit'])->name('syndicate.edit');
Route::put('/syndicate/update{id}',[SyndicateController::class,'update'])->name('syndicate.update');
Route::get('/syndicate/delete/{id}',[SyndicateController::class,'delete'])->name('syndicate.delete');


// AdministrationController add route
Route::get('/administration/index',[AdministrationController::class,'index'])->name('administration.index');
Route::get('/administration/create',[AdministrationController::class,'create'])->name('administration.create');
Route::post('/administration/store',[AdministrationController::class,'store'])->name('administration.store');
Route::get('/administration/edit/{id}',[AdministrationController::class,'edit'])->name('administration.edit');
Route::put('/administration/update{id}',[AdministrationController::class,'update'])->name('administration.update');
Route::get('/administration/delete/{id}',[AdministrationController::class,'delete'])->name('administration.delete');
    


//DeansControlleradd route
Route::get('/dean/index',[DeanController::class,'index'])->name('dean.index');
Route::get('/dean/create',[DeanController::class,'create'])->name('dean.create');
Route::post('/dean/store',[DeanController::class,'store'])->name('dean.store');
Route::get('/dean/edit/{id}',[DeanController::class,'edit'])->name('dean.edit');
Route::put('/dean/update{id}',[DeanController::class,'update'])->name('dean.update');
Route::get('/dean/delete/{id}',[DeanController::class,'delete'])->name('dean.delete');

// add route
Route::get('/academiccouncil/index',[AcademiccouncilController::class,'index'])->name('academiccouncil.index');
Route::get('/academiccouncil/create',[AcademiccouncilController::class,'create'])->name('academiccouncil.create');
Route::post('/academiccouncil/store',[AcademiccouncilController::class,'store'])->name('academiccouncil.store');
Route::get('/academiccouncil/edit/{id}',[AcademiccouncilController::class,'edit'])->name('academiccouncil.edit');
Route::put('/academiccouncil/update{id}',[AcademiccouncilController::class,'update'])->name('academiccouncil.update');
Route::get('/academiccouncil/delete/{id}',[AcademiccouncilController::class,'delete'])->name('academiccouncil.delete');

// gallery add route 
Route::get('/gallery/index',[GalleryController::class,'index'])->name('gallery.index');
    Route::get('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
    Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
    Route::get('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
    Route::get('/gallery/update{id}',[GalleryController::class,'update'])->name('gallery.update');
    Route::get('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');

}); 


}); // End Middleare Auth Route 



//Inventory Route
Route::prefix('inventory')->group(function(){
    //Inventory
Route::get('/inventory/issueitem/view',[IssueItemController::class,'IssueItem'])->name('inventory.issueitem.view');
Route::get('/inventory/issueitem/add',[IssueItemController::class,'IssueItemAdd'])->name('inventory.issueitem.add_issueitem');
Route::get('/inventory/issueitem/store',[IssueItemController::class,'store'])->name('store.inventory.issueitem');

Route::get('/inventory/additemstock/view',[AddItemStockController::class,'ItemStock'])->name('inventory.additemstock.view');
Route::get('/inventory/additemstock/add',[AddItemStockController::class,'AddItemStock'])->name('inventory.additemstock.add_itemstock');
Route::get('/inventory/additemstock/store',[AddItemStockController::class,'store'])->name('store.inventory.additemstock');

Route::get('/inventory/itemsupplier/view',[ItemSupplierController::class,'Itemsupplier'])->name('inventory.itemsupplier.view');
Route::get('/inventory/itemsupplier/add',[ItemSupplierController::class,'AddItemsupplier'])->name('inventory.itemsupplier.add');
Route::get('/inventory/itemsupplier/store',[ItemSupplierController::class,'store'])->name('store.inventory.itemsupplier');


});








// Transport assignvehicle

Route::get('assignvehicle/view', [AssignVehicleController::class, 'ViewAssignVehicle'])->name('assignvehicle.view');

Route::get('assignvehicle/add', [AssignVehicleController::class, 'AssignVehicleAdd'])->name('assignvehicle.add');

Route::post('assignvehicle/store', [AssignVehicleController::class, 'AssignVehicleStore'])->name('store.assignvehicle');

Route::get('assignvehicle/edit/{id}', [AssignVehicleController::class, 'AssignVehicleEdit'])->name('assignvehicle.edit');

Route::put('assignvehicle/update/{id}', [AssignVehicleController::class, 'AssignVehicleUpdate'])->name('update.assignvehicle');

Route::get('assignvehicle/delete/{id}', [AssignVehicleController::class, 'AssignVehicleDelete'])->name('assignvehicle.delete');





// Transport routes

Route::get('routes/view', [TransportrouteController::class, 'ViewRoutes'])->name('routes.view');

Route::get('routes/add', [TransportrouteController::class, 'RoutesAdd'])->name('routes.add');

Route::post('routes/store', [TransportrouteController::class, 'RoutesStore'])->name('store.routes');

Route::get('routes/edit/{id}', [TransportrouteController::class, 'RoutesEdit'])->name('routes.edit');

Route::put('routes/update/{id}', [TransportrouteController::class, 'RoutesUpdate'])->name('update.routes');

Route::get('routes/delete/{id}', [TransportrouteController::class, 'RoutesDelete'])->name('routes.delete');


// Transport vehicles

Route::get('vehicles/view', [VehiclesController::class, 'ViewVehicles'])->name('vehicles.view');

Route::get('vehicles/add', [VehiclesController::class, 'VehiclesAdd'])->name('vehicles.add');

Route::post('vehicles/store', [VehiclesController::class, 'VehiclesStore'])->name('store.vehicles');

Route::get('vehicles/edit/{id}', [VehiclesController::class, 'VehiclesEdit'])->name('vehicles.edit');

Route::put('vehicles/update/{id}', [VehiclesController::class, 'VehiclesUpdate'])->name('update.vehicles');

Route::get('vehicles/delete/{id}', [VehiclesController::class, 'VehiclesDelete'])->name('vehicles.delete');

 
//System setting
Route::get('sms_setting', [smssetingController::class, 'smsSetting'])->name('sms_setting');
Route::get('general_setting', [GeneralSettingController::class, 'generalSetting'])->name('general_setting');
Route::post('new_general_setting', [GeneralSettingController::class, 'newGeneralSetting'])->name('new_general_setting');
Route::get('session_setting', [SessionSetingController::class, 'sessionSetting'])->name('session_setting');
Route::post('new_sessionsetting', [SessionSetingController::class, 'newSessionsetting'])->name('new_sessionsetting');
Route::get('notification_setting', [NotificationSettingController::class, 'notificationSetting'])->name('notification_setting');
Route::get('email_setting', [EmailSettingController::class, 'emailSetting'])->name('email_setting');
Route::post('new_email', [EmailSettingController::class, 'newEmail'])->name('new_email');
Route::get('payment_method', [PaymentMethodController::class, 'paymentMethod'])->name('payment_method');
Route::get('print_header', [PrintHeaderController::class, 'printHeader'])->name('print_header');
Route::post('new_printheader', [PrintHeaderController::class, 'newPrintheader'])->name('new_printheader');
Route::get('frontcms_setting', [FrontcmcSettingController::class, 'frontcmsSetting'])->name('frontcms_setting');
Route::get('roles_permission', [RolespermissionController::class, 'rolespermission'])->name('roles_permission');
Route::get('backup_setting', [BackupSettingController::class, 'backupSetting'])->name('backup_setting');
Route::get('language_setting', [LanguageSettingController::class, 'languageSetting'])->name('language_setting');
Route::get('user_setting', [UserSettingController::class, 'userSetting'])->name('user_setting');
Route::get('modules_setting', [ModuleSettingController::class, 'modulesSetting'])->name('modules_setting');
Route::get('custom_fields', [CustomSettingController::class, 'customFields'])->name('custom_fields');
Route::get('captcha_setting', [CaptchaSettingController::class, 'captchaSetting'])->name('captcha_setting');
Route::get('system_fields', [SystemFieldsController::class, 'systemFields'])->name('system_fields');
Route::get('student_profile_setting', [StudentProfileSettingController::class, 'studentProfile'])->name('student_profile_setting');
Route::get('file_types', [FileTypesController::class, 'fileTypes'])->name('file_types');
Route::get('system_update', [SystemUpdateController::class, 'systemUpdate'])->name('system_update');



//Forms
Route::get('admitcard_forms', [AdmitCardController::class,'admitcardForms'])->name('admitcard_forms');
Route::get('course_addform', [FormBackendController::class,'courseAddform'])->name('course_addform');
Route::get('department_changeList', [FormBackendController::class,'departmentChange'])->name('department_changeList');
Route::get('permission_list', [FormBackendController::class,'permissionList'])->name('permission_list');
Route::get('register_slip', [FormBackendController::class,'registerSlip'])->name('register_slip');
Route::get('improvement_examlist', [FormBackendController::class,'improvementExamlist'])->name('improvement_examlist');



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
