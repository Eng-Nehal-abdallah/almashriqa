<?php

use App\Http\Controllers\AcceptController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdmindepartController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CompusController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LabExamController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\MagazinController;
use App\Http\Controllers\MashController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\StudentfirstController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TypeahievementController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UniversitiesController;
use App\Http\Controllers\UserController;
use App\Models\achievement;
use App\Models\Admindepart;
use App\Models\Department;
use App\Models\Type;
use App\Models\Lecture;
use App\Models\Studentfirst;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', function(){
    Route::get('auth/register')->middleware('auth');
});

Auth::routes();

//show page dashboard
Route::get('/s/{facutly}', [SubjectController::class, 'subject']);
//show page dashboard
Route::get('/d/{department}', [SubjectController::class, 'department']);
//show main page
Route::get('/ach/{achievement}/show', [AchievementController::class, 'achievement']);
//show main page
Route::get('/achen/{achievement}/show', [AchievementController::class, 'achievementen']);
//show main page
Route::get('/', [MashController::class, 'index']);
//show main about
Route::get('/about', [MashController::class, 'about']);
//show main page
Route::get('/en', [MashController::class, 'indexen']);
//show main about
Route::get('/abouten', [MashController::class, 'abouten']);
Route::get('/sendmail', [App\Http\Controllers\SendMailController::class, 'index'])->name('mail');
Route::post('/send', [App\Http\Controllers\SendMailController::class, 'send'])->name('send');
//edit abstract after header

//show main accept
Route::get('/accept', [AcceptController::class, 'index']);
//show main comous
Route::get('/compuss', [CompusController::class, 'index']);
//show main comous
Route::get('/student', [CompusController::class, 'index']);
//show main comousd
Route::get('/studenten', [CompusController::class, 'index']);

//show main accept
Route::get('/accepten', [AcceptController::class, 'indexenn']);
//show main comous
Route::get('/compusen', [CompusController::class, 'indexen']);

//show exam lab  about department
Route::get('/labexamen/{faculty}/show', [LabExamController::class, 'indexfacen']);
Route::get('/labexamfacen', [UniversitiesController::class, 'indexlabexamen']);
//show admin  about department
Route::get('/admindepartment', [AdmindepartController::class, 'index']);

//show admin  about department
Route::get('/admindepartmenten', [AdmindepartController::class, 'indexen']);

//show agreements
Route::get('/agreements', [AgreementController::class, 'index']);
//show agreements
Route::get('/agreementsen', [AgreementController::class, 'indexen']);

//labs
Route::get('/labs/{facutly}/show', [LabController::class, 'index']);
//lab
Route::get('/lab/{lab}/show', [LabController::class, 'show']);
// center
Route::get('/centers', [CenterController::class, 'index']);
// magazin
Route::get('/magazin', [MagazinController::class, 'index']);
Route::post('/create_socialmedia', [DoctorsController::class, 'create_social']);
// fees
Route::get('/fees', [FeesController::class, 'index']);
// fees
Route::get('/strategy', [CenterController::class, 'strategy']);
//paper
Route::get('/papers', [PaperController::class, 'index']);
//labs
Route::get('/labsen/{facutly}/show', [LabController::class, 'indexen']);
//lab
Route::get('/laben/{lab}/show', [LabController::class, 'showen']);
// center
Route::get('/centersen', [CenterController::class, 'indexen']);
// magazin
Route::get('/magazinen', [MagazinController::class, 'indexen']);
// fees
Route::get('/feesen', [FeesController::class, 'indexen']);
// fees
Route::get('/strategyen', [CenterController::class, 'strategyen']);
//paper
Route::get('/papersen', [PaperController::class, 'indexen']);
//show faculty all for reseacrch
Route::get('/facutlyen', [UniversitiesController::class, 'indexen']);
//show faculty all for department
Route::get('/facutlyresearchen', [UniversitiesController::class, 'showresearchen']);
//show faculty all for department
Route::get('/facutlylaben', [UniversitiesController::class, 'showlaben']);
//show faculty to choose some achievements
Route::get('/patenten', [UniversitiesController::class, 'index2en']);


//paper
Route::get('/paperen/{paper}/show', [PaperController::class, 'paperinneren']);

//paper
Route::get('/paperen/{paper}/show', [PaperController::class, 'paperinneren']);
//paper
Route::get('/paper/{paper}/show', [PaperController::class, 'paperinner']);

//show faculty all for reseacrch
Route::get('/facutly', [UniversitiesController::class, 'index']);
//show faculty all for department
Route::get('/facutlyresearch', [UniversitiesController::class, 'showresearch']);
//show faculty all for department
Route::get('/facutlylab', [UniversitiesController::class, 'showlab']);
Route::get('/facutlylec', [UniversitiesController::class, 'showlec']);
//show faculty all for department
Route::get('/facutlyexam', [UniversitiesController::class, 'showexamtable']);

