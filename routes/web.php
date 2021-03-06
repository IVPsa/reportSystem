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

// Route::resource('ot_orden_trabajo', 'OrdenTrabajoController'['except' => [
//      'index', 'show', 'create', 'store', 'update', 'destroy'
// ]]);
Route::resource('ot_orden_trabajo', 'OrdenTrabajo');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//INICIO  RUTAS PERFIL
Route::group(['prefix' => 'PERFIL'], function () {


          Route::get('/', [
            'uses' => 'perfil@showPerfil',
            'as' => 'Perfil',
          ]);

          // Route::post('/subirArchivo', [
          //   'uses' => 'perfil@subirArchivo',
          //   'as' => 'subirArchivo',
          // ]);


          Route::patch('/', [
            'uses' => 'perfil@subirFotoDePerfil',
            'as' => 'subirAvatar',
          ]);


          Route::patch('/actualizarDatosPersonales', [
            'uses' => 'perfil@actualizarDatosPersonales',
            'as' => 'actualizarDatosPersonales',
          ]);

          Route::patch('/actualizarDatosBancarios', [
            'uses' => 'perfil@actualizarDatosBancarios',
            'as' => 'actualizarDatosBancarios',
          ]);


          Route::get('/VerOt/{id}', [
            'uses' => 'perfil@edicionDeOt',
            'as' => 'OTedicion',
          ]);

          Route::patch('/VerOt/{id}', [
            'uses' => 'perfil@updateOtAsignada',
            'as' => 'edicionDeOtAsignada',
          ]);

          Route::post('/reporteCreacion/{id}', [
            'uses' => 'perfil@reporteCreacion',
            'as' => 'reporteCreacion',
          ]);

          Route::get('/VerReporte/{id}', [
            'uses' => 'perfil@reporteEdicion',
            'as' => 'edicionDeReporte',
          ]);

          Route::patch('/VerReporte/{id}', [
            'uses' => 'perfil@UpdateReporte',
            'as' => 'UpdateReporte',
          ]);


          Route::post('/VerReporte/{id}', [
            'uses' => 'perfil@CrearReporteFotografico',
            'as' => 'CrearReporteFotografico',
          ]);


          Route::get('/ReporteFotografico/{id}', [
            'uses' => 'perfil@ReporteFotografico',
            'as' => 'ReporteFotografico',
          ]);

          Route::patch('/eliminarArchivo', [
            'uses' => 'perfil@eliminarArchivo',
            'as' => 'eliminarArchivo',
          ]);

          Route::patch('/actualizarDescripcionDeArchivo', [
            'uses' => 'perfil@actualizarDescripcionDeArchivo',
            'as' => 'actualizarDescripcionDeArchivo',
          ]);

          Route::post('/subirArchivo', [
            'uses' => 'perfil@subirArchivo',
            'as' => 'subirArchivo',
          ]);

          Route::get('/pdfloco', [
            'uses' => 'perfil@pdf',
            'as' => 'pdfOt',
          ]);



 });
// FIN RUTAS PERFIL

// INICIO RUTAS REPORTES
 Route::group(['prefix' => 'REPORTES'], function () {


           Route::get('/VerReporte/{id}', [
             'uses' => 'reportes@VerReporte',
             'as' => 'hojaReporte',
            ]);

            Route::get('/VerReporteFotografico/{id}', [
              'uses' => 'reportes@reporteFotografico',
              'as' => 'VerReporteFotografico',
             ]);

           Route::get('/reportes', function () {
               return view('REPORTES.reportes');
           })->name('reportes');

           Route::get('/ListadoDeReportes', [
             'uses' => 'reportes@showReportes',
             'as' => 'reportesListado',
           ]);
  });
// FIN RUTAS REPORTES

// INCIO RUTAS OT
  Route::group(['prefix' => 'OT'], function () {


            Route::get('/listaOt', [
              'uses' => 'OrdenTrabajoController@show',
              'as' => 'listaOt',
            ]);

            Route::get('/registroFotografico', function () {
                return view('OT.registroFotografico');
            })->name('registroFotografico');

            Route::get('/VerReporteOT/{id}', [
              'uses' => 'OrdenTrabajoController@VerReporte',
              'as' => 'VerReporteOT',
            ]);

            Route::get('/VerReporteOT/{id}', [
              'uses' => 'OrdenTrabajoController@VerReporte',
              'as' => 'VerReporteOT',
            ]);

            Route::get('/resumenOt/{id}', [
              'uses' => 'OrdenTrabajoController@resumen',
              'as' => 'resumen',
            ]);


            Route::get('/VerRegistroFotografico/{id}', [
              'uses' => 'OrdenTrabajoController@FotosDelReporte',
              'as' => 'FotosDelReporte',
            ]);

            Route::patch('/resumenOt/{id}', [
              'uses' => 'OrdenTrabajoController@update',
              'as' => 'edit',
            ]);


            Route::get('/crearOt', [
              'uses' => 'OrdenTrabajoController@getCrearOt',
              'as' => 'OT.crearOT',
            ]);
            Route::get('api/provincia/{region}','LocationController@getProvincia')->name('get.provincia');
            Route::get('api/ciudad/{provincia}','LocationController@getCiudad')->name('get.ciudad');

            Route::post('/crearOt', [
              'uses' => 'OrdenTrabajoController@store',
              'as' => 'insert',
            ]);

            Route::get('/listaOt/{id}', [
              'uses' => 'OrdenTrabajoController@destroy',
              'as' => 'Eliminar',
            ]);

            Route::get('/', [
              'uses' => 'OrdenTrabajoController@index',
              'as' => 'InicioOT',
            ]);

   });
// FIN RUTAS OT
