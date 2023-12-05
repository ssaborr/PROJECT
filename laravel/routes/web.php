<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qrcontroller;
use App\Http\Controllers\reservationcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/class',function(){
    return view('class');
})->name('class');;
Route::get('/contact',function(){
    return view('contact');
})->name('contact');;
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/reservation',[qrcontroller::class,'index'])->name('reservation');
/* ha 7tithom li bghat t7yd 7ydoha  */
Route::get('/reserve',function(){
    return view('reserver');
})->name('reserver')->middleware('auth');
Auth::routes();
Route::resource('reserver', reservationcontroller::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
