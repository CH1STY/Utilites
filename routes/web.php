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

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'LoginController@index')->name('login');
Route::get('login/otp', 'LoginController@indexForOtp')->name('otplogin');
Route::post('login/otp', 'LoginController@sendOTP');
Route::post('login/verifyOTP', 'LoginController@verifyOTP');

Route::post('login', 'LoginController@login')->name('login');


Route::get('dashboard', 'DashboardController@index')->name('dashboard');


Route::get('registration', 'RegistrationController@index')->name('registration');

Route::post('registration', 'RegistrationController@store')->name('registration');

Route::post('update/image','RegistrationController@updateImage')->name('update_image');



Route::get('user/edit', 'UserController@editView')->name('user.edit');
Route::post('user/edit', 'UserController@update');

Route::get('search','SearchController@index')->name('search');


Route::get('logout', 'LogoutController@index')->name('logout');

Route::post('volunteer/info/update','VolunteerController@update')->name('volunteer.update');