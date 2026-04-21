<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección principal con video de fondo-->
<section class="hero-video">

<!--Video de fondo-->
<video autoplay muted loop playsinline class="video-bg">
<source src="videos/perros3.mp4" type="video/mp4">
</video>

<!--Capa oscura sobre el video-->
<div class="hero-overlay"></div>

<!--Contenido del encabezado-->
<div class="hero-content">

<div class="text-box">
<h1>PERROS</h1>
<p>Encuentra a tu mejor amigo</p>
</div>

</div>

</section>

<!--Sección de filtros de búsqueda-->
<button id="abrirFiltros" class="btn-abrir-filtros">
  Filtrar búsqueda
</button>

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

<!--Filtro por categoría de edad-->
<div class="grupo">

<label>CATEGORÍA</label>

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
<option>Gigante (más de 40 kg)</option>
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
<option>Rizado</option>
</select>

</div>

<!--Filtro por color-->
<div class="grupo">

<label>COLOR</label>

<select>
<option>--</option>
<option>Negro</option>
<option>Blanco</option>
<option>Café</option>
<option>Gris</option>
<option>Atigrado</option>
<option>Manchas</option>
<option>Crema</option>
<option>Beige</option>
</select>

</div>

<!--Filtro por nivel de energía-->
<div class="grupo">

<label>CARÁCTER</label>

<select>
<option>--</option>
<option>Tranquilo</option>
<option>Moderado</option>
<option>Muy activo</option>
<option>Jugueton</option>
</select>

</div>

<!--Botón para aplicar filtros-->
<button class="btn-filtrar">Buscar</button>

</section>

<!--Tarjetas de visualizacion de perros-->
<section class="contenedor-cards">
<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/perro1.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Bento</h3>
    <p class="tipo">Perro - 4 años</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria:</strong> Joven</li>
        <li><strong>Tamaño:</strong> Mediano</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Cafe/Blanco</li>
        <li><strong>Carácter:</strong> Tranquilo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/perro2.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Pelusa</h3>
    <p class="tipo">Perro - 7 Meses</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Hembra</li>
        <li><strong>Categoria:</strong> Cachorro</li>
        <li><strong>Tamaño:</strong> Pequeño</li>
        <li><strong>Tipo de Pelaje:</strong> Rizado</li>
        <li><strong>Color:</strong> Crema</li>
        <li><strong>Carácter:</strong> Jugueton</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/perro3.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Kaiser</h3>
    <p class="tipo">Perro - 5 años</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria:</strong> Adulto</li>
        <li><strong>Tamaño:</strong> Grande</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Negro/Cafe</li>
        <li><strong>Carácter:</strong> Tranquilo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/perro4.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Milo</h3>
    <p class="tipo">Perro - 5 Meses</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Categoria:</strong> Cachorro</li>
        <li><strong>Tamaño:</strong> Pequeño</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Beige</li>
        <li><strong>Carácter:</strong> Tranquilo</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>

<article class="card-mascota">
    <span class="favorito">
        <i class="fa-solid fa-paw"></i>
    </span>

    <img src="imagenes/Prueba/perro5.webp" alt="Imagen de prueba con fondo color naranja y letras blancas">

    <h3 class="nombre">Simba</h3>
    <p class="tipo">Perro - 3 años</p>

    <ul class="datos">
        <li><strong>Sexo:</strong> Hembra</li>
        <li><strong>Categoria:</strong> Joven</li>
        <li><strong>Tamaño:</strong> Mediano</li>
        <li><strong>Tipo de Pelaje:</strong> Corto</li>
        <li><strong>Color:</strong> Beige</li>
        <li><strong>Carácter:</strong> Moderado</li>
    </ul>

    <button class="btn-adoptar">Adoptar</button>
</article>
</section>

</main>

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