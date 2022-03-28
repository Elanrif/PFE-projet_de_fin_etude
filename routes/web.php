<?php

use App\Http\Controllers\AdminAssociationController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\UserController;
use App\Models\Association;
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
    $associations = Association::all() ; 
  
    return view('welcome', compact('associations'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/association',AdminAssociationController::class) ; 
Route::resource('admin/membre',MembreController::class);
Route::resource('admin/evenement',EvenementController::class) ; 
Route::resource('admin/user', UserController::class); 
Route::resource('admin/bureau',BureauController::class) ; 
Route::resource('associations' ,AssociationController::class) ; 

Route::resource('admin/page',AdminPageController::class) ; 

 

