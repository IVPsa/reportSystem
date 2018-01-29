<?php

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


Route::resource('ot_orden_trabajo', 'OrdenTrabajoController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//INICIO  RUTAS PERFIL
Route::group(['prefix' => 'PERFIL'], function () {

          Route::get('/Perfil', function () {
              return view('PERFIL.inicioPerfil');
          })->name('Perfil');

          Route::get('/edicionDeOt', function () {
              return view('PERFIL.edicionDeOt');
          })->name('edicionDeOt');

          Route::get('/reporteEdicion', function () {
              return view('PERFIL.reporteEdicion');
          })->name('reporteEdicion');

          Route::get('/subirImagenes', function () {
              return view('PERFIL.subirImagenes');
          })->name('subirImagenes');

 });
// FIN RUTAS PERFIL

// INICIO RUTAS REPORTES
 Route::group(['prefix' => 'REPORTES'], function () {

           Route::get('/hojaReporte', function () {
               return view('REPORTES.hojaReporte');
           })->name('hojaReporte');

           Route::get('/ReporteFotografico', function () {
               return view('REPORTES.ReporteFotografico');
           })->name('ReporteFotografico');

           Route::get('/reportes', function () {
               return view('REPORTES.reportes');
           })->name('reportes');
  });
// FIN RUTAS REPORTES

// INCIO RUTAS OT
  Route::group(['prefix' => 'OT'], function () {

            // Route::get('/crearOt', function () {
            //     return view('OT.crearOt');
            // })->name('crearOt');

            Route::get('/listaOt', function () {
                return view('OT.listaOt');
            })->name('listaOt');

            Route::get('/registroFotografico', function () {
                return view('OT.registroFotografico');
            })->name('registroFotografico');

            Route::get('/resumenOt', function () {
                return view('OT.resumenOt');
            })->name('resumenOt');


              Route::get('/crearOt', [
                'uses' => 'OrdenTrabajoController@getCrearOt',
                'as' => 'OT.crearOT',
            ]);

              Route::get('/crearOt', [
                'uses' => 'OrdenTrabajoController@postAgregarOrdenTrabajo',
                'as' => 'OT.crearOT',
            ]);

            Route::get('/', [
              'uses' => 'OrdenTrabajoController@index',
              'as' => 'InicioOT',
            ]);

   });
// FIN RUTAS OT
