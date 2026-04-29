<?php
declare(strict_types=1);
require_once "header.php";
?>

<!--Aqui termina el header-->



<body class="logins">

<div class="registror" id="registro">
    <h2>Crear Cuenta</h2>

    <input type="text" placeholder="Nombre Completo" required>
    <input type="email" placeholder="Correo Electronico" required>
    <input type="text" placeholder="Usuario" required>
    <input type="password" placeholder="Contraseña" required>
    <input type="password" placeholder="Confirmar Contraseña" required>
<input type="date" id="fecha" name="fecha" required>
    <button id="btnRegistro">Registrarse</button>

    <p>¿Ya tienes cuenta?</p>
<button type="button" id="btnLogin">Iniciar Sesión</button>
</div>

<div class="login" id="login" style="display:none;">
    <h2>Iniciar Sesión</h2>
    <input type="email" placeholder="Correo Electronico">
    <input type="password" placeholder="Contraseña">
    <button type="button" id="btnAcceder">Acceder</button>
    <p>¿No tienes cuenta?</p>
     <button id="btnCrearCuenta">Crear Cuenta</button>

</div>
<script>
document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("btnLogin").addEventListener("click", function() {
        mostrarLogin();
    });

    document.getElementById("btnCrearCuenta").addEventListener("click", function() {
        mostrarCrearCuenta();
    });

function mostrarLogin(){
    document.getElementById("registro").style.display = "none";
    document.getElementById("login").style.display = "block";
}

function mostrarCrearCuenta(){
    document.getElementById("registro").style.display = "block";
    document.getElementById("login").style.display = "none";
}

});

document.getElementById("btnRegistro").addEventListener("click", function() {
    alert("Felicidades, ya te has registrado");
});
document.getElementById("btnAcceder").addEventListener("click", function() {
    alert("Felicidades, ya has accedido");
});
</script>

<!--Pie de pagina-->
<?php include("footer.php"); ?>
</body>