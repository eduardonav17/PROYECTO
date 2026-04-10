<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Titulo de la pagina web-->
<title>PETfriends hub</title>

<!--Icono de la pestaña-->
<link rel="icon" type="logo-img" href="imagenes/logo.webp">

<!--Css enlazados-->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="estilos2.css">

<!--JavaScrip enlazado-->
<script src="Java/script.js" defer></script>

<!--Iconos de fontawesome para redes sociales y buscador-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!--librería de Bootstrap Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!--link para el mapa de veterinarias de emergencia-->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">

</head>

<body>
    
<!--Codigo para menus y logo de la parte arriba-->
<header class="header">

    <!--Logo de la pagina-->
    <a href="index.php" class="logo logo-link">
        <img src="imagenes/logo.webp" 
        alt="logo de la pagina PETfriends hub con un perro y un gato representando adopcion de mascotas">
    </a>

    <!--Menu de navegacion principal-->
        <i class="bi bi-list" id="menu-btn"></i> 

            <nav class="acciones">
               <i class="fa-solid fa-paw icono-favorito"></i>
               <i class="fa-solid fa-bars menu"></i>
           </nav>
    
    <!--Boton para reportar mascotas-->
    <a href="reportarpet.php" class="btn">
        <button>Reportar</button>
    </a>


</header>
<!--Aqui termina el header-->
  
        <nav id="menu" class="menu">
            <ul>
            <li><a href="soyrescatista.php">Soy Rescatista</a>
            <ul class="submenus">
                <a href="registroarescatista.php">Registro rescatista</a>
                <a href="reglamentorescatista.php">Reglamento rescatista</a>
                <a href="enadopcion.php">Dar en adopcion</a>
            </ul>
            </li>
            <li><a href="soyadoptante.php">Soy Adoptante</a>
            <ul class="submenus">
                <a href="adoptistas.php">Crear Cuenta</a>
                <a href="solicituddeadopciondegato.php">Solicitud de adopcion de gato</a>
                <a href="solicituddeadopciondeperro.php">Solicitud de adopcion de perro</a>
                <a href="yaheadoptado.php">Ya he adoptado</a>
              
            </ul>
            </li> 
            <li><a href="quieroayudar.php">Quiero ayudar</a>
            <ul class="submenus">
                <a href="donaciones.php">Donaciones</a>
                
            </ul>
            </li> 
            <li><a href="acceder.php">Acceder</a>
           
        </ul>
    </nav>

    <!--link para que funcione el mapa de emrgencias de vetrinarias-->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>