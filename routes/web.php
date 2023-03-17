<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\EmployerregistrationController;
use App\Http\Controllers\internshipController;
use App\Http\Controllers\InternshipController as ControllersInternshipController;
use App\Http\Controllers\ViewEmployerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\workstudyController;
use App\Http\Controllers\Select2AutocompleteController;
use App\Models\Expressiontable;


Route::view('pending', 'employer.pending');

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InternshipjobController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\StudentregistrationController;

// Route::get('internship', [InternshipjobController::class,'index'])->name('employer.internship.index');

// Route::get('internship/create-step-one', [InternshipjobController::class,'createStepOne'])->name('employer.internship.create.step.one');
// Route::post('products/create-step-one', [InternshipjobController::class,'postCreateStepOne'])->name('employer.internship.create.step.one.post');

// Route::get('internship/create-step-two', [InternshipjobController::class,'createStepTwo']) ->name('employer.internship.create.step.two');
// Route::post('internship/create-step-two', [InternshipjobController::class,'postCreateStepTwo'])->name('employer.internship.create.step.two.post');

// Route::get('internship/create-step-three', [InternshipjobController::class,'createStepThree'])->name('employer.internship.create.step.three');
// Route::post('products/create-step-three', [InternshipjobController::class,'postCreateStepThree'])->name('employer.internship.create.step.three.post');

// Route::get('internship/create-step-four', [InternshipjobController::class,'createStepFour'])->name('employer.internship.create.step.four');
// Route::post('internship/create-step-four', [InternshipjobController::class,'postCreateStepFour'])->name('employer.internship.create.step.four.post');

// Route::get('internship/create-step-five', [InternshipjobController::class,'createStepfive'])->name('employer.internship.create.step.five');
// Route::post('internship/create-step-five', [InternshipjobController::class,'postCreateStepFive'])->name('employer.internship.create.step.five.post');



Route::get('/contact', function () {
    return view('welcome');
});

Route::post('/contact', function () {
    $contact = new Contact();
    $contact->name = request('name');
    $contact->email = request('email');
    $contact->subject = request('subject');
    $contact->message = request('message');

    $contact->save();

    return view('welcome');
});

