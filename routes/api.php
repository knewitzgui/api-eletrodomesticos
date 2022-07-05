<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductsController;
use App\http\Controllers\BrandsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas de produto
Route::get('/produtos', [ProductsController::class, 'index']);
Route::post('/produtos', [ProductsController::class, 'create']);
Route::put('/produtos/{id}', [ProductsController::class, 'update']);
Route::delete('/produtos/{id}', [ProductsController::class, 'delete']);

// Rotas de marcas
Route::get('/marcas', [BrandsController::class, 'index']);
Route::post('/marcas', [BrandsController::class, 'create']);
Route::put('/marcas/{id}', [BrandsController::class, 'update']);
Route::delete('/marcas/{id}', [BrandsController::class, 'delete']);