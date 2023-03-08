<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\internshipController;
use App\Http\Controllers\ViewEmployerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViewStudentController;
use App\Http\Controllers\workstudyController;
use App\Http\Controllers\Select2AutocompleteController;
use App\Models\Expressiontable;

Route::get('user-registration',[EmployerController::class,'index'] );

Route::post('user-store', [EmployerController::class,'userPostRegistration'] );

Route::get('user-login', [EmployerController::class,'userLoginIndex']);

Route::post('login',[EmployerController::class,'userPostLogin'] );

Route::get('dashboard',[EmployerController::class,'dashboard'] );

Route::get('/logout', [EmployerController::class,'logout']);


Route::view('pending','employer.pending');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',function(){
    return view('welcome');

});

Route::post('/contact',function(){
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



Route::controller(StudentController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');
    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});
 
Route::view('viewemployer','auth.viewemployer');

Route::view('student_registration','student.student_registration');
Route::view('employer_registration','employer.employer_registration');
Route::view('org_registration','organization.org_registration');
Route::view('student_login','student.student_login');

Route::view('student_login','student.student_login');
Route::view('employer_login','employer.employer_login');
Route::view('org_login','organization.org_login');
Route::view('student_login','student.student_login');


Route::resource('students', ViewStudentController::class);
Route::resource('employers', ViewEmployerController::class);

Route::view('homes','employer.home');
Route::view('button','button');
Route::view('signup','signup');

Route::get('select2', [Select2AutocompleteController::class,'index']);
Route::get('/select2-autocomplete-ajax', [Select2AutocompleteController::class,'dataAjax']);

Route::view('signin','signin');
Route::resource('post', internshipController::class);
// Route::get('/login',[Expressiontable::class,'login']);
Route::post('/check',[Expressiontable::class,'check_user']);

Route::view('card','card');