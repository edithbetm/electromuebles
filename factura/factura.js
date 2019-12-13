function actualizarTotal(cbx) {
    var fila = cbx.parentElement.parentElement;
    var precio = parseFloat(fila.children[2].innerHTML);
    var cantidad = parseFloat(fila.children[4].children[0].value);
    var total = parseFloat(document.getElementById('total').innerHTML);
    // Primero se comprueba si está marcado o no
    if(cbx.checked) {
        total += precio;
        fila.children[4].children[0].disabled = false;
    }
    else {
        var resta = precio * cantidad;
        total -= resta;
        fila.children[4].children[0].value = 1;
        fila.children[4].children[0].disabled = true;
    }

    document.getElementById('total').innerHTML = total;
}

function actualizarTotalPorCant(input) {
    var fila = input.parentElement.parentElement;
    var precio = parseFloat(fila.children[2].innerHTML);
    var cantidad = parseFloat(fila.children[4].children[0].value);
    var total = parseFloat(document.getElementById('total').innerHTML);
    var valorAnterior = parseInt(input.id);
    var valorActual = parseInt(input.value);

    // Si aumenta en 1
    if(valorActual - valorAnterior > 0) {
        total += precio;
    }
    // Si disminuye
    else {
        total -= precio;
    }

    // Actualizar el id
    input.id = valorActual;

    document.getElementById('total').innerHTML = total;
}
