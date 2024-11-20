<?php
//Conetadno a database
require '../../includes/config/database.php'; //Trayendo a la funcion de conectar bd
//llamado a esa funcion
$db = conectarBD();
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre';
    //Pasamos todos los campos al metodo post
    //Para que nos muestre los datos 
    $titulo = $_POST['titulo'];//Les asignamos el contenido
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];//A estas variables les asignamos el contenido del post
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento= $_POST['estacionamiento'];
    $vendedoresId = $_POST['vendedor'];

    //Insert in the database
    $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId)
    VALUES ('$titulo',
    '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedoresId')";
   
//    echo $query; - Para probar que este haciendo la inserción de datos de manera correcta.

    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo 'Insertado correctamente';
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario-contacto" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png"> <!--Para que  solo acepte imagenes de tipo jpeg y png-->

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <!--Otro fielsed para otro determinado grupo de datos -->
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="ej. 3" min="1" max="10">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="ej. 10" min="1" max="10">

            <label for="estacionamiento">estacionamiento</label>
            <input type="number" id="habitaciones" name="estacionamiento" placeholder="ej. 2" min="1" max="2">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="1">Job</option>
                <option value="2">Manu Rios</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear propiedad" class="boton boton-verde">

    </form>
</main>


<?php
incluirTemplate('footer');
?>