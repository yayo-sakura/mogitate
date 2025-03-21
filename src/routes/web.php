<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MogitateController;
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

Route::get('/products', [MogitateController::class, 'index']);
Route::post('/products/register', [MogitateController::class, 'store']);