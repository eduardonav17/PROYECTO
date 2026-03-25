<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección del formulario para reportar mascotas encontradas-->
<section class="contenedor">

<h2>Reportar Pet Encontrado</h2>

<!--Formulario de reporte-->
<form>

<!--Foto de la mascota encontrada-->
<div class="grupo">
<label>Foto de la mascota</label>
<input type="file" accept="image/*" required>
</div>

<!--Nombre o apodo-->
<div class="grupo">
<label>Nombre de Apodo</label>
<input type="text" placeholder="Ej. Max" required>
</div>

<!--Tipo de mascota-->
<div class="grupo">
<label>Tipo</label>
<select required>
<option value="">Selecciona una opción</option>
<option>Perro</option>
<option>Gato</option>
</select>
</div>

<!--Raza-->
<div class="grupo">
<label>Raza</label>
<input type="text" placeholder="Ej. Labrador">
</div>

<!--Color-->
<div class="grupo">
<label>Color</label>
<input type="text" placeholder="Ej. Café con blanco">
</div>

<!--Fecha en que se encontró-->
<div class="grupo">
<label>Fecha de encuentro</label>
<input type="date" required>
</div>

<!--Lugar donde fue encontrado-->
<div class="grupo">
<label>Lugar donde se encontró</label>
<input type="text" placeholder="Colonia, calle" required>
</div>

<!--Descripción del animal-->
<div class="grupo">
<label>Descripción</label>
<textarea rows="4" placeholder="Señas particulares..." required></textarea>
</div>

<!--Teléfono de contacto-->
<div class="grupo">
<label>Teléfono de contacto</label>
<input type="tel" placeholder="351-000-0000" required>
</div>

<!--Botón para enviar el reporte-->
<button class="pub" type="submit">Reportar avistamiento</button>

</form>

</section>

</main>

</body>
</html>