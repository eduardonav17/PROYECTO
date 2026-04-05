<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección del formulario para reportar maltrato animal-->
<section class="contenedor">

<h2>Reportar Pet Maltratada</h2>

<!--Formulario de reporte-->
<form id="formMaltrato">

<!--Foto del animal-->
<div class="grupo">
<label>Foto de la mascota</label>
<input type="file" id="foto" accept="image/*" required>
</div>

<!--Nombre del animal-->
<div class="grupo">
<label>Nombre</label>
<input type="text" id="nombre" placeholder="Ej. Max" required>
</div>

<!--Tipo de animal-->
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

<!--Fecha del avistamiento-->
<div class="grupo">
<label>Fecha de avistamiento de maltrato</label>
<input type="date" id="fecha" required>
</div>

<!--Lugar donde ocurrió-->
<div class="grupo">
<label>Lugar donde sucedió</label>
<input type="text" id="lugar" placeholder="Colonia, calle" required>
</div>

<!--Descripción del caso-->
<div class="grupo">
<label>Descripción</label>
<textarea id="descripcion" rows="4" placeholder="Señas particulares..." required></textarea>
</div>

<!--Teléfono de contacto-->
<div class="grupo">
<label>Teléfono de contacto</label>
<input type="tel" id="telefono" placeholder="351-000-0000" required>
</div>

<!--Botón para enviar reporte-->
<button class="pub" type="submit">Reportar Maltrato</button>

</form>

</section>

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

<!--Conectar JS-->
<script src="maltrato.js"></script>

<!--Pie de pagina-->
<?php include("footer.php"); ?>

</body>
</html>