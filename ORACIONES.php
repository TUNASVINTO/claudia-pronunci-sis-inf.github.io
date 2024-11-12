<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interactivo de Lectura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="oracio">
    <header>
        <h1>CUENTOS ESCRITOS</h1>
        <div class="logoizqui">
            <img src="LOGOS/LOGO CARRERA.jpg" width="120" height="120" alt="Logo Carrera">
        </div>
        <div class="logodere">
            <img src="LOGOS/WhatsApp Image 2024-05-04 at 10.17.01.jpeg" width="120" height="120" alt="Logo WhatsApp">
        </div>
    </header>
    <ul >
           <li><a href="index.php">SALIR</a></li><br><br><br>
            <li><a href="PAGINA2.php">IR A PAGINA2</a></li><br><br><br>
            <li><a href="METODO_SILABICO.php">VOVER ATRAS</a></li>
        </ul>


    <main>

    <center>

      <table>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA1.jpg" width="800" height="1000" alt="Imagen con sonido" onclick="reproducirSonido('sonido1')">
                    </div>
                    <audio id="sonido1" src="AUD_ORACION/1.ogg"></audio>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA2.jpg" width="800" height="1000" alt="Imagen con sonido" onclick="reproducirSonido('sonido2')">
                    </div>
                    <audio id="sonido2" src="AUD_ORACION/2.ogg"></audio>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA3.jpg" width="800" height="1000" alt="Imagen con sonido" onclick="reproducirSonido('sonido3')">
                    </div>
                    <audio id="sonido3" src="AUD_ORACION/3.ogg"></audio>
                </td>
            
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA4.jpg" width="800" height="1000"  alt="Imagen con sonido" onclick="reproducirSonido('sonido4')">
                    </div>
                    <audio id="sonido4" src="AUD_ORACION/4.ogg"></audio>
                </td>
            
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA5.jpg" width="800" height="1000"  alt="Imagen con sonido" onclick="reproducirSonido('sonido5')">
                    </div>
                    <audio id="sonido5" src="AUD_ORACION/5.ogg"></audio>
                </td>
            
            </tr>
             <tr>
                <td>
                    <div class="sonido">
                        <img src="ORACIONES/IMA6.jpg" width="800" height="1000" alt="Imagen con sonido" onclick="reproducirSonido('sonido6')">
                    </div>
                    <audio id="sonido6" src="AUD_ORACION/6.ogg"></audio>
                </td>
            
            </tr>
        </table>
        </center>
    </main>

    <script>
        function reproducirSonido(id) {
            var sonido = document.getElementById(id);
            sonido.play();
        }
    </script>
</body>
</html>