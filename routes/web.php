<?php

use App\Http\Controllers\AcademicsessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\Result2ndTermController;
use App\Http\Controllers\StudentParentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FlutterwaveController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudycenterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClassnameController;
use App\Http\Controllers\Club1Controller;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\MainsliderController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\PsycomotorController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SchoolfeeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherassignController;
use App\Http\Controllers\TestimonyController;
use App\Models\Academicsession;
use App\Models\Team;
use App\Models\Mainslider;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Payment;
use App\Models\Studycenter;
use App\Models\Classname;
use App\Models\Club1;


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



Route::get('/', function () {

    $view_teams = Team::where('status', 'approved')->get();
    $view_events = Event::latest()->where('status', 'approved')->get();
    $view_blogs = Blog::latest()->where('status', 'approved')->get();
    $view_sliders = Mainslider::orderby('created_at', 'ASC')->get();

    return view('welcome', compact('view_sliders', 'view_teams', 'view_events', 'view_blogs'));
});

Route::get('/ourevents', function () {
    $viewour_events = Event::latest()->where('status', 'approved')->get();
    return view('pages.ourevents', compact('viewour_events'));
});
Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/team', function () {
    $view_teams = Team::where('status', 'approved')->get();
    return view('pages.team',  compact('view_teams'));
});

Route::get('/clubs', function () {

    $view_clubs = Club1::all();

    return view('pages.clubs', compact('view_clubs'));
});
Route::get('/clubform', function () {
    return view('pages.clubform');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/nurseryform', function () {
    return view('pages.nurseryform');
});
Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/blog', function () {
    $view_blogs = Blog::latest()->where('status', 'approved')->get();
    return view('pages.blog', compact('view_blogs'));
});


Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/gallery', function () {
    $view_galleries = Gallery::latest()->orderby('title')->paginate(20);
    return view('pages.gallery', compact('view_galleries'));
});


Route::get('/futuremanagement', function () {
    $view_galleries = Gallery::where('title', 'Future Management')->latest()->orderby('title')->get();
    return view('pages.futuremanagement', compact('view_galleries'));
});

Route::get('/sports', function () {
    $view_galleries = Gallery::where('title', 'Sport Activities')->latest()->orderby('title')->get();
    return view('pages.sports', compact('view_galleries'));
});


Route::get('/ceremonies', function () {
    $view_galleries = Gallery::where('title', 'Events')->latest()->orderby('title')->get();
    return view('pages.ceremonies', compact('view_galleries'));
});

Route::get('/musics', function () {
    $view_galleries = Gallery::where('title', 'Music Classes')->latest()->orderby('title')->get();
    return view('pages.musics', compact('view_galleries'));
});

Route::get('/reading', function () {
    $view_galleries = Gallery::where('title', 'Reading/Spelling Classes')->latest()->orderby('title')->get();
    return view('pages.reading', compact('view_galleries'));
});

Route::get('/arts', function () {
    $view_galleries = Gallery::where('title', 'Art-Classes')->latest()->orderby('title')->get();
    return view('pages.arts', compact('view_galleries'));
});

Route::get('/creative', function () {
    $view_galleries = Gallery::where('title', 'Creative Classes')->latest()->orderby('title')->get();
    return view('pages.creative', compact('view_galleries'));
});

Route::get('/skillsdevelopment', function () {
    $view_galleries = Gallery::where('title', 'Skill Development')->latest()->orderby('title')->get();
    return view('pages.skillsdevelopment', compact('view_galleries'));
});

Route::get('/computerclasses', function () {
    $view_galleries = Gallery::where('title', 'Computer Classes')->latest()->orderby('title')->get();
    return view('pages.computerclasses', compact('view_galleries'));
});

Route::get('/homemanagement', function () {
    $view_galleries = Gallery::where('title', 'Home Management')->latest()->orderby('title')->get();
    return view('pages.homemanagement', compact('view_galleries'));
});


Route::get('/facilities', function () {
    $view_facilities = Gallery::latest()->paginate(10);

    return view('pages.facilities', compact('view_facilities'));
});

Route::get('/teacherform', function () {
    $display_class = Classname::all();
    $display_centers = Studycenter::all();


    return view('pages.teacherform', compact('display_class', 'display_centers'));
});

Route::get('/admission', function () {

    return view('pages.admission');
});






Route::get('/printadmissionform/{ref_no}', [UserController::class, 'printadmissionform'])->name('printadmissionform');
Route::put('/addmedicalsdadmmin/{ref_no1}', [UserController::class, 'addmedicalsdadmmin'])->name('addmedicalsdadmmin');
Route::put('/updateaddthirdondadmmin/{ref_no1}', [UserController::class, 'updateaddthirdondadmmin'])->name('updateaddthirdondadmmin');
Route::get('/admission/medicalreports/{ref_no1}', [UserController::class, 'medicalreports'])->name('medicalreports');

Route::get('/admission/secondregistration/{ref_no1}', [UserController::class, 'secondregistration'])->name('secondregistration');
Route::get('/admission/secondregistrationadmin/{ref_no1}', [UserController::class, 'secondregistrationadmin'])->name('secondregistrationadmin');
Route::get('/admission/thirdregistration/{ref_no1}', [UserController::class, 'thirdregistration'])->name('thirdregistration');
Route::put('/addsecondadmmin/{ref_no1}', [UserController::class, 'addsecondadmmin'])->name('addsecondadmmin');


Route::post('/createadmission', [UserController::class, 'createadmission'])->name('createadmission');
Route::get('/admissionform/{slug}', [StudycenterController::class, 'admissionform'])->name('admissionform');
Route::post('/createteacher', [UserController::class, 'createteacher'])->name('createteacher');
Route::get('/viewsingleevent/{ref_no}', [EventController::class, 'viewsingleevent'])->name('viewsingleevent');
Route::get('/viewsinglemember/{ref_no}', [TeamController::class, 'viewsinglemember'])->name('viewsinglemember');

Route::get('/singleblog/{slug}', [BlogController::class, 'singleblog'])->name('singleblog');



Route::post('/createbooking', [BookingController::class, 'createbooking'])->name('createbooking');
Route::post('/createcontact', [ContactController::class, 'createcontact'])->name('createcontact');
Route::get('/search', [BlogController::class, 'search'])->name('search');
Route::get('/results', [BlogController::class, 'results'])->name('results');



Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');







