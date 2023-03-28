<?php 
    require './include/app.php';
    incluirTemplate('header');
?>    
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/nosotros.webp" type="image/webp">
                    <source srcset="/build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
    
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro odit repellat dolore assumenda, officiis quod
                    impedit quia suscipit voluptate cupiditate, distinctio beatae sit. Odit, nihil repudiandae. Quae, ad nulla.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro odit repellat dolore assumenda, officiis quod
                    impedit quia suscipit voluptate cupiditate, distinctio beatae sit. Odit, nihil repudiandae. Quae, ad nulla.
                </p>
    
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro odit repellat dolore assumenda, officiis quod
                    impedit quia suscipit voluptate cupiditate, distinctio beatae sit. Odit, nihil repudiandae. Quae, ad nulla.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro odit repellat dolore assumenda, officiis quod
                    impedit quia suscipit voluptate cupiditate, distinctio beatae sit. Odit, nihil repudiandae. Quae, ad nulla.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro odit repellat dolore assumenda, officiis quod
                    impedit quia suscipit voluptate cupiditate, distinctio beatae sit. Odit, nihil repudiandae. Quae, ad nulla.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor">
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
    </section>
<?php 
    include './include/templates/footer.php';
?>