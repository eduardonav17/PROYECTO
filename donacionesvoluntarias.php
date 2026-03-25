<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!-- Sección principal-->
<section class="titulo-seccion">
   <h2 class="titulo">Donaciones voluntarias</h2>
</section>  

<!--Seccion informativa-->
<section class="hero-ayudar">

<section class="info-adopcion">

<p>
En <strong>PETfriends Hub</strong> trabajamos para ayudar a gatos y perros en situación vulnerable,
apoyando a rescatistas independientes que dedican su tiempo, recursos y esfuerzo a salvar vidas.
</p>

<p>
Los <strong>donativos voluntarios</strong> nos permiten cubrir gastos esenciales como:
</p>

<!--Lista de gastos que cubren las donaciones-->
<ul>
<li>Atención veterinaria</li>
<li>Vacunas y desparasitación</li>
<li>Esterilización</li>
<li>Alimento y cuidados básicos</li>
<li>Difusión y gestión de adopciones</li>
</ul>

<p>
Cada aportación, por pequeña que sea, ayuda a que más animales tengan la oportunidad
de recibir atención y encontrar un hogar responsable.
</p>

<p>
Si deseas apoyar nuestra misión, puedes realizar un 
<strong>donativo voluntario</strong> y contribuir a que más rescates y adopciones sean posibles.
</p>

<p>
<strong>Tu apoyo puede cambiar la vida de un animal.</strong>
</p>

</section>

</section>

<!--  FORMULARIO  -->
<section class="formulario">

<form action="#" method="POST" onsubmit="return false;"> <!-- aun no funciona -->

<!--  DATOS PERSONALES -->

<div class="form-group">
<label>Indica tu nombre completo *</label>
<input type="text" name="nombre" required>
</div>

<div class="form-group">
<label>Correo electrónico *</label>
<input type="email" name="correo" required>
</div>

<div class="form-group">
<label>Monto del donativo efectuado (en pesos mexicanos) *</label>
<input type="number" name="monto" required>
</div>

<div class="form-group">
<label>Fecha del donativo *</label>
<input type="date" name="fecha" required>
</div>

<!--  COMPROBANTE  -->

<div class="form-group">
<label>Adjunte el comprobante de la transferencia *</label>
<input type="file" name="comprobante" accept=".pdf,.jpg,.png" required>
<small>Puedes subir 1 archivo.</small>
</div>

<!-- FORMA DE PAGO -->

<div class="form-group">
<label>Indica la forma de pago de tu donativo *</label>

<!--Opciones de pago-->
<section class="opciones">
<label><input type="radio" name="forma_pago" value="Transferencia" required> Transferencia electrónica</label>
<label><input type="radio" name="forma_pago" value="Efectivo"> Efectivo</label>
<label><input type="radio" name="forma_pago" value="Cheque"> Cheque</label>
<label><input type="radio" name="forma_pago" value="Tarjeta"> Tarjeta de crédito o débito</label>
<label><input type="radio" name="forma_pago" value="Especie"> Especie</label>
<label><input type="radio" name="forma_pago" value="Otro"> Otro</label>
</section>

</div>

<!--  DATOS FISCALES  -->

<div class="form-group">
<label>Si cuentas con más de un régimen fiscal, indica cuál necesitas para el CFDI</label>
<input type="text" name="regimen_fiscal">
</div>

<div class="form-group">
<label>Si el donativo es en especie, describe el bien y su valor</label>
<textarea name="donativo_especie" rows="4"></textarea>
</div>

<div class="form-group">
<label>Adjunta tu constancia de situación fiscal *</label>
<input type="file" name="constancia" accept=".pdf" required>
<small>Solo PDF.</small>
</div>

<!-- BOTÓN ENVIAR -->

<button type="submit" class="btn-enviar">Enviar</button>

</form>

</section>

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

</body>
</html>