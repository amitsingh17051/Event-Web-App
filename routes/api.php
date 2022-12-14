<?php
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\HosterController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Posts Routes
Route::apiResource('posts', PostController::class);

// Hoster Routes
Route::apiResource('hoster', HosterController::class);


Route::apiResource('category', CategoryController::class);