Route::get('adminlogin', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logouts', [AuthController::class, 'logouts'])->name('logouts');




Route::view('viewemployer', 'auth.viewemployer');

Route::view('student_registration', 'student.student_registration');
Route::view('employer_registration', 'employer.employer_registration');
Route::view('org_registration', 'organization.org_registration');
Route::view('student_login', 'student.student_login');

Route::view('student_login', 'student.student_login');
Route::view('employer_login', 'employer.employer_login');
Route::view('org_login', 'organization.org_login');
Route::view('student_login', 'student.student_login');


Route::resource('students', ViewStudentController::class);
Route::resource('employers', ViewEmployerController::class);

Route::view('homes', 'employer.home');
Route::view('button', 'button');
Route::view('signup', 'signup');

Route::get('select2', [Select2AutocompleteController::class, 'index']);
Route::get('/select2-autocomplete-ajax', [Select2AutocompleteController::class, 'dataAjax']);

Route::view('signin', 'signin');
Route::resource('post', internshipController::class);
// Route::get('/login',[Expressiontable::class,'login']);
Route::post('/check', [Expressiontable::class, 'check_user']);

Route::view('card', 'card');


Route::get('internship', [InternshipController::class, 'index'])->name('internship.index');

Route::get('employer/internship/create-step-one', [InternshipController::class, 'createStepOne'])->name('internship.create.step.one');
Route::post('employer/internship/create-step-one', [InternshipController::class, 'postCreateStepOne'])->name('internship.create.step.one.post');

Route::get('employer/internship/create-step-two', [InternshipController::class, 'createStepTwo'])->name('internship.create.step.two');
Route::post('employer/internship/create-step-two',  [InternshipController::class, 'postCreateStepTwo'])->name('internship.create.step.two.post');

Route::get('employer/internship/create-step-three', [InternshipController::class, 'createStepThree'])->name('internship.create.step.three');
Route::post('employer/internship/create-step-three', [InternshipController::class, 'postCreateStepThree'])->name('internship.create.step.three.post');


Route::get('employer/internship/create-step-four', [InternshipController::class, 'createStepFour'])->name('internship.create.step.four');
Route::post('employer/internship/create-step-four', [InternshipController::class, 'postCreateStepFour'])->name('internship.create.step.four.post');


Route::get('employer/internship/create-step-five', [InternshipController::class, 'createStepFive'])->name('internship.create.step.five');
Route::post('employer/internship/create-step-five', [InternshipController::class, 'postCreateStepFive'])->name('internship.create.step.five.post');

Route::get('employer/employer/internship/create-step-six', [InternshipController::class, 'createStepSix'])->name('internship.create.step.six');
Route::post('employer/employer/internship/create-step-six', [InternshipController::class, 'postCreateStepSix'])->name('internship.create.step.six.post');
Route::get('employer/internship/create-step-two', [internshipController::class, 'show'])->name('internship.create.step.two');



Route::get('employer_details', [EmployerregistrationController::class, 'index'])->name('internship.index');
Route::get('employer/employer_details/create-step-one', [EmployerregistrationController::class, 'createStepOne'])->name('employer.create.step.one');
Route::post('employer/employer_details/create-step-one', [EmployerregistrationController::class, 'postCreateStepOne'])->name('employer.create.step.one.post');

Route::get('employer/employer_details/create-step-two', [EmployerregistrationController::class, 'createStepTwo'])->name('employer.create.step.two');
Route::post('employer/employer_details/create-step-two',  [EmployerregistrationController::class, 'postCreateStepTwo'])->name('employer.create.step.two.post');
Route::get('employer/employer_details/create-step-three', [EmployerregistrationController::class, 'createStepThree'])->name('employer.create.step.three');
Route::post('employer/employer_details/create-step-three', [EmployerregistrationController::class, 'postCreateStepThree'])->name('employer.create.step.three.post');


Route::get('employerlogin', [EmployerregistrationController::class, 'login'])->middleware('alreadyloggedin');
Route::post('login-user', [EmployerregistrationController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [EmployerregistrationController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [EmployerregistrationController::class, 'logout']);


// Route::view('signin', 'signin');
// Route::view('registration', 'student.student_reg');
// Route::get('addstudent', [EmployerController::class, 'login']);



Route::get('/studentdashboard', [StudentregistrationController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [StudentregistrationController::class, 'logout']);
Route::view('college_choice', 'student.student_details.college_choice');
Route::view('student_country', 'student.student_details.student_country');
Route::view('personal_details', 'student.student_details.studentpersonal_details');


// student details route
Route::get('student_details', [StudentController::class, 'index'])->name('details.index');
Route::get('/student-details', [StudentController::class, 'dataAjax']);
Route::get('/student/student_details/college_choice', [StudentController::class, 'college_choice'])->name('student.college_choice');
Route::post('/student/student_details/college_choice', [StudentController::class, 'Postcollegechoice'])->name('student.college_choice.post');
Route::get('student_country', [StudentController::class, 'student_country'])->name('student.student_country');
Route::get('country_list', [StudentController::class, 'country_list'])->name('student.student_country');
Route::post('student_country',  [StudentController::class, 'poststudentcountry'])->name('student.student_country.post');
Route::get('personal_details', [StudentController::class, 'Personal_details'])->name('student.personal_details');
Route::post('personal_details', [StudentController::class, 'postpersonaldetail'])->name('student.personal_details.post');
Route::get('password_details', [StudentController::class, 'Password_details'])->name('student.password_details');
Route::post('password_details', [StudentController::class, 'Postpassworddetail'])->name('student.password_details.post');
// login section
Route::get('/studentlogin', [StudentController::class, 'login']);
Route::post('/student-login', [StudentController::class, 'loginUser'])->name('student-login');
Route::get('/studentdashboard', [StudentController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/studentlogout', [StudentController::class, 'logout']);
