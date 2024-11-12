<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"><img src="build/img/logo.svg" alt="logo de la bienes raices"></a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icon menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="Icon de DarkMode">
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa frente al bosque</h1>
        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <img src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                S/.10000
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio" loading="lazy">
                    <p>4</p>
                </li>

            </ul>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad aut temporibus accusantium soluta officiis
                aliquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.
                iquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.
                iquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.
                aliquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.
                iquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.
                iquid, blanditiis similique aliquam nihil reprehenderit iusto earum repellat ullam error cupiditate
                magni sed nisi accusamus.  
            </p>
            

        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">all rights reserved &copy; 2024</p>

    </footer>



    <script src="build/js/bundle.min.js"></script>
</body>

</html>