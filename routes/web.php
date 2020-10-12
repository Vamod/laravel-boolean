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
// dopo la chiocciola è il nome della funzione
Route::get('/', 'StaticPageController@home')->name('StaticPage.home');
Route::get('/chisiamo', 'StaticPageController@chisiamo')->name('StaticPage.chisiamo');
Route::get('/studenti', 'StudentController@studenti')->name('Student.studenti');
