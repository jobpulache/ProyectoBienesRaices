<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con estas buenas prácticas para decorar tu hogar.
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span></p>
                    <p>
                        Consejos para construir una Terraza en el techo de tu casa con los mejores materiales
                        y ahorrando dinero.
                    </p>
                </a>
            </div>
            
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="Blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span></p>
                    <p>
                        Consejos para construir una Terraza en el techo de tu casa con los mejores materiales
                        y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="Blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con estas buenas prácticas para decorar tu hogar.
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span></p>
                    <p>
                        Consejos para construir una Terraza en el techo de tu casa con los mejores materiales
                        y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>
    </main>

<?php
  incluirTemplate('footer');
?>
