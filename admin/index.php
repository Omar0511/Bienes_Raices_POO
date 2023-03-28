<?php 
    require '../include/app.php';
    estaAutenticado();

    //Importar las clases
    use App\Propiedad;
    use App\Vendedor;

    //Implementar metodo para obtener las propiedades
    $propiedades = Propiedad::all();
    $vendedores = Vendedor::all();

    /*
        Leemos el query string que viene del header de crear.php
        los 2 signos ?? indican algo negativo, es decir;
        sino existe agregará null,
        anteriormente era con isset
        isset($_GET['resultado'] ?? null):
    */
    $resultado = $_GET['resultado'] ?? null;

    //Eliminar propiedades
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Validar id
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            $tipo = $_POST['tipo'];

            if(validarTipoContenido($tipo)) {
                if ($tipo === 'vendedor') {
                    $vendedor = Vendedor::find($id);

                    $vendedor->eliminar();
                } else if ($tipo === 'propiedad') {
                    $propiedad = Propiedad::find($id);

                    $propiedad->eliminar();
                }
            }
        }
    }

    incluirTemplate('header');
?>    
    <main class="contenedor">
        <h1>Administrador de Bienes Raíces</h1>
        
        <?php 
            $mensaje = mostrarNotificacion( intval($resultado) );
            if ($mensaje) {
        ?>
            <p class="alerta exito"> <?php echo s($mensaje); ?> </p>            
        <?php } ?>

        <!-- <a href="../admin/propiedades/crear.php" class="boton-verde">Nueva propiedad</a> -->
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>        

        <h2>Propiedades</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imágen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <!--
                <tbody>  -- Mostrar resultados 
                    <tr>
                        <td>1</td>
                        <td>Casa en la playa</td>
                        <td> <img src="../build/img/anuncio1.jpg" alt="" class="imagen-tabla"> </td>
                        <td>$1200</td>
                        <td>
                            <a href="" class="boton boton-rojo-block">Eliminar</a>
                            <a href="../admin/propiedades/actualizar.php" class="boton boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                </tbody>
            -->

            <tbody>
                <?php foreach($propiedades as $propiedad): ?>
                    <tr>
                        <td> <?php echo $propiedad->id; ?> </td>
                        <td> <?php echo $propiedad->titulo; ?> </td>
                        <td> <img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imágen de propiedad" class="imagen-tabla"> </td>
                        <td> $ <?php echo $propiedad->precio; ?>  </td>
                        <td>                            

                            <form method="POST" class="w-100">
                                <!-- hidden = indica que es oculto, obtenemos el ID para ELIMINAR -->
                                <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">

                                <input type="hidden" name="tipo" value="propiedad">

                                <input type="submit" class="boton boton-rojo-block" value="Eliminar">
                            </form>

                            <a href="../admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>            

        </table>

        <a href="/admin/vendedores/crear.php" class="boton boton-verde">Nuevo(a) vendedor</a>

        <h2>Vendedores</h2>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>                    
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($vendedores as $vendedor): ?>
                    <tr>
                        <td> <?php echo $vendedor->id; ?> </td>
                        <td> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?> </td>
                        <td> <?php echo $vendedor->telefono; ?> </td>
                        <td>                            

                            <form method="POST" class="w-100">                                
                                <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">

                                <input type="hidden" name="tipo" value="vendedor">

                                <input type="submit" class="boton boton-rojo-block" value="Eliminar">
                            </form>

                            <a href="../admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" class="boton boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>            

        </table>
    </main>
<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>