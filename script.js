var ubicacionInicial = window.pageYOffset;
window.onscroll = function() {
    var desplazamiento = window.pageYOffset;
    if (ubicacionInicial >= desplazamiento) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";

    }
    ubicacionInicial = desplazamiento
}




var animado = document.querySelectorAll(".animado");
window.addEventListener('scroll', mostrarScroll)

function mostrarScroll() {
    var scrollTop = document.documentElement.scrollTop;
    for (i = 0; i < animado.length; i++) {
        var alturadetarjetas = animado[i].offsetTop;
        if (alturadetarjetas - 600 < scrollTop) {
            animado[i].style.opacity = 1;
            animado[i].classList.add("mostrararriba");

        }
    }
}




var efecto = document.querySelectorAll(".efecto");
window.addEventListener('scroll', mostrarEfecto)

function mostrarEfecto() {
    var efectoTop = document.documentElement.scrollTop;
    for (i = 0; i < efecto.length; i++) {
        var alturaEfecto = efecto[i].offsetTop;
        if (alturaEfecto - 500 < efectoTop) {
            efecto[i].style.opacity = 1;
        }
    }

}


var boton = document.getElementById("BotonUno")
var d = 0
boton.onclick = function() {
    var body = document.getElementById("body")
    if (d == 0) {
        body.style.backgroundColor = "black"
        d = 1
    } else {
        document.getElementById("body").style.backgroundColor = "white"
        d = 0
    }
}