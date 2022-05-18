if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}

function validateMod(e) {
    e.preventDefault();
    formulario = document.getElementById('modForm');
    codigo = document.getElementById('icodem');
    nombre = document.getElementById('inamem');
    apellido = document.getElementById('iapem');
    usuario = document.getElementById('iuserm');
    clave = document.getElementById('icontram');

    lVali = true;

    if (nombre.value=="") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value=="") {
        apellido.style.borderColor = "red";
        ohSnap('Ingrese su apellido...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value=="") {
        usuario.style.borderColor = "red";
        ohSnap('Ingrese su usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value=="") {
        clave.style.borderColor = "red";
        ohSnap('Ingrese su contraseña...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali==true) {
        formulario.submit();
    }

}
    