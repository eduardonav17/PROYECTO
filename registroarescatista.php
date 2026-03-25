<?php
declare(strict_types=1);
require_once "header.php";
?>

<!--Contenido principal-->
<main>

<!--Titulo de la pagina-->
<section class="titulo-seccion">
   <h2 class="titulo">Registro rescatista</h2>
</section>  

<!--Seccion principal donde aparece el formulario-->
<section class="hero-rescatista">

<section class="contenido-hero">

  <!--  FORMULARIO  -->
  <section class="formulario">

  <!--Formulario de registro para rescatistas-->
  <form action="#" method="POST" onsubmit="return false;"> <!-- aun no funciona -->

    <!--Campo nombre-->
    <div class="form-group">
      <label>Nombre *</label>
      <input type="text" placeholder="Ej: Juan Pablo" name="nombre" required>
    </div>

    <!--Campo apellidos-->
    <div class="form-group">
      <label>Apellidos *</label>
      <input type="text" placeholder="Santos Santos" name="apellidos" required>
    </div>

    <!--Campo edad-->
    <div class="form-group">
      <label>Edad *</label>
      <input type="number" placeholder="16 años" name="edad" required>
    </div>

    <!--Correo electronico-->
    <div class="form-group">
      <label>Correo electrónico *</label>
      <input type="email" placeholder="juanpablo046540@gmail.com" name="correo" required>
    </div>

    <!--Telefono celular-->
    <div class="form-group">
      <label>Celular *</label>
      <input type="tel" placeholder="351-000-0000" name="celular" required>
    </div>

    <!--Cantidad de perros-->
    <div class="form-group">
      <label>¿Cuántos perros tienes a tu cargo? *</label>
      <input type="number" name="cantidad_perros" required>
    </div>

    <!--Subir identificacion-->
    <div class="form-group">
      <label>Identificación oficial *</label>
      <input type="file" name="identificacion" required>
    </div>

    <!--Subir comprobante de domicilio-->
    <div class="form-group">
      <label>Comprobante de domicilio *</label>
      <input type="file" name="comprobante" required>
    </div>

    <!--Boton para enviar formulario-->
    <button type="submit" class="btn-enviar">Enviar</button>

  </form>

  </section>

</section>

</section>

<!-- Sección principal-->
<section class="titulo-seccion">
   <h2 class="titulo">Reglamento a rescatista</h2>
</section>  

<!--Seccion donde se muestra el reglamento-->
<section class="hero-rescatista">

<section class="reglamento">

<!--Introducción-->
<p>
Completa el siguiente formulario para formar parte de PETfriends Hub y difundir a tus rescatados.
</p>

<!--Seccion registro-->
<h3>Registro y Actualización Anual</h3>

<h4>Alta Inicial</h4>
<ul>
<li>Llenar el formulario de registro en el sitio oficial.</li>
<li>Enviar identificación oficial vigente.</li>
<li>Completar la encuesta con información personal y datos de contacto.</li>
</ul>

<p><strong>No se solicita comprobante de domicilio.</strong></p>

<h4>Actualización Anual</h4>
<p>
La información deberá actualizarse cada año para continuar publicando animales en la plataforma.
</p>

<!--Publicacion de animales-->
<h3>Publicación de Animales</h3>
<ul>
<li>Nombre, edad aproximada, sexo.</li>
<li>Tamaño, peso y raza (si aplica).</li>
<li>Nivel de energía y carácter.</li>
<li>Estado de salud (vacunas, desparasitación, esterilización).</li>
<li>Lugar de rescate y resguardo actual.</li>
<li>Estados donde puede darse en adopción.</li>
<li>Datos de contacto.</li>
<li>Galería de 3 a 10 fotos recientes.</li>
</ul>

<!--Proceso de adopcion-->
<h3>Proceso de Adopción</h3>
<ul>
<li>Las solicitudes serán enviadas por PETfriends Hub.</li>
<li>Se sugiere un donativo voluntario para apoyar el proyecto.</li>
<li>Se deberá firmar acuerdo de adopción.</li>
<li>Actualizar el perfil tras concretar la adopción.</li>
<li>Subir foto con la nueva familia.</li>
</ul>

<!--Obligaciones-->
<h3>Obligaciones del Rescatista</h3>
<ul>
<li>Brindar información veraz.</li>
<li>Asumir responsabilidad total del animal bajo su custodia.</li>
<li>Publicar únicamente animales bajo su cuidado directo.</li>
<li>Mantener actualizados los perfiles.</li>
</ul>

<!--Esterilizacion-->
<h3>Esterilización</h3>
<p>
Todos los animales mayores de 6 meses deberán entregarse esterilizados, salvo justificante médico.
</p>

<!--Eventos-->
<h3>Eventos</h3>
<ul>
<li>Portar placa de identificación.</li>
<li>Cartilla de vacunación vigente.</li>
<li>Cumplir medidas de seguridad (arnés y correa).</li>
</ul>

<!--Sanciones-->
<h3>Sanciones</h3>
<ul>
<li>Adopciones fuera del sistema: suspensión temporal.</li>
<li>Reincidencia: suspensión prolongada o baja definitiva.</li>
</ul>

</section>

</section>



</main>
  
</body>
</html>