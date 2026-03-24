<?php
declare(strict_types=1);
require_once "header.php";
?>

<!--El main indica que es el contenido principal de la pagina-->
<main>

    <!-- Sección principal o hero -->
    <section class="hero">

        <!--Frase principal-->
        <p style="font-family: Verdana;color: rgb(6, 91, 112); font-size: 25px;">
            Adopta y cambia TU vida.
        </p>

        <!--Frase secundaria-->
        <h2 style="font-family: Verdana;color: darkgoldenrod; font-size: 40px;">
        Adopta. Rescata. Ayuda.
        </h2>

        <!--Buscador de mascotas-->
        <form class="Busqueda">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="palabras clave">
        </form>

    </section>
 
<hr>

<!--Titulo de la seccion de adopcion-->
<h1 class="titulopg">
¿Quieres Adoptar un perro o un gato?
</h1>

<!--Seccion de categorias de mascotas-->
<section class="contenedor-categorias">

    <!--Contenedor de las tarjetas-->
    <article class="categorias">

        <!--Tarjeta de perros-->
        <a href="perrosadopcion.html" class="card">
            <img src="imagenes/perro.webp" alt="Perro golden retriever de pie en un campo, con expresión feliz y lengua afuera, iluminado por luz cálida">

            <!--Texto que aparece encima de la imagen-->
            <section class="overlay">
                <h2>Perros</h2>
                <p>Ver Mascotas</p>
            </section>
        </a>

        <!--Tarjeta de gatos-->
        <a href="gatosadopcion.html" class="card">
            <img src="imagenes/gato.webp" alt="Gato naranja sentado en un camino, con luz cálida de atardecer y fondo desenfocado de naturaleza">

            <!--Texto encima de la imagen-->
            <section class="overlay">
                <h2>Gatos</h2>
                <p>Ver Mascotas</p>
            </section>
        </a>

    </article>

</section>

<!--Codigo para poder mostrar las redes sociales-->
<section class="social-container">

    <!--Facebook-->
    <a href="https://www.facebook.com/share/14Z8LPZGKuT/" class="social-icon facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>

    <!--Instagram-->
    <a href="https://www.instagram.com/petfriends.hub26?igsh=MWN5YmR2eTg4aW0zaw==" class="social-icon instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <!--Seccion acerca de nosotros-->
    <a href="acercadenosotros.html" class="social-icon acerca">
        <i class="fa-solid fa-users"></i>
    </a>

</section>

<hr>

<!--Titulo de la seccion de adopcion-->
<h1 class="titulopg">
Veterinarias
<p>Encuentra atencion para tus mascotas</p>
</h1>

<!--Codigo para mostrar el mapa de las veterinarias-->
<section class="mapa">
    <button id="toggleMapa">Mostrar / Ocultar</button>

    <!--iframe donde muestra el mapa hecho por google maps-->
    <iframe 
      id="mapaFrame"
      src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d38523.3946727449!2d-102.32804944070634!3d20.00221791314422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sveterinarias%20en%20zamora%20michoac%C3%A1n!5e1!3m2!1ses-419!2smx!4v1773896561652!5m2!1ses-419!2smx"
      loading="lazy">
    </iframe>
</section>

</main>

<!--Pie de pagina-->
<footer class="cre">
@PETfriends hub 2026
</footer>

</body>
</html>