Route::get('/printadmissionform/{ref_no1}', [UserController::class, 'printadmissionform'])->name('printadmissionform');
Route::put('/addmedicalsdadmmin/{ref_no1}', [UserController::class, 'addmedicalsdadmmin'])->name('addmedicalsdadmmin');
Route::put('/updateaddthirdondadmmin/{ref_no1}', [UserController::class, 'updateaddthirdondadmmin'])->name('updateaddthirdondadmmin');
// // // Route::post('//{ref_no1}', [UserController::class, ''])->name('');
Route::get('/admission/medicalreports/{ref_no1}', [UserController::class, 'medicalreports'])->name('medicalreports');
Route::get('/admission/medicalreportsparent/{ref_no1}', [UserController::class, 'medicalreportsparent'])->name('medicalreportsparent');
Route::get('/admission/thirdregistration/{ref_no1}', [UserController::class, 'thirdregistration'])->name('thirdregistration');

Route::post('/createadmission', [UserController::class, 'createadmission'])->name('createadmission');
Route::get('/admission/admissionform/{slug}', [StudycenterController::class, 'admissionform'])->name('admissionform');
Route::post('/createteacher', [UserController::class, 'createteacher'])->name('createteacher');
Route::get('/viewsingleevent/{ref_no}', [EventController::class, 'viewsingleevent'])->name('viewsingleevent');
Route::get('/viewsinglemember/{ref_no}', [TeamController::class, 'viewsinglemember'])->name('viewsinglemember');

