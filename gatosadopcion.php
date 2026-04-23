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
<label><input type="radio" name="sexo" value="macho"> Macho</label>
<label><input type="radio" name="sexo" value="hembra"> Hembra</label>
</div>

</div>

<!--Filtro por edad-->
<div class="grupo">
<label>EDAD</label>

<select id="edad">
<option value="">--</option>
<option value="cachorro">Cachorro (menos de 1 año)</option>
<option value="joven">Joven (de 1 a 4 años)</option>
<option value="adulto">Adulto (4-9 años)</option>
<option value="senior">Senior (más de 9 años)</option>
</select>

</div>

<!--Filtro por tamaño-->
<div class="grupo">
<label>TAMAÑO</label>

<select id="tamano">
<option value="">--</option>
<option value="pequeno">Pequeño (hasta 10 kg)</option>
<option value="mediano">Mediano (de 10 a 25 kg)</option>
<option value="grande">Grande (de 25 a 40 kg)</option>
</select>

</div>

<!--Filtro por tipo de pelaje-->
<div class="grupo">
<label>TIPO DE PELAJE</label>

<select id="pelaje">
<option value="">--</option>
<option value="corto">Corto</option>
<option value="medio">Medio</option>
<option value="largo">Largo</option>
<option value="sinpelo">Sin pelo (tipo sphynx)</option>
</select>

</div>

<!--Filtro por color-->
<div class="grupo">
<label>COLOR</label>

<select id="color">
<option value="">--</option>
<option value="negro">Negro</option>
<option value="blanco">Blanco</option>
<option value=""gris>Gris</option>
<option value="naranja">Naranja</option>
<option value="atigrado">Atrigado</option>
<option value="bicolor">Bicolor</option>
<option value=""tricolor>Tricolor</option>
<option value="carey">Carey</option>
</select>

</div>

<!--Filtro por actividad-->
<div class="grupo">
<label>NIVEL DE ACTIVIDAD</label>

<select id="actividad">
<option value="">--</option>
<option value="tranquilo">Tranquilo</option>
<option value="jugueton">Juguetón</option>
<option value="activo">Muy Activo</option>
<option value="independiente">Independiente</option>
</select>

</div>

<!--Botón para filtrar-->
<button type="button" class="btn-filtrar">Buscar</button>
<button type="button" class="btn-reset">Restablecer</button>

</section>

<!--Tarjetas de visualización de gatos-->
<section class="contenedor-cards">
<article class="card-mascota"
  data-sexo="hembra"
  data-edad="joven"
  data-tamano="mediano"
  data-pelaje="corto"
  data-color="blanco"
  data-actividad="tranquilo">

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
   <a href="solicituddeadopciondegato.php">
    <button class="btn-adoptar">Adoptar</button>
   </a>
</article>

<article class="card-mascota"
  data-sexo="macho"
  data-edad="cachorro"
  data-tamano="pequeno"
  data-pelaje="corto"
  data-color="negro"
  data-actividad="activo">

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

    <a href="solicituddeadopciondegato.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="macho"
  data-edad="cachorro"
  data-tamano="pequeno"
  data-pelaje="corto"
  data-color="atigrado"
  data-actividad="activo">

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

    <a href="solicituddeadopciondegato.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="hembra"
  data-edad="joven"
  data-tamano="mediano"
  data-pelaje="largo"
  data-color="atigrado"
  data-actividad="tranquilo">

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

    <a href="solicituddeadopciondegato.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="macho"
  data-edad="cachorro"
  data-tamano="pequeno"
  data-pelaje="medio"
  data-color="bicolor"
  data-actividad="jugueton">

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

    <a href="solicituddeadopciondegato.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
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



document.addEventListener("DOMContentLoaded", () => {

  const btnBuscar = document.querySelector("#panelFiltros .btn-filtrar");
  const btnReset = document.querySelector("#panelFiltros .btn-reset");
  const tarjetas = document.querySelectorAll(".card-mascota");

  btnBuscar.addEventListener("click", () => {

    const sexo = document.querySelector('#panelFiltros input[name="sexo"]:checked')?.value || "";
    const edad = document.getElementById("edad").value;
    const tamano = document.getElementById("tamano").value;
    const pelaje = document.getElementById("pelaje").value;
    const color = document.getElementById("color").value;
    const actividad = document.getElementById("actividad").value;

    tarjetas.forEach(card => {

      const matchSexo = !sexo || card.dataset.sexo === sexo;
      const matchEdad = !edad || card.dataset.edad === edad;
      const matchTamano = !tamano || card.dataset.tamano === tamano;
      const matchPelaje = !pelaje || card.dataset.pelaje === pelaje;
      const matchColor = !color || card.dataset.color === color;
      const matchActividad = !actividad || card.dataset.actividad === actividad;

      card.style.display =
        (matchSexo && matchEdad && matchTamano && matchPelaje && matchColor && matchActividad)
        ? "block"
        : "none";

    });

  });

  btnReset.addEventListener("click", () => {

    document.querySelectorAll("#panelFiltros select").forEach(s => s.value = "");
    document.querySelectorAll('#panelFiltros input[name="sexo"]').forEach(r => r.checked = false);

    tarjetas.forEach(card => card.style.display = "block");

  });

});
</script>


</body>
</html>