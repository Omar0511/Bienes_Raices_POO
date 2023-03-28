    <footer class="footer seccion">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>

            <?php 
                $fecha = date('d-m-Y');

                //echo $fecha; ->  Resultado : 13-01-2023
            ?>

            <p class="copyrigth">Todos los derechos reservados <?php echo date('Y'); ?>  &copy;</p>
    </footer>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>