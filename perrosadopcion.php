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
<label><input type="radio" name="sexo" value="macho"> Macho</label>
<label><input type="radio" name="sexo" value="hembra"> Hembra</label>
</div>

</div>

<!--Filtro por categoría de edad-->
<div class="grupo">

<label>CATEGORÍA</label>

<select id="categoria">
<option value="--">--</option>
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
<option value="--">--</option>
<option value="pequeno">Pequeño (hasta 10 kg)</option>
<option value="mediano">Mediano (de 10 a 25 kg)</option>
<option value="grande">Grande (de 25 a 40 kg)</option>
<option value="gigante">Gigante (más de 40 kg)</option>
</select>

</div>

<!--Filtro por tipo de pelaje-->
<div class="grupo">

<label>TIPO DE PELAJE</label>

<select id="pelaje">
<option value="--">--</option>
<option value=""corto>Corto</option>
<option value="medio">Medio</option>
<option value="largo">Largo</option>
<option value="rizado">Rizado</option>
</select>

</div>

<!--Filtro por color-->
<div class="grupo">

<label>COLOR</label>

<select id="color">
<option value="" selected>--</option>
<option value="negro">Negro</option>
<option value="blanco">Blanco</option>
<option value="cafe">Café</option>
<option value="gris">Gris</option>
<option value="atigrado">Atigrado</option>
<option value="manchas">Manchas</option>
<option value="crema">Crema</option>
<option value="beige">Beige</option>
</select>

</div>

<!--Filtro por nivel de energía-->
<div class="grupo">

<label>CARÁCTER</label>

<select id="caracter">
<option value="--">--</option>
<option value="tranquilo">Tranquilo</option>
<option value="moderado">Moderado</option>
<option value="activo">Muy activo</option>
<option value="jugueton">Jugueton</option>
</select>

</div>

<!--Botón para aplicar filtros-->
<button class="btn-filtrar" type="submit">Buscar</button>

<button class="btn-reset" type="button">Restablecer</button>

</section>

<!--Tarjetas de visualizacion de perros-->
<section class="contenedor-cards">
<article class="card-mascota" 
  data-sexo="macho"
  data-categoria="joven"
  data-tamano="mediano"
  data-pelaje="corto"
  data-color="cafe"
  data-caracter="tranquilo">

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

    <a href="solicituddeadopciondeperro.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="hembra"
  data-categoria="cachorro"
  data-tamano="pequeno"
  data-pelaje="rizado"
  data-color="crema"
  data-caracter="jugueton">

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

    <a href="solicituddeadopciondeperro.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="macho"
  data-categoria="adulto"
  data-tamano="grande"
  data-pelaje="corto"
  data-color="negro"
  data-caracter="tranquilo">

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

    <a href="solicituddeadopciondeperro.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="macho"
  data-categoria="cachorro"
  data-tamano="pequeno"
  data-pelaje="corto"
  data-color="beige"
  data-caracter="tranquilo">

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

    <a href="solicituddeadopciondeperro.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
</article>

<article class="card-mascota"
  data-sexo="hembra"
  data-categoria="joven"
  data-tamano="mediano"
  data-pelaje="corto"
  data-color="beige"
  data-caracter="moderado">

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

    <a href="solicituddeadopciondeperro.php">
    <button class="btn-adoptar">Adoptar</button>
</a>
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


document.addEventListener("DOMContentLoaded", () => {

  const btnBuscar = document.querySelector(".btn-filtrar");
  const btnReset = document.querySelector(".btn-reset");

  const tarjetas = document.querySelectorAll(".card-mascota");

  btnBuscar.addEventListener("click", () => {

    const sexo = document.querySelector('input[name="sexo"]:checked')?.value || "";
    const color = document.getElementById("color").value;
    const tamano = document.getElementById("tamano").value;
    const pelaje = document.getElementById("pelaje").value;
    const categoria = document.getElementById("categoria").value;

    tarjetas.forEach(card => {

      const matchSexo = !sexo || card.dataset.sexo === sexo;
      const matchColor = !color || card.dataset.color === color;
      const matchTamano = !tamano || card.dataset.tamano === tamano;
      const matchPelaje = !pelaje || card.dataset.pelaje === pelaje;
      const matchCategoria = !categoria || card.dataset.categoria === categoria;

      if (matchSexo && matchColor && matchTamano && matchPelaje && matchCategoria) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }

    });

  });

  // 🔄 BOTÓN RESET
  btnReset.addEventListener("click", () => {

    // Limpiar selects
    document.querySelectorAll("select").forEach(select => {
      select.value = "";
    });

    // Limpiar radios
    document.querySelectorAll('input[name="sexo"]').forEach(radio => {
      radio.checked = false;
    });

    // Mostrar todas las tarjetas
    tarjetas.forEach(card => {
      card.style.display = "block";
    });

  });

});
</script>

</body>
</html>