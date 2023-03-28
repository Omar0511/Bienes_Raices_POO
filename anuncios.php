<?php 
    require './include/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h2>Casas y Depas en venta</h2>

        <?php             
            $limite = 100;
            include 'include/templates/anuncios.php';
        ?>

    </main>

<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>