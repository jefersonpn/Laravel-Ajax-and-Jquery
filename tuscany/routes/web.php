<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTuscanyController;

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



Route::get('/', [ApiTuscanyController::class, 'showCategories'])->name('categories.show');
Route::get('/products', [ApiTuscanyController::class, 'showProducts'])->name('products.show');