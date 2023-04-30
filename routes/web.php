<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Account routes
Route::prefix('account')->middleware('verified')->group(function () {
    Route::get('/', 'AccountController@index')->name('account');

    # Users profile
    Route::get('/profile', 'AccountController@profile')->name('account.profile');
    Route::post('/profile', 'AccountController@profile')->name('account.profile.update');
});

// Admin routes
Route::prefix('admin')->middleware('admin')->group(function () {

    # Users
    Route::get('/users', 'AdminController@indexUsers')->name('admin.users');
    Route::get('/users/new', 'AdminController@createUser')->name('admin.users.new');
    Route::get('/users/{id}/edit', 'AdminController@editUser')->name('admin.users.edit');
    Route::post('/users/new', 'AdminController@storeUser');
    Route::post('/users/{id}/edit', 'AdminController@updateUser');
    Route::post('/users/{id}/destroy', 'AdminController@destroyUser')->name('admin.users.destroy');
    Route::get('/users/{id}/disable', 'AdminController@disableUser')->name('admin.users.disable');
    Route::get('/users/{id}/restore', 'AdminController@restoreUser')->name('admin.users.restore');
});
