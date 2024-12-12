<?php
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';
$id =$_GET['id'];//A esta variable le asignamos get en la posición id
$id = filter_var($id, FILTER_VALIDATE_INT);//Validades el id para que sea un entero.

//Validar que sea un id valido
if(!$id){
    header('location:/admin');//Si no es un id(int) lo redireccionamos
}



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


    //Ejemplo de sanitización
    // $numero = "1HOLA";
    // $numero2 = 1;
    // $correo = "hola@gmail.com";
    // //sanitizar
    // $resultado = filter_var($numero, FILTER_SANITIZE_NUMBER_INT); //Sanitizando el número uno - Mantiene solo los números enteros 
    // //Usando estos filtros podemos sanitizar o eliminar lo que no requerimos
    // //Validar que sea un entero
    // $resultado = filter_var($numero2, FILTER_VALIDATE_INT); //Valida que sea un entero 
    // $resultado = filter_var($numero, FILTER_VALIDATE_EMAIL);

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // echo '<pre>';
    // var_dump($_FILES); //Es la super global de archivos - lee archivos(puede ser img)
    // echo '</pre>';

    //Pasamos todos los campos al metodo post Para que nos muestre los datos 
    $titulo = mysqli_real_escape_string($db,  $_POST['titulo']); //Les asignamos el contenido
    $precio = mysqli_real_escape_string($db,  $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db,  $_POST['descripcion']); //A estas variables les asignamos el contenido del post
    $habitaciones = mysqli_real_escape_string($db,  $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db,  $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db,  $_POST['estacionamiento']); //Variable- function-bd-method=post-campoBD
    $vendedorId = mysqli_real_escape_string($db,  $_POST['vendedor']);
    $creado = date('Y/m/d'); //Año, mes y día

    //Asignar files hacia una variable
    $imagen = $_FILES['imagen']; //Accedemos con el name, con el name es como obtenemos los datos ya en el servidor


    // var_dump($imagen['name']);//En caso que el valor exista, significa que el usuario si subio la imagen
    // exit;

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
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "La imagen es obligatorio"; //La agregamos a errores eb caso no haya subido la imagen
    }

    //Validamos el tamaño(1mb max.)
    $medida = 1000 * 1000; //Formula de medida, convertimos de bits a kbits

    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada'; //La add at errores in caso se exceda - validamos poe tamaño
    }

    // echo '<pre>';
    // var_dump($errores);//Podemos visualuzar los errores
    // echo '</pre>';

    // exit;//Con esto prevenimos que se ejecute le inserción

    //Esta inserción se va a realizar con la condición que mi arreglo de errores este empty(vacio)

    //Revisar que el arreglo de errores este vacio
    //empty revisa que un array este vacio
    if (empty($errores)) {

        /*Upload de archivos*/


        //Creating carpt
        $carpetaImagenes = '../../imagenes/'; //Cuando no habea errores, va a crear esa carpeta.


        if (!is_dir($carpetaImagenes)) { //This function return if carpt exists or not(is_dir)
            mkdir($carpetaImagenes); //Esta función it's for creating directory
        };

        //Generating one name only 
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg"; //Generatuing name only at img

        //Subir imagen - exits one function7
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen); //lo guardamos en el servidor

        // exit; //Para   que no insert in BD


        $query = "INSERT INTO propiedades(titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento,creado, Vendedores_id)
        VALUES ('$titulo',
        '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento','$creado', '$vendedorId')"; //Add creado

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            // echo 'Insertado correctamente';
            //Mejor hacemos que nos redireccione, así evitamos que los usuarios piensen que no se registraron los datos
            header('Location: /admin?resultado=1'); //Header es una función para redireccionar a un usuario
        } else {
            echo 'No se logro';
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <!-- Recorre mi array al menos una vez por cada elemento.-->
    <!--//Mostramos los errores-->
    <?php
    foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>
    <!--Cuando un form quiee subir archivos se debe agregar: enctype="multipart/form-data". Para que lea archivos-->
    <form class="formulario-contacto" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
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
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option><!--Concatenamos  el apellido--->
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">

    </form>
</main>


<?php
incluirTemplate('footer');
?>