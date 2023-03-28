<fieldset>
    <legend>Información general</legend>

    <!-- Se agrega en el value la variable de PHP para que se quede guardada y no tenga que sobreescribirla -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido Vendedor" value="<?php echo s($vendedor->apellido); ?>">
</fieldset>

<fieldset>
    <legend>Información Extra</legend>

    <label for="telefono">Telefono:</label>
    <input type="tel" id="telefono" name="vendedor[telefono]" placeholder="Teléfono vendedor" value="<?php echo s($vendedor->telefono); ?>">
</fieldset>