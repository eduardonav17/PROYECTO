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