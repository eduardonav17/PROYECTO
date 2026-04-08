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

//Js para mapa de veterinarias de emergencia
document.addEventListener("DOMContentLoaded", () => {

  const btn = document.getElementById("btnEmergencia");
  const dialog = document.getElementById("ventanaEmergencia");
  const cerrar = document.getElementById("cerrarVentana");

  if (!btn || !dialog || !cerrar) return;

  let mapa;

  // VETERINARIAS MANUALES
  const veterinarias = [
    //Veterinarias que se encontraron en Zamora
    { nombre: "clinica veterinaria animal dogtor´s", lat: 19.97856081883132, lon: -102.28710672841623 },
    { nombre: "Veterinaria del Valle", lat: 19.992196320456873, lon: -102.29332259418635 },
    { nombre: "Veterinaria Argos Pet'S", lat: 19.989385734084184, lon: -102.28730444878465 },
    { nombre: "Veterinaria Healthy Pets", lat: 19.979837988820847, lon: -102.29342282407245 },
    { nombre: "Centro Medico Veterinario Petit´s", lat: 19.978464923501264, lon: -102.2843881235527},
    { nombre: "Tienda de mascotas Domestika", lat: 19.982031712808887, lon: -102.2872450949259},
    { nombre: "Veterinaria Alcázar", lat: 19.993718579447506, lon: -102.28843424922604},
    { nombre: "Veterinaria Nava Castillo", lat: 19.982189479262995, lon: -102.28310536456742},
    { nombre: "Clínica Veterinaria Vet - Mep", lat: 19.987726655462037, lon: -102.28321680014976},
    { nombre: "Xolotl Veterinaria", lat: 19.983323679281153, lon: -102.2759585222381},
    { nombre: "Veterinaria Olivares", lat: 19.989228200346428, lon: -102.27263305671511},
    { nombre: "Polyvet Veterinaria", lat: 19.974272774818896, lon: -102.2819710002995},
    { nombre: "Clinica Veterinaria Robles", lat: 19.980397075406636, lon: -102.29027742913479},
    { nombre: "Clinica Veterinaria Y Estetica Canina Petit's", lat: 19.974868174876047, lon: -102.28626187331164},
    { nombre: "Clin-Vet Veterinaria", lat: 19.97389968655909, lon: -102.28097321861229},
    { nombre: "Clínica De Especialidades Veterinarias MVZ Pedro Rodríguez Tarré", lat: 19.993028606485932, lon: -102.28383533188085},
    { nombre: "Hospital Vet Dr David Luz", lat: 19.978031148977287, lon: -102.28142709942945},
    { nombre: "VETERINARIA DOGTOR VET", lat: 19.972465116430165, lon: -102.28035421594045},
  ];

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

        // Usuario
        L.marker([lat, lon])
          .addTo(mapa)
          .bindPopup("Estás aquí")
          .openPopup();

        let masCercana = null;
        let menorDistancia = Infinity;

        veterinarias.forEach(vet => {

          const distancia = calcularDistancia(lat, lon, vet.lat, vet.lon);

          // Guardar la más cercana
          if (distancia < menorDistancia) {
            menorDistancia = distancia;
            masCercana = vet;
          }

          // Mostrar TODAS
          L.marker([vet.lat, vet.lon])
            .addTo(mapa)
            .bindPopup(vet.nombre);
        });

        // Mostrar la más cercana
        if (masCercana) {
          L.marker([masCercana.lat, masCercana.lon])
            .addTo(mapa)
            .bindPopup("MÁS CERCANA: " + masCercana.nombre)
            .openPopup();

          L.circle([masCercana.lat, masCercana.lon], {
            color: 'red',
            radius: 100
          }).addTo(mapa);
        }

      }, () => {
        alert("Activa la ubicación para usar esta función");
      });
    }
  });

  cerrar.addEventListener("click", () => {
    dialog.close();
  });

});


// DISTANCIA
function calcularDistancia(lat1, lon1, lat2, lon2) {
  const R = 6371;
  const dLat = (lat2 - lat1) * Math.PI / 180;
  const dLon = (lon2 - lon1) * Math.PI / 180;

  const a =
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(lat1 * Math.PI/180) * Math.cos(lat2 * Math.PI/180) *
    Math.sin(dLon/2) * Math.sin(dLon/2);

  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
  return R * c;
}
//aqui termina el js de veterinarias de emergencia

//js del boton de IA por lo pronto

document.getElementById("btnIA").addEventListener("click", () => {
  alert("Aqui ira la IA para escoger tu mascota ideal, en proceso...");
});