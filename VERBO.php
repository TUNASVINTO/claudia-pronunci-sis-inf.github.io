<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interactivo de Lectura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="verbos">
    <header>
        <h1>VERBO</h1>
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
                        <img src="VERBO/IMA1.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido1')">
                    </div>
                    <audio id="sonido1" src="AUD_VERBO/1VERB0.ogg"></audio>
                </td>
            
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA2.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido2')">
                    </div>
                    <audio id="sonido2" src="AUD_VERBO/2VERB.ogg"></audio>
                </td>
            
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA3.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido3')">
                    </div>
                    <audio id="sonido3" src="AUD_VERBO/3VEN.ogg"></audio>
                </td>
        
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA4.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido4')">
                    </div>
                    <audio id="sonido4" src="AUD_VERBO/4LEE.ogg"></audio>
                </td>
            
            
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA5.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido5')">
                    </div>
                    <audio id="sonido5" src="AUD_VERBO/5APLA.ogg"></audio>
                </td>
            
            </tr>
             <tr>
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA6.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido6')">
                    </div>
                    <audio id="sonido6" src="AUD_VERBO/6GRITAR.ogg"></audio>

                </td>
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA7.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido7')">
                    </div>
                    <audio id="sonido7" src="AUD_VERBO/7OLER.ogg"></audio>

                </td>
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA8.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido8')">
                    </div>
                    <audio id="sonido8" src="AUD_VERBO/8SALUD.ogg"></audio>

                </td>
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA9.jpg" width="300" height="300" alt="Imagen con sonido" onclick="reproducirSonido('sonido9')">
                    </div>
                    <audio id="sonido9" src="AUD_VERBO/9HABLAR.ogg"></audio>

                </td>
                <td>
                    <div class="sonido">
                        <img src="VERBO/IMA10.jpg" width="300" height="300"alt="Imagen con sonido" onclick="reproducirSonido('sonido10')">
                    </div>
                    <audio id="sonido10" src="AUD_VERBO/10ESCUCHAR.ogg"></audio>

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