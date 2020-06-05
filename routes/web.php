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



Route::redirect('/', '/dashboard');

Auth::routes(['register'=> false]);


Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('preview', 'MailingController@preview')->name('preview');

Route::get('/profile/change-password', 'ChangePasswordController@index')->name('change.index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.store');


Route::resource('users', 'UserController')->middleware('auth');
Route::resource('projects', 'ProjectController');
Route::resource('mailings', 'MailingController')->middleware('auth');
Route::resource('profile', 'ProfileController');






// Route::get('/{nombre}', function($nombre){
//   return "saludos" . $nombre;
// });




// Route::get('/hash', function (){
//   return Hash::make('20604974527');
// });