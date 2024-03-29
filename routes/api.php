<?php

use App\Http\Controllers\DiffusionController;
use App\Http\Controllers\PromptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('image-request',[PromptController::class,'imageRequest']);
Route::post('difuse-image-request',[DiffusionController::class,'imageRequest']);
Route::get('/gallary', [FrontController::class,'gallary'])->name('gallary');
