<?php

use Illuminate\Http\Request;

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

Route::post('/status',function(){
    return ["status" => "OK"];
});

Route::post('/login','loginapi@index');

Route::post('/gettoken','token@index');

Route::post('/gettask','getTask@index');

Route::post('/detail','detail@index');