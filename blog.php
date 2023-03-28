<?php 
    require './include/funciones.php';
    incluirTemplate('header');
?>     
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog1.webp" type="image/webp">
                    <source srcset="/build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
                </a>

                <p>
                    Consejor para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                </p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog2.webp" type="image/webp">
                    <source srcset="/build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
                </a>

                <p>
                    Consejor para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                </p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog3.webp" type="image/webp">
                    <source srcset="/build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
                </a>

                <p>
                    Consejor para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                </p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog4.webp" type="image/webp">
                    <source srcset="/build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
                </a>

                <p>
                    Consejor para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                </p>
            </div>
        </article>        
    </main>
<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>