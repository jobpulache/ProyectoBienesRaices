<?php
$resultado = $_GET['resultado' ?? null]; //Super global get - maneja datoa URL   //Buscca ese valor y si no existe, entonces le asigma null


require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de bienes raices</h1>
    <?php
    if (intval($resultado) === 1): ?> <!--intval es un funcion que convierte a entero-->
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif; ?>
    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Home in the Beach</td>
                <td><img src="/imagenes/2a8783bfefa41e1214ef839586431e09.jpg" alt="Home in the Beach" class="imagen-tabla" height="100"></td>
                <td>S/.2345678</td>
                <td>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>


<?php
incluirTemplate('footer');
?>