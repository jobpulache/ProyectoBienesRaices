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
</main>


<?php
incluirTemplate('footer');
?>