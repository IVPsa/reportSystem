# reportSystem

COMANDOS SQL
drop database reportSystem;
create database reportSystem;

composer install
composer dumpautoload
COMANDOS ARTISAN
________________________________________________________________________________
php artisan route:list   | nos mostrará nuestra colección de rutas
php artisan cache:clear  |limpiar cache
php artisan migrate:fresh|recarga migraciones


Route::get('personal/new','RrhhAdminController@getNuevoRh')->name('regPersonal');

Route::post('personal/new','RrhhAdminController@postRegistroRh')->name('post.registrar.rrhh');
