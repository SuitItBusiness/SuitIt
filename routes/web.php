<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClothesController;

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

// Index routes

Route::get('/', [ClothesController::class,'showClothes'])->name('index');

Route::get('/index', [ ClothesController::class,'showClothes']);


//Login y Register routes

Route::get('/login', function () {
    return view('auth.login');
    })->name('login');

Route::get('/register', function () {
    return view('auth.register');
    })->name('register');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


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
    Route::get('/', 'AdminController@indexClothes')->name('admin.table');
    Route::get('/clothes/new', 'AdminController@createClothes')->name('admin.table.new');
    Route::get('/clothes/{id}/edit', 'AdminController@editClothes')->name('admin.table.edit');
    Route::post('/clothes/{id}/edit', 'AdminController@updateClothes');
    Route::post('/clothes/{id}/destroy', 'AdminController@destroyClothes')->name('admin.table.destroy');
    Route::get('/clothes/{id}/disable', 'AdminController@disableClothes')->name('admin.table.disable');
    Route::get('/clothes/{id}/restore', 'AdminController@restoreClothes')->name('admin.table.restore');
    

    # Categories
    Route::get('/categories', 'AdminController@indexCategories')->name('admin.categories');
    Route::get('/categories/new', 'AdminController@createCategory')->name('admin.categories.new');
    Route::get('/categories/{id}/edit', 'AdminController@editCategory')->name('admin.categories.edit');
    Route::post('/categories/{id}/edit', 'AdminController@updateCategory');
    Route::post('/categories/{id}/destroy', 'AdminController@destroyCategory')->name('admin.categories.destroy');
    Route::get('/categories/{id}/disable', 'AdminController@disableCategory')->name('admin.categories.disable');
    Route::get('/categories/{id}/restore', 'AdminController@restoreCategory')->name('admin.categories.restore');
    
});
