<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlunosController;

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

Route::get('/', [UserController::class, 'index'])->name('home.login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/chamada', [ChamadaController::class, 'index'])->name('chamada');
Route::get('/master', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/aluno-cadastro', [AlunosController::class, 'index'])->name('aluno-cadastro');
Route::post('/aluno-store', [AlunosController::class, 'store'])->name('aluno-store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
