# Proyecto de Bienes Raíces

Juan Pablo De La Torre

1. En consola ingresamos: "npm i" = instala las dependencias

2. En consola ingresamos "gulp" = para que corran nuestras tareas

3. Crear BD en WorkBench: File -> New Model -> Model Overview -> Add Diagram -> 
    iconos de la izquierda -> Place a New Table -> das click en cuqluier parte y te creará una tabla ->
    das doble click y se despliega el menú para generar los campos., en la barra de
    iconos donde obtuvimos el Place a New Table, vienen unas flechas de cardinalidad,
    éstas son para la relacion.

4. En la barra o el menú -> DataBase -> Forward Enginner -> Si generaste INSERT
    al momento de elegir Forward seleccionas la casilla de -> GENERATE INSERT

5. Para validar tamaño de imágenes, creamos un archivo info.php
    ejecutamos la función: phpinfo();
    Buscamos la ruta: Archivo de configuración cargado	C:\php\php.ini
    Abrimos el archivo y verificamos la parte de:
    log_errors = On
    upload_max_filesize = 40M
    post_max_size = 40M
    max_execution_time = 300
    memory_limit = 128M
    Y guardamos cambios, esto ayudará a que se puedan subir imágenes con peso mayor a 2mb

6. Active Record:
    Es un patrón de arquitectura que se usa  para aplicaciones que almacenan datos en
    bases de datos y CRUD.

7. Librería para imágenes:
    página: Intervention Image
    
8. Damos click en: Read the installation guide
    Installation: $ php composer.phar require intervention/image (nota: casi no se ve, pero viene en este apartado)

9. EL comando va por consola: composer require intervention/image

10. Podemos validar el require en el archivo composer.json

