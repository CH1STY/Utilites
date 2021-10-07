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




Route::get('registration', 'RegistrationController@index')->name('registration');

Route::post('registration', 'RegistrationController@store')->name('registration');

Route::post('update/image', 'RegistrationController@updateImage')->name('update_image');

Route::post('change/password', 'UserController@changePassword')->name('change.password');



Route::get('user/edit', 'UserController@editView')->name('user.edit');
Route::post('user/edit', 'UserController@update');



Route::get('logout', 'LogoutController@index')->name('logout');

Route::post('volunteer/info/view/update', 'VolunteerController@update')->name('volunteer.update');

Route::get('volunteer/info/view', 'VolunteerController@view')->name('volunteer.view');


Route::middleware(['isWorkOngoing'])->group(function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('search', 'SearchController@index')->name('search');
    //Work Request routes
});

Route::post('work/request/{id}', 'WorkRequestController@requestWork')->name('work.request');
Route::post('work/fetchRequest/{v_id}', 'WorkRequestController@fetchWork')->name('work.fetch');

Route::get('work/isExist/{id}', 'WorkRequestController@isExist')->name('work.isExist');
Route::get('work/remove/{id}', 'WorkRequestController@removeRequest')->name('work.remove');

Route::get('work/accept/{id}', 'WorkRequestController@acceptReqeust')->name('work.accept');
Route::get('work/ongoing/{id}', 'WorkRequestController@ongoingView')->name('work.ongoing');

Route::get('work/chat/fetch/{workId}/{updatedAt}', 'WorkRequestController@chatFetch')->name('work.chat.fetch');

Route::post('work/chat/post/{workId}', 'WorkRequestController@chatSend')->name('work.chat.post');

//--------------
Route::get('work/payment', 'PaymentController@payment')->name('payment.payment');
Route::get('work/payment/review', 'ReviewController@review')->name('review.review');
