//Esta linea se encarga de de ejecutar el codigo despues de que cargue la pagina
document.addEventListener("DOMContentLoaded", function() {

    //aqui se van a guardar los id en las variables
    var mapa = document.getElementById("mapaFrame");
    var boton = document.getElementById("toggleMapa");

    //en en este codigo se va a encargar de llamar un evento cuando el usario da click en el boton
    boton.addEventListener("click", function() {

        //esto es una estructura de decisionmque pregunta si el mapa esta oculto
        // si la respuesta es si entonces el mapa se abre
        if (mapa.style.display === "none") {
            mapa.style.display = "block";
            //y en el boton se pone la leyenda de "ocultar mapa"
            boton.textContent = "Ocultar Mapa";
            //si la respuesta es falsa entonce el programa no hace nada
        } else {
            mapa.style.display = "none";
            boton.textContent = "Mostra Mapa";
        }

    });

});