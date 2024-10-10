function verifNom() {
    var nom = document.getElementById('form-nombre').value;

    if (nom.length == 0) {
        alert('Es requerido el nombre del Producto');
        return false;
    }
    
    if (nom.length > 100) {
        alert('El nombre es demasiado largo');
        return false;
    }

    return true;
}
//////////////////////////////////////////////////////////////////////////////////
function veriMarca() {
    // Verificamos si hay un radio seleccionado
    var radios = document.getElementsByName('marca');
    var marcaSeleccionada = false;

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            marcaSeleccionada = true;
            break;
        }
    }

    if (!marcaSeleccionada) {
        alert('Es requerida la marca del Producto');
        return false;
    }
    else{
        return true;
    }
}
//////////////////////////////////////////////////////////////////////////////////
function veriModelo(){
    var mod = document.getElementById('form-modelo').value;

    if (mod.length == 0) {
        alert('Es requerido el modelo del Producto');
        return false;
    }


if (mod.length > 25) {
    alert('El nombre del modelo es demasiado largo');
    return false;
}
    return true;

}
//////////////////////////////////////////////////////////////////////////////////
function veriPrecio() {

    var pre1 = document.getElementById('form-precio').value;

    if (pre1.length == 0) {
        alert('Es requerido el precio del Producto');
        return false;
    }

    var pre2 = parseFloat(document.getElementById('form-precio').value);

    if (pre2 <= 99.99) {
        alert('El precio debe ser mayor a 99.99');
        return false;
    }

    return true;
}
//////////////////////////////////////////////////////////////////////////////////
function limDetalles() {
    var det = document.getElementById('form-detalles').value;
    
    if (det.length > 250) {
        alert('Los detalles son demasiado largos');
        return false;
    }

    return true;
}
//////////////////////////////////////////////////////////////////////////////////
function veriUnidades(){
    var uni1 = document.getElementById('form-unidades').value;

    if (uni1.length == 0) {
        alert('Las unidades del Producto son requeridas');
        return false;
    }

    var uni2 = parseFloat(document.getElementById('form-unidades').value);

    if (uni2 < 0) {
        alert('El numero de unidades debe ser mayor a 0');
        return false;
    }

    return true;
}
//////////////////////////////////////////////////////////////////////////////////
function verifImagen() {
    var img = document.getElementById('form-imagen').value;
    
    if (img.length == 0) {
        alert('Se pondra una imagen predeterminada');
        document.getElementById('form-imagen').value = 'http://localhost:8089/tecweb/practicas/P09/images/def.jpg';
    }

    return true;
}
