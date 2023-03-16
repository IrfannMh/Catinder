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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/signup','App\Http\Controllers\AuthController@getsignup')->name('signup');
Route::post('/signup','App\Http\Controllers\AuthController@postsignup');
Route::get('/login','App\Http\Controllers\AuthController@getlogin')->name('login');
Route::post('/login','App\Http\Controllers\AuthController@postlogin');

Route::get('/recovery','App\Http\Controllers\HomeController@recovery');
Route::get('/logout','App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/explore','App\Http\Controllers\HomeController@index')->name('explore');
Route::get('/vet','App\Http\Controllers\HomeController@showdata');
Route::get('/chat','App\Http\Controllers\HomeController@chat');
Route::get('/addbuddy','App\Http\Controllers\HomeController@addbuddy')->name('addbuddy');
Route::get('/profil','App\Http\Controllers\HomeController@profil')->name('profil');
Route::post('/addbuddy','App\Http\Controllers\HomeController@store')->name('addbuddy');
Route::post('/profil-update','App\Http\Controllers\HomeController@updateprofil')->name('updateprofil');

Route::get('/indexadmin','App\Http\Controllers\AdminController@index')->name('indexAdmin');
Route::get('/adminUser','App\Http\Controllers\AdminController@showUser');
Route::get('/adminVet','App\Http\Controllers\AdminController@showVet')->name('adminVet');
Route::get('admin/addVet','App\Http\Controllers\AdminController@add');
Route::post('/adminVet','App\Http\Controllers\AdminController@addVet');
