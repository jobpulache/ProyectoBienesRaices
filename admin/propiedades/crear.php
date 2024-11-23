<?php
//Conetadno a database
require '../../includes/config/database.php'; //Trayendo a la funcion de conectar bd
//llamado a esa funcion
$db = conectarBD();

//Consultar para obtener los vendedores - consulta a la BD
$consulta = "SELECT * FROM VENDEDORES";
$resultado = mysqli_query($db, $consulta); //Contatenando la conexión y la query


//Arreglos con mensajes de errores
$errores = [];

//Inicializamos estos arrays vacios y cuando se envie el formulario se completaran ya que estamos usando el REQUES_MEHTOD method="POST"
//Las creo vacias y luego les asigno ese valor
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

//Ejecutar el código después de que el usuario envía el form.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    //Pasamos todos los campos al metodo post
    //Para que nos muestre los datos 
    $titulo = $_POST['titulo']; //Les asignamos el contenido
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion']; //A estas variables les asignamos el contenido del post
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];
    $creado = date('Y/m/d');

    //Si el titulo está vacio. Lo vamos agregando al arrelglo de errores
    //[CORCHETES]
    if (!$titulo) {
        $errores[] = 'Debes añadir un titulo';
    }
    //Con esta sintaxis va agregando al final cada sentencia.
    if (!$precio) {
        $errores[] = 'El precio es obligatorio';
    }
    if (strlen($descripcion) < 59) { //STRLEN=> nos da la extensión de un string
        $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
    }
    if (!$habitaciones) {
        $errores[] = 'Debes anadir el número de habitaciones';
    }
    if (!$wc) {
        $errores[] = 'Debes añadir el número de baños';
    }
    if (!$estacionamiento) {
        $errores[] = 'El número de lugares de estacionamiento es obligatorio';
    }
    if (!$vendedorId) {
        $errores[] = 'Elige un vendedor';
    }
    // echo '<pre>';
    // var_dump($errores);//Podemos visualuzar los errores
    // echo '</pre>';

    // exit;//Con esto prevenimos que se ejecute le inserción

    //Esta inserción se va a realizar con la condición que mi arreglo de errores este empty(vacio)

    //Revisar que el arreglo de errores este vacio
    //empty revisa que un array este vacio
    if (empty($errores)) {

        $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento,creado, Vendedores_id)
        VALUES ('$titulo',
        '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento','$creado', '$vendedorId')";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            echo 'Insertado correctamente';
        } else {
            echo 'No se logro';
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <!-- Recorre mi array al menos una vez por cada elemento.-->
    <!--//Mostramos los errores-->
    <?php
    foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario-contacto" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png"> <!--Para que  solo acepte imagenes de tipo jpeg y png-->

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <!--Otro fielsed para otro determinado grupo de datos -->
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="ej. 3" min="1" max="10" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="ej. 10" min="1" max="10" value="<?php echo $wc; ?>">

            <label for="estacionamiento">estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="ej. 2" min="1" max="2" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">--Seleccione una opción--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)):  ?><!--Este while se va ejecutando mientras encuentre resultados en la base de datoa-->
                    <!--Por lo tanto va generando las siguientes opciones-->
                    <!--El value tiene que ser su ID - esto es un operador ternario como un if en una sola linea-->
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option><!--Concatenamos  el apellido--->
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Crear propiedad" class="boton boton-verde">

    </form>
</main>


<?php
incluirTemplate('footer');
?>