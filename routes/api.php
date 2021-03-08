<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Models\Message;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/', [HomeController::class, 'index']);

Route::get('/themelist', function() {
    return Message::all();
});

//Route::get('/message/{id}/{success}', [MessageController::class, 'view']);

Route::post('/create', function(Request $request){
    error_log($request);
    return Message::create([
        'title' => $request->title,
        'content' => $request->content,
        'color1' => $request->color1,
        'color2' => $request->color2,
        'color3' => $request->color3,
        'color4' => $request->color4,
        'color5' => $request->color5,
        ]);
});

Route::put('/update', function(Request $request) {
    $theme = Message::findOrFail($request->id);
    $theme->update($request->all());
});

/*Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
})*/