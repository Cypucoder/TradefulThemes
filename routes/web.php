<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/message/{id}/{success}', [MessageController::class, 'view']);

Route::post('/create', [MessageController::class, 'create']);

Route::post('/update/{id}/{success}', [MessageController::class, 'update']);

//view angular version:
Route::get('/angular', function () {
    error_log(public_path() . '/to new folder name/index.html');
    return response()->file(public_path() . '/angular/index.html', ['Content-Type' => 'text/html; charset=UTF-8']);
    //return view('angular');
});