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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@log')->name('admin');
Route::get('/condition', 'AdminController@log')->name('connexion');
Route::resource("users", 'UserController');

Route::get('/competences', function () {
    return view('competences');
});

ROute::resource('skills','SkillController');

Route::post('/competences', function () {
    return 'Votre competence est ' . request('competences');
    
});


