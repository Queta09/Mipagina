function correoValido(c) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(c);
}

function validarRegistro() {
    const nombre = document.getElementById("nombre").value.trim();
    const apellidos = document.getElementById("apellidos").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const pwd = document.getElementById("pwd").value;
    const pwd2 = document.getElementById("pwd2").value;

    if (nombre === "" || apellidos === "") { alert("Nombre y apellidos son obligatorios."); return false; }
    if (!correoValido(correo)) { alert("Escribe un correo válido."); return false; }
    if (pwd.length < 6) { alert("La contraseña debe tener mínimo 6 caracteres."); return false; }
    if (pwd !== pwd2) { alert("Las contraseñas no coinciden."); return false; }
    return true;
}

function validarLogin() {
    const correo = document.getElementById("correo").value.trim();
    const pwd = document.getElementById("pwd").value;
    if (!correoValido(correo)) { alert("Escribe un correo válido."); return false; }
    if (pwd === "") { alert("Escribe tu contraseña."); return false; }
    return true;
}

function validarPerfil() {
    const nombre = document.getElementById("nombre").value.trim();
    const apellidos = document.getElementById("apellidos").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const pwd = document.getElementById("pwd").value;
    const pwd2 = document.getElementById("pwd2").value;

    if (nombre === "" || apellidos === "") { alert("Nombre y apellidos son obligatorios."); return false; }
    if (!correoValido(correo)) { alert("Escribe un correo válido."); return false; }
    if (pwd !== "" && (pwd.length < 6 || pwd !== pwd2)) {
        alert("La nueva contraseña debe tener mínimo 6 caracteres y coincidir.");
        return false;
    }
    return true;
}

function confirmarEliminar() {
    return confirm("¿Seguro que quieres eliminar tu cuenta? Esto no se puede deshacer.");
}
