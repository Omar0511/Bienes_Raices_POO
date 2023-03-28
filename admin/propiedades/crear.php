<?php     
    //require 'include/funciones.php';
    require '../../include/app.php';

    //Importamos la clases PROPIEDAD
    use App\Propiedad;
    use App\Vendedor;

    use Intervention\Image\ImageManagerStatic as Image;
    
    estaAutenticado();

    //Con esta linea se corrige el error del HTML del formulario_propiedades
    $propiedad = new Propiedad;

    //Consulta para obtener vendedores
    $vendedores = Vendedor::all();

    //Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();    

    //Ejecuta el código después de que el usuario envía el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Crea una nueva instancia
        $propiedad = new Propiedad($_POST['propiedad']);
        
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

        //Setear la imagen
        //Realiza un resize a la imagen con intervention, 800 ancho, 600 alto
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);            
            $propiedad->setImagen($nombreImagen);
        }

        //Se mandan a llamar desde Clases Propiedad
        $errores = $propiedad->validar();

        //Revisar que el arreglo de errores este vacío
        if (empty($errores)) {            
            //Crear la carpeta para subir imagenes
            if (!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }    
            //Guardar imágen en el servidpr
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            //Guardar en la BD
            $propiedad->guardar();
        }
    }
    
    incluirTemplate('header');
?>    
    <main class="contenedor">
        <h1>Crear</h1>

        <!-- <a href="/admin/index.php" class="boton boton-verde"> <- Volver</a> -->
        <a href="/admin" class="boton boton-verde"> <- Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
            

        <!-- 
            Nota: se recoienda poner en el name, el mismo nombre del id 
            enctype="multipart/form-data" = se agrega cuando subes archivos, en este caso
            es para la subida de IMAGENES
        -->
        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">        
            
            <?php include '../../include/templates/formulario_propiedades.php'; ?>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>

    </main>
<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>