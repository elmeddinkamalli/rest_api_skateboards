<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', [MainController::class, 'get_products']);
Route::get('/orders', [MainController::class, 'get_orders']);
Route::post('/order', [MainController::class, 'make_order']);
Route::put('/prepare_order', [MainController::class, 'prepare_order']);
