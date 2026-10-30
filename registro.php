<?php
require "conexion.php";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"] ?? "");
    $apellidos = trim($_POST["apellidos"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $pwd = $_POST["pwd"] ?? "";
    $pwd2 = $_POST["pwd2"] ?? "";

    if ($nombre === "" || $apellidos === "" || !filter_var($correo, FILTER_VALIDATE_EMAIL) || strlen($pwd) < 6) {
        $mensaje = "Revisa los datos (la contraseña mínimo 6 caracteres).";
    } elseif ($pwd !== $pwd2) {
        $mensaje = "Las contraseñas no coinciden.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $mensaje = "Ese correo ya está registrado.";
        } else {
            $hash = password_hash($pwd, PASSWORD_DEFAULT);
            $ins = $conn->prepare("INSERT INTO usuarios (nombre, apellidos, correo, password) VALUES (?,?,?,?)");
            $ins->bind_param("ssss", $nombre, $apellidos, $correo, $hash);
            $ins->execute();
            header("Location: login.php?registrado=1");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Registro - Queta</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <header><h1>Registro de usuario</h1></header>
    <?php include "nav.php"; ?>
    <hr />
    <section>
        <?php if ($mensaje): ?><p class="error"><?= htmlspecialchars($mensaje) ?></p><?php endif; ?>
        <form method="post" onsubmit="return validarRegistro()">
            <fieldset>
                <legend>Crear cuenta</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="<?= htmlspecialchars($_POST['apellidos'] ?? '') ?>">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($_POST['correo'] ?? '') ?>">
                <label for="pwd">Contraseña:</label>
                <input type="password" id="pwd" name="pwd">
                <label for="pwd2">Repite la contraseña:</label>
                <input type="password" id="pwd2" name="pwd2">
            </fieldset>
            <input type="submit" value="Registrarme">
        </form>
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </section>
    <footer><p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p></footer>
    <script src="js/validar.js"></script>
</body>
</html>
