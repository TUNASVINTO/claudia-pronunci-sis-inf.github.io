function function_name(argument) {
    const palabras =[ "manzana", "perro", "cielo", "casa", "arbol"]
    const palabraAleatoria = palabras[math.floor(math.random()*palabras.length)]
    document.getElementById("palabra").inner Text = palabraAleatoria;
}

// Función para reproducir el sonido al hacer clic en la imagen
function reproducirSonido() {
    var sonido = document.getElementById("sonido");
    sonido.play();
}