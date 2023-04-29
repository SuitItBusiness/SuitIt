<?php

// Admin routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::redirect('/', 'admin/dashboard');

    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/login_as/{user_id}', 'AdminController@loginAs')->name('admin.loginAs');

    Route::get('/settings/{id}', 'AdminController@settings')->name('admin.settings');
    Route::post('/settings/{id}', 'AdminController@updateSetting');

    # Users
    Route::get('/users', 'AdminController@indexUsers')->name('admin.users');
    Route::get('/users/new', 'AdminController@createUser')->name('admin.users.new');
    Route::post('/users/new', 'AdminController@storeUser');
    Route::get('/users/{id}/edit', 'AdminController@editUser')->name('admin.users.edit');
    Route::post('/users/{id}/edit', 'AdminController@updateUser');
    Route::post('/users/{id}/destroy', 'AdminController@destroyUser')->name('admin.users.destroy');
    Route::get('/users/{id}/disable', 'AdminController@disableUser')->name('admin.users.disable');
    Route::get('/users/{id}/restore', 'AdminController@restoreUser')->name('admin.users.restore');

    # Websites 
    Route::get('/websites', 'WebsiteController@indexwebsites')->name('admin.websites');
    Route::get('/websites/new', 'WebsiteController@editWebsite')->name('admin.websites.new');
    Route::post('/websites/new', 'WebsiteController@saveWebsite');
    Route::get('/websites/{id}/edit', 'WebsiteController@editWebsite')->name('admin.websites.edit');
    Route::post('/websites/{id}/edit', 'WebsiteController@saveWebsite')->name('admin.websites.save');
    Route::get('/websites/{id}/disable', 'WebsiteController@disableWebsite')->name('admin.websites.disable');
    Route::get('/websites/{id}/restore', 'WebsiteController@restoreWebsite')->name('admin.websites.restore');
});