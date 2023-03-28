<?php 
    require 'include/app.php';

    $conexion = conectarDB();

    //Arreglo de errores
    $errores = [];

    //Autenticar usuario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /*
            echo "<pre>";
                var_dump($_POST);
            echo "</pre>";  
        */

        //Inyection SQL
        $email = mysqli_real_escape_string($conexion, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) );
        $password = mysqli_real_escape_string($conexion, $_POST['password'] );

        //var_dump($email);

        if (!$email) {
            $errores[] = "El Email es obligatorio";
        }

        if (!$password) {
            $errores[] = "El password es obligatorio";
        }

        //var_dump($errores, $password);

        if (empty($errores)) {
            //Revisar si existe el usuario
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($conexion, $query);

            if ($resultado->num_rows) {
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto
                $auth = password_verify($password, $usuario['password']);            

                if ($auth) {
                    //Usuartio autenticado
                    session_start();

                    //Llenar arreglo con la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    // echo "<pre>";
                    //     var_dump($_SESSION);
                    // echo "</pre>";                    

                    header('Location: /admin/');
                } 
                else {
                    $errores[] = "El password es incorrecto";
                }

            } 
            else {
                $errores[] = "El usuario no existe";
            }
        } 
    }

    incluirTemplate('header');
?>    

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesión</h1>

        <?php foreach($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Escribe tu Email" id="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Escribe tu password" id="password" required>
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>