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
    return redirect('/empal/register');
});
Route::get('/empal/register', function () {
    return view('register');
});
Route::post('/empal/register', 'App\Http\Controllers\UserController@register')->name('empal.register');
Route::get('/user/{user}/approve', 'App\Http\Controllers\UserController@approve')->name('empal.approve');
Route::post('/empal/complete-profile', 'App\Http\Controllers\UserController@register');

Route::get('/empal/complete-profile', function () {
    return view('complete-profile');
})->middleware('auth');
Route::post('/empal/complete-profile', 'App\Http\Controllers\UserController@completeProfile')->name('empal.complete-profile')->middleware('auth');
Route::get('/create-login', function () {
    return view('create-login');
});
Route::post('/create-login', 'App\Http\Controllers\UserController@createLogin')->name('empal.create-login');
Route::get('/empal/{user}/details', 'App\Http\Controllers\UserController@show')->name('empal.details')->middleware('auth');
Route::post('empal/send-message', 'App\Http\Controllers\UserController@sendMessage')->name('empal.send-message')->middleware('auth');
Route::get('/messages', 'App\Http\Controllers\UserController@getMessages')->name('messages')->middleware('auth');
Route::get('/empals/list', 'App\Http\Controllers\UserController@getEmpals')->name('empals.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
