<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección del formulario para reportar mascotas perdidas-->
<section class="contenedor">

<h2>Reportar Pet Perdido</h2>

<!--Formulario para registrar la mascota perdida-->
<form id="formPerdido">

<!--Foto del animal-->
<div class="grupo">
<label>Foto de la mascota</label>
<input type="file" id="foto" accept="image/*" required>
</div>

<!--Nombre de la mascota-->
<div class="grupo">
<label>Nombre</label>
<input type="text" id="nombre" placeholder="Ej. Max" required>
</div>

<!--Tipo de mascota-->
<div class="grupo">
<label>Tipo</label>
<select id="tipo" required>
<option value="">Selecciona una opción</option>
<option>Perro</option>
<option>Gato</option>
</select>
</div>

<!--Raza-->
<div class="grupo">
<label>Raza</label>
<input type="text" id="raza" placeholder="Ej. Labrador">
</div>

<!--Color-->
<div class="grupo">
<label>Color</label>
<input type="text" id="color" placeholder="Ej. Café con blanco">
</div>

<!--Fecha en que se perdió-->
<div class="grupo">
<label>Fecha de extravío</label>
<input type="date" id="fecha" required>
</div>

<!--Lugar donde se perdió-->
<div class="grupo">
<label>Lugar donde se perdió</label>
<input type="text" id="lugar" placeholder="Colonia, calle" required>
</div>

<!--Descripción del animal-->
<div class="grupo">
<label>Descripción</label>
<textarea id="descripcion" rows="4" placeholder="Señas particulares..." required></textarea>
</div>

<!--Teléfono de contacto-->
<div class="grupo">
<label>Teléfono de contacto</label>
<input type="tel" id="telefono" placeholder="351-000-0000" required>
</div>

<!--Botón para enviar el reporte-->
<button type="submit" class="pub">Publicar Reporte</button>

</form>

</section>

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

<!--Conectar JS-->
<script src="perdido.js"></script>

<!--Pie de pagina-->
<?php include("footer.php"); ?>

</body>
</html>