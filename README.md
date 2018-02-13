# reportSystem

COMANDOS SQL
drop database reportSystem;
create database reportSystem;

composer install
composer dumpautoload
COMANDOS ARTISAN
________________________________________________________________________________
php artisan route:list                                  | nos mostrará nuestra colección de rutas
php artisan cache:clear                                 | limpiar cache
php artisan migrate:fresh                               | recarga migraciones
php artisan make:factory --model=#nombre del modelo#    | crea un factory con un modelo determinado

Route::get('personal/new','RrhhAdminController@getNuevoRh')->name('regPersonal');

Route::post('personal/new','RrhhAdminController@postRegistroRh')->name('post.registrar.rrhh');

DOCUMENTAICON UTIL


https://laraveles.com/obtener-usuario-autenticado-facade-auth/

https://github.com/fzaninotto/Faker#fakerproviderbase

use Illuminate\Support\Facades\Auth;
// Obtiene el objeto del Usuario Autenticado
$user = Auth::user();

// Obtiene el ID del Usuario Autenticado
$id = Auth::id();

$user->name;

Autenticación con el objeto Request
Como una manera alternativa a través de los Request también se puede obtener la información del usuario que esta logueado, observa el siguiente ejemplo

INSERT INTO `users` (`id`, `USU_NOMBRE`, `email`, `USU_EMPRESA`, `USU_TPU_COD`, `USU_RUT`, `USER_N_CTA_BANCO`, `USER_BANCO`, `USER_TP_CTA`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ivan', 'ivan_vilugron@hotmail.es', 'mappu', 'TECNICO', 'NO INFORMADO', 'NO INFORMADO', 'NO INFORMADO', 'NO INFORMADO', '$2y$10$QRA2VaF/SA1iuhXgfI9oJenm4NA1Cjc5vMsSDSoy2aoc9zC68sMDW', 'NULL', '2018-02-13 06:04:42', '2018-02-13 06:04:42'),
(2, 'ale', 'ale@hotmail.es', 'mappu', 'TECNICO', 'NO INFORMADO', 'NO INFORMADO', 'NO INFORMADO', 'NO INFORMADO', '$2y$10$mOdzVgIE89OILvXieI38UuITlLveuL2T1tAiA1dR3fhnTIJPPvO3i', NULL, '2018-02-13 06:05:08', '2018-02-13 06:05:08');


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
