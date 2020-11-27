//NAVBAR
var ubicacionInicial = window.pageYOffset;
window.onscroll = function() {
    var desplazamiento = window.pageYOffset;
    if (ubicacionInicial >= desplazamiento) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";

    }
    ubicacionInicial = desplazamiento
    console.log(desplazamiento)

}

//TARJETAS DE PROFES
var tarjeta = document.querySelectorAll(".tarjeta");
window.addEventListener('scroll', mostrarScroll)

function mostrarScroll() {
    var scrollTop = document.documentElement.scrollTop;
    for (i = 0; i < tarjeta.length; i++) {
        var alturadetarjetas = tarjeta[i].offsetTop;
        if (alturadetarjetas - 600 < scrollTop) {
            tarjeta[i].style.opacity = 1;
            tarjeta[i].classList.add("mostrararriba");

        }
    }
}


//NOSOTROS
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

//BOTÓN MODO OSCURO
var boton = document.getElementById("BotonUno")
var d = 0
boton.onclick = function() {
    var body = document.getElementById("body")
    if (d == 0) {
        body.style.backgroundColor = " rgb(40, 44, 52)"
        d = 1
    } else {
        document.getElementById("body").style.backgroundColor = "white"
        d = 0
    }
}




//ENTRENAMIENTOS

document.getElementById("imagencirculo1").onmouseover = function() {
    var entrenamientos = document.getElementById("imagencirculo1").attributes[1].value = "imgJavascript/imgJS1.jpg";

};
document.getElementById("imagencirculo1").onmouseout = function() {
    var entrenamientos = document.getElementById("imagencirculo1").attributes[1].value = "imagenes/circulo3.jpg";

};


//PERSONALIZADOS
document.getElementById("imagencirculo2").onmouseover = function() {
    var personalizados = document.getElementById("imagencirculo2").attributes[1].value = "imgJavascript/imgJS2.jpg";


};
document.getElementById("imagencirculo2").onmouseout = function() {
    var personalizados = document.getElementById("imagencirculo2").attributes[1].value = "imagenes/circulo4.jpg";


};


//FISIOTERAPIA
document.getElementById("imagencirculo3").onmouseover = function() {
    var fisioterapia = document.getElementById("imagencirculo3").attributes[1].value = "imgJavascript/imgJS3.jpg";

};
document.getElementById("imagencirculo3").onmouseout = function() {
    var fisioterapia = document.getElementById("imagencirculo3").attributes[1].value = "imagenes/circulo5.jpg";

};



//MASOTERAPIA
document.getElementById("imagencirculo4").onmouseover = function() {
    var masoterapia = document.getElementById("imagencirculo4").attributes[1].value = "imgJavascript/imgJS4.jpg";

};
document.getElementById("imagencirculo4").onmouseout = function() {
    var masoterapia = document.getElementById("imagencirculo4").attributes[1].value = "imagenes/circulo6.jpg";

};




document.getElementById("imagencirculo5").onmouseover = function() {
    var personalizados = document.getElementById("imagencirculo5").attributes[1].value = "imgJavascript/imgJS5.jpg";

};
document.getElementById("imagencirculo5").onmouseout = function() {
    var personalizados = document.getElementById("imagencirculo5").attributes[1].value = "imagenes/circulo7.jpg";

};





document.getElementById("imagencirculo6").onmouseover = function() {
    var personalizados = document.getElementById("imagencirculo6").attributes[1].value = "imgJavascript/imgJS6.jpg";

}
6
document.getElementById("imagencirculo6").onmouseout = function() {
    var personalizados = document.getElementById("imagencirculo6").attributes[1].value = "imagenes/circulo8.jpg";

};





//FORMULARIO DE CONTACTO

document.getElementById("enviar").onclick = function() {


    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var mensaje = document.getElementById("mensaje").value;
    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;

    if (nombre == "" || nombre.length < 4) {
        alert('Ingresa tu nombre');
        return false;

    } else if (correo == "" || !expresion.test(correo)) {
        alert('Ingresa una dirección de correo');
        return false;
    } else if (mensaje == "" || mensaje.length < 10) {
        alert('Ingresa un mensaje de mas de 10 caracteres');
        return false;
    } else {
        alert("Tu mensaje se envio con exito.")
    }

    return true;
}

//ONMOUSE OPACITY

document.getElementById("nombre").onmouseover = function() {
    var nombre = document.getElementById("nombre").style.opacity = 0.6
};

document.getElementById("nombre").onmouseout = function() {
    var nombre = document.getElementById("nombre").style.opacity = 0.3
};



document.getElementById("correo").onmouseover = function() {
    var correo = document.getElementById("correo").style.opacity = 0.6

};

document.getElementById("correo").onmouseout = function() {
    var correo = document.getElementById("correo").style.opacity = 0.3
};



document.getElementById("mensaje").onmouseover = function() {
    var mensaje = document.getElementById("mensaje").style.opacity = 0.6

};

document.getElementById("mensaje").onmouseout = function() {
    var mensaje = document.getElementById("mensaje").style.opacity = 0.3
};


//OCLICK OPACITIY
document.getElementById("nombre").onclick = function() {
    var nombre = document.getElementById("nombre").style.opacity = 1
}
document.getElementById("correo").onclick = function() {
    var correo = document.getElementById("correo").style.opacity = 1
}
document.getElementById("mensaje").onclick = function() {
    var mensaje = document.getElementById("mensaje").style.opacity = 1
}