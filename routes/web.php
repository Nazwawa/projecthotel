<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FacilitikamarController;
use App\Http\Controllers\UkamarController;
use App\Http\Controllers\UfasilitasController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\CetakController;


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
    return view('auth.login');
});
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
});
Route::group(['prefix' => 'receptionist', 'middleware' => ['isResepsionis', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [ReceptionistController::class, 'index'])->name('receptionist.dashboard');
    Route::get('dashboard', [ReceptionistController::class, 'filter'])->name('receptionist.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});

Route::resource('kamars', KamarController::class)->middleware('auth');
Route::resource('facilitikamar', FacilitikamarController::class)->middleware('auth');
Route::resource('facilities', FacilityController::class)->middleware('auth');
Route::resource('ufasilitas', UfasilitasController::class)->middleware('auth');
Route::resource('ukamar', UkamarController::class)->middleware('auth');
Route::resource('bookings', BookingController::class)->middleware('auth');
Route::resource('buktis', BuktiController::class)->middleware('auth');
Route::resource('cetaks', CetakController::class)->middleware('auth');

