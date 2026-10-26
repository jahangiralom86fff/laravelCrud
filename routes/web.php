<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ExamScheduleController;
use Illuminate\Support\Facades\DB;


//apply route//
Route::get('/apply', function(){
    return view('layout.index');
})->name('apply');

//login page route//
// Login
Route::get('/create-admin', function (){
    $admin = new Admin();
    $admin->name = 'admin';
    $admin->password = Hash::make('12345678');
    $admin->save();

    return 'Admin created successfully';
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
//login route end//

// Dashboard
Route::get('/dashboard', function () {
    return view('layout.dashboard');
});
Route::get('/dashboard', function () {
    return view('layout.dashboard');
})->name('layout.dashboard');

//backhome route//
Route::get('/dashboard', function(){
    return view('layout.dashboard');
})->name('dashboard');

//atten route//
Route::get('/atten', function(){
    return view('layout.atten');
})->name('atten');

//payment module //
Route::get('/create', function(){
    return view('layout.payment.create');
})->name('create');
//payment module End//

//profile route//
Route::get('/show', function(){
    return view('layout.show');
})->name('show');
//login page route End//

//index page route start//
Route::view('/index', 'layout.index')->name('index');
Route::post('/student', [StudentController::class, 'store'])->name('student');
Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('/students', [StudentController::class, 'index'])->name('student.list');

//edit page route//
Route::get('/Edit/{id}', [StudentController::class, 'edit'])->name('Edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('updated');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('delete');
//edit page route end//

//payment module start//
Route::post('/addmission', [AdmissionController::class, 'store'])->name('addmission');
//view route//
Route::get('/admissions', [AdmissionController::class, 'index'])->name('admission.index');

//edit//
Route::get('admission/edit/{id}', [AdmissionController::class, 'edit'])->name('admission.edit');
Route::put('admission/update/{id}', [AdmissionController::class, 'update'])->name('admission.update');
//delete //
Route::get('/admission/delete/{id}', [AdmissionController::class, 'delete'])->name('admission.delete');
//payment module End//

//scholarship start//
Route::resource('scholarship', ScholarshipController::class)
->only(['index', 'store']);
Route::resource('scholarship', ScholarshipController::class);
//schloarship end//

//profile student module//
Route::get('/profile', function() {
    return view('layout.profile.create');
})->name('profile');

//create page route//
Route::post('/profile', [ProfileController::class, 'store'])->name('student_profile');
//index view page route//
Route::get('/student-profile', [ProfileController::class, 'index'])->name('profile.index');
//student profile module//

//setting module start now//
Route::get('/setting', function(){
    return view('layout.setting.index');
})->name('setting');

Route::get('/notice', function(){
    return view('layout.setting.notice');
})->name('notice');
//setting module End//

//downladed module start now//
Route::get('/download/pdfview', [DownloadController::class, 'pdfview'])->name('download.pdfview');
Route::get('/download/index', [DownloadController::class, 'index'])->name('download.index');
Route::resource('download', DownloadController::class);
//downloded module End//

//shedule module//
Route::get('/schdule/create', [ScheduleController::class, 'create'])->name('shedule.create');
Route::get('/exam-schedule/create',[ExamScheduleController::class, 'create'])->name('shedule.create');

Route::post('/exam-schedule',[ExamScheduleController::class, 'store'])->name('exam_schedule.store');
Route::resource('schdule', ExamScheduleController::class);
//shedule module end//

