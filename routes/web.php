<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('associations',AssociationController::class) ; 
Route::resource('evenements',EvenementController::class) ; 
Route::resource('utilisateurs', UserController::class) ; 