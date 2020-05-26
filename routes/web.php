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


Route::get('users/changepassword', 'UserController@changePasswordForm')->name('changepassword');
Route::post('users/changepassword', 'UserController@changePassword')->name('changepassword');

Route::get('profile/password', 'ProfileController@changePasswordForm')->name('changeprofile');


Route::resource('users', 'UserController')->middleware('auth');
Route::resource('profile', 'ProfileController');






// Route::get('/{nombre}', function($nombre){
//   return "saludos" . $nombre;
// });




// Route::get('/hash', function (){
//   return Hash::make('20604974527');
// });