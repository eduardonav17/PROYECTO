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
<section class="filtros">

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

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

</body>
</html>