Route::get('/singleblog/{slug}', [BlogController::class, 'singleblog'])->name('singleblog');

Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin'])->group(function() {

        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::view('/register','dashboard.admin.register')->name('register');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

    });
    // dns1.web-hosting.com
    Route::middleware(['auth:admin'])->group(function() {
        
        Route::get('/editresultmidtermadmin/{id}', [ResultController::class, 'editresultmidtermadmin'])->name('editresultmidtermadmin');
        Route::post('/createadminbyparents', [UserController::class, 'createadminbyparents'])->name('createadminbyparents');
        Route::put('/updatemidtermresultad/{id}', [ResultController::class, 'updatemidtermresultad'])->name('updatemidtermresultad');
        Route::post('/searchforresultesmidterm', [ResultController::class, 'searchforresultesmidterm'])->name('searchforresultesmidterm');
        Route::put('/addcommentsbyadmin/{id}', [ResultController::class, 'addcommentsbyadmin'])->name('addcommentsbyadmin');
        Route::get('/addcommentadmin/{id}', [ResultController::class, 'addcommentadmin'])->name('addcommentadmin');
        
        Route::post('searchforstudentresultmidterm', [ResultController::class, 'searchforstudentresultmidterm'])->name('searchforstudentresultmidterm');
        Route::get('abujaclubstudents', [ClubController::class, 'abujaclubstudents'])->name('abujaclubstudents');
        Route::get('uyoclubstudents', [ClubController::class, 'uyoclubstudents'])->name('uyoclubstudents');
        Route::get('deletestudentclub/{id}', [ClubController::class, 'deletestudentclub'])->name('deletestudentclub');
        Route::put('updatesclubform/{id}', [ClubController::class, 'updatesclubform'])->name('updatesclubform');
        Route::get('editstudentclub/{id}', [ClubController::class, 'editstudentclub'])->name('editstudentclub');
        Route::get('viewsclubstudent/{id}', [ClubController::class, 'viewsclubstudent'])->name('viewsclubstudent');
        Route::get('studentclubs/{clubname}', [ClubController::class, 'studentclubs'])->name('studentclubs');
        Route::get('clubedelete/{ref_no}', [Club1Controller::class, 'clubedelete'])->name('clubedelete');
        Route::get('clubesuspend/{ref_no}', [Club1Controller::class, 'clubesuspend'])->name('clubesuspend');
        Route::get('clubeapproved/{ref_no}', [Club1Controller::class, 'clubeapproved'])->name('clubeapproved');
        Route::put('updateclub/{ref_no}', [Club1Controller::class, 'updateclub'])->name('updateclub');
        Route::get('clubedit/{ref_no}', [Club1Controller::class, 'clubedit'])->name('clubedit');
        Route::get('viewclubs', [Club1Controller::class, 'viewclubs'])->name('viewclubs');
        Route::post('createtclub1', [Club1Controller::class, 'createtclub1'])->name('createtclub1');
        Route::get('addclubs1', [Club1Controller::class, 'addclubs1'])->name('addclubs1');
        Route::post('createtclub', [ClubController::class, 'createtclub'])->name('createtclub');
        Route::get('addclubs', [ClubController::class, 'addclubs'])->name('addclubs');
        Route::get('printpdfs', [PaymentController::class, 'printpdfs'])->name('printpdfs');
        Route::get('viewallpayments', [PaymentController::class, 'viewallpayments'])->name('viewallpayments');
        Route::post('createpayment', [PaymentController::class, 'createpayment'])->name('createpayment');
        Route::get('addpayment', [PaymentController::class, 'addpayment'])->name('addpayment');
        Route::get('addparent', [UserController::class, 'addparent'])->name('addparent');
        Route::get('viewcontact', [ContactController::class, 'viewcontact'])->name('viewcontact');
        Route::get('bookingdelete/{id}', [BookingController::class, 'bookingdelete'])->name('bookingdelete');
        Route::get('viewbookings', [BookingController::class, 'viewbookings'])->name('viewbookings');
        Route::put('changgeteacherclass/{id}', [UserController::class, 'changgeteacherclass'])->name('changgeteacherclass');
        Route::get('changeclasses/{ref_no}', [UserController::class, 'changeclasses'])->name('changeclasses');
        Route::get('queriedteachersreply', [QueryController::class, 'queriedteachersreply'])->name('queriedteachersreply');
        Route::get('academedelete/{id}', [AcademicsessionController::class, 'academedelete'])->name('academedelete');
        Route::put('updatesession/{id}', [AcademicsessionController::class, 'updatesession'])->name('updatesession');
        Route::get('academedit/{id}', [AcademicsessionController::class, 'academedit'])->name('academedit');
        Route::get('viewsession', [AcademicsessionController::class, 'viewsession'])->name('viewsession');
        Route::post('createsession', [AcademicsessionController::class, 'createsession'])->name('createsession');
        Route::get('addsession', [AcademicsessionController::class, 'addsession'])->name('addsession');
        Route::get('studentsubjects/{ref_no}', [UserController::class, 'studentsubjects'])->name('studentsubjects');
        Route::get('abujateachers', [UserController::class, 'abujateachers'])->name('abujateachers');
        Route::get('uyoteachers', [UserController::class, 'uyoteachers'])->name('uyoteachers');
        Route::get('viewteachersubjects/{user_id}', [TeacherassignController::class, 'viewteachersubjects'])->name('viewteachersubjects');
        Route::get('teachertosubjects', [TeacherassignController::class, 'teachertosubjects'])->name('teachertosubjects');
        Route::post('assignsubjectstoteacher/{id}', [TeacherassignController::class, 'assignsubjectstoteacher'])->name('assignsubjectstoteacher');
        Route::get('assignsubject/{id}', [SubjectController::class, 'assignsubject'])->name('assignsubject');
        Route::get('deletesubject/{id}', [SubjectController::class, 'deletesubject'])->name('deletesubject');
        Route::put('updatesubject/{id}', [SubjectController::class, 'updatesubject'])->name('updatesubject');
        Route::get('editsubject/{id}', [SubjectController::class, 'editsubject'])->name('editsubject');
        Route::get('viewteacherquery/{id}', [QueryController::class, 'viewteacherquery'])->name('viewteacherquery');
        Route::get('printquery/{id}', [QueryController::class, 'printquery'])->name('printquery');
        Route::put('addquerytoteacher/{ref_no}', [QueryController::class, 'addquerytoteacher'])->name('addquerytoteacher');
        Route::get('allteachers', [UserController::class, 'allteachers'])->name('allteachers');
        Route::get('queriedteachers', [QueryController::class, 'queriedteachers'])->name('queriedteachers');
        Route::get('sackedteachers', [UserController::class, 'sackedteachers'])->name('sackedteachers');
        Route::get('suspendedteachers', [UserController::class, 'suspendedteachers'])->name('suspendedteachers');
        Route::get('nurserysubjects', [SubjectController::class, 'nurserysubjects'])->name('nurserysubjects');
        Route::get('preschoolsubjects', [SubjectController::class, 'preschoolsubjects'])->name('preschoolsubjects');
        Route::get('approveteachers', [UserController::class, 'approveteachers'])->name('approveteachers');
        Route::get('teachersprint', [UserController::class, 'teachersprint'])->name('teachersprint');
        Route::get('teacherquery/{ref_no}', [UserController::class, 'teacherquery'])->name('teacherquery');
        Route::get('teachersacked/{ref_no}', [UserController::class, 'teachersacked'])->name('teachersacked');
        Route::get('teachersuspend/{ref_no}', [UserController::class, 'teachersuspend'])->name('teachersuspend');
        Route::get('teacherapprove/{ref_no}', [UserController::class, 'teacherapprove'])->name('teacherapprove');
        Route::put('teacherupdated/{ref_no}', [UserController::class, 'teacherupdated'])->name('teacherupdated');
        Route::get('editteacher/{ref_no}', [UserController::class, 'editteacher'])->name('editteacher');
        Route::get('viewsingleteacher/{ref_no}', [UserController::class, 'viewsingleteacher'])->name('viewsingleteacher');
        Route::get('viewteachers', [UserController::class, 'viewteachers'])->name('viewteachers');
        Route::put('assignteachertoclass/{ref_no}', [UserController::class, 'assignteachertoclass'])->name('assignteachertoclass');
        Route::get('/assignedteacher/{centername}', [UserController::class, 'assignedteacher'])->name('assignedteacher');
        Route::post('printclasses', [UserController::class, 'printclasses'])->name('printclasses');
        Route::get('viewsubject', [SubjectController::class, 'viewsubject'])->name('viewsubject');
        Route::post('createsubject', [SubjectController::class, 'createsubject'])->name('createsubject');
        Route::get('addsubject', [SubjectController::class, 'addsubject'])->name('addsubject');
        Route::get('/classrooms/{name}', [ClassnameController::class, 'classrooms'])->name('classrooms');
        Route::get('/classesdelete/{id}', [ClassnameController::class, 'classesdelete'])->name('classesdelete');
        Route::put('/updateclass/{id}', [ClassnameController::class, 'updateclass'])->name('updateclass');
        Route::get('/editclasses/{id}', [ClassnameController::class, 'editclasses'])->name('editclasses');
        Route::post('/createclasses', [ClassnameController::class, 'createclasses'])->name('createclasses');
        Route::get('/viewclassestables', [ClassnameController::class, 'viewclassestables'])->name('viewclassestables');
        Route::get('/addclass', [ClassnameController::class, 'addclass'])->name('addclass');
    
        Route::get('/studycenter1', [StudycenterController::class, 'studycenter1'])->name('studycenter1');
        Route::post('/createstudycenter', [StudycenterController::class, 'createstudycenter'])->name('createstudycenter');
        Route::get('/studycentertables', [StudycenterController::class, 'studycentertables'])->name('studycentertables');
        Route::get('/studycentapproved/{id}', [StudycenterController::class, 'studycentapproved'])->name('studycentapproved');
        Route::get('/studycentsuspend/{id}', [StudycenterController::class, 'studycentsuspend'])->name('studycentsuspend');
        Route::get('/studycentdelete/{id}', [StudycenterController::class, 'studycentdelete'])->name('studycentdelete');
        Route::post('/createam', [TeamController::class, 'createam'])->name('createam');
        Route::get('/addteam', [TeamController::class, 'addteam'])->name('addteam');
        Route::get('/viewteam', [TeamController::class, 'viewteam'])->name('viewteam');
        Route::get('/viewsingteam/{ref_no}', [TeamController::class, 'viewsingteam'])->name('viewsingteam');
        Route::get('/editteam/{id}', [TeamController::class, 'editteam'])->name('editteam');
        Route::put('/updateteam/{id}', [TeamController::class, 'updateteam'])->name('updateteam');
        Route::get('/teamsuspend/{ref_no}', [TeamController::class, 'teamsuspend'])->name('teamsuspend');
        Route::get('/teamapproved/{ref_no}', [TeamController::class, 'teamapproved'])->name('teamapproved');
        Route::get('/teamsacked/{ref_no}', [TeamController::class, 'teamsacked'])->name('teamsacked');
        Route::get('/staffdelete/{ref_no}', [TeamController::class, 'staffdelete'])->name('staffdelete');
        
        Route::put('/createrol/{id}', [UserController::class, 'createrol'])->name('createrol');
        Route::get('/addrole/{id}', [UserController::class, 'addrole'])->name('addrole');
        Route::get('/viewroles', [UserController::class, 'viewroles'])->name('viewroles');
        Route::get('/addevent', [EventController::class, 'addevent'])->name('addevent');
        Route::get('/createteevent', [EventController::class, 'createteevent'])->name('createteevent');
        Route::get('/viewevents', [EventController::class, 'viewevents'])->name('viewevents');
        Route::get('/eventview/{ref_no}', [EventController::class, 'eventview'])->name('eventview');
        Route::get('/eventedit/{ref_no}', [EventController::class, 'eventedit'])->name('eventedit');
        Route::put('/updateevent/{ref_no}', [EventController::class, 'updateevent'])->name('updateevent');
        Route::get('/eventeapproved/{ref_no}', [EventController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{ref_no}', [EventController::class, 'eventesuspend'])->name('eventesuspend');
        Route::get('/eventedelete/{ref_no}', [EventController::class, 'eventedelete'])->name('eventedelete');
        Route::get('/eventedelete/{ref_no}', [EventController::class, 'eventedelete'])->name('eventedelete');
        Route::get('/addblog', [BlogController::class, 'addblog'])->name('addblog');
        Route::get('/viewblog', [BlogController::class, 'viewblog'])->name('viewblog');
        Route::post('/createblog', [BlogController::class, 'createblog'])->name('createblog');
        Route::get('/blogview/{ref_no}', [BlogController::class, 'blogview'])->name('blogview');
        Route::get('/blogedit/{ref_no}', [BlogController::class, 'blogedit'])->name('blogedit');
        Route::put('/updateblog/{ref_no}', [BlogController::class, 'updateblog'])->name('updateblog');
        Route::get('/blogeapproved/{ref_no}', [BlogController::class, 'blogeapproved'])->name('blogeapproved');
        Route::get('/blogesuspend/{ref_no}', [BlogController::class, 'blogesuspend'])->name('blogesuspend');
        Route::get('/blogedelete/{ref_no}', [BlogController::class, 'blogedelete'])->name('blogedelete');
        Route::get('/addgallery', [GalleryController::class, 'addgallery'])->name('addgallery');
        Route::post('/createtgallery', [GalleryController::class, 'createtgallery'])->name('createtgallery');
        Route::get('/viewgallery', [GalleryController::class, 'viewgallery'])->name('viewgallery');
        Route::get('/galleryedit/{id}', [GalleryController::class, 'galleryedit'])->name('galleryedit');
        Route::put('/updategallery/{id}', [GalleryController::class, 'updategallery'])->name('updategallery');
        Route::get('/gallerydelete/{id}', [GalleryController::class, 'gallerydelete'])->name('gallerydelete');
        
        Route::get('/addfacility', [FacilityController::class, 'addfacility'])->name('addfacility');
        Route::post('/createfacility', [FacilityController::class, 'createfacility'])->name('createfacility');
        Route::get('/viewfacility', [FacilityController::class, 'viewfacility'])->name('viewfacility');
        Route::get('/facilityedit/{id}', [FacilityController::class, 'facilityedit'])->name('facilityedit');
        Route::put('/updatefacility/{id}', [FacilityController::class, 'updatefacility'])->name('updatefacility');
        Route::get('/facilitydelete/{id}', [FacilityController::class, 'facilitydelete'])->name('facilitydelete');
        
        Route::get('/viewmainslider', [MainsliderController::class, 'viewmainslider'])->name('viewmainslider');
        Route::get('/addmainslider', [MainsliderController::class, 'addmainslider'])->name('addmainslider');
        Route::post('/createteslider', [MainsliderController::class, 'createteslider'])->name('createteslider');
        Route::get('/slideredit/{id}', [MainsliderController::class, 'slideredit'])->name('slideredit');
        Route::put('/updateslider/{id}', [MainsliderController::class, 'updateslider'])->name('updateslider');
        Route::get('/slideredelete/{id}', [MainsliderController::class, 'slideredelete'])->name('slideredelete');
        
        Route::get('/adminprogress', [UserController::class, 'adminprogress'])->name('adminprogress');
        Route::get('/viewstudents/{ref_no}', [UserController::class, 'viewstudents'])->name('viewstudents');
        Route::get('/editstudent/{id}', [UserController::class, 'editstudent'])->name('editstudent');
        Route::put('/updateadmission/{ref_no1}', [UserController::class, 'updateadmission'])->name('updateadmission');
        Route::get('/rejectstudent/{ref_no}', [UserController::class, 'rejectstudent'])->name('rejectstudent');
        Route::get('/rejectstudent1/{ref_no1}', [UserController::class, 'rejectstudent1'])->name('rejectstudent1');
       
        Route::get('rejectedstudent', [UserController::class, 'rejectedstudent'])->name('rejectedstudent');
        Route::get('studentsapprove/{ref_no}', [UserController::class, 'studentsapprove'])->name('studentsapprove');
        Route::get('suspendstudent/{ref_no}', [UserController::class, 'suspendstudent'])->name('suspendstudent');
        Route::get('suspendstudents', [UserController::class, 'suspendstudents'])->name('suspendstudents');
        Route::get('studentsaddmit/{ref_no}', [UserController::class, 'studentsaddmit'])->name('studentsaddmit');
        Route::get('admittedstudents', [UserController::class, 'admittedstudents'])->name('admittedstudents');
        Route::get('allstudents', [UserController::class, 'allstudents'])->name('allstudents');
        Route::get('deletestudent/{ref_no}', [UserController::class, 'deletestudent'])->name('deletestudent');
        Route::get('/addregno/{id}', [UserController::class, 'addregno'])->name('addregno');
        Route::put('/addingregno/{id}', [UserController::class, 'addingregno'])->name('addingregno');
        Route::get('/studentpdf/{ref_no}', [UserController::class, 'studentpdf'])->name('studentpdf');
        Route::get('/medicalspdf/{ref_no}', [UserController::class, 'medicalspdf'])->name('medicalspdf');
        Route::get('/allstudentpdf', [UserController::class, 'allstudentpdf'])->name('allstudentpdf');
        Route::get('/allcrechepdf', [UserController::class, 'allcrechepdf'])->name('allcrechepdf');
        Route::get('/allnurserypdf', [UserController::class, 'allnurserypdf'])->name('allnurserypdf');
        Route::get('/allprimarypdf', [UserController::class, 'allprimarypdf'])->name('allprimarypdf');
        Route::get('/allhighschpdf', [UserController::class, 'allhighschpdf'])->name('allhighschpdf');
        Route::get('/viewalluyo/{classname}', [ClassnameController::class, 'viewalluyo'])->name('viewalluyo');
        Route::get('/alluyocrechepdf', [UserController::class, 'alluyocrechepdf'])->name('alluyocrechepdf');
        Route::get('/alluyopreperatorypdf', [UserController::class, 'alluyopreperatorypdf'])->name('alluyopreperatorypdf');
        Route::get('/allpreschoolpdf', [UserController::class, 'allpreschoolpdf'])->name('allpreschoolpdf');
        Route::get('/alluyonurserypdf', [UserController::class, 'alluyonurserypdf'])->name('alluyonurserypdf');
        Route::get('/alluyoprimarypdf', [UserController::class, 'alluyoprimarypdf'])->name('alluyoprimarypdf');
        Route::get('/alluyohighschpdf', [UserController::class, 'alluyohighschpdf'])->name('alluyohighschpdf');
        Route::get('/alluyocentpdf', [UserController::class, 'alluyocentpdf'])->name('alluyocentpdf');
        Route::get('/viewpreparatory', [UserController::class, 'viewpreparatory'])->name('viewpreparatory');
        Route::get('/viewpreschool', [UserController::class, 'viewpreschool'])->name('viewpreschool');
        Route::get('/viewnursery', [UserController::class, 'viewnursery'])->name('viewnursery');
        Route::get('/viewprimary', [UserController::class, 'viewprimary'])->name('viewprimary');
        Route::get('/viewhighschool', [UserController::class, 'viewhighschool'])->name('viewhighschool');
        Route::get('/viewallabuja1/{classname}', [ClassnameController::class, 'viewallabuja1'])->name('viewallabuja1');
        Route::get('/allabujacrechepdf', [UserController::class, 'allabujacrechepdf'])->name('allabujacrechepdf');
        Route::get('/allabujapdf', [UserController::class, 'allabujapdf'])->name('allabujapdf');
        Route::get('/allabujapreperatorypdf', [UserController::class, 'allabujapreperatorypdf'])->name('allabujapreperatorypdf');
        Route::get('/allabujapreschoolpdf', [UserController::class, 'allabujapreschoolpdf'])->name('allabujapreschoolpdf');
        Route::get('/allabujanurserypdf', [UserController::class, 'allabujanurserypdf'])->name('allabujanurserypdf');
        Route::get('/allabujaprimarypdf', [UserController::class, 'allabujaprimarypdf'])->name('allabujaprimarypdf');
        Route::get('/allabujahighschpdf', [UserController::class, 'allabujahighschpdf'])->name('allabujahighschpdf');
        Route::get('/viewabujapreparatory', [UserController::class, 'viewabujapreparatory'])->name('viewabujapreparatory');
        Route::get('/abujapreschool', [UserController::class, 'abujapreschool'])->name('abujapreschool');
        Route::get('/viewabujanursery', [UserController::class, 'viewabujanursery'])->name('viewabujanursery');
        Route::get('/viewabujaprimary', [UserController::class, 'viewabujaprimary'])->name('viewabujaprimary');
        Route::get('/viewabjhighschool', [UserController::class, 'viewabjhighschool'])->name('viewabjhighschool');
        Route::get('/addpresubject', [SubjectController::class, 'addpresubject'])->name('addpresubject');
        Route::get('/addhighscsubject', [SubjectController::class, 'addhighscsubject'])->name('addhighscsubject');
        Route::post('/createparent', [UserController::class, 'createparent'])->name('createparent');
        Route::post('/createadmissionadmin', [UserController::class, 'createadmissionadmin'])->name('createadmissionadmin');
        Route::get('/viewparents/{centername}', [StudycenterController::class, 'viewparents'])->name('viewparents');
        
        Route::get('/studentsaddmit1/{ref_no1}', [UserController::class, 'studentsaddmit1'])->name('studentsaddmit1');
        Route::get('/addchild/{ref_no}', [UserController::class, 'addchild'])->name('addchild');
        Route::get('/viewchildren/{ref_no}', [UserController::class, 'viewchildren'])->name('viewchildren');
        Route::put('/updateparent/{ref_no}', [StudentParentController::class, 'updateparent'])->name('updateparent');
        Route::get('/addchild/{id}', [StudentParentController::class, 'addchild'])->name('addchild');
        Route::post('/add_childto_parents', [UserController::class, 'add_childto_parents'])->name('add_childto_parents');
        Route::get('/parentochild/{id}', [StudentParentController::class, 'parentochild'])->name('parentochild');
         
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        Route::get('/allsubjects', [SubjectController::class, 'allsubjects'])->name('allsubjects');
        Route::get('/setsubjectquestions', [SubjectController::class, 'setsubjectquestions'])->name('setsubjectquestions');
        Route::get('/addquestions/{id}', [SubjectController::class, 'addquestions'])->name('addquestions');
        Route::post('/addquestions', [QuestionController::class, 'addquestions'])->name('addquestions');
        Route::post('/addbyadminquestion', [QuestionController::class, 'addbyadminquestion'])->name('addbyadminquestion');
        Route::get('/questionbyadmin', [QuestionController::class, 'questionbyadmin'])->name('questionbyadmin');
        Route::get('/viewsinglequestionz/{id}', [QuestionController::class, 'viewsinglequestionz'])->name('viewsinglequestionz');
        Route::get('/editquestionzadmin/{id}', [QuestionController::class, 'editquestionzadmin'])->name('editquestionzadmin');
        Route::get('/questionzapprove/{id}', [QuestionController::class, 'questionzapprove'])->name('questionzapprove');
        Route::get('/questionzsunapprove/{id}', [QuestionController::class, 'questionzsunapprove'])->name('questionzsunapprove');
        Route::put('/updateadminquestion/{id}', [QuestionController::class, 'updateadminquestion'])->name('updateadminquestion');
        Route::get('/uyoquestions', [QuestionController::class, 'uyoquestions'])->name('uyoquestions');
        Route::get('/abujaquestions', [QuestionController::class, 'abujaquestions'])->name('abujaquestions');
        Route::get('/teachersquestion/{user_id}', [QuestionController::class, 'teachersquestion'])->name('teachersquestion');
        
        
        Route::get('/addnidnetcoursesl1stsem', [RegistercourseController::class, 'addnidnetcoursesl1stsem'])->name('addnidnetcoursesl1stsem');
        Route::get('/viewnetworkcourses', [RegistercourseController::class, 'viewnetworkcourses'])->name('viewnetworkcourses');
        Route::get('/viewallpaymentfirst', [StudentController::class, 'viewallpaymentfirst'])->name('viewallpaymentfirst');
        Route::get('/approvedresultsad/{id}', [ResultController::class, 'approvedresultsad'])->name('approvedresultsad');
        Route::get('/editresultadmin/{id}', [ResultController::class, 'editresultadmin'])->name('editresultadmin');
        Route::put('/updateresultad/{id}', [ResultController::class, 'updateresultad'])->name('updateresultad');
        Route::get('/deletresult/{id}', [ResultController::class, 'deletresult'])->name('deletresult');
        
        
        Route::post('/createtestimony', [TestimonyController::class, 'createtestimony'])->name('createtestimony');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        Route::get('/viewtestimony', [TestimonyController::class, 'viewtestimony'])->name('viewtestimony');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/addevent', [EventController::class, 'addevent'])->name('addevent');
        Route::post('/createteevent', [EventController::class, 'createteevent'])->name('createteevent');
        Route::get('/viewevents', [EventController::class, 'viewevents'])->name('viewevents');
        Route::get('/eventeapproved/{slug}', [EventController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{slug}', [EventController::class, 'eventesuspend'])->name('eventesuspend');
        Route::get('/addpsychomotoradmin/{user_id}', [ResultController::class, 'addpsychomotoradmin'])->name('addpsychomotoradmin');
        Route::post('/searchforstudentmidterm', [ResultController::class, 'searchforstudentmidterm'])->name('searchforstudentmidterm');
        Route::post('/searchforstudent', [ResultController::class, 'searchforstudent'])->name('searchforstudent');
        Route::post('/searchforstudentresult', [ResultController::class, 'searchforstudentresult'])->name('searchforstudentresult');
        
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('/home', [AdminController::class, 'home'])->name('home');
        Route::get('/viewstudents/{ref_no1}', [UserController::class, 'viewstudents'])->name('viewstudents');
        Route::get('approvedstudents', [UserController::class, 'approvedstudents'])->name('approvedstudents');
        Route::get('viewclasspayment/{classname}', [PaymentController::class, 'viewclasspayment'])->name('viewclasspayment');
        
        Route::get('/contactdelete/{id}', [ContactController::class, 'contactdelete'])->name('contactdelete');
        Route::get('/classresultsmidterm/{classname}', [ClassnameController::class, 'classresultsmidterm'])->name('classresultsmidterm');
        Route::get('/classresultsabuja/{classname}', [ClassnameController::class, 'classresultsabuja'])->name('classresultsabuja');
        Route::get('/classresults/{classname}', [ClassnameController::class, 'classresults'])->name('classresults');
        Route::get('/viewuyopayment', [TransactionController::class, 'viewuyopayment'])->name('viewuyopayment');
        Route::get('/viewsfees/{ref_no}', [TransactionController::class, 'viewsfees'])->name('viewsfees');
        Route::get('/print1stinglepaymentspdf/{ref_no}', [TransactionController::class, 'print1stinglepaymentspdf'])->name('print1stinglepaymentspdf');
        Route::get('/print1stinglepaymentspdfgf', [TransactionController::class, 'print1stinglepaymentspdfgf'])->name('print1stinglepaymentspdfgf');
        Route::get('/abujapayment', [TransactionController::class, 'abujapayment'])->name('abujapayment');
        Route::get('/print1stinglepaymentspdfgabj', [TransactionController::class, 'print1stinglepaymentspdfgabj'])->name('print1stinglepaymentspdfgabj');
        Route::get('/deletestudent1/{ref_no1}', [UserController::class, 'deletestudent1'])->name('deletestudent1');
        
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        
        
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 
        
       
    });
});




Route::prefix('web')->name('web.')->group(function() {

    Route::middleware(['guest:web'])->group(function() {
        
        Route::post('/checkfirst', [UserController::class, 'checkfirst'])->name('checkfirst');
    });
    
    Route::middleware(['auth:web'])->group(function() {
        
        Route::post('/createstudentbyparent', [UserController::class, 'createstudentbyparent'])->name('createstudentbyparent');
        Route::get('/mychild', [UserController::class, 'mychild'])->name('mychild');
        Route::get('/addmidtermresults/{id}', [UserController::class, 'addmidtermresults'])->name('addmidtermresults');
        
        Route::get('/penultimatetermresultsapproved', [ResultController::class, 'penultimatetermresultsapproved'])->name('penultimatetermresultsapproved');
        Route::get('/tpremiumprimarytermresults', [ResultController::class, 'tpremiumprimarytermresults'])->name('tpremiumprimarytermresults');
        Route::get('/studentpayments/{classname}', [PaymentController::class, 'studentpayments'])->name('studentpayments');
        Route::get('/paymentsbyparents', [UserController::class, 'paymentsbyparents'])->name('paymentsbyparents');
        Route::get('/paymenthistory', [TransactionController::class, 'paymenthistory'])->name('paymenthistory');
        
        
        Route::get('viewscentertudentsclubytacher', [ClubController::class, 'viewscentertudentsclubytacher'])->name('viewscentertudentsclubytacher');
        Route::get('viewclubteacher/{clubname}', [ClubController::class, 'viewclubteacher'])->name('viewclubteacher');
        //Route::get('deletestudentclubteacher/{id}', [ClubController::class, 'deletestudentclubteacher'])->name('deletestudentclubteacher');
        Route::put('updateclubteacher/{id}', [ClubController::class, 'updateclubteacher'])->name('updateclubteacher');
        Route::get('editstudentclubteacher/{id}', [ClubController::class, 'editstudentclubteacher'])->name('editstudentclubteacher');
        Route::get('viewstudentsclubytacher', [ClubController::class, 'viewstudentsclubytacher'])->name('viewstudentsclubytacher');
        Route::get('addstudentoclub', [ClubController::class, 'addstudentoclub'])->name('addstudentoclub');
        Route::post('createtclubteacher', [ClubController::class, 'createtclubteacher'])->name('createtclubteacher');
        Route::get('parentbyheads/{section}', [ClassnameController::class, 'parentbyheads'])->name('parentbyheads');
        Route::get('paymentbyheads/{section}', [ClassnameController::class, 'paymentbyheads'])->name('paymentbyheads');
        Route::get('viewallbyheadspayment', [TransactionController::class, 'viewallbyheadspayment'])->name('viewallbyheadspayment');
        
        // Route::put('/addingregnoheads/{id}', [UserController::class, 'addingregnoheads'])->name('addingregnoheads');
        Route::get('/addregnumber1/{id}', [UserController::class, 'addregnumber1'])->name('addregnumber1');
        Route::put('/updtateregnumber/{id}', [UserController::class, 'updtateregnumber'])->name('updtateregnumber');
        Route::get('/viewchildrenbyhead/{ref_no}', [UserController::class, 'viewchildrenbyhead'])->name('viewchildrenbyhead');
        Route::get('/registeryourchild/{ref_no}', [UserController::class, 'registeryourchild'])->name('registeryourchild');
        Route::put('/updatestudent/{id}', [UserController::class, 'updatestudent'])->name('updatestudent');
        Route::get('/editstudentbyparent/{id}', [UserController::class, 'editstudentbyparent'])->name('editstudentbyparent');
        Route::get('/viewstudentsbyparent/{id}', [UserController::class, 'viewstudentsbyparent'])->name('viewstudentsbyparent');
        Route::get('/studentsaddmitew/{id}', [UserController::class, 'studentsaddmitew'])->name('studentsaddmitew');
        // Route::get('/studentsaddmitew/{id}', [UserController::class, 'studentsaddmitew'])->name('studentsaddmitew');
        Route::get('/editstudentbyparent/{id}', [UserController::class, 'editstudentbyparent'])->name('editstudentbyparent');
        Route::get('/viewryourteachers', [UserController::class, 'viewryourteachers'])->name('viewryourteachers');
        Route::get('/addparentshead', [UserController::class, 'addparentshead'])->name('addparentshead');
        Route::post('/createparenthead', [UserController::class, 'createparenthead'])->name('createparenthead');
        Route::get('/viewparentshead', [UserController::class, 'viewparentshead'])->name('viewparentshead');
        Route::get('/viewsingparent/{ref_no}', [UserController::class, 'viewsingparent'])->name('viewsingparent');
        Route::get('/editparent/{ref_no}', [UserController::class, 'editparent'])->name('editparent');
        Route::put('/updatecreateparenthead/{ref_no}', [UserController::class, 'updatecreateparenthead'])->name('updatecreateparenthead');
        Route::get('/addmitparent/{ref_no}', [UserController::class, 'addmitparent'])->name('addmitparent');
        Route::get('/suspendparent/{ref_no}', [UserController::class, 'suspendparent'])->name('suspendparent');
        Route::get('/rejectsparent/{ref_no}', [UserController::class, 'rejectsparent'])->name('rejectsparent');
        
        Route::get('/home', [UserController::class, 'home'])->name('home');
        Route::get('/crechpupils', [UserController::class, 'crechpupils'])->name('crechpupils');
        Route::get('/preschoolpupils', [UserController::class, 'preschoolpupils'])->name('preschoolpupils');
        Route::get('/nurseryschoolpupils', [UserController::class, 'nurseryschoolpupils'])->name('nurseryschoolpupils');
        Route::get('/primarypupils', [UserController::class, 'primarypupils'])->name('primarypupils');
        Route::get('/highschoolstudents', [UserController::class, 'highschoolstudents'])->name('highschoolstudents');
        Route::get('/preparatorypupils', [UserController::class, 'preparatorypupils'])->name('preparatorypupils');
        Route::get('/preparatoryheads', [UserController::class, 'preparatoryheads'])->name('preparatoryheads');
        Route::get('/classview/{classname}', [ClassnameController::class, 'classview'])->name('classview');
        Route::get('/classresultsheads/{classname}', [ClassnameController::class, 'classresultsheads'])->name('classresultsheads');
        Route::post('/checkresultbyheads', [ResultController::class, 'checkresultbyheads'])->name('checkresultbyheads');
        Route::get('/addcomment/{id}', [ResultController::class, 'addcomment'])->name('addcomment');
        Route::put('/addcomments/{id}', [ResultController::class, 'addcomments'])->name('addcomments');
        Route::put('/approvedresulthead/{id}', [ResultController::class, 'approvedresulthead'])->name('approvedresulthead');
        Route::get('/approvedresulthead/{id}', [ResultController::class, 'approvedresulthead'])->name('approvedresulthead');
        Route::get('/editresult/{id}', [ResultController::class, 'editresult'])->name('editresult');
        Route::put('/updateresults/{id}', [ResultController::class, 'updateresults'])->name('updateresults');
        Route::get('/deletreslt/{id}', [ResultController::class, 'deletreslt'])->name('deletreslt');
        Route::post('/createmidtermresults', [ResultController::class, 'createmidtermresults'])->name('createmidtermresults');
        Route::post('/midtermbreakcheckmidtermresultbyheads', [ResultController::class, 'midtermbreakcheckmidtermresultbyheads'])->name('midtermbreakcheckmidtermresultbyheads');
        Route::get('/pioneermidtermresults', [ResultController::class, 'pioneermidtermresults'])->name('pioneermidtermresults');
        Route::get('/pioneermidtermresultsapproved', [ResultController::class, 'pioneermidtermresultsapproved'])->name('pioneermidtermresultsapproved');
        Route::get('/addmidtermcomment/{id}', [ResultController::class, 'addmidtermcomment'])->name('addmidtermcomment');
        Route::post('/createmidtermpsycho', [MotoController::class, 'createmidtermpsycho'])->name('createmidtermpsycho');
        Route::get('/penmiftermresults', [ResultController::class, 'penmiftermresults'])->name('penmiftermresults');
        Route::get('/penmidteresultsapproved', [ResultController::class, 'penmidteresultsapproved'])->name('penmidteresultsapproved');
        Route::get('/premiumidtermresults', [ResultController::class, 'premiumidtermresults'])->name('premiumidtermresults');
        Route::get('/premidtermresultapproved', [ResultController::class, 'premidtermresultapproved'])->name('premidtermresultapproved');
        Route::get('/midtermresultsunapprove/{classname}', [ClassnameController::class, 'midtermresultsunapprove'])->name('midtermresultsunapprove');
        Route::get('/midtermresultsapproveheads/{classname}', [ClassnameController::class, 'midtermresultsapproveheads'])->name('midtermresultsapproveheads');
        
        
        Route::get('/studentsaddmithead/{ref_no}', [UserController::class, 'studentsaddmithead'])->name('studentsaddmithead');
        
        Route::get('/mysubjectsguestion', [TeacherassignController::class, 'mysubjectsguestion'])->name('mysubjectsguestion');
        Route::get('/studentpayment/{classname}', [UserController::class, 'studentpayment'])->name('studentpayment');
        
        Route::get('/editquestion/{id}', [QuestionController::class, 'editquestion'])->name('editquestion');
        Route::put('/updatequestion/{id}', [QuestionController::class, 'updatequestion'])->name('updatequestion');
        
        Route::get('/mysquestions', [QuestionController::class, 'mysquestions'])->name('mysquestions');
        Route::post('/createquestion', [QuestionController::class, 'createquestion'])->name('createquestion');
        Route::get('/setquestion/{id}', [QuestionController::class, 'setquestion'])->name('setquestion');
        Route::get('/viewquestion/{id}', [QuestionController::class, 'viewquestion'])->name('viewquestion');
        Route::get('/viewquestion/{id}', [QuestionController::class, 'viewquestion'])->name('viewquestion');
        Route::get('/printresult/{id}', [ResultController::class, 'printresult'])->name('printresult');
        Route::get('/mysubjects', [TeacherassignController::class, 'mysubjects'])->name('mysubjects');
        Route::post('/yourresult', [ResultController::class, 'yourresult'])->name('yourresult');
        
        Route::get('/checkresult', [ResultController::class, 'checkresult'])->name('checkresult');
        Route::get('/checkresultterminal', [ResultController::class, 'checkresultterminal'])->name('checkresultterminal');
        Route::get('/teacherviewresults3rd/{id}', [ResultController::class, 'teacherviewresults3rd'])->name('teacherviewresults3rd');
        Route::get('/premiumtermresults', [ResultController::class, 'premiumtermresults'])->name('premiumtermresults');
        Route::get('/teacherviewresults2nd/{id}', [ResultController::class, 'teacherviewresults2nd'])->name('teacherviewresults2nd');
        Route::get('/pensulatermresults', [ResultController::class, 'pensulatermresults'])->name('pensulatermresults');
        Route::get('/addpsychomotor/{user_id}', [ResultController::class, 'addpsychomotor'])->name('addpsychomotor');
        Route::post('/createpsychomotoro1', [MotoController::class, 'createpsychomotoro1'])->name('createpsychomotoro1');
        Route::post('/createresults', [ResultController::class, 'createresults'])->name('createresults');
        Route::put('/assignstudentclass/{id}', [UserController::class, 'assignstudentclass'])->name('assignstudentclass');
        Route::get('addresults/{id}', [UserController::class, 'addresults'])->name('addresults');
        Route::get('/studentsaddmit1ew/{ref_no1}', [UserController::class, 'studentsaddmit1ew'])->name('studentsaddmit1ew');
       
       
        Route::get('payment', [SchoolfeeController::class, 'payment'])->name('payment');

        Route::get('/promotions', [UserController::class, 'promotions'])->name('promotions');
        Route::get('/nurseryschoolheads', [UserController::class, 'nurseryschoolheads'])->name('nurseryschoolheads');
        Route::post('generatllePDF', [ResultController::class, 'generatllePDF'])->name('generatllePDF');
        
        Route::get('/crecheheads', [UserController::class, 'crecheheads'])->name('crecheheads');
        Route::get('/preschoolheads', [UserController::class, 'preschoolheads'])->name('preschoolheads');
        Route::get('/primaryheads', [UserController::class, 'primaryheads'])->name('primaryheads');
        Route::get('/highschools', [UserController::class, 'highschools'])->name('highschools');
        Route::get('/createsection', [UserController::class, 'createsection'])->name('createsection');
        Route::get('/preschoolsection', [UserController::class, 'preschoolsection'])->name('preschoolsection');
        Route::get('/primarysection', [UserController::class, 'primarysection'])->name('primarysection');
        Route::get('/nurserysection', [UserController::class, 'nurserysection'])->name('nurserysection');
        Route::get('/highschoolsection', [UserController::class, 'highschoolsection'])->name('highschoolsection');
        
        Route::get('/classes/{classname}', [ClassnameController::class, 'classes'])->name('classes');
        Route::get('/queryrepliedview', [QueryController::class, 'queryrepliedview'])->name('queryrepliedview');
        Route::get('/printquery1/{id}', [QueryController::class, 'printquery1'])->name('printquery1');
        Route::put('/replyquery/{id}', [QueryController::class, 'replyquery'])->name('replyquery');
        Route::get('/viewqueryreply/{id}', [QueryController::class, 'viewqueryreply'])->name('viewqueryreply');
        Route::get('/viewquery/{id}', [QueryController::class, 'viewquery'])->name('viewquery');
        Route::get('/checkyourquery', [QueryController::class, 'checkyourquery'])->name('checkyourquery');
        Route::get('/teacherviewresults/{user_id}', [ResultController::class, 'teacherviewresults'])->name('teacherviewresults');
        Route::get('/pioneertermresults', [ResultController::class, 'pioneertermresults'])->name('pioneertermresults');
        Route::get('/premiumterm', [UserController::class, 'premiumterm'])->name('premiumterm');
        Route::get('/pioneerterm', [UserController::class, 'pioneerterm'])->name('pioneerterm');
        Route::get('/penultimateterm', [UserController::class, 'penultimateterm'])->name('penultimateterm');
        Route::get('/profile/{ref_no}', [UserController::class, 'profile'])->name('profile');
        Route::get('/admisionletter', [UserController::class, 'admisionletter'])->name('classesdelete');
        Route::get('assignedstudent/{id}', [UserController::class, 'assignedstudent'])->name('assignedstudent');
        Route::get('viewpayment1/{id}', [TransactionController::class, 'viewpayment1'])->name('viewpayment1');
        Route::get('paymentspdf/{id}', [TransactionController::class, 'paymentspdf'])->name('paymentspdf');
        
        Route::put('updatebiodata/{ref_no}', [UserController::class, 'updatebiodata'])->name('updatebiodata');
        Route::get('viewteachersheads/{classname}', [UserController::class, 'viewteachersheads'])->name('viewteachersheads');
        
        Route::get('viewpayment1s/{student_id}', [TransactionController::class, 'viewpayment1s'])->name('viewpayment1s');
        Route::get('penultimatetermresults', [ResultController::class, 'penultimatetermresults'])->name('penultimatetermresults');
        Route::get('viewresultsteacher/{classname}', [ResultController::class, 'viewresultsteacher'])->name('viewresultsteacher');
        Route::get('viewresultsteacherunapprove/{classname}', [ResultController::class, 'viewresultsteacherunapprove'])->name('viewresultsteacherunapprove');
        Route::get('checkmidtermresult', [ResultController::class, 'checkmidtermresult'])->name('checkmidtermresult');
        Route::post('generatmidtermresult', [ResultController::class, 'generatmidtermresult'])->name('generatmidtermresult');
        
        

        Route::get('/logout', [UserController::class, 'logout'])->name('logout'); 
        Route::get('/pioneertermresultsapproved', [ResultController::class, 'pioneertermresultsapproved'])->name('pioneertermresultsapproved');
        
       
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('password/reset', [UserController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [UserController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [UserController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [UserController::class, 'resetPassword'])->name('password.update');

Route::get('/registerteacher', [UserController::class, 'registerteacher'])->name('registerteacher');

Route::post('/createteacher', [UserController::class, 'createteacher'])->name('createteacher');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//require __DIR__.'/auth.php';