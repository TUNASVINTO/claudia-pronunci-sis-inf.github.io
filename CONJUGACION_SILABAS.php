<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interactivo de Lectura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="conjsila">
    <header>
        <h1>CONJUGACION DE SILABAS</h1>
        <div class="logoizqui">
            <img src="LOGOS/LOGO CARRERA.jpg" width="120" height="120" alt="Logo Carrera">
        </div>
        <div class="logodere">
            <img src="LOGOS/WhatsApp Image 2024-05-04 at 10.17.01.jpeg" width="120" height="120" alt="Logo WhatsApp">
        </div>
    </header>


    <main>
        
        

        <table>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="CONJUGACION DE SILABAS/IM2.jpg" width="600" height="900" alt="Imagen con sonido" onclick="reproducirSonido('sonido1')">
                    </div>
                    <audio id="sonido1" src="AUD_CON_SILA/1 (1).mp3"></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="CONJUGACION DE SILABAS/IM3.jpg" width="600" height="900" alt="Imagen con sonido" onclick="reproducirSonido('sonido2')">
                    </div>
                    <audio id="sonido2" src="AUD_CON_SILA/2.mp3"></audio>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="CONJUGACION DE SILABAS/IM4.jpg" width="600" height="900" alt="Imagen con sonido" onclick="reproducirSonido('sonido3')">
                    </div>
                    <audio id="sonido3" src=""></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="CONJUGACION DE SILABAS/IM5.jpg" width="600" height="900" alt="Imagen con sonido" onclick="reproducirSonido('sonido4')">
                    </div>
                    <audio id="sonido4" src=""></audio>
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
    <main>
         <ul >
           <li><a href="index.php">SALIR</a></li><br><br><br>
            <li><a href="PAGINA2.php">IR A PAGINA2</a></li><br><br><br>
            <li><a href="METODO_SILABICO.php">VOVER ATRAS</a></li>
        </ul>
    </main>
</body>
</html>