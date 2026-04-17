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
    soloNumeros("edad")
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

//AQUI EMPIEZA ADOPCION

window.addEventListener("load", function () {

    // ===== SOLO LETRAS =====
    function validarTexto(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            // Bloquea números y símbolos
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");

            // Primera letra mayúscula
            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            // Validación
            if (this.value.length < 2) {
                this.style.border = "2px solid red";
                error.textContent = "Solo letras";
            } else {
                this.style.border = "2px solid green";
                error.textContent = "";
            }
        });
    }

    // ===== TELÉFONO =====
    function validarTelefono() {
        const input = document.getElementById("telefono");
        const error = document.getElementById("errorTelefono");

        input.addEventListener("input", function () {

            // Solo números
            this.value = this.value.replace(/[^0-9]/g, "");

            if (this.value.length < 10) {
                this.style.border = "2px solid red";
                error.textContent = "Mínimo 10 números";
            } else {
                this.style.border = "2px solid green";
                error.textContent = "";
            }
        });
    }

    // ===== APLICAR =====
    validarTexto("nombre", "errorNombre");
    validarTexto("apellidos","errorApellidos")
    validarTexto("raza", "errorRaza");
    validarTexto("color", "errorColor");
    validarNUmero("edad","errorEdad")
    validarTelefono("telefono");

});

//AQUI EMPIEZA ENCONTRADO

window.addEventListener("load", function () {

    // ===== SOLO LETRAS =====
    function validarTexto(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");

            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            if (this.value.length < 2) {
                this.style.border = "2px solid red";
                error.textContent = "Solo letras";
            } else {
                this.style.border = "2px solid green";
                error.textContent = "";
            }
        });
    }

    // ===== TELÉFONO =====
    function validarTelefono() {
        const input = document.getElementById("telefono");
        const error = document.getElementById("errorTelefono");

        input.addEventListener("input", function () {

            this.value = this.value.replace(/[^0-9]/g, "");

            if (this.value.length < 10) {
                this.style.border = "2px solid red";
                error.textContent = "Mínimo 10 números";
            } else {
                this.style.border = "2px solid green";
                error.textContent = "";
            }
        });
    }

    // ===== APLICAR =====
    validarTexto("raza", "errorRaza");
    validarTexto("color", "errorColor");

    validarTelefono();

});
//AQUI EMPIEZA MALTRATO

// Espera a que cargue toda la página
window.addEventListener("load", function () {

    // ===== FUNCIÓN PARA TEXTO (letras) =====
    function validarTexto(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            // Elimina símbolos y números
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");

            // Primera letra en mayúscula SIEMPRE
            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            // Validación
            if (this.value.trim().length < 2) {
                this.style.border = "2px solid red";
                if (error) error.textContent = "Solo letras (mínimo 2)";
            } else {
                this.style.border = "2px solid green";
                if (error) error.textContent = "";
            }
        });
    }

    // ===== FUNCIÓN PARA TEXTO LIBRE (lugar, descripción) =====
    function validarTextoLibre(id) {
        const input = document.getElementById(id);
        if (!input) return;

        input.addEventListener("input", function () {

            // Solo bloquea símbolos raros (permite letras, números y espacios)
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ0-9\s.,]/g, "");

            // Primera letra mayúscula
            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            // Validación visual básica
            if (this.value.trim().length < 5) {
                this.style.border = "2px solid red";
            } else {
                this.style.border = "2px solid green";
            }
        });
    }

    // ===== TELÉFONO =====
    function validarTelefono(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            // Solo números
            this.value = this.value.replace(/[^0-9]/g, "");

            // Validación
            if (this.value.length < 10) {
                this.style.border = "2px solid red";
                if (error) error.textContent = "Mínimo 10 números";
            } else {
                this.style.border = "2px solid green";
                if (error) error.textContent = "";
            }
        });
    }

    // ===== APLICAR VALIDACIONES =====
    validarTexto("nombre", "errorNombre");
    validarTexto("raza", "errorRaza");
    validarTexto("color", "errorColor");

    validarTextoLibre("lugar");
    validarTextoLibre("descripcion");

    validarTelefono("telefono", "errorTelefono");

    // ===== VALIDAR ANTES DE ENVIAR =====
    const form = document.getElementById("formMaltrato");

    form.addEventListener("submit", function (e) {

        let errores = document.querySelectorAll("span");
        let hayError = false;

        errores.forEach(span => {
            if (span.textContent !== "") {
                hayError = true;
            }
        });

        if (hayError) {
            e.preventDefault();
            alert("Corrige los errores antes de enviar");
        }
    });

});

//AQUI EMPIEZA PERDIDO

