<?php
declare(strict_types=1);
require_once "header.php";
?>

<!--Contenido principal-->
<main>

<section class="contenido">

<h2>Registro rescatista</h2>

<form id="formMascota">

<!--Nombre-->
<div class="grupo">
<label>Nombre</label>
<input type="text" id="nombre" placeholder="Ej. Juan Pablo" required>
<span id="errorNombre" style="color:red;"></span>
</div>

<!--Nombre-->
<div class="grupo">
<label>Apellidos</label>
<input type="text" id="Apellidos" placeholder="Ej. Sifuentes Ramirez" required>
<span id="errorApellidos" style="color:red;"></span>
</div>

<!--Raza-->
<div class="grupo">
<label>Edad</label>
<input type="text" id="raza" placeholder="Ej. 67" required>
<span id="errorEdad" style="color:red;"></span>
</div>

<!--Color-->
<div class="grupo">
<label>Correo eletronico</label>
<input type="text" id="correo" placeholder="Ej. petfriendshub230@gmail.com">
</div>

<!--Teléfono-->
<div class="grupo">
<label>Teléfono de contacto</label>
<input type="tel" id="telefono" placeholder="3510000000" required>
<span id="errorTelefono" style="color:red;"></span>
</div>

<!--Foto-->
<div class="grupo">
<label>Idetificacion</label>
<input type="file" id="foto" accept="image/*" required>
</div>

<!--Botón-->
<button type="submit" class="pub">Publicar Adopción</button>

</form>

</section>

</main>

<script src="script.js"></script>
<!--Pie de pagina-->
<?php include("footer.php"); ?>
  
</body>
</html>    