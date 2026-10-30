<?php
require "conexion.php";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = trim($_POST["correo"] ?? "");
    $pwd = $_POST["pwd"] ?? "";

    $stmt = $conn->prepare("SELECT id, nombre, password FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $u = $stmt->get_result()->fetch_assoc();

    if ($u && password_verify($pwd, $u["password"])) {
        session_regenerate_id(true);
        $_SESSION["id"] = $u["id"];
        $_SESSION["nombre"] = $u["nombre"];
        header("Location: perfil.php");
        exit;
    }
    $mensaje = "Correo o contraseña incorrectos.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Iniciar sesión - Queta</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <header><h1>Iniciar sesión</h1></header>
    <?php include "nav.php"; ?>
    <hr />
    <section>
        <?php if (isset($_GET["registrado"])): ?><p class="ok">Registro exitoso, ya puedes iniciar sesión.</p><?php endif; ?>
        <?php if (isset($_GET["eliminado"])): ?><p class="ok">Tu cuenta fue eliminada.</p><?php endif; ?>
        <?php if ($mensaje): ?><p class="error"><?= htmlspecialchars($mensaje) ?></p><?php endif; ?>
        <form method="post" onsubmit="return validarLogin()">
            <fieldset>
                <legend>Acceso</legend>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo">
                <label for="pwd">Contraseña:</label>
                <input type="password" id="pwd" name="pwd">
            </fieldset>
            <input type="submit" value="Entrar">
        </form>
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
    </section>
    <footer><p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p></footer>
    <script src="js/validar.js"></script>
</body>
</html>
