<?php
declare(strict_types=1);
require_once "header.php";
?>

<main>

<!--Sección donde se muestran los tipos de reportes-->
<section class="reportes">

    <!--Tarjeta para mascota perdida-->
    <article class="carda">
        <h3>PET PERDIDO</h3>
        <p>Reportar una mascota que se ha perdido.</p>
        <a href="perdido.php">
            <button>Reportar</button>
        </a>
    </article>

    <!--Tarjeta para mascota encontrada-->
    <article class="carda">
        <h3>PET ENCONTRADO</h3>
        <p>Indica si encontraste una mascota.</p>
        <a href="encontrado.php">
            <button>Reportar</button>
        </a>
    </article>

    <!--Tarjeta para maltrato animal-->
    <article class="carda">
        <h3>MALTRATO ANIMAL</h3>
        <p>Reportar casos de maltrato.</p>
        <a href="maltrato.php">
            <button>Reportar</button>
        </a>
    </article>

    <!--Tarjeta para publicar mascota en adopción-->
    <article class="carda">
        <h3>EN ADOPCIÓN</h3>
        <p>Publica mascotas para adopción.</p>
        <a href="enadopcion.php">
            <button>Publicar</button>
        </a>
    </article>

</section>

</main>

</body>
</html>