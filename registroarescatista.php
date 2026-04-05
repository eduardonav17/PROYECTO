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

</section>



</main>

<!--Pie de pagina-->
<?php include("footer.php"); ?>
  
</body>
</html>