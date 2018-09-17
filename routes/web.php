<?php

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

//Dashboard Routes
Route::get('dashboard/home', function () {
    return view('dashboard.home');
});
Route::get('dashboard/', function () {
    return view('dashboard.home');
});

//Dashboard Users Management
Route::get('dashboard/users/', function () {
    return view('dashboard.users.index');
});

//Dashboard Registration Management
Route::get('dashboard/registration/', function () {
    return view('dashboard.registrations.index');
});

//Dashboard Role Management
Route::get('dashboard/roles/', function () {
    return view('dashboard.roles.index');
});
Route::get('dashboard/role/create/', function () {
    return view('dashboard.roles.create');
});
Route::get('dashboard/role/edit/', function () {
    return view('dashboard.roles.edit');
});
Route::get('dashboard/role/show/', function () {
    return view('dashboard.roles.show');
});

//Dashboard Permission Management
Route::get('dashboard/permissions/', function () {
    return view('dashboard.permissions.index');
});
Route::get('dashboard/permission/create/', function () {
    return view('dashboard.permissions.create');
});
Route::get('dashboard/permission/edit/', function () {
    return view('dashboard.permissions.edit');
});
Route::get('dashboard/permission/show/', function () {
    return view('dashboard.permissions.show');
});

//Dashboard Notification Management
Route::get('dashboard/notifications/', function () {
    return view('dashboard.notifications.index');
});
Route::get('dashboard/notification/create/', function () {
    return view('dashboard.notifications.create');
});
Route::get('dashboard/notification/edit/', function () {
    return view('dashboard.notifications.edit');
});

//Dashboard Contribution Management
//scheme
Route::resource('dashboard/contribution/contribution-scheme', 'Dashboard\Contribution\SchemeController');

Route::post('dashboard/contribution/contribution-scheme/activate/{scheme}', 'Dashboard\Contribution\SchemeController@activate')->name('contribution-scheme.activate');

//make-payment
Route::resource('dashboard/contribution/make-payment', 'Dashboard\Contribution\MakePaymentController');
Route::resource('dashboard/contribution/beneficiary-payment', 'Dashboard\Contribution\ben\MakePaymentController');


Route::get('dashboard/contribution/contribution-records', function () {
    return view('dashboard.contributions.contribution-records');
});
Route::get('dashboard/contribution/contribution-history', function () {
    return view('dashboard.contributions.contribution-history');
});

//Dashboard Loan Management
//scheme
Route::resource('dashboard/loan/loan-scheme', 'Dashboard\Loan\SchemeController');

Route::get('dashboard/loan/application', function () {
    return view('dashboard.loans.application');
});
Route::get('dashboard/loan/loan-records', function () {
    return view('dashboard.loans.loan-records');
});
Route::get('dashboard/loan/loan-history', function () {
    return view('dashboard.loans.loan-history');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');
});