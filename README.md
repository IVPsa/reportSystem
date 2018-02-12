# reportSystem

COMANDOS SQL
drop database reportSystem;
create database reportSystem;

composer install
composer dumpautoload
COMANDOS ARTISAN
________________________________________________________________________________
php artisan route:list   | nos mostrará nuestra colección de rutas
php artisan cache:clear  | limpiar cache
php artisan migrate:fresh| recarga migraciones


Route::get('personal/new','RrhhAdminController@getNuevoRh')->name('regPersonal');

Route::post('personal/new','RrhhAdminController@postRegistroRh')->name('post.registrar.rrhh');

DOCUMENTAICON UTIL


https://laraveles.com/obtener-usuario-autenticado-facade-auth/


use Illuminate\Support\Facades\Auth;
// Obtiene el objeto del Usuario Autenticado
$user = Auth::user();

// Obtiene el ID del Usuario Autenticado
$id = Auth::id();

$user->name;

Autenticación con el objeto Request
Como una manera alternativa a través de los Request también se puede obtener la información del usuario que esta logueado, observa el siguiente ejemplo




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function getUser(Request $request)
    {
        return $request->user();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function getUser(Request $request)
    {
        return $request->user();
    }
}

Otros métodos disponibles
También tenemos disponibles algunos métodos extras dentro del facade Auth los cuales nos pueden ser de utilidad, como por ejemplo:

Determinar si existe un usuario autenticado con Auth::check()
Cerrar sesión activa con Auth::logout();
Iniciar sesión pasando como parámetro una instancia de usuario con Auth::login($user);
Iniciar una sesión usando el id un usuario con Auth::loginUsingId(1);
