<?php
declare(strict_types=1);
require_once "header.php";
?>

<body>

<!--Contenido principal-->
<main>

<!--Seccion para crear cuenta adoptistas y rescatistas-->
<section class="registro">
    <h2>Crear Cuenta</h2>
    
    <p>Selecciona tu perfil</p>

    <section class="cards">


        <article class="carda"> <a href="adoptistas.php">
            <figure>
                <img src="imagenes/adoptistas.webp" alt="Una familia conformada por padre, madre e hijos adoptando un perro">
            </figure>
            <h3>Soy adoptista</h3>
            <a href="adoptistas.php">Crear Cuenta</a>
        </article>

        <article class="carda"> <a herf="rescatistas.php">
            <figure>
                <img src="imagenes/rescatista.webp" alt="un rescatista con chaleco azul ayudando a un perro en la calle">
            </figure>
            <h3>Soy Rescatista</h3>
            <a href="rescatistas.php">Crear Cuenta</a>
        </article>
    </section>
</section>

</main>
<!--Todo lo que se agregue debe ir dentro del main-->

<!--Pie de pagina-->
<?php include("footer.php"); ?>

</body>
</html>