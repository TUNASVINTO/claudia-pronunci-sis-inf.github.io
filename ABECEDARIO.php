<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Interactivo de Lectura</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="abeceda">
    <header>
        <h1>ABECEDARIO</h1>
        <div class="logoizqui">
            <img src="LOGOS/LOGO CARRERA.jpg" width="120" height="120" alt="Logo Carrera">
        </div>
        <div class="logodere">
            <img src="LOGOS/WhatsApp Image 2024-05-04 at 10.17.01.jpeg" width="120" height="120" alt="Logo WhatsApp">
        </div>
    </header>
    <ul>
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
                        <img src="ABECEDARIO/IMA1.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido1')">
                    </div>
                    <audio id="sonido1" src="AUD_ABECED/A.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA2.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido2')">
                    </div>
                    <audio id="sonido2" src="AUD_ABECED/B.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA3.webp " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido3')">
                    </div>
                    <audio id="sonido3" src="AUD_ABECED/C.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA4.webp " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido4')">
                    </div>
                    <audio id="sonido4" src="AUD_ABECED/D.ogg  "></audio>
                </td>
                
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA5.webp " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido5')">
                    </div>
                    <audio id="sonido5" src="AUD_ABECED/E.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA6.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido6')">
                    </div>
                    <audio id="sonido6" src="AUD_ABECED/F.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA7.webp " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido7')">
                    </div>
                    <audio id="sonido7" src="AUD_ABECED/G.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA8.JPG " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido8')">
                    </div>
                    <audio id="sonido8" src="AUD_ABECED/H.ogg  "></audio>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA9.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido9')">
                    </div>
                    <audio id="sonido9" src="AUD_ABECED/I.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA10.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido10')">
                    </div>
                    <audio id="sonido10" src="AUD_ABECED/J.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA11.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido11')">
                    </div>
                    <audio id="sonido1" src="AUD_ABECED/K.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA12.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido12')">
                    </div>
                    <audio id="sonido12" src="AUD_ABECED/L.ogg  "></audio>
                </td>
            </tr>
             <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA13.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido13')">
                    </div>
                    <audio id="sonido13" src="AUD_ABECED/M.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA14.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido14')">
                    </div>
                    <audio id="sonido14" src="AUD_ABECED/N.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA15.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido15')">
                    </div>
                    <audio id="sonido15" src="AUD_ABECED/Ñ.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA16.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido16')">
                    </div>
                    <audio id="sonido16" src="AUD_ABECED/O.ogg  "></audio>
                </td>
            </tr>
             <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA17.jfif " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido17')">
                    </div>
                    <audio id="sonido17" src="AUD_ABECED/P.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA18.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido18')">
                    </div>
                    <audio id="sonido18" src="AUD_ABECED/Q.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA19.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido19')">
                    </div>
                    <audio id="sonido19" src="AUD_ABECED/R.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA20.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido20')">
                    </div>
                    <audio id="sonido20" src="AUD_ABECED/S.ogg  "></audio>
                </td>
            </tr>
             <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA21.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido21')">
                    </div>
                    <audio id="sonido21" src="AUD_ABECED/T.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA22.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido22')">
                    </div>
                    <audio id="sonido22" src="AUD_ABECED/U.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA23.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido23')">
                    </div>
                    <audio id="sonido23" src="AUD_ABECED/V.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA24.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido24')">
                    </div>
                    <audio id="sonido24" src="AUD_ABECED/W.ogg  "></audio>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA25.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido25')">
                    </div>
                    <audio id="sonido25" src="AUD_ABECED/X.ogg  "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA26.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido26')">
                    </div>
                    <audio id="sonido26" src="AUD_ABECED/Y.ogg "></audio>
                </td>
                <td>
                    <div class="sonido">
                        <img src="ABECEDARIO/IMA27.jpg " width="350" height="350" alt="Imagen con sonido" onclick="reproducirSonido('sonido27')">
                    </div>
                    <audio id="sonido27" src="AUD_ABECED/Z.27.mp3 "></audio>
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