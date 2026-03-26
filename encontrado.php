<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección del formulario para reportar mascotas encontradas-->
<section class="contenedor">

<h2>Reportar Pet Encontrado</h2>

<!--Formulario de reporte-->
<form id="formReporte">

<!--Foto de la mascota encontrada-->
<div class="grupo">
<label>Foto de la mascota</label>
<input type="file" id="foto" accept="image/*" required>
</div>

<!--Nombre o apodo-->


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
<input type="text" id="raza" placeholder="Ej. Labrador" required>
</div>

<!--Color-->
<div class="grupo">
<label>Color</label>
<input type="text" id="color" placeholder="Ej. Café con blanco">
</div>

<!--Fecha en que se encontró-->
<div class="grupo">
<label>Fecha de encuentro</label>
<input type="date" id="fecha" required>
</div>

<!--Lugar donde fue encontrado-->
<div class="grupo">
<label>Lugar donde se encontró</label>
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
<button class="pub" type="submit">Reportar avistamiento</button>

</form>

</section>

</main>

<!--Conexión con JS-->
<script src="reporte.js"></script>

</body>
</html>