<?php 
    require './include/app.php';

    incluirTemplate('header', $inicio = true);
?>    
    <main class="contenedor">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda architecto magnam voluptatibus eius repudiandae
                    dicta, sunt rerum excepturi aperiam numquam tempora fugiat sapiente pariatur eveniet laborum aliquid fugit in nobis.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda architecto magnam voluptatibus eius repudiandae
                    dicta, sunt rerum excepturi aperiam numquam tempora fugiat sapiente pariatur eveniet laborum aliquid fugit in nobis.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda architecto magnam voluptatibus eius repudiandae
                    dicta, sunt rerum excepturi aperiam numquam tempora fugiat sapiente pariatur eveniet laborum aliquid fugit in nobis.
                </p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <!-- Agregando template de anuncios -->
        <?php include 'include/templates/anuncios.php'; ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>LLena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

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
                        <p class="informacion-meta">Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
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
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>08/01/2023</span> por: <span>Admin</span> </p>
                    </a>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía, 
                        aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis
                    expectativas
                </blockquote>
                <p>- Omar García</p>
            </div>
        </section>
    </div>

<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>