// Espera a que cargue todo
window.addEventListener("load", function () {

    // ===== TEXTO (solo letras) =====
    function validarTexto(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            // Elimina símbolos y números
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ\s]/g, "");

            // Primera letra mayúscula
            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            // Validación
            if (this.value.trim().length < 2) {
                this.style.border = "2px solid red";
                if (error) error.textContent = "Solo letras (mínimo 2)";
            } else {
                this.style.border = "2px solid green";
                if (error) error.textContent = "";
            }
        });
    }

    // ===== TEXTO LIBRE =====
    function validarTextoLibre(id) {
        const input = document.getElementById(id);
        if (!input) return;

        input.addEventListener("input", function () {

            // Permite letras, números, espacios y algunos signos básicos
            this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúñÑ0-9\s.,]/g, "");

            // Mayúscula inicial
            if (this.value.length > 0) {
                this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
            }

            // Validación visual
            if (this.value.trim().length < 5) {
                this.style.border = "2px solid red";
            } else {
                this.style.border = "2px solid green";
            }
        });
    }

    // ===== TELÉFONO =====
    function validarTelefono(id, errorId) {
        const input = document.getElementById(id);
        const error = document.getElementById(errorId);

        if (!input) return;

        input.addEventListener("input", function () {

            // Solo números
            this.value = this.value.replace(/[^0-9]/g, "");

            // Validación
            if (this.value.length < 10) {
                this.style.border = "2px solid red";
                if (error) error.textContent = "Mínimo 10 números";
            } else {
                this.style.border = "2px solid green";
                if (error) error.textContent = "";
            }
        });
    }

    // ===== APLICAR VALIDACIONES =====
    validarTexto("nombre", "errorNombre");
    validarTexto("raza", "errorRaza");
    validarTexto("color", "errorColor");

    validarTextoLibre("lugar");
    validarTextoLibre("descripcion");

    validarTelefono("telefono", "errorTelefono");

    // ===== VALIDAR ANTES DE ENVIAR =====
    const form = document.getElementById("formPerdido");

    form.addEventListener("submit", function (e) {

        let errores = document.querySelectorAll("span");
        let hayError = false;

        errores.forEach(span => {
            if (span.textContent !== "") {
                hayError = true;
            }
        });

        if (hayError) {
            e.preventDefault();
            alert("Corrige los errores antes de enviar");
        }
    });

});

//Js para mapa de veterinarias de emergencia
//este codigo sirve para ejecutarse cuando la pagina ya esta cargada
document.addEventListener("DOMContentLoaded", () => {

    //declaramos las variables para no utilizrase mas de 1 vez
  const btn = document.getElementById("btnEmergencia");
  const dialog = document.getElementById("ventanaEmergencia");
  const cerrar = document.getElementById("cerrarVentana");

  //estructura de desicion para evitar errore si algun elemento no existe
  if (!btn || !dialog || !cerrar) return;

  //codigo que sirve para guardar el mapa y no crearlo varias veces
  let mapa;

  //codigo que guarda datos y nombre de todas las vetrinarias
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

  //codigo que se encarga de ejecutar una accion cuando haces click en el boton
  btn.addEventListener("click", () => {
    //abre la ventana emergente
    dialog.showModal();
    
    //codigo que se encarga de verificar si el mapa ya existe
    if (!mapa) {
        //codigo que pide al navegador para dar acceso a tu ubicacion en tiempo real
      navigator.geolocation.getCurrentPosition(pos => {

        //guarda tu latitud y tu longitud
        const lat = pos.coords.latitude;
        const lon = pos.coords.longitude;

        //crea el mapa en la ventana emergente
        mapa = L.map('mapa').setView([lat, lon], 14);

        //carga el diseño del mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '© OpenStreetMap'
        }).addTo(mapa);

        // Usuario
        //pone marcadores en el mapa de donde estas
        L.marker([lat, lon])
          .addTo(mapa)
          //marca un mesaje cuando das click en el punto
          .bindPopup("Estás aquí")
          //abre automaticamente el mensaje
          .openPopup();

        let masCercana = null;
        let menorDistancia = Infinity;

        //recorretodas las veteriarias
        veterinarias.forEach(vet => {

            //calcula que tan lejos esta cada veterinaria
          const distancia = calcularDistancia(lat, lon, vet.lat, vet.lon);

          // Guardar la más cercana
          //encuentra la veterinaria mas cercanas
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

            //dibuja un circulo rojo ubicando la veterinaria mas cercana
          L.circle([masCercana.lat, masCercana.lon], {
            color: 'red',
            radius: 100
          }).addTo(mapa);
        }

        //activa una alerta cuando el usuario no ha activado el sevricio de ubicacion
      }, () => {
        alert("Activa la ubicación para usar esta función");
      });
    }
  });

  //boton que cierra la ventana emergente
  cerrar.addEventListener("click", () => {
    dialog.close();
  });

});


// DISTANCIA
//calcula la distancia entre dos puntos de la tierra
function calcularDistancia(lat1, lon1, lat2, lon2) {
  const R = 6371;
  const dLat = (lat2 - lat1) * Math.PI / 180;
  const dLon = (lon2 - lon1) * Math.PI / 180;

  //hace los calculos matematicos
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
//aqui termina el js de boton de IA


//js para abrir el filtro de busqueda
document.addEventListener("DOMContentLoaded", () => {

  const btn = document.getElementById("abrirFiltros");
  const panel = document.getElementById("panelFiltros");

  btn.addEventListener("click", () => {
    
    panel.classList.toggle("activo");

    // 👇 cambiar texto
    if (panel.classList.contains("activo")) {
      btn.textContent = "Cerrar filtro";
    } else {
      btn.textContent = "Filtrar búsqueda";
    }

  });

});