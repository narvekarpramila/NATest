<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('login/{email_address?}',['uses' => 'HomeController@login', 'as' => 'log-in']);
Route::post('login', ['uses' => 'HomeController@sign_in', 'as' => 'login']);

Route::get('/logout',['uses' => 'HomeController@logout', 'as' => 'signout']);
Route::get('signup',['uses' => 'HomeController@signup', 'as' => 'signup']);
Route::post('signup', ['uses' => 'HomeController@register']);
Route::get('forgot-password',['uses' => 'HomeController@forgotPassword', 'as' => 'forgotPassword']);
Route::post('forgot-password',['uses' => 'HomeController@forgotPassword_mail', 'as' => 'forgot_password']);
// reset password
Route::get('reset-password',['uses' => 'HomeController@resetPassword']);
Route::post('password-update',['uses' => 'HomeController@updatePassword']);


Route::get('/',['uses'=>'HomeController@index'])->name('home');

