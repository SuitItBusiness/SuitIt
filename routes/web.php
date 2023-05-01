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
    return view('index');
});


Route::get('/admin', function () {
return view('admin.table');
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
    Route::post('/users/{id}/edit', 'AdminController@updateUser');
    Route::post('/users/{id}/destroy', 'AdminController@destroyUser')->name('admin.users.destroy');
    Route::get('/users/{id}/disable', 'AdminController@disableUser')->name('admin.users.disable');
    Route::get('/users/{id}/restore', 'AdminController@restoreUser')->name('admin.users.restore');

    # Clothes
    Route::get('/clothes', 'AdminController@indexClothes')->name('admin.clothes');
    Route::get('/clothes/new', 'AdminController@createClothes')->name('admin.clothes.new');
    Route::get('/clothes/{id}/edit', 'AdminController@editClothes')->name('admin.clothes.edit');
    Route::post('/clothes/{id}/edit', 'AdminController@updateClothes');
    Route::post('/clothes/{id}/destroy', 'AdminController@destroyClothes')->name('admin.clothes.destroy');
    Route::get('/clothes/{id}/disable', 'AdminController@disableClothes')->name('admin.clothes.disable');
    Route::get('/clothes/{id}/restore', 'AdminController@restoreClothes')->name('admin.clothes.restore');
    

    # Categories
    Route::get('/categories', 'AdminController@indexCategories')->name('admin.categories');
    Route::get('/categories/new', 'AdminController@createCategory')->name('admin.categories.new');
    Route::get('/categories/{id}/edit', 'AdminController@editCategory')->name('admin.categories.edit');
    Route::post('/categories/{id}/edit', 'AdminController@updateCategory');
    Route::post('/categories/{id}/destroy', 'AdminController@destroyCategory')->name('admin.categories.destroy');
    Route::get('/categories/{id}/disable', 'AdminController@disableCategory')->name('admin.categories.disable');
    Route::get('/categories/{id}/restore', 'AdminController@restoreCategory')->name('admin.categories.restore');
    
});
