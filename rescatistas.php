<?php
declare(strict_types=1);
require_once "header.php";
?>

<!--Aqui termina el header-->

<body class="logins">

<div class="registror" id="registro">
    <h1>Crear Cuenta</h1>

    <input type="text" placeholder="Nombre Completo">
    <input type="email" placeholder="Correo Electronico">
    <input type="text" placeholder="Usuario">
    <input type="password" placeholder="Contraseña">
    <input type="password" placeholder="Confirmar Contraseña">

    <button>Registrarse</button>

    <p>¿Ya tienes cuenta?</p>
    <button onclick="mostrarLogin()">Iniciar Sesión</button>
</div>

<div class="login" id="login" style="display:none;">
    <h1>Iniciar Sesión</h1>

    <input type="email" placeholder="Correo Electronico">
    <input type="password" placeholder="Contraseña">

    <button>Ingresar</button>

    <p>¿No tienes cuenta?</p>
    <button onclick="mostrarRegistro()">Registrarse</button>
</div>
<script>
function mostrarLogin(){
    document.getElementById("registro").style.display = "none";
    document.getElementById("login").style.display = "block";
}

function mostrarRegistro(){
    document.getElementById("registro").style.display = "block";
    document.getElementById("login").style.display = "none";
}
</script>

<!--Pie de pagina-->
<?php include("footer.php"); ?>

</body>