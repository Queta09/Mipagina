<?php require "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="David Enrique Coba Ku" />
    <title>Galería - Queta</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
    <div style="text-align: center;">

        <header>
            <h1>Mi Galería Multimedia</h1>
        </header>

        <?php include "nav.php"; ?>
        <hr />

        <section>

            <h2>Redes Sociales</h2>
           <h2>Redes Sociales</h2>
            <table border="1" style="text-align: center; width: 80%; margin: auto;">
                <tr>
                    <th colspan="3">Redes sociales de mis amigos</th>
                </tr>
                <tr>
                    <td>Hombres</td>
                    <td>
                        <img src="multimedia\EMi.png" alt="emi" width="250"><br>
                        <strong>Emiliano Avila</strong>
                        <a href="https://www.facebook.com/emiliano.avila.58910" target="_blank" rel="noopener">Facebook de Emiliano</a>
                    </td>
                    <td>
                        <img src="multimedia\Brayam (1).png" alt="brayam" width="250"><br>
                        <strong>Brayan Contreras</strong>
                        <a href="https://www.facebook.com/brayam.dzul.77" target="_blank" rel="noopener">Facebook de Emiliano</a>
                    </td>
                </tr>
                <tr>
                    <td>Mujeres</td>
                    <td>
                        <img src="multimedia\JAybi.png" alt="jaybi" width="250"><br>
                        <strong>Jaybi Guemez</strong>
                        <a href="https://www.facebook.com/jaybi.guemez.9" target="_blank" rel="noopener">Facebook de Emiliano</a>
                    </td>
                    <td>
                        <img src="multimedia\JAz.png" alt="palta" width="250"><br>
                        <strong>Jaz Petul</strong>
                        <a href="https://www.facebook.com/profile.php?id=100048683242846" target="_blank" rel="noopener">Facebook de Emiliano</a>
                    </td>
                </tr>
            </table>
            
            <br><br><hr />

            <h2>Mis Imágenes</h2>
            <p>Aquí dejo un par de fotos.</p>
            <img src="multimedia/piratita.jpeg" alt="Mi Piratita" width="...">
            <br>
            <span>Mi mascota, Piratita</span>
            <br><br> <!-- Unos espacios extra para separar -->
            <img src="multimedia/pc.jpeg" alt="Mi PC Ryzen 5" width="...">
            <br>
            <span>Mi PC que armé recientemente</span>
            
            
            <br><br><hr />

            <h2>Mis Videos</h2>
            <p>Un video donde hago bulbans en yirscito:</p>
            <video controls width="400">
                <source src="multimedia/yirs.mp4" type="video/mp4">
            </video>

            <br><br><hr />

            <h2>Mis Audios</h2>
            <p>Mi canción del momento:</p>
            <audio controls>
                <source src="multimedia/diva.mp3" type="audio/mpeg">
            </audio>

        </section>

        <hr />
        <footer>
            <p>Proyecto para la asignatura de Desarrollo de Aplicaciones Web.</p>
        </footer>

    </div>
</body>
</html>