<?php
$inicio = true;
include './includes/templates/header.php'
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="First Icon" loading="lazy">
                <h3>Segurity</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                    dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="second Icon" loading="lazy">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                    dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt=" third Icon" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                    dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2>Casas y Depas en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>En el lago con excelentes vistas del mar y baños de playa</p>
                    <p class="precio">S/.10000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img  class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img  class="icono" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div><!--fin contenido-anuncio-->
            </div><!--fin anuncio-->


            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>En el lago con excelentes vistas del mar y baños de playa</p>
                    <p class="precio">S/.10000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img  class="icono" src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img  class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img  class="icono" src="build/img/icono_dormitorio.svg" alt="icono_dormitorio" loading="lazy">
                            <p>4</p>
                        </li>

                    </ul>
                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div><!--fin contenido-anuncio-->
            </div><!--fin anuncio-->


            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img class="icono" src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>En el lago con excelentes vistas del mar y baños de playa</p>
                    <p class="precio">S/.10000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img  class="icono" class="icono" src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
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
                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div><!--fin contenido-anuncio-->
            </div><!--fin anuncio-->
        </div><!--fin contenedor-anuncios-->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas </a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena este formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class=boton-amarillo>Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img class="icono" src="build/img/blog2.jpg" alt="Blog 1" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span>
                        </p>
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
                        <img class="icono" src="build/img/blog1.jpg" alt="Blog 1" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/16/24</span> por: <span>Manu rios Job</span>
                        </p>
                        <p>
                            Consejos para construir una Terraza en el techo de tu casa con los mejores materiales
                            y ahorrando dinero.
                        </p>
                    </a>
                </div>

            </article>
        </section>

        <section class="testimoniales">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal es muy bueno en lo que hace, realmente quedo sorprendido con el buen servicio.
                    Todo es de maravilla, es un lujo visitarles
                </blockquote>
                <p>-Job manu Rios</p>
            </div>
        </section>
    </div>






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