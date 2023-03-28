<?php         
    require '../../include/app.php';

    use App\Vendedor;

    estaAutenticado();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: /admin');
    }

    //Obtener arreglo vendedor
    $vendedor = Vendedor::find($id);

    //Arreglo con mensajes de errores
    $errores = Vendedor::getErrores();  

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Asignar valores
        $args = $_POST['vendedor'];

        //Sincronizar objeto en memoria con lo que escriba el usuario
        $vendedor->sincronizar($args);

        //Validacion
        $errores = $vendedor->validar();

        if (empty($errores)) {
            $vendedor->guardar();
        }
    }

    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1>Actualizar Vendedor(a)</h1>
        
        <a href="/admin" class="boton boton-verde"> <- Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
            
        <form class="formulario" method="POST">                    
            <?php include '../../include/templates/formulario_vendedores.php'; ?>

            <input type="submit" value="Guardar Cambios" class="boton boton-verde">
        </form>

    </main>
<?php 
    incluirTemplate('footer');
?>
