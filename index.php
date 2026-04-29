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
        <h1 style="font-family: Verdana;color: darkgoldenrod; font-size: 40px;">
        Adopta. Rescata. Ayuda.
        </h1>

        <!--Buscador de mascotas-->

    </section>

    <button id="btnEmergencia">Veterinarias de Emergencia</button>

    <dialog id="ventanaEmergencia">
  <h2>Veterinarias cercanas</h2>

  <section id="mapa"></section>

  <button id="cerrarVentana">Cerrar</button>
</dialog>

<!--El boton para la IA de encontrar mascotas-->
    <button id="btnIA">
       <i class="bi bi-alexa"></i> Encontrar mi mascota ideal
    </button>
 
<hr>

<!--Titulo de la seccion de adopcion-->
<h2 class="titulopg">
¿Quieres Adoptar un perro o un gato?
</h2>

<!--Seccion de categorias de mascotas-->
<section class="contenedor-categorias">

    <!--Contenedor de las tarjetas-->
    <article class="categorias">

        <!--Tarjeta de perros-->
        <a href="perrosadopcion.php" class="card">
            <img src="imagenes/perro.webp" alt="Perro golden retriever de pie en un campo, con expresión feliz y lengua afuera, iluminado por luz cálida">

            <!--Texto que aparece encima de la imagen-->
            <section class="overlay">
                <h2>Perros</h2>
                <p>Ver Mascotas</p>
            </section>
        </a>

        <!--Tarjeta de gatos-->
        <a href="gatosadopcion.php" class="card">
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
    <a href="acercadenosotros.php" class="social-icon acerca">
        <i class="fa-solid fa-users"></i>
    </a>

</section>

<section id="cookie-banner" class="cookie-banner">
  <p>
    Usamos cookies para mejorar tu experiencia. Puedes aceptar o rechazar su uso.
    <a href="cookies.php">Leer más</a>
  </p>
  <button id="accept-cookies">Aceptar</button>
  <button id="reject-cookies">Rechazar</button>
  <button id="config-cookies">Configurar</button>
</section>

</main>

<!--Pie de pagina-->
<?php include("footer.php"); ?>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="script.js"></script>

</body>
</html>