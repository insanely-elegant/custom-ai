<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/image-to-image', function () {
    return view('imgtoimg');
})->name('image-to-image');

Route::get('/gallary', [FrontController::class,'gallary'])->name('gallary');

Route::get('/s3-test', [FrontController::class,'index']);
Route::resource('images', FrontController::class, ['only' => ['store', 'destroy']]);

Route::get('/test', [ImageController::class,'index']);
Route::post('/test', [ImageController::class,'store']);
Route::get('/test/{image}', [ImageController::class,'show']);
