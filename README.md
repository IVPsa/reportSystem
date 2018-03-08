# Report system beta 0.1

## Sistema de creación de órdenes de trabajo con la capacidad de crear reportes y de subir fotos en los mismos.

# Instalación

  1. Descargar e instalar composer [https://getcomposer.org/] .

  2. Abrir la consola con     `Windows+R`

  3. Ingresar el comando  `composer install`

  4. Abrir su motor de base de datos y crear la bd con nombre reportsystem.

  5. Copiar el contenido de `.env.example`

  7. Abrir un editor de texto plano y pegar el contenido del `.env.example.`

  8. Guardar el archivo creado con el nombre `.env`.

  9. En el archivo `.env` buscar `db_username` y `db_password`, aquí se deben colocar el nombre de usuario y contraseña de su motor de bd.

  10. Correr el comando php artisan key:generate, copiar y pegar en el archivo `.env` En donde dice `app_key`

  11. Correr el comando `php artisan migrate`

  12. Correr el comando `php artisan storage:link`

  13. Con `php artisan serve` se iniciara el server local en localhost:8000
