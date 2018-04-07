<?php

use Illuminate\Http\Request;
use App\Http\Controllers\OrdenTrabajoController;
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
//INICIO APIcontroller
Route::get('/otListado', 'APIcontroller@ListadoDeOt');

Route::get('/ot/{id}', 'APIcontroller@Especifica');

//crear OT
Route::post('/crearOt', 'APIcontroller@crearOT');

//crear Borrar OT
Route::delete('/ot/{id}', 'APIcontroller@Especifica');

//crear actualizar OT
Route::put('/ot/{id}', 'APIcontroller@Especifica');

//FIN APIcontroller

Route::get('/region', [
    'uses' => 'LocationController@getRegion',
    'as' => 'get.region',
]);

Route::get('/provincia/{region}', [
    'uses' => 'LocationController@getProvincia',
    'as' => 'get.provincia',
]);

Route::get('/ciudad/{provincia}', [
    'uses' => 'LocationController@getCiudad',
    'as' => 'get.ciudad',
]);
