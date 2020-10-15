<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SoalController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::post('/home', function () {
//     return view('home');
// });

Route::get('/',[PagesController::class,'home'])->name('get.login');
Route::get('/home',[PagesController::class,'dashboard'])->name('get.dashboard');
Route::post('/home',[PagesController::class,'dashboard'])->name('post.dashboard');

Route::get('/soal',[SoalController::class,'index'])->name('get.soal');
Route::get('/soal/input-soal',[SoalController::class,'create'])->name('get.input-soal');
Route::get('/soal/{soal}',[SoalController::class,'show'])->name('get.soal/id');
Route::post('/soal',[SoalController::class,'store'])->name('post.soal');
Route::delete('/soal/{soal}',[SoalController::class,'destroy'])->name('delete.soal');
Route::get('/soal/{soal}/edit',[SoalController::class,'edit'])->name('edit.soal');
Route::put('/soal/{soal}',[SoalController::class,'update'])->name('update.soal');

// Route::resource('soal',SoalController::class);