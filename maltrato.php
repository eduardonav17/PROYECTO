<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<section class="contenedor">

<h2>Reportar Pet Maltratada</h2>

<form id="formMaltrato">

<!--Foto-->
<div class="grupo">
<label>Foto de la mascota</label>
<input type="file" id="foto" accept="image/*" required>
</div>

<!--Nombre-->
<div class="grupo">
<label>Nombre</label>
<input type="text" id="nombre" placeholder="Ej. Max" required>
<span id="errorNombre" style="color:red;"></span>
</div>

<!--Tipo-->
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
<span id="errorRaza" style="color:red;"></span>
</div>

<!--Color-->
<div class="grupo">
<label>Color</label>
<input type="text" id="color" placeholder="Ej. Café con blanco">
<span id="errorColor" style="color:red;"></span>
</div>

<!--Fecha-->
<div class="grupo">
<label>Fecha de avistamiento de maltrato</label>
<input type="date" id="fecha" required>
</div>

<!--Lugar-->
<div class="grupo">
<label>Lugar donde sucedió</label>
<input type="text" id="lugar" placeholder="Colonia, calle" required>
</div>

<!--Descripción-->
<div class="grupo">
<label>Descripción</label>
<textarea id="descripcion" rows="4" placeholder="Señas particulares..." required></textarea>
</div>

<!--Teléfono-->
<div class="grupo">
<label>Teléfono de contacto</label>
<input type="tel" id="telefono" placeholder="3510000000" required>
<span id="errorTelefono" style="color:red;"></span>
</div>

<!--Botón-->
<button class="pub" type="submit">Reportar Maltrato</button>

</form>

</section>

</main>

<!--JS-->
<script src="maltrato.js"></script>

<?php include("footer.php"); ?>

</body>
</html>