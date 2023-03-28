<?php 
    require './include/app.php';
    incluirTemplate('header');
?> 
    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>   
            <source srcset="/build/img/destacada3.webp" type="image/webp">
            <source srcset="/build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen Contacto" loading="lazy">
        </picture>

        <h2>LLene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Escribe tu Nombre" id="nombre">

                <label for="email">Email</label>
                <input type="email" placeholder="Escribe tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Escribe tu telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected> --> Seleccione <-- </option>
                    <option value="">Compra</option>
                    <option value="">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Escribe tu precio o presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contacto" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">Email</label>
                    <input type="radio" name="contacto" id="contactar-email" value="email">  
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input class="boton-verde" type="submit" value="Enviar">

        </form>

    </main>
<?php 
    //include './include/templates/footer.php';
    incluirTemplate('footer');
?>