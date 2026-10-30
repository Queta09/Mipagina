<nav>
    <a href="index.php">Inicio</a> |
    <a href="autobiografia.php">Autobiografía</a> |
    <a href="galeria.php">Galería</a> |
    <a href="contacto.php">Contacto</a> |
    <?php if (isset($_SESSION["id"])): ?>
        <span style="color:#ffcc00;">Hola, <?= htmlspecialchars($_SESSION["nombre"]) ?></span> |
        <a href="perfil.php">Mi perfil</a> |
        <a href="logout.php">Cerrar sesión</a>
    <?php else: ?>
        <a href="login.php">Iniciar sesión</a> |
        <a href="registro.php">Registro</a>
    <?php endif; ?>
</nav>