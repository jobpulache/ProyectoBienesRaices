<?php
require './includes/funciones.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source src="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="ImagenDest" loading="lazy">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario-contacto">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu email">

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" placeholder="Tu telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>
                <label for="opciones">Compra o vende?</label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="venta">Venta</option>
                </select>

                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Cómo desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="telefono">Telefono</label>
                    <input type="radio" name="contacto" id="telefono" value="Telefono">

                    <label for="email">E-mail</label>
                    <input type="radio" name="contacto" id="email" value="email">
                </div>
                <p>Si eligio teléfono, escriba la fecha y la hora</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
                <label for="hora">Hora</label>
                <input type="time" id="hora">
            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">
        </form>
    </main>

<?php
  incluirTemplate('footer');
?>
