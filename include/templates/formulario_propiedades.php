<fieldset>
    <legend>Información general</legend>

    <!-- Se agrega en el value la variable de PHP para que se quede guardada y no tenga que sobreescribirla -->
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Título Propiedad" value="<?php echo s($propiedad->titulo); ?>">

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio); ?>">

    <label for="imagen">Imágen:</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">

    <?php if ($propiedad->imagen) { ?>
        <img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imágen propiedad" class="imagen-small" >
    <?php } ?>
    

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="propiedad[descripcion]"> <?php echo s($propiedad->descripcion); ?> </textarea>
</fieldset>

<fieldset>
    <legend>Información Propiedad</legend>

    <label for="habitaciones">Habitaciones:</label>
    <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">

    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="propiedad[wc]" placeholder="Ej: 2" min="1" max="9" value="<?php echo s($propiedad->wc); ?>">

    <label for="estacionamiento">Estacionamiento:</label>
    <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 5" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>">
</fieldset>

<fieldset>
    <legend>Vendedor</legend>
    <select name="propiedad[vendedorId]" id="vendedor">
        <option value=""> -- Seleccione vendedor -- </option>
        <?php foreach($vendedores as $vendedor) { ?>
            <option 
                <?php echo $propiedad->vendedorId === $vendedor->id ? 'selected' : ''; ?> 
                value="<?php echo s($vendedor->id); ?>"
            >
                <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?>
            </option>
        <?php } ?>
    </select>
</fieldset>