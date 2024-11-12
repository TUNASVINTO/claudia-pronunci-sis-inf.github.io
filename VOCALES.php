<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interactivo de Lectura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="vocales">
    <header>
        <h1>VOCALES</h1>
        <div class="logoizqui">
            <img src="LOGOS/LOGO CARRERA.jpg" width="120" height="120" alt="Logo Carrera">
        </div>
        <div class="logodere">
            <img src="LOGOS/WhatsApp Image 2024-05-04 at 10.17.01.jpeg" width="120" height="120" alt="Logo WhatsApp">
        </div>
    </header>

    <main>
        <ul >
           <li><a href="index.php">SALIR</a></li><br><br><br>
            <li><a href="PAGINA2.php">IR A PAGINA2</a></li><br><br><br>
            <li><a href="METODO_SILABICO.php">VOVER ATRAS</a></li>
        </ul>
        <center>
            <table >
                <tr>
                    <td>
                        <video width="800" height="700" controls>
                <source src="VID/Aprender a pronunciar y leer las vocales es español con Grin Conciencia fonológica.mp4" type="video/mp4">
                    </td>
                </tr>
            </table>
        </center>
        

        <table>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="VOCALES/IMA1.jpg" width="400" height="400" alt="Imagen con sonido" onclick="reproducirSonido('sonido1')">
                    </div>
                    <audio id="sonido1" src="AUD_VOCAL/A.mp3"></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="VOCALES/IMA2.jpg" width="400" height="400" alt="Imagen con sonido" onclick="reproducirSonido('sonido2')">
                    </div>
                    <audio id="sonido2" src="AUD_VOCAL/B.mp3"></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="VOCALES/IMA3.jpg" width="400" height="400" alt="Imagen con sonido" onclick="reproducirSonido('sonido3')">
                    </div>
                    <audio id="sonido3" src="AUD_VOCAL/O.mp3"></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="VOCALES/IMA4.jpg" width="400" height="400" alt="Imagen con sonido" onclick="reproducirSonido('sonido4')">
                    </div>
                    <audio id="sonido4" src="AUD_VOCAL/I.mp3"></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="VOCALES/IMA5.jpg" width="400" height="400" alt="Imagen con sonido" onclick="reproducirSonido('sonido5')">
                    </div>
                    <audio id="sonido5" src="AUD_VOCAL/U.mp3"></audio>
                </td>
            </tr>
        </table>
    </main>

    <script>
        function reproducirSonido(id) {
            var sonido = document.getElementById(id);
            sonido.play();
        }
    </script>
</body>
</html>