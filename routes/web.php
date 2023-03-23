<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ExpressionformController;
use App\Http\Controllers\Intership_jobController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Internship_job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// contact part
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contactpage', [ContactController::class, 'contactpage'])->name('contact-page');

Route::view('signup', 'signup');
Route::view('signin', 'signin');
// Employer registration and login

Route::get('employer_details', [EmployerController::class, 'index'])->name('employer.index');
Route::get('employer_details', [EmployerController::class, 'createStepOne'])->name('employer.create.step.one');
Route::post('employer_details', [EmployerController::class, 'postStepOne'])->name('employer.post.step.one');

Route::get('secure_account', [EmployerController::class, 'createStepTwo'])->name('employer.create.step.two');
Route::post('secure_account',  [EmployerController::class, 'postStepTwo'])->name('employer.post.step.two');
Route::get('employerlogin', [EmployerController::class, 'login'])->middleware('alreadyloggedin')->name('login');
Route::post('login_user', [EmployerController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [EmployerController::class, 'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout', [EmployerController::class, 'logout'])->name('employer.logout');

// Student login

Route::get('student_details', [StudentController::class, 'index'])->name('details.index');
Route::get('student-details', [StudentController::class, 'dataAjax']);
Route::get('student_details', [StudentController::class, 'collegeChoice'])->name('student.college_choice');
Route::post('student_details', [StudentController::class, 'postCollegechoice'])->name('student.college_choice.post');
Route::get('student_country', [StudentController::class, 'studentCountry'])->name('student.student_country');
Route::get('country_list',    [StudentController::class, 'countryList'])->name('student.student_country');
Route::post('student_country', [StudentController::class, 'poststudentcountry'])->name('student.student_country.post');
Route::get('personal_details', [StudentController::class, 'PersonalDetails'])->name('student.personal_details');
Route::post('personal_details', [StudentController::class, 'postpersonaldetail'])->name('student.personal_details.post');
Route::get('password_details', [StudentController::class, 'PasswordDetail'])->name('student.password_details');
Route::post('password_details', [StudentController::class, 'Postpassworddetail'])->name('student.password_details.post');
Route::get('/studentlogin', [StudentController::class, 'login'])->middleware('studentalreadyloggedin');
Route::post('/student-login', [StudentController::class, 'loginUser'])->name('student-login');
Route::get('/studentdashboard', [StudentController::class, 'dashboard'])->middleware('studentisLoggedIn');
Route::get('/studentlogout', [StudentController::class, 'logout']);

// internship

Route::get('internship', [Intership_jobController::class, 'index'])->name('internship.index');

Route::get('create-step-one', [Intership_jobController::class, 'createStepOne'])->name('internship.create.step.one');
Route::post('create-step-one', [Intership_jobController::class, 'postCreateStepOne'])->name('internship.create.step.one.post');

Route::get('create-step-two', [Intership_jobController::class, 'createStepTwo'])->name('internship.create.step.two');
Route::post('create-step-two',  [Intership_jobController::class, 'postCreateStepTwo'])->name('internship.create.step.two.post');

Route::get('create-step-three', [Intership_jobController::class, 'createStepThree'])->name('internship.create.step.three');
Route::post('create-step-three', [Intership_jobController::class, 'postCreateStepThree'])->name('internship.create.step.three.post');

Route::get('create-step-four', [Intership_jobController::class, 'createStepFour'])->name('internship.create.step.four');
Route::post('create-step-four', [Intership_jobController::class, 'postCreateStepFour'])->name('internship.create.step.four.post');


Route::get('create-step-five', [Intership_jobController::class, 'createStepFive'])->name('internship.create.step.five');
Route::post('create-step-five', [Intership_jobController::class, 'postCreateStepFive'])->name('internship.create.step.five.post');

Route::get('create-step-six', [Intership_jobController::class, 'createStepSix'])->name('internship.create.step.six');
    Route::post('create-step-six', [Intership_jobController::class, 'postCreateStepSix'])->name('internship.create.step.six.post');


Route::get('create-step-three', [Intership_jobController::class, 'show'])->name('internship.create.step.three');
Route::get('jobcategorylist', [Intership_jobController::class, 'jobcategorylist']);
// Route::get('create-step-two',[Internship_jobController::class,'createStepTwo']);
// Expression form
Route::get('expressionform', [ExpressionformController::class, 'expression'])->name('expression');
Route::post('expressionform', [ExpressionformController::class, 'expressionpage'])->name('expression-page');
Route::get('country_list',  [ExpressionformController::class, 'countryList'])->name('expression-page');

Route::get('partner', [PartnerController::class, 'partner'])->name('partner');
Route::post('partner', [PartnerController::class, 'partnerpage'])->name('partner-page');

Route::view('home', 'Employer.employer-home');

Route::get('/loadmore', [Intership_jobController::class,'load']);
Route::post('/loadmore/load_data', [Intership_jobController::class,'load_data'])->name('loadmore.load_data');

