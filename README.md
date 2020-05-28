## Sistema Abarrotes Perrones

## Acerca del Proyecto

Este Sistema esta pensado como una base o plantilla para que pueda ser utilizado por cualquier persona que maneje ventas, es decir, puede ser utilizado para vender cualquier tipo de productos, como una tienda de abarrotes, venta de articulos para el hogar, etc.

El sistema cuenta con las siguientes caracteristicas:

* Permite agregar Usuarios por medio de Nombre, Email y Contraseña.
* Sistema de Login por medio de Email y Contraseña.
* Puede un Usuario de tipo administrador asignar roles a los nuevos usuarios, ya sean de tipo Administrador o de tipo Cliente, los Clientes solo pueden ver los productos disponibles y hacer compras.
* Cuenta con envio de correo electronico de manera automatica una vez que un Cliente realiza una compra de manera exitosa. Funciona con Gmail smtp
* Cuenta con diferentes CRUD, para Proveedores, las ventas y los  Productos, este ultimo cuenta con un campo para cargar una imagen relacionada con el producto.

## Autores

* **Andrés Martínez** 
* **Gerardo Barragán** 

### Herramientas
Para la realizacion de este proyecto se utilizaron las siguientes herramientas:
* Laravel
* BackPackForLaravel
* Permission Manager


### Instalación
* Clonar o descargar este repositorio
* Crear un archivo nuevo llamado .env, pegar en este archivo nuevo el contenido del archivo llamado .env.example
* Se incluye en la raiz del repositorio un archivo llamado *"mail.txt"* el cual incluye las variables de entorno que hay que reemplazar en el archivo .env creado del paso anterior para que el envio de correos funcione correctamente.
* Abrir una terminal o consola e ir a la ruta donde se encuenta el proyecto, ejecutar el siguiente comando para instalar todos los paquetes necesarios.
```
php composer install
```
* Ahora ejecutar el siguiente comando para generar una key necesaria para el proyecto
```
php composer key:generate
```
* En el archivo *".env"* agregar en las siguientes variables los datos correspondientes *"DB_DATABASE"* agregar el nombre de la base de datos en la que se almacenara la informacion, *"DB_USERNAME"* el nombre del usuario de la base de datos, *"DB_PASSWORD"* agregar la contraseña en caso de que tenga el usuario una. En caso de no tener usuario o contraseña, no modificar los campos y dejarlos con los valores del archivo *".env.example"*

* Ejecutar en la terminal el siguiente comando para ejecutar las migraciones y los seeders
```
php artisan migrate --seed
```
* Por ultimo escribir en la terminal el siguiente comando el cual se encarga de ejecutar una ruta para testear el sistema.
```
php artisan serve
```
