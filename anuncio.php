<?php
include './includes/templates/header.php'
?>

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