<?php require "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <div style="text-align: center;">
<head>
    <link rel="stylesheet" href="css/estilos.css" />
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Inicio - Mi Sitio Web</title>
</head>
<body>

    <header>
        <h1>Bienvenido a mi sitio web</h1>
    </header>

    <?php include "nav.php"; ?>
    <hr />

    <section>
        <div>
            <h2>Hola, te doy la bienvenida</h2>
            <p>Esta es mi primera pagina web,<span> les doy la vienvenida

            </span>.</p>
        </div>
        
        <br>
        <img src="multimedia\xxd.png" alt="Mi foto de perfil" width="900">

        <div>
            <h3>Mi Universidad</h3>
            <p>Aquí se ubica la Facultad de Matemáticas, donde estudio la Licenciatura en Ingeniería de Software:</p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29766.610949454865!2d-88.18186062568361!3d21.15930710000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f522b6c741fe2ff%3A0x1a4273ac58448ae1!2sUADY%20-%20Unidad%20Multidisciplinaria%20Tizim%C3%ADn!5e0!3m2!1ses-419!2smx!4v1788461134574!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </section>

    <hr />
    <footer>
        <p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p>
    </footer>
        <hr>
        <h2>Herramientas Interactivas</h2>
        
        <div id="reloj" style="font-size: 1.2em; color: #004481; margin-bottom: 20px;"></div>

        <fieldset>
            <legend>Convertidor a Pesos (MXN)</legend>
            <input type="number" id="dolares" placeholder="Cantidad en USD">
            <button type="button" onclick="convertirPesos()">Convertir</button>
            <p id="resultadoConversion"></p>
        </fieldset>

        <fieldset>
            <legend>Calculadora</legend>
            <input type="number" id="num1" placeholder="Número 1" style="width: 30%;">
            <select id="operacion" style="width: 20%;">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" id="num2" placeholder="Número 2" style="width: 30%;">
            <button type="button" onclick="calcular()">Calcular</button>
            <p id="resultadoCalculadora"></p>
        </fieldset>

        <fieldset>
            <legend>Cuestionario de prueba</legend>
            <p>1. ¿HTML es un lenguaje de programación?</p>
            <input type="radio" name="q1" value="v"> Verdadero
            <input type="radio" name="q1" value="f"> Falso

            <p>2. ¿CSS se usa para dar estilos a las páginas web?</p>
            <input type="radio" name="q2" value="v"> Verdadero
            <input type="radio" name="q2" value="f"> Falso
            <br><br>
            <button type="button" onclick="evaluarCuestionario()">Enviar Respuestas</button>
        </fieldset>

    </section>
    
    <script src="js/scripts.js"></script>

</body>
  </div>
</html>