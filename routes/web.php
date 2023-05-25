<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WardrobesController;


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

Route::get('/', [ ClothesController::class,'showClothes'])->name('index')->middleware('auth');

Route::get('/importGeneral', [ WardrobesController::class,'importGeneralArticles'])->name('importGeneral')->middleware('auth');

//Armario routes

Route::prefix('armario')->middleware('auth')->group(function () {
    Route::get('/', [ WardrobesController::class,'showClothesWardrobe'])->name('armario');
    Route::get('/{name}', [ CategoriesController::class,'filterByCategory'])->name('filteredClothes');
});
//Login y Register routes

    Route::get('/login', function () {
        return view('auth.login');
        })->name('login')->middleware('guest');

    Route::get('/register', function () {
        return view('auth.register');
        })->name('register')->middleware('guest');

   // Account routes
Route::prefix('account')->middleware('verified')->group(function () {
    Route::get('/', [AccountController::class, 'index'])->name('account');

    # Users profile
    Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');
    Route::post('/profile', [AccountController::class, 'updateProfile'])->name('profile.update');
});

// Admin routes
Route::prefix('admin')->middleware('admin')->group(function () {

    # Users
    Route::get('/users', [AdminController::class, 'indexUsers'])->name('admin.users');
    Route::get('/users/new', [AdminController::class, 'createUser'])->name('admin.users.new');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::post('/users/{id}/edit', [AdminController::class, 'updateUser']);
    Route::post('/users/{id}/destroy', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
    Route::get('/users/{id}/disable', [AdminController::class, 'disableUser'])->name('admin.users.disable');
    Route::get('/users/{id}/restore', [AdminController::class, 'restoreUser'])->name('admin.users.restore');

    # Clothes
    Route::get('/', [AdminController::class, 'indexClothes'])->name('admin.table');
    Route::get('/clothes/{id}/edit', [AdminController::class, 'editClothes'])->name('admin.table.edit');
    Route::post('/clothes/{id}/edit', [AdminController::class, 'saveClothes'])->name('admin.table.save');
    Route::delete('/clothes/{id}/destroy', [AdminController::class, 'destroyClothes'])->name('admin.table.destroy');
    Route::get('/clothes/{id}/disable', [AdminController::class, 'disableClothes'])->name('admin.table.disable');
    Route::get('/clothes/{id}/restore', [AdminController::class, 'restoreClothes'])->name('admin.table.restore');

    # Categories
    Route::get('/categories', [AdminController::class, 'indexCategories'])->name('admin.categories');
    Route::get('/categories/new', [AdminController::class, 'createCategory'])->name('admin.categories.new');
    Route::get('/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.categories.edit');
    Route::post('/categories/{id}/edit', [AdminController::class, 'updateCategory']);
    Route::post('/categories/{id}/destroy', [AdminController::class, 'destroyCategory'])->name('admin.categories.destroy');
    Route::get('/categories/{id}/disable', [AdminController::class, 'disableCategory'])->name('admin.categories.disable');
    Route::get('/categories/{id}/restore', [AdminController::class, 'restoreCategory'])->name('admin.categories.restore');
});

Route::get('/index/{id}/{quantity}',[WardrobesController::class, 'addArticle'])->name('wardrobe.addArticle');
