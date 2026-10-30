<?php
require "conexion.php";
if (!isset($_SESSION["id"])) { header("Location: login.php"); exit; }
$id = (int) $_SESSION["id"];
$mensaje = "";
$clase = "error";

// ELIMINAR
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["eliminar"])) {
    $del = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $del->bind_param("i", $id);
    $del->execute();
    session_unset();
    session_destroy();
    header("Location: login.php?eliminado=1");
    exit;
}

// MODIFICAR
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["actualizar"])) {
    $nombre = trim($_POST["nombre"] ?? "");
    $apellidos = trim($_POST["apellidos"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $pwd = $_POST["pwd"] ?? "";
    $pwd2 = $_POST["pwd2"] ?? "";

    if ($nombre === "" || $apellidos === "" || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "Revisa los datos.";
    } elseif ($pwd !== "" && (strlen($pwd) < 6 || $pwd !== $pwd2)) {
        $mensaje = "La nueva contraseña debe tener mínimo 6 caracteres y coincidir.";
    } else {
        $chk = $conn->prepare("SELECT id FROM usuarios WHERE correo = ? AND id <> ?");
        $chk->bind_param("si", $correo, $id);
        $chk->execute();
        if ($chk->get_result()->num_rows > 0) {
            $mensaje = "Ese correo ya lo usa otro usuario.";
        } else {
            if ($pwd !== "") {
                $hash = password_hash($pwd, PASSWORD_DEFAULT);
                $up = $conn->prepare("UPDATE usuarios SET nombre=?, apellidos=?, correo=?, password=? WHERE id=?");
                $up->bind_param("ssssi", $nombre, $apellidos, $correo, $hash, $id);
            } else {
                $up = $conn->prepare("UPDATE usuarios SET nombre=?, apellidos=?, correo=? WHERE id=?");
                $up->bind_param("sssi", $nombre, $apellidos, $correo, $id);
            }
            $up->execute();
            $_SESSION["nombre"] = $nombre;
            $mensaje = "Datos actualizados.";
            $clase = "ok";
        }
    }
}

$q = $conn->prepare("SELECT nombre, apellidos, correo FROM usuarios WHERE id = ?");
$q->bind_param("i", $id);
$q->execute();
$u = $q->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Mi perfil - Queta</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <header><h1>Hola, <?= htmlspecialchars($u["nombre"]) ?></h1></header>
    <?php include "nav.php"; ?>
    <hr />
    <section>
        <?php if ($mensaje): ?><p class="<?= $clase ?>"><?= htmlspecialchars($mensaje) ?></p><?php endif; ?>
        <form method="post" onsubmit="return validarPerfil()">
            <fieldset>
                <legend>Modificar mis datos</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($u['nombre']) ?>">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="<?= htmlspecialchars($u['apellidos']) ?>">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($u['correo']) ?>">
                <label for="pwd">Nueva contraseña (opcional):</label>
                <input type="password" id="pwd" name="pwd">
                <label for="pwd2">Repite la nueva contraseña:</label>
                <input type="password" id="pwd2" name="pwd2">
            </fieldset>
            <input type="submit" name="actualizar" value="Guardar cambios">
        </form>

        <form method="post" onsubmit="return confirmarEliminar()">
            <fieldset>
                <legend>Zona peligrosa</legend>
                <input type="submit" name="eliminar" value="Eliminar mi cuenta" class="peligro">
            </fieldset>
        </form>
    </section>
    <footer><p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p></footer>
    <script src="js/validar.js"></script>
</body>
</html>
