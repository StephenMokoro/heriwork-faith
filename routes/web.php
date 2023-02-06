<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\joinwaitinglist;
use App\Http\Controllers\loginAuth;
use Illuminate\Support\Facades\Route;
use App\Models\employer;
use RealRashid\sweetAlert\Facades\Alert;



Route::get('/', function () {
    return view('welcome');
});

Route::view('service', 'service');
Route::get('/index', [contactController::class, 'addview']);
Route::post('/index', [contactController::class, 'addcontact']);

Route::get('waitinglist', function(){
    return view('joinwaitinglist');
});

Route::post('waitinglist', function(){
   $employ = new employer();

   $employ->firstname = request('firstname');
   $employ->lastname = request('lastname');
   $employ->email = request('email');
   $employ->phonenumber = request('phonenumber');
   $employ->profession= request('profession');
   $employ->profile= request('profile');

   $employ->save();
   return redirect('index');
});
Route::view('login','login');

Route::post('login',[loginAuth::class, 'index']);
