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

// =======================================================================

Route::get('/status', 'Api\ContatoController@status');

Route::namespace('Api')->group( function() {

    Route::post('/contatos/add', 'ContatoController@add');

    Route::get('/contatos', 'ContatoController@list');
    Route::get('/contatos/{id}', 'ContatoController@select');

    Route::put('/contatos/{id}', 'ContatoController@update');

    Route::delete('/contatos/{id}', 'ContatoController@delete');
});