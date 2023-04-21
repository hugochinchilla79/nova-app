Prueba técnica de Laravel Nova App. 


Se puede correr el proyecto ejecutando solamente el src localmente y haciendo los pasos para instalar dependencias.

`php artisan serve`

También se puede correr por medio de docker (por si no se tiene instalado o se deseara exportar una imagen con todo el volumen de la aplicación configurado)

`docker-compose build && docker-compose up`

Esto tarda un poco pero inicializa el contenedor preparado con ambiente de PHP8.1 y apache

`docker exec -it nova-app bash`

Con el comando anterior se puede entrar al contenedor y correr los comandos de PHP para instalar todo lo necesario para correr el proyecto. 

Se adjunta directamente la base de datos y el .env debe tener configurado el driver de sqlite. 

No hace falta configurar nombre de base de datos.
