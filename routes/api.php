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

#Route::get('/todos', function (Request $request) {
 #   return [
  #    [ 'id' => 1, 'label' => 'Do this' ],
   #   [ 'id' => 2, 'label' => 'Do that' ],
    #];
#});

#Route::resource('todos', 'testTodos');
Route::get('/todos', 'testTodos@getTodos');
Route::post('/todos', 'testTodos@store');
Route::put('/todos/{id}', 'testTodos@putTodos');
Route::delete('/todos/{id}', 'testTodos@delTodos');

