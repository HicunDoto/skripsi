<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\LoginController;

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

Route::get('/',[LoginController::class,'homes'])->name('index');
Route::get('/login',[LoginController::class,'home'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('post.login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/registrasi',[LoginController::Class,'registrasi'])->name('get.registrasi');
Route::post('/registrasi',[LoginController::Class,'store'])->name('registrasi');


Route::get('/home',[PagesController::class,'dashboard'])->name('get.dashboard');
Route::post('/home',[PagesController::class,'dashboard'])->name('post.dashboard');

Route::group(['middleware'=>['admin']], function(){
    Route::get('/admin',[SoalController::class,'index'])->name('get.soal');
    Route::get('/admin/player',[SoalController::class,'player'])->name('player.soal');
    Route::get('/admin/input-soal',[SoalController::class,'create'])->name('get.input-soal');
    Route::get('/admin/input-flag/{soal}',[SoalController::class,'createflag'])->name('get.input-flag');
    Route::get('/admin/{soal}',[SoalController::class,'show'])->name('get.soal/id');
    Route::post('/admin/input-soal/',[SoalController::class,'store'])->name('post.soal');
    Route::post('/admin/input-flag/{soal}',[SoalController::class,'flag'])->name('post.input-flag');
    Route::put('/admin/{soal}',[SoalController::class,'update'])->name('update.soal');
    Route::delete('/admin/{soal}',[SoalController::class,'destroy'])->name('delete.soal');
    Route::get('/admin/{soal}/edit',[SoalController::class,'edit'])->name('edit.soal');
});

Route::group(['middleware'=>['player']], function(){
    Route::get('/clue/rce',[DashboardController::class,'rce1'])->name('get.rce1.clue');
    Route::get('/clue/ssh1',[DashboardController::class,'ssh1'])->name('get.ssh1.clue');
    Route::get('/clue/ssh2',[DashboardController::class,'ssh2'])->name('get.ssh2.clue');
    Route::get('/clue/mysql',[DashboardController::class,'mysql1'])->name('get.mysql1.clue');
    Route::get('/clue/ftp',[DashboardController::class,'ftp1'])->name('get.ftp1.clue');
    Route::get('/edukasi/ssh',[DashboardController::class,'ssh'])->name('get.ssh.edukasi');
    Route::get('/edukasi/ftp',[DashboardController::class,'ftp'])->name('get.ftp.edukasi');
    Route::get('/edukasi/rce',[DashboardController::class,'rce'])->name('get.rce.edukasi');
    Route::get('/edukasi/mysql',[DashboardController::class,'mysql'])->name('get.mysql.edukasi');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('get.dashboard');
    Route::get('/dashboard/soal',[DashboardController::class,'soal'])->name('get.view.soal');
    Route::get('/dashboard/scoreboard',[DashboardController::class,'scoreboard'])->name('get.score');
    Route::get('/dashboard/{soal}',[DashboardController::class,'show'])->name('get.soal/nama_soal');
    Route::post('/dashboard/{soal}',[DashboardController::class,'submitflag'])->name('post.detail-soal/{id}');  
});
// Route::resource('soal',SoalController::class);