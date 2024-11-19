<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="/build/css/app.css"><!--Le estamos diciendo que en la raiz de mi proyecto tengo un archivo llamado build-->
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio': '' ?> ">  <!--Aqui estamos diciendo que si mi variable inicio es igual a true, que se muestre lo que contenga -->
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices/index.php"><img src="/build/img/logo.svg" alt="logo de la bienes raices"></a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icon menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Icon de DarkMode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>

            <?php if($inicio){?>
               <h1 > Ventas de casas y departamentos exclusivos de lujo</h1>
            <?php   } ?>
        </div>
    </header>