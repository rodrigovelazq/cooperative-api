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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/loans', 'App\Http\Controllers\LoansController@index');
Route::get('/loans/{id}', 'App\Http\Controllers\LoansController@show');
Route::post('/loans', 'App\Http\Controllers\LoansController@store');
Route::put('/loans/{id}', 'App\Http\Controllers\LoansController@update');
Route::delete('/loans/{id}', 'App\Http\Controllers\LoansController@destroy');

Route::get('/members', 'App\Http\Controllers\MembersController@index');
Route::get('/members/{id}', 'App\Http\Controllers\MembersController@show');
Route::post('/members', 'App\Http\Controllers\MembersController@store');
Route::put('/members/{id}', 'App\Http\Controllers\MembersController@update');
Route::delete('/members/{id}', 'App\Http\Controllers\MembersController@destroy');
Route::get('/file-export/{year}', 'App\Http\Controllers\ReportsController@fileExport');

Route::post('/payments', 'App\Http\Controllers\PaymentsController@store');
Route::put('/payments/{id}', 'App\Http\Controllers\PaymentsController@update');
Route::delete('/payments/{id}', 'App\Http\Controllers\PaymentsController@destroy');
Route::get('/payments/{id}/loans', 'App\Http\Controllers\PaymentsController@getByLoanId')->whereNumber('id')->whereAlpha('loans');

Route::get('/roles', 'App\Http\Controllers\RolesController@index');
