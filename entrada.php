<?php 
    require './include/app.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="/build/img/destacada2.webp" type="image/webp">
            <source srcset="/build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="Imagen de la propiedad" loading="lazy">
        </picture>
        
        <p class="informacion-meta">Escrito el: <span>09/01/2023</span> por: <span>Admin</span>  </p>
        
        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nemo doloribus assumenda distinctio libero maxime
                ipsam culpa unde. Harum nisi dolorem inventore, ratione unde perferendis aliquam quis! Minima, praesentium
                laudantium?
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nemo doloribus assumenda distinctio libero maxime
                ipsam culpa unde. Harum nisi dolorem inventore, ratione unde perferendis aliquam quis! Minima, praesentium
                laudantium?
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nemo doloribus assumenda distinctio libero maxime
                ipsam culpa unde. Harum nisi dolorem inventore, ratione unde perferendis aliquam quis! Minima, praesentium
                laudantium?
            </p>
        </div>
    </main>
<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>