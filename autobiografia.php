<?php require "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
      <div style="text-align: center;">
<head>
    <link rel="stylesheet" href="css/estilos.css" />
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Autobiografía - Queta</title>
</head>
<body>

    <header>
        <h1>Mi Biografía Personal y Académica</h1>
    </header>

    <?php include "nav.php"; ?>

    <hr />

    <section>
        <article>
            <h2>Información Académica</h2>
            <p>Hola, mi nombre es David Enrique Coba Ku, pero mis amigos me dicen Queta. Actualmente curso la Licenciatura en Ingeniería de Software en la Facultad de Matemáticas de la UADY, campus Tizimín.</p>
            <p>Me apasiona todo lo relacionado con la tecnología y el hardware. De hecho, recientemente logré armar mi propia PC de escritorio con un procesador Ryzen 5 8600G y 32 GB de RAM DDR5.</p>
        </article>

        <br>

        <article>
            <h2>Mis Pasatiempos</h2>
            <p>Fuera de la escuela, trato de mantener un equilibrio entre mis hobbies y mi vida personal. Me gusta pasar tiempo con mi novia y disfruto hacer actividades variadas.</p>
            
            <h3>Deportes y Actividades</h3>
            <ul style="display: inline-block; text-align: left;">
                <li>Entrenar Jiu-Jitsu Brasileño.</li>
                <li>Darle mantenimiento y salir a rodar en mi motocicleta Vento Crossmax 170.</li>
            </ul>

            <h3>Mis Videojuegos Favoritos</h3>
            <ol style="display: inline-block; text-align: left;">
                <li>Gears of War (Gears 4 y 5)</li>
                <li>Minecraft (Bedrock y Java)</li>
                <li>Left 4 Dead 2</li>
            </ol>

            <h3>Series favoritas</h3>
            <dl>
                <dt>Re:ZERO - Starting Life in Another World</dt>
                <dd>Uno de los animes que sigo y del cual siempre estoy pendiente de los nuevos episodios.</dd>
                
                <dt>KonoSuba</dt>
                <dd>Una de mis series favoritas de comedia; me cae muy bien el personaje de Megumin.</dd>

                <dt>Ranma ½</dt>
                <dd>Un clásico de las artes marciales que disfruto ver.</dd>
            </dl>
        </article>
    </section>

    <hr />
    <footer>
        <p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p>
    </footer>

</body>
</div>
</html>