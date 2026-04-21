<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección con video de fondo-->
<section class="hero-video">

<!--Video de fondo-->
<video autoplay muted loop playsinline class="video-bg">
<source src="videos/gatos.mp4" type="video/mp4">
</video>

<!--Capa oscura sobre el video-->
<div class="hero-overlay"></div>

<!--Contenido encima del video-->
<div class="hero-content">

<section class="text-box">
<h1>GATOS</h1>
<p>Encuentra a tu mejor amigo</p>
</section>

</div>

</section>

<!--Sección de filtros de búsqueda-->
<button id="abrirFiltros" class="btn-abrir-filtros">Filtrar búsqueda</button>

<section class="filtros" id="panelFiltros">

<i id="cerrarFiltros" class="bi bi-x-circle-fill icono-cerrar"></i>

<h3>Filtrar búsqueda</h3>

<!--Filtro por sexo-->
<div class="grupo">
<label>SEXO</label>

<div class="radio-group">
<label><input type="radio" name="sexo"> Macho</label>
<label><input type="radio" name="sexo"> Hembra</label>
</div>

</div>

<!--Filtro por edad-->
<div class="grupo">
<label>EDAD</label>

<select>
<option>--</option>
<option>Cachorro (menos de 1 año)</option>
<option>Joven (de 1 a 4 años)</option>
<option>Adulto (4-9 años)</option>
<option>Senior (más de 9 años)</option>
</select>

</div>

<!--Filtro por tamaño-->
<div class="grupo">
<label>TAMAÑO</label>

<select>
<option>--</option>
<option>Pequeño (hasta 10 kg)</option>
<option>Mediano (de 10 a 25 kg)</option>
<option>Grande (de 25 a 40 kg)</option>
</select>

</div>

<!--Filtro por tipo de pelaje-->
<div class="grupo">
<label>TIPO DE PELAJE</label>

<select>
<option>--</option>
<option>Corto</option>
<option>Medio</option>
<option>Largo</option>
<option>Sin pelo (tipo sphynx)</option>
</select>

</div>

<!--Filtro por color-->
<div class="grupo">
<label>COLOR</label>

<select>
<option>--</option>
<option>Negro</option>
<option>Blanco</option>
<option>Gris</option>
<option>Naranja</option>
<option>Atrigado</option>
<option>Bicolor</option>
<option>Tricolor</option>
<option>Carey</option>
</select>

</div>

<!--Filtro por actividad-->
<div class="grupo">
<label>NIVEL DE ACTIVIDAD</label>

<select>
<option>--</option>
<option>Tranquilo</option>
<option>Juguetón</option>
<option>Muy Activo</option>
<option>Independiente</option>
</select>

</div>

<!--Botón para filtrar-->
<button class="btn-filtrar">Buscar</button>

</section>

<!--Tarjetas de visualización de gatos-->
<section class="contenedor-cards">
<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/gato1.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Nieve</h3>
    <p class="tipo">Gato - 2 años</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Hembra</li>
        <li><strong>Categoria</strong> Joven</li>
        <li><strong>Tamaño:</strong> Mediano</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Blanco</li>
        <li><strong>Nivel de Actividad:</strong> Tranquilo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/gato2.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Sombra</h3>
    <p class="tipo">Gato - 3 meses</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria</strong> Cachorro</li>
        <li><strong>Tamaño:</strong> Pequeño</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Negro</li>
        <li><strong>Nivel de Actividad:</strong> Muy activo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/gato3.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Mango</h3>
    <p class="tipo">Gato - 2 meses</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria</strong> Cachorro</li>
        <li><strong>Tamaño:</strong> Pequeño</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Naranja/Atigrado</li>
        <li><strong>Nivel de Actividad:</strong> Muy activo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/gato4.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Pelusa</h3>
    <p class="tipo">Gato - 3 años</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Hembra</li>
        <li><strong>Categoria</strong> Joven</li>
        <li><strong>Tamaño:</strong> Mediano</li>
        <li><strong>Tipo de Pelaje:</strong> Largo</li>
        <li><strong>Color:</strong> Gris/Atigrado</li>
        <li><strong>Nivel de Actividad:</strong> Tranquilo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/gato5.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Bigotes</h3>
    <p class="tipo">Gato - 2 meses</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria</strong> Cachoro</li>
        <li><strong>Tamaño:</strong> Pequeño</li>
        <li><strong>Tipo de Pelaje:</strong> Medio</li>
        <li><strong>Color:</strong> Atigrado/Bicolor</li>
        <li><strong>Nivel de Actividad:</strong> Jugueton</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

</section>

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

<!--Pie de pagina-->
<?php include("footer.php"); ?>

<script src="script.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const btn = document.getElementById("abrirFiltros");
  const panel = document.getElementById("panelFiltros");
  const btnCerrar = document.getElementById("cerrarFiltros");

  //abrir/cerrar con botón
  btn.addEventListener("click", () => {
    panel.classList.toggle("activo");

    if (panel.classList.contains("activo")) {
      btn.textContent = "Cerrar filtro";
    } else {
      btn.textContent = "Filtrar búsqueda";
    }
  });

  //cerrar con icono
  btnCerrar.addEventListener("click", () => {
    panel.classList.remove("activo");
    btn.textContent = "Filtrar búsqueda";
  });

});
</script>


</body>
</html>