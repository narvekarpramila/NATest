<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('admin-dashboard',['uses'=>'AdminController@dashboard']);


Route::get('admin/add-dealer', ['uses'=>'AdminController@addDealer']);
Route::post('admin/add-dealer', ['uses'=>'AdminController@saveDealer']);
Route::get('admin/view-dealer', ['uses'=>'AdminController@viewDealer']);
Route::get('admin/edit-dealer/{id}', ['uses'=>'AdminController@editDealer']);
Route::get('admin/delete-dealer', ['uses'=>'AdminController@deleteDealer']);

Route::get('admin/view-model', ['uses'=>'AdminController@getModelDetails']);

Route::get('admin/get-search', ['uses' =>'AdminController@getSearch']);



Route::get('dealer-dashboard',['uses'=>'DealerController@dashboard']);

Route::get('dealer/add-dealer', ['uses'=>'DealerController@addDealer']);
Route::post('dealer/add-dealer', ['uses'=>'DealerController@saveDealer']);
Route::get('dealer/view-dealer', ['uses'=>'DealerController@viewDealer']);
Route::get('dealer/edit-dealer/{id}', ['uses'=>'DealerController@editDealer']);
Route::get('dealer/delete-dealer', ['uses'=>'DealerController@deleteDealer']);

Route::get('dealer/view-model', ['uses'=>'DealerController@getModelDetails']);

Route::get('dealer/get-search', ['uses' =>'DealerController@getSearch']);

Route::get('dealer/add-inventory', ['uses'=>'DealerController@addinventory']);
Route::post('dealer/add-inventory', ['uses'=>'DealerController@saveinventory']);
Route::get('dealer/view-inventory', ['uses'=>'DealerController@viewinventory']);
Route::get('dealer/edit-inventory/{id}', ['uses'=>'DealerController@editinventory']);
Route::get('dealer/delete-inventory', ['uses'=>'DealerController@deleteinventory']);

