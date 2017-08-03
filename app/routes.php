<?php

require_once "app/lib/nusoap.php";

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

 /***************************************  Webservis ******************************************/

 	
 	Route::any('/aceptar-rechazar-solicitud', 'PersonalController@actionAceptarRechazarSolicitud');
 	Route::any('/cerrar-solicitud', 'PersonalController@actionCerrarSolicitud');
 	Route::any('/prueba', 'PersonalController@actionPrueba');



 /***************************************  SISTEMAS ******************************************/

   	Route::any('/asistencia-personal/{fecha}', 'AsistenciaController@actionAsistenciaPersonalDetalle');
