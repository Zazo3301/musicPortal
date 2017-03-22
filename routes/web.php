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
    return view('layouts.home');
});

Route::get('profile/{id?}', function ($id = null) {
	return view('layouts.profile');
});


Route::get('videos/{genrename?}', function ($genrename = null) {
	return view('layouts.videos');
});


Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
]);

Route::get('lyrics', function () {
    return view('layouts.lyrics');
});

Route::get('admin', function () {
    return view('admin.main-admin');
});

Route::get('def', function () {
    return view('layouts.default');
});

Route::get('news', function () {
    return view('layouts.news');
});