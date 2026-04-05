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
//aqui termina el javasript del boton del mapa

//menu hamburguesa
//boton del menu
const btn = document.getElementById("menu-btn");
//contenedor del menu lateral
const menu = document.getElementById("menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("active");

// verifica si esta abierto el menu hamburguesa
  if (menu.classList.contains("active")) {

    // Si el menu  está abierto se cambia el icono hamburguesa (bi-list) por una X (bi-x)
    btn.classList.remove("bi-list");
    btn.classList.add("bi-x");
  } else {
     // Si el menu está cerrado se cambia el icono X (bi-x) por hamburguesa (bi-list)
    btn.classList.remove("bi-x");
    btn.classList.add("bi-list");
  }
});

//AQUI EMPIEZA EN ADOPCION-----

window.onload = function() {

    const inputNombre = document.getElementById("nombre");

    // Verifica que sí existe el input
    if (!inputNombre) {
        console.error("No se encontró el campo nombre");
        return;
    }

    //Bloquear números y caracteres
    inputNombre.addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });
window.onload = function() {

    function soloLetras(inputId) {
        const input = document.getElementById(inputId);
        if (!input) return;

        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
        });
    }

    function soloNumeros(inputId) {
        const input = document.getElementById(inputId);
        if (!input) return;

        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9\-]/g, "");
        });
    }

    //Aplicar validaciones
    soloLetras("nombremascota");
    soloLetras("raza");
    soloLetras("color");

    soloNumeros("telefono");

};
};
//AQUI EMPIEZA ENCONTRADO-----

window.onload = function() {

    // Espera a que toda la página cargue antes de ejecutar el código
    // Esto evita errores cuando los elementos aún no existen
    const form = document.getElementById("formReporte");

    //BLOQUEAR NÚMEROS Y CARACTERES (solo permite letras)

    document.getElementById("raza").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    document.getElementById("color").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    //BLOQUEAR LETRAS (solo permite números y guiones)

    document.getElementById("telefono").addEventListener("input", function() {
        // Elimina todo lo que NO sea número (0-9) o guion (-)
        this.value = this.value.replace(/[^0-9\-]/g, "");
    });

};

//AQUI EMPIEZA MALTRATO-----

window.onload = function() {

    // Espera a que cargue toda la página
    const form = document.getElementById("formMaltrato");

    //BLOQUEAR NÚMEROS Y CARACTERES (solo letras)

    document.getElementById("nombre").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    document.getElementById("raza").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    document.getElementById("color").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    //BLOQUEAR LETRAS (solo números y guiones)

    document.getElementById("telefono").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9\-]/g, "");
    });

};

//AQUI EMPIEZA PERDIDO-----

window.onload = function() {

    // Espera a que cargue toda la página
    const form = document.getElementById("formPerdido");

    //BLOQUEAR NÚMEROS Y CARACTERES (solo letras)

    document.getElementById("nombre").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    document.getElementById("raza").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    document.getElementById("color").addEventListener("input", function() {
        this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");
    });

    //BLOQUEAR LETRAS (solo números y guiones)

    document.getElementById("telefono").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9\-]/g, "");
    });

};

//Js para mapa de vetrinarias de emergencia
console.log(document.getElementById("btnEmergencia"));

document.addEventListener("DOMContentLoaded", () => {

  const btn = document.getElementById("btnEmergencia");
  const dialog = document.getElementById("ventanaEmergencia");
  const cerrar = document.getElementById("cerrarVentana");

  // VALIDACIÓN IMPORTANTE
  if (!btn || !dialog || !cerrar) return;

  let mapa;

  btn.addEventListener("click", () => {
    dialog.showModal();

    if (!mapa) {
      navigator.geolocation.getCurrentPosition(pos => {
        const lat = pos.coords.latitude;
        const lon = pos.coords.longitude;

        mapa = L.map('mapa').setView([lat, lon], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '© OpenStreetMap'
        }).addTo(mapa);

        L.marker([lat, lon])
          .addTo(mapa)
          .bindPopup("Estás aquí")
          .openPopup();

        fetch(`https://overpass-api.de/api/interpreter?data=
          [out:json];
          node["amenity"="veterinary"](around:3000,${lat},${lon});
          out;
        `)
        .then(res => res.json())
        .then(data => {
          data.elements.forEach(lugar => {
            if (lugar.lat && lugar.lon) {
              L.marker([lugar.lat, lugar.lon])
                .addTo(mapa)
                .bindPopup(lugar.tags.name || "Veterinaria");
            }
          });
        });

      });
    }
  });

  cerrar.addEventListener("click", () => {
    dialog.close();
  });

});