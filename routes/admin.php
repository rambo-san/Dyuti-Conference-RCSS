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
Route::get(config("constant.backend_url_prefix"), 'Auth\LoginController@login')->name('login');
Route::post(config("constant.backend_url_prefix") . "/login", 'Auth\LoginController@loginPost')->name('login.post');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('password-reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//Route::get('test/{id?}/{value?}', 'TestController@index')->name('test');

// Admin Routes
Route::group(['prefix' => config("constant.backend_url_prefix"), 'namespace' => 'Admin', 'middleware' => ['auth']], function () {




    Route::get('dashboard', [
        'as' => 'admin.dashboard',
        'uses' => 'DashboardController@index',
        'middleware' => ['permission:view dashboard'],
    ]);

    // Save Image fo Text Editor - POST
    Route::post('save-image', [
        'as' => 'save.image',
        'uses' => 'DashboardController@saveImage',
    ]);
    
    // Save Image fo Text Editor - POST
    Route::post('save-image', [
        'as' => 'save.image',
        'uses' => 'DashboardController@saveImage',
    ]);

    //My Profile
    Route::get('/my-profile', [
        'as' => 'myprofile.index',
        'uses' => 'UserController@myprofile',
    ]);
    Route::post('/my-profile', [
        'as' => 'myprofile.update',
        'uses' => 'UserController@myprofile_update',
    ]);




    /**=============Role=========**/

    Route::get('role', [
        'as' => 'role.index',
        'uses' => 'RoleController@index',
        'middleware' => ['permission:role'],
    ]);

    Route::get('role/list', [
        'as' => 'role.list',
        'uses' => 'RoleController@result',
        'middleware' => ['permission:role'],
    ]);
    // Create
    Route::get('role/create', [
        'as' => 'role.create',
        'uses' => 'RoleController@createUpdate',
        'middleware' => ['permission:role'],
    ]);
    // Update
    Route::get('role/{id}/edit', [
        'as' => 'role.edit',
        'uses' => 'RoleController@createUpdate',
        'middleware' => ['permission:role'],
    ]);
    // Create/Update - POST
    Route::post('role/create-update', [
        'as' => 'role.update',
        'uses' => 'RoleController@createUpdatePost',
        'middleware' => ['permission:role'],
    ]);
    // Update Status - Enable/Disable
    Route::get('role/action/{id}/{status}', [
        'as' => 'role.action',
        'uses' => 'RoleController@action',
        'middleware' => ['permission:role'],
    ]);

    Route::delete('role/delete/{id}', [
        'as' => 'role.destroy',
        'uses' => 'RoleController@destroy',
        'middleware' => ['permission:role'],
    ]);


    

    /**=============Registration=========**/

    Route::get('registration', [
        'as' => 'registration',
        'uses' => 'RegistrationController@index'
    ]);

    Route::get('registration/view/{id}', [
        'as' => 'registration.view',
        'uses' => 'RegistrationController@view'
    ]);

    Route::get('registration/archive-view/{id}', [
        'as' => 'registration.archive-view',
        'uses' => 'RegistrationController@archiveView'
    ]);

    Route::get('registration/approve/{id}', [
        'as' => 'registration.approve',
        'uses' => 'RegistrationController@approve'
    ]);

    Route::get('registration/delete/{id}', [
        'as' => 'registration.delete',
        'uses' => 'RegistrationController@delete'
    ]);

    Route::get('registration/approval/{id}', [
        'as' => 'approval',
        'uses' => 'RegistrationController@approval'
    ]);

    Route::get('contact', [
        'as' => 'contact.index',
        'uses' => 'ContactController@index',
        'middleware' => ['permission:contact'],
    ]);

    Route::get('contact/list', [
        'as' => 'contact.list',
        'uses' => 'ContactController@result',
        'middleware' => ['permission:contact'],
    ]);

    Route::get('contact/view/{id}', [
        'as' => 'contact.view',
        'uses' => 'ContactController@view',
        'middleware' => ['permission:contact'],
    ]);

    Route::get('registration/error', [
        'as' => 'registration.error',
        function(){
            return view('admin.registration.reg-error')->with("active", 'registration')
            ->with("activeSub", '');
        }
    ]);

    
    Route::get('archive-registrations', [
        'as' => 'archived-registration',
        'uses' => 'RegistrationController@archived_registrations',
        'middleware' => ['permission:registration'],
    ]);

    Route::get('registration/restore/{id}', [
        'as' => 'registration.restore',
        'uses' => 'RegistrationController@restore'
    ]);

    Route::delete('registration/force-delete/{id}', [
        'as' => 'registration.force-delete',
        'uses' => 'RegistrationController@forceDelete'
    ]);

});