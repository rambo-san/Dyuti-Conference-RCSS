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
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('optimize');
    echo $exitCode . ' - Cache cleared';
});
Route::get('/migration', function () {
    $exitCode = Artisan::call('migrate');
    echo $exitCode . ' - Migration';
});
Route::get('/','RegistrationController@home')->name('home');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration-open', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration_open');
Route::get('/registration2', [App\Http\Controllers\RegistrationController::class, 'registration2'])->name('registration2');
Route::get('/registration3', [App\Http\Controllers\RegistrationController::class, 'registration3'])->name('registration3');
Route::get('/registration4', [App\Http\Controllers\RegistrationController::class, 'registration4'])->name('registration4');
Route::get('/registration5', [App\Http\Controllers\RegistrationController::class, 'registration5'])->name('registration5');

Route::post('registration2/store-reg2', [
    'as' => 'registration2.store-reg2',
    'uses' => 'RegistrationController@storeReg2'
]);

Route::post('registration3/store-reg3', [
    'as' => 'registration3.store-reg3',
    'uses' => 'RegistrationController@storeReg3'
]);

Route::post('registration4/store-reg4', [
    'as' => 'registration4.store-reg4',
    'uses' => 'RegistrationController@storeReg4'
]);

Route::get('/about-us','FrontendController@aboutus')->name('aboutus');
Route::get('/accommodation','FrontendController@accommodation')->name('accommodation');
Route::get('/brochure','FrontendController@brochure')->name('brochure');
Route::get('/call-for-papers','FrontendController@call_for_papers')->name('call_for_papers');
Route::get('/contact-us','FrontendController@contact_us')->name('contact_us');
Route::post('/contact-save','FrontendController@contact_save')->name('contact_save');
Route::get('/important-dates','FrontendController@important_dates')->name('important_dates');
Route::get('/organizing-committee','FrontendController@organizing_committee')->name('organizing_committee');
Route::get('/partners','FrontendController@partners')->name('partners');
Route::get('/speakers','FrontendController@speakers')->name('speakers');
Route::get('/tourist-attraction','FrontendController@tourist_attraction')->name('tourist_attraction');
Route::get('/tracks','FrontendController@tracks')->name('tracks');
Route::get('/track-1','FrontendController@track_1')->name('track_1');
Route::get('/track-2','FrontendController@track_2')->name('track_2');
Route::get('/track-3','FrontendController@track_3')->name('track_3');
Route::get('/track-4','FrontendController@track_4')->name('track_4');
Route::get('/track-5','FrontendController@track_5')->name('track_5');
Route::get('/track-6','FrontendController@track_6')->name('track_6');
Route::get('/track-7','FrontendController@track_7')->name('track_7');
Route::get('/track-8','FrontendController@track_8')->name('track_8');
Route::get('/track-9','FrontendController@track_9')->name('track_9');
Route::get('/fee-details','FrontendController@fee_details')->name('fee_details');
Route::get('/travel-details','FrontendController@travel_details')->name('travel_details');

Route::post('registration-open/email-check', [
    'as' => 'email.registration',
    'uses' => 'RegistrationController@email_check'
]);
Route::get('registration-email-send/{id}', [
    'as' => 'email.send-registration-link',
    'uses' => 'RegistrationController@send_registration_link'
]);

Route::get('registration-delete-previous/{id}', [
    'as' => 'email.delete-previous',
    'uses' => 'RegistrationController@delete_previous_registration'
]);
