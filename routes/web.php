<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FacilitiController;
use App\Http\Controllers\FacilitikamarController;
use App\Http\Controllers\UkamarController;
use App\Http\Controllers\UfasilitasController;


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
    return view('dashboards.user.landing');
});
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});
Route::group(['prefix'=>'resepsionis', 'middleware'=>['isResepsionis', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[ResepsionistController::class,'index'])->name('resepsionis.dashboard');   
    Route::get('dashboard',[ResepsionistController::class,'filter'])->name('resepsionis.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});

Route::resource('kamars', KamarController::class)->middleware('auth');
Route::resource('facilitikamar', FacilitikamarController::class)->middleware('auth');
Route::resource('facilities', FacilitiController::class)->middleware('auth');
Route::resource('ufasilitas', UfasilitasController::class)->middleware('auth');
Route::resource('ukamar', UkamarController::class)->middleware('auth');
Route::resource('pemesanan', PemesananController::class)->middleware('auth');
// Route::view('index','home/index' );
