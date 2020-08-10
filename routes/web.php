<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/site','layouts.site');
Route::view('/index','site.index');
Route::view('/lawyers','site.lawyers');
Route::view('/lawyer/profile','site.profile');
Route::view('/consultation','site.consultation');
Route::view('/incoming/consultations','site.incomingConsultations');
Route::view('/reply/consultation','site.reply');
Route::view('/beneficiary/profile','site.beneficiary.beneficiary');
Route::view('/beneficiary/consultation','site.beneficiary.consultation');
Route::view('/register/user','site.auth.registerUser');
Route::view('/register/lawyer','site.auth.registerLawyer');
Route::view('/login','site.auth.login');

