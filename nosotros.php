<?php
require './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="Imagen de nosotros" loading="lazy">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>25 años de experiencia en el sector</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
                dipisicing elit. Modi, voluptas? t. Modi, voluptas?
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
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
</section>

<?php
  incluirTemplate('footer');
?>