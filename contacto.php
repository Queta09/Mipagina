<?php require "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Contacto - Queta</title>

    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

    <header>
        <h1>Contacto</h1>
    </header>

    <?php include "nav.php"; ?>
    <hr />

    <section>
        <h2>Déjame tus datos</h2>
        
       <form action="#" method="post" onsubmit="return validarFormulario()">
            <fieldset>
                <legend>Uso de cajas de texto - Datos</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br><br>
                
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos"><br><br>

                <label for="pwd">Contraseña (pwd):</label>
                <input type="password" id="pwd" name="pwd">
            </fieldset>

    
            <fieldset>
                <legend>Uso de Radio Buttons - Género</legend>
                <input type="radio" name="genero" id="masculino" value="Masculino"> 
                <label for="masculino">Masculino</label>
                
                <input type="radio" name="genero" id="femenino" value="Femenino"> 
                <label for="femenino">Femenino</label>
            </fieldset>

      
            <fieldset>
                <legend>Uso del CheckBox - Intereses</legend>
                <input type="checkbox" name="interes" value="Deporte"> Hacer Deporte
                <input type="checkbox" name="interes" value="Television"> Ver Televisión
                <input type="checkbox" name="interes" value="Ejercicio"> Hacer Ejercicio
            </fieldset>

            <fieldset>
                <legend>Uso del Select y List</legend>
                <label>Estudios Actuales:</label>
                <select name="estudios">
                    <option value="Secundaria">Secundaria</option>
                    <option value="Bachillerato">Bachillerato</option>
                    <option value="Licenciatura">Licenciatura</option>
                </select>
                <br><br>
                
                <label>Navegador usado:</label>
                <input list="buscadores" name="MisBuscadores">
                <datalist id="buscadores">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Edge">
                    <option value="Safari">
                </datalist>
            </fieldset>

            <br>
            <input type="submit" value="Enviar">
        </form>
    </section>

    <hr />
    <footer>
        <p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p>
    </footer>
    <script src="js/scripts.js"></script>

</body>
</html>