Route::get('/facutlylaben', [UniversitiesController::class, 'showlaben']);
Route::get('/facutlylecen', [UniversitiesController::class, 'showlecen']);
//show faculty all for department
Route::get('/facutlyexamen', [UniversitiesController::class, 'showexamtableen']);
//show faculty all for department
//show faculty all for department
Route::get('/facutlylecture', [UniversitiesController::class, 'showlecturetable']);
//show faculty to choose some achievements
Route::get('/patent', [UniversitiesController::class, 'index2']);
//login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//auth
Route::get('/site', [App\Http\Controllers\UserController::class, 'site'])->name('site')->middleware('auth:web');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin')->middleware('auth:admins');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'checklogin'])->name('save.admin.login');
Route::get('/dashboard', [MashController::class, 'index2'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard10', [ExamController::class, 'index'])->middleware(['auth','admin']);
    //dashboard doctor
    Route::get('/dashboard4', [DoctorsController::class, 'index'])->middleware(['auth','admin']);
    //dashboard activity
    Route::get('/dashboard5', [ActivityController::class, 'index'])->middleware(['auth','admin']);
    //dashboard type achievement
    Route::get('/dashboard6', [TypeahievementController::class, 'index'])->middleware(['auth','admin']);
    //dashboard type social
    Route::get('/dashboard7', [TypeController::class, 'index'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard8', [LectureController::class, 'index'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard9', [LabExamController::class, 'index'])->middleware(['auth','admin']);
    //dashboard admin depart
    Route::get('/dashboard11', [AdmindepartController::class, 'index2'])->middleware(['auth','admin']);
    //dashboard faculty
    Route::get('/dashboard2', [UniversitiesController::class, 'indexdash'])->middleware(['auth','admin']);
    //dashboard department
    Route::get('/dashboard3', [DepartmentController::class, 'index'])->middleware(['auth','admin']);
    //edit department
    Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->middleware(['auth','admin']);
    //show insert department
    Route::get('insert_department', [DepartmentController::class, 'insert'])->middleware(['auth','admin']);
    //add department
    Route::post('create_department', [DepartmentController::class, 'create'])->middleware(['auth','admin']);
    //update department
    Route::put('/department/{department}', [DepartmentController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/doctors/{doctor}', [DoctorsController::class, 'destroy'])->middleware(['auth','admin']);

    //show page lecturre
    Route::get('insert_doctor', [DoctorsController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors
    Route::post('/create_doctor', [DoctorsController::class, 'create'])->middleware(['auth','admin']);
    //edit department
    Route::get('/doctor/{doctor}/edit', [DoctorsController::class, 'edit'])->middleware(['auth','admin']);
    //update code after head
    Route::post('/doctor/{doctor}', [DoctorsController::class, 'update'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia'])->middleware(['auth','admin']);
    //add doctors
    // Route::post('/create_socialmedia', [DoctorsController::class, 'create_social'])->middleware(['auth','admin'],['auth','doctor']);
    //show page create doctor agreement
    Route::get('/agreement', [AgreementController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_agreement', [AgreementController::class, 'create'])->name('agreemnet')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/agreement/{agreement}/edit', [AgreementController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updateagreement/{agreement}', [AgreementController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/agreements/{agreement}', [AgreementController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard12', [AgreementController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/compus', [CompusController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_compus', [CompusController::class, 'create'])->middleware(['auth','admin']);
    //edit agreement
    Route::get('/compus/{compus}/edit', [CompusController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatecompus/{compus}', [CompusController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/compus/{compus}', [CompusController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard14', [CompusController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/achievement/{doctor}/add', [AchievementController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors achievement
    Route::post('/create_achievement', [AchievementController::class, 'create'])->name('achievements')->middleware(['auth','admin']);
    //edit department
    Route::get('/achievement/{achievement}/edit', [AchievementController::class, 'edit'])->middleware(['auth','admin']);

    //update code after head
    Route::put('/updateachievement/{achievement}', [AchievementController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/achievementss/{achievement}', [AchievementController::class, 'destroy'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/activity', [ActivityController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors achievement
    Route::post('/create_activity', [ActivityController::class, 'create'])->name('activities')->middleware(['auth','admin']);
    //edit department
    Route::get('/activity/{activity}/edit', [ActivityController::class, 'edit'])->middleware(['auth','admin']);
    //update code after head
    Route::put('/updateaactivity/{activity}', [ActivityController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/lab', [LabController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_lab', [LabController::class, 'create'])->name('labs')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/lab/{lab}/edit', [LabController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatelab/{lab}', [LabController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/labs/{lab}', [LabController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard13', [LabController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/feesinsert', [FeesController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_fees', [FeesController::class, 'create'])->name('feescreste')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/fees/{fees}/edit', [FeesController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatefees/{fees}', [FeesController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/feess/{fees}', [FeesController::class, 'destroy'])->middleware(['auth','admin']);

        Route::get('/mashes/{mash}/edit', [MashController::class, 'edit'])->middleware(['auth','admin']);
        //update code after head
        Route::put('/mash/{mash}', [MashController::class, 'update'])->middleware(['auth','admin']);
        //editsection1 image2
        Route::get('/mash2/{mash}/edit', [MashController::class, 'edit_sec1'])->middleware(['auth','admin']);
        //update section1 image2
        Route::post('/mash2/{mash}', [MashController::class, 'update_sec1'])->middleware(['auth','admin']);
        //editsection2
        Route::get('/mash3/{mash}/edit', [MashController::class, 'edit_sec2'])->middleware(['auth','admin']);
        //update section2
        Route::put('/mash3/{mash}', [MashController::class, 'update_sec2'])->middleware(['auth','admin']);
        //show page  exam create
        Route::get('/exam', [ExamController::class, 'insert'])->middleware(['auth','admin']);
        //add exam
        Route::post('/create_exam', [ExamController::class, 'create'])->name('exam')->middleware(['auth','admin']);
        //edit exam
        Route::get('/exam/{exam}/edit', [ExamController::class, 'edit'])->middleware(['auth','admin']);
        //update exam
        Route::put('/updateexam/{exam}', [ExamController::class, 'update'])->middleware(['auth','admin']);
        //destroy exam
        Route::delete('/exams/{exam}', [ExamController::class, 'destroy'])->middleware(['auth','admin']);
        //show page create doctor agreement
        Route::get('/paper', [PaperController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_paper', [PaperController::class, 'create'])->name('paper')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/paper/{paper}/edit', [PaperController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatepaper/{paper}', [PaperController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/paper/{paper}', [PaperController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard15', [PaperController::class, 'index2'])->middleware(['auth','admin']);

        //show page create lab exam
        Route::get('/labexam/{facutly}', [LabExamController::class, 'insert']);
        //add doctors labexam
        Route::post('/create_labexam', [LabExamController::class, 'create'])->name('labexam')->middleware(['auth','admin']);
        //edit labexam
        Route::get('/labexam/{labexam}/edit', [LabExamController::class, 'edit'])->middleware(['auth','admin']);
        //update code lab exam
        Route::put('/updatelabexam/{exam}', [LabExamController::class, 'update'])->middleware(['auth','admin']);
        //destroy lab exam
        Route::delete('/labexams/{exam}', [LabExamController::class, 'destroy']);
        //show page create doctor agreement
        Route::get('/center', [CenterController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_center', [CenterController::class, 'create'])->name('center')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/center/{center}/edit', [CenterController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatecenter/{center}', [CenterController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/centers/{center}', [CenterController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard16', [CenterController::class, 'index2'])->middleware(['auth','admin']);
        Route::get('/lecture/{facutly}', [LectureController::class, 'insert']);
        //add doctors achievement
        Route::post('/create_lecture', [LectureController::class, 'create'])->name('lecture')->middleware(['auth','admin']);
        //edit department
        Route::get('/lecture/{lecture}/edit', [LectureController::class, 'edit'])->middleware(['auth','admin']);
        //update code after head
        Route::put('/updatelecture/{lecture}', [LectureController::class, 'update'])->middleware(['auth','admin']);
        //destroy department
        Route::delete('/lectures/{lecture}', [LectureController::class, 'destroy'])->middleware(['auth','admin']);
        Route::post('search', [DoctorsController::class, 'search'])->middleware(['auth','admin']);
        //show page create doctor agreement
        Route::get('/magazininsert', [MagazinController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_magazin', [MagazinController::class, 'create'])->name('magazin')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/magazin/{magazin}/edit', [MagazinController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatemagzin/{magazin}', [MagazinController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/magazins/{magazin}', [MagazinController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard17', [MagazinController::class, 'index2'])->middleware(['auth','admin']);
        //edit admindepart
        Route::get('/admindepart/{admindepart}/edit', [AdmindepartController::class, 'edit'])->middleware(['auth','admin']);
        //update section1 image2
        Route::PUT('/updateadmin/{admindepart}', [AdmindepartController::class, 'update'])->middleware(['auth','admin']);
        //show dashboardmain
        Route::get('/dashboard', [MashController::class, 'index2'])->middleware(['auth','admin']);
        //destroy department
        Route::delete('/social/{social}/delete', [DoctorsController::class, 'destroysocial'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard18', [FeesController::class, 'index2'])->middleware(['auth','admin']);


        Route::get('/dashboard21', [UserController::class, 'index'])->middleware(['auth','admin']);
Route::get('/user', [UserController::class, 'insert'])->middleware(['auth','admin']);
//add doctors achievement
Route::post('/create_user', [UserController::class, 'create'])->name('user')->middleware(['auth','admin']);
//edit department
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->middleware(['auth','admin']);
//update code after head
Route::put('/updateuser/{user}', [UserController::class, 'update'])->middleware(['auth','admin']);
//destroy department
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth','admin']);

   //show page create doctor agreement
   Route::get('/compusinsert', [CompusController::class, 'insert'])->middleware(['auth','admin']);
   //add agreement
   Route::post('/create_compus', [CompusController::class, 'create'])->middleware(['auth','admin']);
   //edit agreement
   Route::get('/compus/{compus}/edit', [CompusController::class, 'edit'])->middleware(['auth','admin']);
   //update code agreement
   Route::put('/updatecompus/{compus}', [CompusController::class, 'update'])->middleware(['auth','admin']);
   //destroy agreementagreement
   Route::delete('/compus/{compus}', [CompusController::class, 'destroy'])->middleware(['auth','admin']);
   //show page dashboard
     //show page create doctor agreement
     Route::get('/paper', [PaperController::class, 'insert'])->middleware(['auth','admin']);
     //add agreement
     Route::post('/create_paper', [PaperController::class, 'create'])->name('paper')->middleware(['auth','admin']);
     //edit agreement
     Route::get('/paper/{paper}/edit', [PaperController::class, 'edit'])->middleware(['auth','admin']);
     //update code agreement
     Route::put('/updatepaper/{paper}', [PaperController::class, 'update'])->middleware(['auth','admin']);
     //destroy agreementagreement
     Route::delete('/paper/{paper}', [PaperController::class, 'destroy'])->middleware(['auth','admin']);
  //show page create doctor agreement
  Route::get('/center', [CenterController::class, 'insert'])->middleware(['auth','admin']);
  //add agreement
  Route::post('/create_center', [CenterController::class, 'create'])->name('center')->middleware(['auth','admin']);
  //edit agreement
  Route::get('/center/{center}/edit', [CenterController::class, 'edit'])->middleware(['auth','admin']);
  //update code agreement
  Route::put('/updatecenter/{center}', [CenterController::class, 'update'])->middleware(['auth','admin']);
  //destroy agreementagreement
  Route::delete('/centers/{center}', [CenterController::class, 'destroy'])->middleware(['auth','admin']);
//add agreement
Route::post('/create_magazin', [MagazinController::class, 'create'])->name('magazin')->middleware(['auth','admin']);
//edit agreement
Route::get('/magazin/{magazin}/edit', [MagazinController::class, 'edit'])->middleware(['auth','admin']);
//update code agreement
Route::put('/updatemagzin/{magazin}', [MagazinController::class, 'update'])->middleware(['auth','admin']);
//destroy agreementagreement
Route::delete('/magazins/{magazin}', [MagazinController::class, 'destroy'])->middleware(['auth','admin']);
      //show page create doctor agreement
      Route::get('/magazininsert', [MagazinController::class, 'insert'])->middleware(['auth','admin']);
Route::get('/dashboard18', [FeesController::class, 'index2'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard17', [MagazinController::class, 'index2'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard16', [CenterController::class, 'index2'])->middleware(['auth','admin']);
   //show page dashboard
   Route::get('/dashboard15', [PaperController::class, 'index2'])->middleware(['auth','admin']);

Route::get('/dashboard21', [UserController::class, 'index'])->middleware(['auth','admin']);
Route::get('/user', [UserController::class, 'insert'])->middleware(['auth','admin']);
//add doctors achievement
Route::post('/create_user', [UserController::class, 'create'])->name('user')->middleware(['auth','admin']);
//edit department
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->middleware(['auth','admin']);
//update code after head
Route::put('/updateuser/{user}', [UserController::class, 'update'])->middleware(['auth','admin']);
//destroy department
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth','admin']);



//edit department
Route::get('/achievement/{achievement}/edit', [AchievementController::class, 'edit'])->middleware(['auth', 'doctor']);;
//update code after head
Route::put('/updateachievement/{achievement}', [AchievementController::class, 'update'])->middleware(['auth', 'doctor']);;
//destroy department
Route::delete('/achievementss/{achievement}', [AchievementController::class, 'destroy'])->middleware(['auth', 'doctor']);;
//show page create doctor social media
Route::get('/achievement/{doctor}/add', [AchievementController::class, 'insert'])->middleware(['auth', 'doctor']);;

//show social  for doctors
Route::get('/social/{doctor}/show', [DoctorsController::class, 'social'])->middleware(['auth', 'doctor']);;

Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia'])->middleware(['auth', 'doctor']);;
//edit department
Route::get('/docs/{doctor}/edit', [DoctorsController::class, 'editdoc'])->middleware(['auth', 'doctor']);;
//update code after head
Route::post('/docs/{doctor}', [DoctorsController::class, 'update'])->middleware(['auth', 'doctor']);;
//show ahievement  for doctors
Route::get('/achievement/{doctor}/show', [AchievementController::class, 'indexdoc'])->middleware(['auth', 'doctor']);;



//add doctors achievement
Route::post('/create_achievement', [AchievementController::class, 'create'])->name('achievements');
//show page create doctor agreement
Route::get('/subject/{doctor}', [SubjectController::class, 'insert'])->middleware(['auth', 'doctor']);
//add agreement
Route::post('/create_subject', [SubjectController::class, 'create'])->middleware(['auth', 'doctor']);
//edit agreement
Route::get('/subject/{subject}/edit', [SubjectController::class, 'edit'])->middleware(['auth', 'doctor']);
//update code agreement
Route::put('/updatesubject/{subject}', [SubjectController::class, 'update'])->middleware(['auth', 'doctor']);
//destroy agreementagreement
Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->middleware(['auth', 'doctor']);
//show page dashboard
Route::get('/dashboard19/{doctor}', [SubjectController::class, 'index2'])->middleware(['auth', 'doctor']);







//show specific faculty
Route::get('/Facutly/{Facutly}/show', [UniversitiesController::class, 'sh'])->name('fac');
//show requirement of faculty
// Route::get('/requirement', [UniversitiesController::class, 'shows']);
//show all doctors with table
Route::get('/leaderuni', [LeaderController::class, 'show']);
//word of lead
Route::get('/leaderword', [UniversitiesController::class, 'showleadw']);
//show doctors for faculty
Route::get('/doctor/{Facutly}/show', [DoctorsController::class, 'sh']);
//show social  for doctors
Route::get('/social/{doctor}/show', [DoctorsController::class, 'social']);
//show ahievement  for doctors
Route::get('/achievement/{doctor}/show', [AchievementController::class, 'index']);
//show doctors for department
Route::get('/doctors/{Department}/show', [DoctorsController::class, 'shD']);
//show profile
Route::get('doc/{doctor}/show', [DoctorsController::class, 'profile']);
//show department for faculty
Route::get('/department/{department}/show', [DepartmentController::class, 'sh']);
//show requiremeznt of faculty
Route::get('/requirement', [RequirementController::class, 'index']);
//show achievement for faculty
Route::get('/patentshow/{Facutly}/show', [ResearchController::class, 'index']);
//show achievement for department
Route::get('/patent/{department}/show', [ResearchController::class, 'index2']);
//show specific achiev
Route::get('/patents/{research}/show', [ResearchController::class, 'show']);

     //destroy lab exam
     Route::delete('/labexams/{labexam}/delete', [LabExamController::class, 'destroy']);
//show specific faculty
Route::get('/Facutlyen/{Facutly}/show', [UniversitiesController::class, 'shen']);
//show requirement of faculty
// Route::get('/requirement', [UniversitiesController::class, 'shows']);
//show all doctors with table
Route::get('/leaderunien', [LeaderController::class, 'showen']);
//word of lead
Route::get('/leaderworden', [UniversitiesController::class, 'showleadwen']);
//show doctors for faculty
Route::get('/doctoren/{Facutly}/show', [DoctorsController::class, 'shen']);
//show social  for doctors
Route::get('/socialen/{doctor}/show', [DoctorsController::class, 'socialen']);
//show ahievement  for doctors
Route::get('/achievementen/{doctor}/show', [AchievementController::class, 'indexen']);


//show ahievement for faculty
Route::get('/achievement/{faculty}/show', [AchievementController::class, 'faculty']);

//show ahievement for faculty
Route::get('/achievementdoctoren/{doctor}/show', [AchievementController::class, 'doctoren']);
//show ahievement for faculty
Route::get('/achievementdoctor/{doctor}/show', [AchievementController::class, 'doctor']);
//show ahievement for faculty
Route::get('/achievementen/{faculty}/show', [AchievementController::class, 'facultyen']);

//show ahievement for faculty
Route::get('/achievement/{department}/show', [AchievementController::class, 'department']);


//show ahievement for faculty
Route::get('/achievementen/{department}/show', [AchievementController::class, 'departmenten']);

//show doctors for department
Route::get('/doctorsen/{Department}/show', [DoctorsController::class, 'shDen']);
//show profile
Route::get('docen/{doctor}/show', [DoctorsController::class, 'profileen']);
//show department for faculty
Route::get('/departmenten/{department}/show', [DepartmentController::class, 'shen']);
//show requiremeznt of faculty
Route::get('/requirementen', [RequirementController::class, 'indexen']);
//show achievement for faculty
Route::get('/patentshowen/{Facutly}/show', [ResearchController::class, 'indexen']);
//show achievement for department
Route::get('/patenent/{department}/show', [ResearchController::class, 'index2en']);
//show specific achiev
Route::get('/patentsen/{research}/show', [ResearchController::class, 'showen']);

//show all achievement for faculty
Route::get('/Facultyen/{facutly}/research', [UniversitiesController::class, 'showrallesearchen']);
//show all achievement for faculty
Route::get('/departmentten/{department}/research', [UniversitiesController::class, 'showallresearchen']);

//show all achievement for faculty
Route::get('/d/{doctor}/research', [UniversitiesController::class, 'doctor']);
//show all achievement for faculty
Route::get('/den/{doctor}/research', [UniversitiesController::class, 'doctoren']);
//edit faculty
Route::get('/facutly/{facutly}/edit', [UniversitiesController::class, 'edit']);
//update code after head
Route::post('/facutly/{facutly}', [UniversitiesController::class, 'update']);

//show insert type achieve
Route::get('insert_type', [TypeahievementController::class, 'insert']);
//add type achievement
Route::post('create_type', [TypeahievementController::class, 'create']);
//destroy type achievement
Route::delete('/types/{type}', [TypeahievementController::class, 'destroy']);


//show insert type social
Route::get('instype', [TypeController::class, 'insert']);
//add type
Route::post('create_instype', [TypeController::class, 'create']);
//destroy type social
Route::delete('/instype/{type}', [TypeController::class, 'destroy']);




Route::get('/labexam/{faculty}/show', [LabExamController::class, 'indexfac']);

Route::get('/e/{faculty}/show', [ExamController::class, 'indexfac']);
Route::get('/l/{faculty}/show', [LectureController::class, 'indexfac']);


Route::get('/labexamd/{department}/show', [LabExamController::class, 'indexfacd']);

Route::get('/examsd/{department}/show', [ExamController::class, 'indexfacd']);
Route::get('/ld/{department}/show', [LectureController::class, 'indexfacd']);



Route::get('/labexamfacen', [UniversitiesController::class, 'indexlabexamen']);


Route::get('/labexamfac', [UniversitiesController::class, 'indexlabexam']);
//show insert faculty
Route::get('insert_faculty', [UniversitiesController::class, 'insert']);
//add faculty
Route::post('create_faculty', [UniversitiesController::class, 'create']);
//destroy faculty
Route::delete('/facutlys/{facutly}', [UniversitiesController::class, 'destroy']);
//show all achievement for faculty
Route::get('/Faculty/{facutly}/research', [UniversitiesController::class, 'showrallesearch']);
//show all achievement for faculty
Route::get('/departmentt/{department}/research', [UniversitiesController::class, 'showallresearch']);
//show dynamic department
Route::post('/getState', [DepartmentController::class, 'getState']);
//show dynamic day
Route::post('/getStates', [LabExamController::class, 'getState']);
//show dynamic day
Route::post('/getStatesss', [LabExamController::class, 'getStateprofile']);
//show dynamic day
Route::post('/getStatesssen', [LabExamController::class, 'getStateprofileen']);
//show dynamic day
Route::post('/getStateen', [LabExamController::class, 'getStateen']);
// Route::get('dropdownlist/getsubcategories/{id}',[DepartmentController::class , 'finddepartment']);
// Route::get('finddepartment/{id}','DepartmentController@finddepartment')->name('finddepartment');
//show page create doctor
Route::get('/search', [DoctorsController::class, 'show']);
Route::get('/live_search/action', 'DoctorsController@action')->name('live_search.action');




//show page create doctor agreement
Route::get('/studentadd', [StudentfirstController::class, 'insert'])->middleware(['auth', 'admin']);
//add agreement
Route::post('/create_student', [StudentfirstController::class, 'create'])->middleware(['auth', 'admin']);
//edit agreement
Route::get('/student/{student}/edit', [StudentfirstController::class, 'edit']);
//update code agreement
Route::put('/updatestudent/{student}', [StudentfirstController::class, 'update'])->middleware(['auth', 'admin']);
//destroy agreementagreement
Route::delete('/students/{student}', [StudentfirstController::class, 'destroy']);
//show page dashboard
Route::get('/dashboard20', [StudentfirstController::class, 'index2'])->middleware(['auth', 'admin']);
Route::delete('/lectures/{lecture}', [LectureController::class, 'destroy']);



// -------------  start admin auth ---------------
Route::group(['middleware' => ['auth', 'admin']], function () {
    //show dashboardmain
    Route::get('/dashboard', [MashController::class, 'index2']);
    //dashboard lecture
    Route::get('/dashboard10', [ExamController::class, 'index']);
    //dashboard doctor
    Route::get('/dashboard4', [DoctorsController::class, 'index']);
    //dashboard activity
    Route::get('/dashboard5', [ActivityController::class, 'index']);
    //dashboard type achievement
    Route::get('/dashboard6', [TypeahievementController::class, 'index']);
    //dashboard type social
    Route::get('/dashboard7', [TypeController::class, 'index']);
    //dashboard lecture
    Route::get('/dashboard8', [LectureController::class, 'index']);
    //dashboard lecture
    Route::get('/dashboard9', [LabExamController::class, 'index']);
    //dashboard admin depart
    Route::get('/dashboard11', [AdmindepartController::class, 'index2']);
    //dashboard faculty
    Route::get('/dashboard2', [UniversitiesController::class, 'indexdash']);
    //dashboard department
    Route::get('/dashboard3', [DepartmentController::class, 'index']);
    //edit department
    Route::get('/department/{department}/edit', [DepartmentController::class, 'edit']);
    //show insert department
    Route::get('insert_department', [DepartmentController::class, 'insert']);
    //add department
    Route::post('create_department', [DepartmentController::class, 'create']);
    //update department
    Route::put('/department/{department}', [DepartmentController::class, 'update']);
    //destroy department
    Route::delete('/departments/{department}', [DepartmentController::class, 'destroy']);
    //destroy department
    Route::delete('/doctors/{doctor}', [DoctorsController::class, 'destroy']);

    //show page lecturre
    Route::get('insert_doctor', [DoctorsController::class, 'insert']);
    //add doctors
    Route::post('/create_doctor', [DoctorsController::class, 'create']);
    //edit department
    Route::get('/doctor/{doctor}/edit', [DoctorsController::class, 'edit']);
    //update code after head
    Route::post('/doctor/{doctor}', [DoctorsController::class, 'update']);
    //show page create doctor social media
    Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia']);
    //add doctors


    //show page create doctor agreement
    Route::get('/agreement', [AgreementController::class, 'insert']);
    //add agreement
    Route::post('/create_agreement', [AgreementController::class, 'create'])->name('agreemnet');
    //edit agreement
    Route::get('/agreement/{agreement}/edit', [AgreementController::class, 'edit']);
    //update code agreement
    Route::put('/updateagreement/{agreement}', [AgreementController::class, 'update']);
    //destroy agreementagreement
    Route::delete('/agreements/{agreement}', [AgreementController::class, 'destroy']);
    //show page dashboard
    Route::get('/dashboard12', [AgreementController::class, 'index2']);
    //show page create doctor agreement
    Route::get('/compus', [CompusController::class, 'insert']);
    //add agreement
    Route::post('/create_compus', [CompusController::class, 'create']);
    //edit agreement
    Route::get('/compus/{compus}/edit', [CompusController::class, 'edit']);
    //update code agreement
    Route::put('/updatecompus/{compus}', [CompusController::class, 'update']);
    //destroy agreementagreement
    Route::delete('/compus/{compus}', [CompusController::class, 'destroy']);
    //show page dashboard
    Route::get('/dashboard14', [CompusController::class, 'index2']);
    //show page create doctor social media
    Route::get('/achievement/{doctor}/add', [AchievementController::class, 'insert']);
    //add doctors achievement
    Route::post('/create_achievement', [AchievementController::class, 'create'])->name('achievements');
    //edit department
    Route::get('/achievement/{achievement}/edit', [AchievementController::class, 'edit']);

    //update code after head
    Route::put('/updateachievement/{achievement}', [AchievementController::class, 'update']);
    //destroy department
    Route::delete('/achievementss/{achievement}', [AchievementController::class, 'destroy']);
    //show page create doctor social media
    Route::get('/activity', [ActivityController::class, 'insert']);
    //add doctors achievement
    Route::post('/create_activity', [ActivityController::class, 'create'])->name('activities');
    //edit department
    Route::get('/activity/{activity}/edit', [ActivityController::class, 'edit']);
    //update code after head
    Route::put('/updateaactivity/{activity}', [ActivityController::class, 'update']);
    //destroy department
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy']);
    //show page create doctor agreement
    Route::get('/lab', [LabController::class, 'insert']);
    //add agreement
    Route::post('/create_lab', [LabController::class, 'create'])->name('labs');
    //edit agreement
    Route::get('/lab/{lab}/edit', [LabController::class, 'edit']);
    //update code agreement
    Route::put('/updatelab/{lab}', [LabController::class, 'update']);
    //destroy agreementagreement
    Route::delete('/labs/{lab}', [LabController::class, 'destroy']);
    //show page dashboard
    Route::get('/dashboard13', [LabController::class, 'index2']);
    //show page create doctor agreement
    Route::get('/feesinsert', [FeesController::class, 'insert']);
    //add agreement
    Route::post('/create_fees', [FeesController::class, 'create'])->name('feescreste');
    //edit agreement
    Route::get('/fees/{fees}/edit', [FeesController::class, 'edit']);
    //update code agreement
    Route::put('/updatefees/{fees}', [FeesController::class, 'update']);
    //destroy agreementagreement
    Route::delete('/feess/{fees}', [FeesController::class, 'destroy']);
    Route::get('/test-success', function () {
        Route::get('/mash/{mash}/edit', [MashController::class, 'edit']);
        //update code after head
        Route::put('/mash/{mash}', [MashController::class, 'update']);
        //editsection1 image2
        Route::get('/mash2/{mash}/edit', [MashController::class, 'edit_sec1']);
        //update section1 image2
        Route::post('/mash2/{mash}', [MashController::class, 'update_sec1']);
        //editsection2
        Route::get('/mash3/{mash}/edit', [MashController::class, 'edit_sec2']);
        //update section2
        Route::put('/mash3/{mash}', [MashController::class, 'update_sec2']);
        //show page  exam create
        Route::get('/exam', [ExamController::class, 'insert']);
        //add exam
        Route::post('/create_exam', [ExamController::class, 'create'])->name('exam');
        //edit exam
        Route::get('/exam/{exam}/edit', [ExamController::class, 'edit']);
        //update exam
        Route::put('/updateexam/{exam}', [ExamController::class, 'update']);
        //destroy exam
        Route::delete('/exams/{exam}', [ExamController::class, 'destroy']);
        //show page create doctor agreement
        Route::get('/paper', [PaperController::class, 'insert']);
        //add agreement
        Route::post('/create_paper', [PaperController::class, 'create'])->name('paper');
        //edit agreement
        Route::get('/paper/{paper}/edit', [PaperController::class, 'edit']);
        //update code agreement
        Route::put('/updatepaper/{paper}', [PaperController::class, 'update']);
        //destroy agreementagreement
        Route::delete('/paper/{paper}', [PaperController::class, 'destroy']);
        //show page dashboard
        Route::get('/dashboard15', [PaperController::class, 'index2']);

        //show page create lab exam
        Route::get('/labexam', [LabExamController::class, 'insert']);
        //add doctors labexam
        Route::post('/create_labexam', [LabExamController::class, 'create'])->name('labexam');
        //edit labexam
        Route::get('/labexam/{labexam}/edit', [LabExamController::class, 'edit']);
        //update code lab exam
        Route::put('/updatelabexam/{exam}', [LabExamController::class, 'update']);

        //show page create doctor agreement
        Route::get('/center', [CenterController::class, 'insert']);
        //add agreement
        Route::post('/create_center', [CenterController::class, 'create'])->name('center');
        //edit agreement
        Route::get('/center/{center}/edit', [CenterController::class, 'edit']);
        //update code agreement
        Route::put('/updatecenter/{center}', [CenterController::class, 'update']);
        //destroy agreementagreement
        Route::delete('/centers/{center}', [CenterController::class, 'destroy']);
        //show page dashboard
        Route::get('/dashboard16', [CenterController::class, 'index2']);
        Route::get('/lecture', [LectureController::class, 'insert']);
        //add doctors achievement
        Route::post('/create_lecture', [LectureController::class, 'create'])->name('lecture');
        //edit department
        Route::get('/lecture/{lecture}/edit', [LectureController::class, 'edit']);
        //update code after head
        Route::put('/updatelecture/{lecture}', [LectureController::class, 'update']);
        //destroy department

        Route::post('search', [DoctorsController::class, 'search']);
        //show page create doctor agreement
        Route::get('/magazininsert', [MagazinController::class, 'insert']);
        //add agreement
        Route::post('/create_magazin', [MagazinController::class, 'create'])->name('magazin');
        //edit agreement
        Route::get('/magazin/{magazin}/edit', [MagazinController::class, 'edit']);
        //update code agreement
        Route::put('/updatemagzin/{magazin}', [MagazinController::class, 'update']);
        //destroy agreementagreement
        Route::delete('/magazins/{magazin}', [MagazinController::class, 'destroy']);
        //show page dashboard
        Route::get('/dashboard17', [MagazinController::class, 'index2']);
        //edit admindepart
        Route::get('/admindepart/{admindepart}/edit', [AdmindepartController::class, 'edit']);
        //update section1 image2
        Route::PUT('/updateadmin/{admindepart}', [AdmindepartController::class, 'update']);
        //show dashboardmain
        Route::get('/dashboard', [MashController::class, 'index2']);
        //destroy department
        Route::delete('/social/{social}/delete', [DoctorsController::class, 'destroysocial']);
        //show page dashboard
        Route::get('/dashboard18', [FeesController::class, 'index2']);


        Route::get('/dashboard21', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'insert']);
//add doctors achievement
Route::post('/create_user', [UserController::class, 'create'])->name('user');
//edit department
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
//update code after head
Route::put('/updateuser/{user}', [UserController::class, 'update']);
//destroy department
Route::delete('/users/{user}', [UserController::class, 'destroy']);
        //show exam lab  about department
        return view('test-success');
    });
});
Route::get('/dashboard', [MashController::class, 'index2'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard10', [ExamController::class, 'index'])->middleware(['auth','admin']);
    //dashboard doctor
    Route::get('/dashboard4', [DoctorsController::class, 'index'])->middleware(['auth','admin']);
    //dashboard activity
    Route::get('/dashboard5', [ActivityController::class, 'index'])->middleware(['auth','admin']);
    //dashboard type achievement
    Route::get('/dashboard6', [TypeahievementController::class, 'index'])->middleware(['auth','admin']);
    //dashboard type social
    Route::get('/dashboard7', [TypeController::class, 'index'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard8', [LectureController::class, 'index'])->middleware(['auth','admin']);
    //dashboard lecture
    Route::get('/dashboard9', [LabExamController::class, 'index'])->middleware(['auth','admin']);
    //dashboard admin depart
    Route::get('/dashboard11', [AdmindepartController::class, 'index2'])->middleware(['auth','admin']);
    //dashboard faculty
    Route::get('/dashboard2', [UniversitiesController::class, 'indexdash'])->middleware(['auth','admin']);
    //dashboard department
    Route::get('/dashboard3', [DepartmentController::class, 'index'])->middleware(['auth','admin']);
    //edit department
    Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->middleware(['auth','admin']);
    //show insert department
    Route::get('insert_department', [DepartmentController::class, 'insert'])->middleware(['auth','admin']);
    //add department
    Route::post('create_department', [DepartmentController::class, 'create'])->middleware(['auth','admin']);
    //update department
    Route::put('/department/{department}', [DepartmentController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/doctors/{doctor}', [DoctorsController::class, 'destroy'])->middleware(['auth','admin']);

    //show page lecturre
    Route::get('insert_doctor', [DoctorsController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors
    Route::post('/create_doctor', [DoctorsController::class, 'create'])->middleware(['auth','admin']);
    //edit department
    Route::get('/doctor/{doctor}/edit', [DoctorsController::class, 'edit'])->middleware(['auth','admin']);
    //update code after head
    Route::post('/doctor/{doctor}', [DoctorsController::class, 'update'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia'])->middleware(['auth','admin']);
    //add doctors

    //show page create doctor agreement
    Route::get('/agreement', [AgreementController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_agreement', [AgreementController::class, 'create'])->name('agreemnet')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/agreement/{agreement}/edit', [AgreementController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updateagreement/{agreement}', [AgreementController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/agreements/{agreement}', [AgreementController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard12', [AgreementController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/compus', [CompusController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_compus', [CompusController::class, 'create'])->middleware(['auth','admin']);
    //edit agreement
    Route::get('/compus/{compus}/edit', [CompusController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatecompus/{compus}', [CompusController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/compus/{compus}', [CompusController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard14', [CompusController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/achievement/{doctor}/add', [AchievementController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors achievement
    Route::post('/create_achievement', [AchievementController::class, 'create'])->name('achievements')->middleware(['auth','admin']);
    //edit department
    Route::get('/achievement/{achievement}/edit', [AchievementController::class, 'edit'])->middleware(['auth','admin']);

    //update code after head
    Route::put('/updateachievement/{achievement}', [AchievementController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/achievementss/{achievement}', [AchievementController::class, 'destroy'])->middleware(['auth','admin']);
    //show page create doctor social media
    Route::get('/activity', [ActivityController::class, 'insert'])->middleware(['auth','admin']);
    //add doctors achievement
    Route::post('/create_activity', [ActivityController::class, 'create'])->name('activities')->middleware(['auth','admin']);
    //edit department
    Route::get('/activity/{activity}/edit', [ActivityController::class, 'edit'])->middleware(['auth','admin']);
    //update code after head
    Route::put('/updateaactivity/{activity}', [ActivityController::class, 'update'])->middleware(['auth','admin']);
    //destroy department
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/lab', [LabController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_lab', [LabController::class, 'create'])->name('labs')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/lab/{lab}/edit', [LabController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatelab/{lab}', [LabController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/labs/{lab}', [LabController::class, 'destroy'])->middleware(['auth','admin']);
    //show page dashboard
    Route::get('/dashboard13', [LabController::class, 'index2'])->middleware(['auth','admin']);
    //show page create doctor agreement
    Route::get('/feesinsert', [FeesController::class, 'insert'])->middleware(['auth','admin']);
    //add agreement
    Route::post('/create_fees', [FeesController::class, 'create'])->name('feescreste')->middleware(['auth','admin']);
    //edit agreement
    Route::get('/fees/{fees}/edit', [FeesController::class, 'edit'])->middleware(['auth','admin']);
    //update code agreement
    Route::put('/updatefees/{fees}', [FeesController::class, 'update'])->middleware(['auth','admin']);
    //destroy agreementagreement
    Route::delete('/feess/{fees}', [FeesController::class, 'destroy'])->middleware(['auth','admin']);

        Route::get('/mashes/{mash}/edit', [MashController::class, 'edit'])->middleware(['auth','admin']);
        //update code after head
        Route::put('/mash/{mash}', [MashController::class, 'update'])->middleware(['auth','admin']);
        //editsection1 image2
        Route::get('/mash2/{mash}/edit', [MashController::class, 'edit_sec1'])->middleware(['auth','admin']);
        //update section1 image2
        Route::post('/mash2/{mash}', [MashController::class, 'update_sec1'])->middleware(['auth','admin']);
        //editsection2
        Route::get('/mash3/{mash}/edit', [MashController::class, 'edit_sec2'])->middleware(['auth','admin']);
        //update section2
        Route::put('/mash3/{mash}', [MashController::class, 'update_sec2'])->middleware(['auth','admin']);
        //show page  exam create
        Route::get('/exam', [ExamController::class, 'insert'])->middleware(['auth','admin']);
        //add exam
        Route::post('/create_exam', [ExamController::class, 'create'])->name('exam')->middleware(['auth','admin']);
        //edit exam
        Route::get('/exam/{exam}/edit', [ExamController::class, 'edit'])->middleware(['auth','admin']);
        //update exam
        Route::put('/updateexam/{exam}', [ExamController::class, 'update'])->middleware(['auth','admin']);
        //destroy exam
        Route::delete('/exams/{exam}', [ExamController::class, 'destroy'])->middleware(['auth','admin']);
        //show page create doctor agreement
        Route::get('/paper', [PaperController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_paper', [PaperController::class, 'create'])->name('paper')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/paper/{paper}/edit', [PaperController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatepaper/{paper}', [PaperController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/paper/{paper}', [PaperController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard15', [PaperController::class, 'index2'])->middleware(['auth','admin']);

        //show page create lab exam
        Route::get('/labexam', [LabExamController::class, 'insert'])->middleware(['auth','admin']);
        //add doctors labexam
        Route::post('/create_labexam', [LabExamController::class, 'create'])->name('labexam')->middleware(['auth','admin']);
        //edit labexam
        Route::get('/labexam/{labexam}/edit', [LabExamController::class, 'edit'])->middleware(['auth','admin']);
        //update code lab exam
        Route::put('/updatelabexam/{exam}', [LabExamController::class, 'update'])->middleware(['auth','admin']);
        //destroy lab exam
        Route::delete('/labexams/{exam}', [LabExamController::class, 'destroy'])->middleware(['auth','admin']);
        //show page create doctor agreement
        Route::get('/center', [CenterController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_center', [CenterController::class, 'create'])->name('center')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/center/{center}/edit', [CenterController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatecenter/{center}', [CenterController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/centers/{center}', [CenterController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard16', [CenterController::class, 'index2'])->middleware(['auth','admin']);
        Route::get('/lecture', [LectureController::class, 'insert'])->middleware(['auth','admin']);
        //add doctors achievement
        Route::post('/create_lecture', [LectureController::class, 'create'])->name('lecture')->middleware(['auth','admin']);
        //edit department
        Route::get('/lecture/{lecture}/edit', [LectureController::class, 'edit'])->middleware(['auth','admin']);
        //update code after head
        Route::put('/updatelecture/{lecture}', [LectureController::class, 'update'])->middleware(['auth','admin']);
        //destroy department
        Route::delete('/lectures/{lecture}', [LectureController::class, 'destroy'])->middleware(['auth','admin']);
        Route::post('search', [DoctorsController::class, 'search'])->middleware(['auth','admin']);
        //show page create doctor agreement
        Route::get('/magazininsert', [MagazinController::class, 'insert'])->middleware(['auth','admin']);
        //add agreement
        Route::post('/create_magazin', [MagazinController::class, 'create'])->name('magazin')->middleware(['auth','admin']);
        //edit agreement
        Route::get('/magazin/{magazin}/edit', [MagazinController::class, 'edit'])->middleware(['auth','admin']);
        //update code agreement
        Route::put('/updatemagzin/{magazin}', [MagazinController::class, 'update'])->middleware(['auth','admin']);
        //destroy agreementagreement
        Route::delete('/magazins/{magazin}', [MagazinController::class, 'destroy'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard17', [MagazinController::class, 'index2'])->middleware(['auth','admin']);
        //edit admindepart
        Route::get('/admindepart/{admindepart}/edit', [AdmindepartController::class, 'edit'])->middleware(['auth','admin']);
        //update section1 image2
        Route::PUT('/updateadmin/{admindepart}', [AdmindepartController::class, 'update'])->middleware(['auth','admin']);
        //show dashboardmain
        Route::get('/dashboard', [MashController::class, 'index2'])->middleware(['auth','admin']);
        //destroy department
        Route::delete('/social/{social}/delete', [DoctorsController::class, 'destroysocial'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard18', [FeesController::class, 'index2'])->middleware(['auth','admin']);


        Route::get('/dashboard21', [UserController::class, 'index'])->middleware(['auth','admin']);
Route::get('/user', [UserController::class, 'insert'])->middleware(['auth','admin']);
//add doctors achievement
Route::post('/create_user', [UserController::class, 'create'])->name('user')->middleware(['auth','admin']);
//edit department
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->middleware(['auth','admin']);
//update code after head
Route::put('/updateuser/{user}', [UserController::class, 'update'])->middleware(['auth','admin']);
//destroy department
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth','admin']);

   //show page create doctor agreement
   Route::get('/compusinsert', [CompusController::class, 'insert'])->middleware(['auth','admin']);
   //add agreement
   Route::post('/create_compus', [CompusController::class, 'create'])->middleware(['auth','admin']);
   //edit agreement
   Route::get('/compus/{compus}/edit', [CompusController::class, 'edit'])->middleware(['auth','admin']);
   //update code agreement
   Route::put('/updatecompus/{compus}', [CompusController::class, 'update'])->middleware(['auth','admin']);
   //destroy agreementagreement
   Route::delete('/compus/{compus}', [CompusController::class, 'destroy'])->middleware(['auth','admin']);
   //show page dashboard
     //show page create doctor agreement
     Route::get('/paper', [PaperController::class, 'insert'])->middleware(['auth','admin']);
     //add agreement
     Route::post('/create_paper', [PaperController::class, 'create'])->name('paper')->middleware(['auth','admin']);
     //edit agreement
     Route::get('/paper/{paper}/edit', [PaperController::class, 'edit'])->middleware(['auth','admin']);
     //update code agreement
     Route::put('/updatepaper/{paper}', [PaperController::class, 'update'])->middleware(['auth','admin']);
     //destroy agreementagreement
     Route::delete('/paper/{paper}', [PaperController::class, 'destroy'])->middleware(['auth','admin']);
  //show page create doctor agreement
  Route::get('/center', [CenterController::class, 'insert'])->middleware(['auth','admin']);
  //add agreement
  Route::post('/create_center', [CenterController::class, 'create'])->name('center')->middleware(['auth','admin']);
  //edit agreement
  Route::get('/center/{center}/edit', [CenterController::class, 'edit'])->middleware(['auth','admin']);
  //update code agreement
  Route::put('/updatecenter/{center}', [CenterController::class, 'update'])->middleware(['auth','admin']);
  //destroy agreementagreement
  Route::delete('/centers/{center}', [CenterController::class, 'destroy'])->middleware(['auth','admin']);
//add agreement
Route::post('/create_magazin', [MagazinController::class, 'create'])->name('magazin')->middleware(['auth','admin']);
//edit agreement
Route::get('/magazin/{magazin}/edit', [MagazinController::class, 'edit'])->middleware(['auth','admin']);
//update code agreement
Route::put('/updatemagzin/{magazin}', [MagazinController::class, 'update'])->middleware(['auth','admin']);
//destroy agreementagreement
Route::delete('/magazins/{magazin}', [MagazinController::class, 'destroy'])->middleware(['auth','admin']);
      //show page create doctor agreement
      Route::get('/magazininsert', [MagazinController::class, 'insert'])->middleware(['auth','admin']);
Route::get('/dashboard18', [FeesController::class, 'index2'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard17', [MagazinController::class, 'index2'])->middleware(['auth','admin']);
        //show page dashboard
        Route::get('/dashboard16', [CenterController::class, 'index2'])->middleware(['auth','admin']);
   //show page dashboard
   Route::get('/dashboard15', [PaperController::class, 'index2'])->middleware(['auth','admin']);

Route::get('/dashboard21', [UserController::class, 'index'])->middleware(['auth','admin']);
Route::get('/user', [UserController::class, 'insert'])->middleware(['auth','admin']);
//add doctors achievement
Route::post('/create_user', [UserController::class, 'create'])->name('user')->middleware(['auth','admin']);
//edit department
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->middleware(['auth','admin']);
//update code after head
Route::put('/updateuser/{user}', [UserController::class, 'update'])->middleware(['auth','admin']);
//destroy department
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth','admin']);



//edit department
Route::get('/achievement/{achievement}/edit', [AchievementController::class, 'edit'])->middleware(['auth', 'doctor']);;
//update code after head
Route::put('/updateachievement/{achievement}', [AchievementController::class, 'update'])->middleware(['auth', 'doctor']);;
//destroy department
Route::delete('/achievementss/{achievement}', [AchievementController::class, 'destroy'])->middleware(['auth', 'doctor']);;
//show page create doctor social media
Route::get('/achievement/{doctor}/add', [AchievementController::class, 'insert'])->middleware(['auth', 'doctor']);;

//show social  for doctors
Route::get('/social/{doctor}/show', [DoctorsController::class, 'social'])->middleware(['auth', 'doctor']);;

Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia'])->middleware(['auth', 'doctor']);;
//edit department
Route::get('/docs/{doctor}/edit', [DoctorsController::class, 'editdoc'])->middleware(['auth', 'doctor']);;
//update code after head
Route::post('/docs/{doctor}', [DoctorsController::class, 'update'])->middleware(['auth', 'doctor']);;
//show ahievement  for doctors
Route::get('/achievement/{doctor}/show', [AchievementController::class, 'indexdoc'])->middleware(['auth', 'doctor']);;



//add doctors achievement
Route::post('/create_achievement', [AchievementController::class, 'create'])->name('achievements');
//show page create doctor agreement
Route::get('/subject/{doctor}', [SubjectController::class, 'insert'])->middleware(['auth', 'doctor']);
//add agreement
Route::post('/create_subject', [SubjectController::class, 'create'])->middleware(['auth', 'doctor']);
//edit agreement
Route::get('/subject/{subject}/edit', [SubjectController::class, 'edit'])->middleware(['auth', 'doctor']);
//update code agreement
Route::put('/updatesubject/{subject}', [SubjectController::class, 'update'])->middleware(['auth', 'doctor']);
//destroy agreementagreement
Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->middleware(['auth', 'doctor']);
//show page dashboard
Route::get('/dashboard19/{doctor}', [SubjectController::class, 'index2'])->middleware(['auth', 'doctor']);














// -------------  start doctor auth ---------------
Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::get('/test-success-doc', function () {
        //edit department
        Route::get('/docs/{doctor}/edit', [DoctorsController::class, 'editdoc']);
        //update code after head
        Route::post('/docs/{doctor}', [DoctorsController::class, 'update']);
        Route::get('/doctorsocial/{doctor}/add', [DoctorsController::class, 'insert_socialmedia']);
        return view('test-success-doc');
    });
});










Route::get('/dashboard10/{facutly}', [ExamController::class, 'index'])->middleware(['auth', 'facutly']);
//show page  exam create
Route::get('/exam', [ExamController::class, 'insert'])->middleware(['auth', 'facutly']);
//add exam
Route::post('/create_exam', [ExamController::class, 'create'])->name('exam')->middleware(['auth', 'facutly']);
//edit exam
Route::get('/exam/{exam}/edit', [ExamController::class, 'edit'])->middleware(['auth', 'facutly']);
//update exam
Route::put('/updateexam/{exam}', [ExamController::class, 'update'])->middleware(['auth', 'facutly']);
//destroy exam
Route::delete('/exams/{exam}', [ExamController::class, 'destroy'])->middleware(['auth', 'facutly']);
         //dashboard lecture
  Route::get('/dashboard8/{facutly}', [LectureController::class, 'indexp']);
  Route::get('/lecture', [LectureController::class, 'insert'])->middleware(['auth', 'facutly']);
  //add doctors achievement
  Route::post('/create_lecture', [LectureController::class, 'create'])->name('lecture')->middleware(['auth', 'facutly']);
  //edit department
  Route::get('/lecture/{lecture}/edit', [LectureController::class, 'edit'])->middleware(['auth', 'facutly']);
  //update code after head
  Route::put('/updatelecture/{lecture}', [LectureController::class, 'update'])->middleware(['auth', 'facutly']);
  //destroy department
  Route::delete('/lectures/{lecture}', [LectureController::class, 'destroy'])->middleware(['auth', 'facutly']);
//show page create lab exam
Route::get('/labexam', [LabExamController::class, 'insert'])->middleware(['auth', 'facutly']);
//add doctors labexam
Route::post('/create_labexam', [LabExamController::class, 'create'])->name('labexam')->middleware(['auth', 'facutly']);
//edit labexam
Route::get('/labexam/{labexam}/edit', [LabExamController::class, 'edit'])->middleware(['auth', 'facutly']);
//update code lab exam
Route::put('/updatelabexam/{exam}', [LabExamController::class, 'update'])->middleware(['auth', 'facutly']);
//destroy lab exam
Route::delete('/labexams/{exam}', [LabExamController::class, 'destroy'])->middleware(['auth', 'facutly']);
//dashboard lecture
Route::get('/dashboard9/{facutly}', [LabExamController::class, 'indexp'])->middleware(['auth', 'facutly']);

      //edit faculty


//show page create doctor agreement
Route::get('/studentadd', [StudentfirstController::class, 'insert'])->middleware(['auth', 'facutly']);
//add agreement
Route::post('/create_student', [StudentfirstController::class, 'create']);
//edit agreement
Route::get('/student/{student}/edit', [StudentfirstController::class, 'edit'])->middleware(['auth', 'facutly']);
//update code agreement
Route::put('/updatestudent/{student}', [StudentfirstController::class, 'update'])->middleware(['auth', 'facutly']);
//destroy agreementagreement
Route::delete('/students/{student}', [StudentfirstController::class, 'destroy'])->middleware(['auth', 'facutly']);
//show page dashboard
Route::get('/dashboard20/{facutly}', [StudentfirstController::class, 'index'])->middleware(['auth', 'facutly']);

//destroy department
Route::delete('/doctors/{doctor}', [DoctorsController::class, 'destroy'])->middleware(['auth', 'facutly']);

//show page lecturre
Route::get('insert_doctor', [DoctorsController::class, 'insert'])->middleware(['auth', 'facutly']);
//add doctors
Route::post('/create_doctor', [DoctorsController::class, 'create'])->middleware(['auth', 'facutly']);
//edit department
Route::get('/doctor/{doctor}/edit', [DoctorsController::class, 'edit'])->middleware(['auth', 'facutly']);
//update code after head
Route::post('/doctor/{doctor}', [DoctorsController::class, 'update'])->middleware(['auth', 'facutly']);
//dashboard doctor
Route::get('/dashboard4/{facutly}', [DoctorsController::class, 'indexp'])->middleware(['auth', 'facutly']);

Route::group(['middleware' => ['auth', 'facutly']], function () {
    Route::get('/test-success-facu', function () {
        return view('test-success-facu');
   //dashboard lecture

    });
});


Route::get('/Facutlyp/{facutly}/show', [SubjectController::class, 'indexp'])->middleware(['auth', 'student']);

Route::get('/subjectp/{facutly}/show', [SubjectController::class, 'subjectp'])->middleware(['auth', 'student']);
Route::get('/subjectdepartp/{department}/show', [SubjectController::class, 'departmentp'])->middleware(['auth', 'student']);

// -------------  start student auth ---------------
Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/test-success-stu', function () {
        // //show page dashboard
        // Route::get('/subjectp/{facutly}/show', [SubjectController::class, 'subjectp']);
        // Route::get('/subjectdepartp/{department}/show', [SubjectController::class, 'departmentp']);

        //show page dashboard
        Route::get('/subject/{facutly}/show', [SubjectController::class, 'subject']);
        //show page dashboard
        Route::get('/subjectt/{department}', [SubjectController::class, 'subject']);
        return view('test-success-stu');
    });
});










// -------------  start student auth ---------------
Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/test-success-stu', function () {
        return view('test-success-stu');
    });
});






// -------------  start x-team auth ---------------
Route::group(['middleware' => ['auth', 'xteam']], function () {
    Route::get('/test-success-xteam', function () {
        return view('test-success-xteam');
    });
});




Route::get('/test', function () {
    return view('test');
});
//show page dashboard
Route::get('/subject/{facutly}/show', [SubjectController::class, 'subject']);
Route::get('/subjectdepart/{department}/show', [SubjectController::class, 'department']);






















// testing
Route::get('/agreenment-inner' , function(){
    return view('agreement-inner');
});