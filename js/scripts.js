function mostrarFechaHora() {
    const contenedor = document.getElementById("reloj");
    if (contenedor) {
        const ahora = new Date();
        const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
        contenedor.innerHTML = "<strong>Fecha y hora actual:</strong> " + ahora.toLocaleDateString('es-ES', opciones);
    }
}
setInterval(mostrarFechaHora, 1000);


function convertirPesos() {
    let dolares = document.getElementById("dolares").value;
    let tipoCambio = 19.50;
    let pesos = dolares * tipoCambio;
    document.getElementById("resultadoConversion").innerText = "Son $" + pesos.toFixed(2) + " MXN";
}

function calcular() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let operacion = document.getElementById("operacion").value;
    let resultado = 0;

    if (isNaN(num1) || isNaN(num2)) {
        alert("Por favor ingresa números válidos.");
        return;
    }

    if (operacion === "+") resultado = num1 + num2;
    else if (operacion === "-") resultado = num1 - num2;
    else if (operacion === "*") resultado = num1 * num2;
    else if (operacion === "/") resultado = num1 / num2;

    document.getElementById("resultadoCalculadora").innerText = "Resultado: " + resultado;
}

function evaluarCuestionario() {
    let respuesta1 = document.querySelector('input[name="q1"]:checked');
    let respuesta2 = document.querySelector('input[name="q2"]:checked');
    let puntaje = 0;

    if (respuesta1 && respuesta1.value === "v") puntaje++;
    if (respuesta2 && respuesta2.value === "f") puntaje++;

    alert("Tu calificación es: " + puntaje + " / 2");
}

function validarFormulario() {
    let nombre = document.getElementById("nombre").value; 
    let pwd = document.getElementById("pwd").value; 
    let genero = document.querySelector('input[name="genero"]:checked');
    let intereses = document.querySelectorAll('input[name="interes"]:checked'); 
    let estudios = document.querySelector('select[name="estudios"]').value; 

    if (nombre.trim() === "") {
        alert("El campo de Nombre es obligatorio.");
        return false;
    }
    if (pwd.trim() === "") {
        alert("La contraseña es obligatoria.");
        return false;
    }
    if (!genero) {
        alert("Debes seleccionar un género.");
        return false;
    }
    if (intereses.length === 0) {
        alert("Debes seleccionar al menos un interés.");
        return false;
    }
    if (estudios === "") {
        alert("Debes seleccionar tus estudios actuales.");
        return false;
    }

    alert("Formulario válido. ¡Enviando!");
    return true;
}