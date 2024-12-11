<?php
//Importar la conexión a la base de datos - importing database connection
require '../includes/config/database.php'; //Eb esta caso solo sale una vez. Pues esta dentro de admin
$db = conectarBD();

//Escribir el query - write query
$query = "SELECT * FROM propiedades";


//Consultar BD - consult BD
$resultadoConsulta = mysqli_query($db, $query); //mysqli primero toma la conexión y luego el query




//Sample Message conditional - mostrar mensaje condicional
$resultado = $_GET['resultado' ?? null]; //Super global get - maneja datoa URL   //Buscca ese valor y si no existe, entonces le asigma null

//Unclude template - incluye template
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

        <tbody><!--Mostrar los resultados - sample result-->
            <!--Cod que va a iterar en la base de datos-->
            <?php  while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $propiedad['id'];  ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Home in the Beach" class="imagen-tabla" height="100"></td>
                <td><?php echo $propiedad['precio'] ?></td>
                <td>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php  endwhile; ?>
        </tbody>
    </table>
</main>



<?php
//Cerrar la conexion - closing connection
mysqli_close($db);

incluirTemplate('footer');
?>