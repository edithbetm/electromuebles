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

function generarFactura() {
    var pdf = new jsPDF({
        unit: 'cm',
        format: 'a6' // 10.5cm x 14.8 cm
    });
    // Poner el título
    pdf.setFontSize(16);
    pdf.text("Factura", 4, 1); // (text, x, y)
    // Poner el nombre de la empresa
    pdf.setFontSize(13);
    pdf.text("Electromuebles", 3.5, 2);
    // Poner la fecha y hora
    pdf.setFontSize(8);
    pdf.text(new Date().toLocaleString(), 3.5, 2.5);
    // Ponemos una línea de separación
    pdf.setLineWidth(0.1);
    pdf.line(0, 3, 14.8, 3); // (x1, y1, x2, y2)
    // Datos del cliente
    pdf.setFontSize(12);
    pdf.text("Cliente:", 1, 4);
    pdf.setFontSize(10);
    // Nombre del cliente
    var cliente = document.getElementById('selectCliente');
    var nombreCliente = cliente.options[cliente.selectedIndex].text;
    pdf.text("Nombre: " + nombreCliente, 1, 4.5);
    // Número de teléfono
    var tel = cliente.value;
    pdf.text("Teléfono: " + tel, 1, 5);
    // Ponemos otra línea de separación
    pdf.setLineWidth(0.1);
    pdf.line(0, 5.5, 14.8, 5.5); // (x1, y1, x2, y2)
    // Ponemos productos
    var y = agregarListaProductos(pdf);
    y += 1;
    // Agregamos el total
    pdf.text("------------------------------------------------------------------", 0.5,  y);
    y += 0.5;
    var subtotal = parseFloat(document.getElementById('total').innerHTML);
    pdf.text("Subtotal: $" + subtotal, 4, y);
    y += 0.5;
    pdf.text("IVA: 15%", 4, y);
    y += 0.5;
    var total = subtotal + (subtotal * 0.15);
    pdf.text("Total: $" + total, 4, y);
    // Guardamos el archivo
    pdf.save('factura.pdf');
    // Recargar la página
    location.reload();
}

function agregarListaProductos(pdf) {
    var y = 6;
    pdf.setFontSize(12);
    pdf.text("Productos (código, cantidad, precio):", 1, y);
    pdf.setFontSize(10);
    y += 0.5;
    var items = document.getElementsByClassName("item");
    for (var i = 0; i < items.length; i++) {
        var checkbox = items[i].children[3].children[0];
        if(checkbox.checked) {
            y += 0.5;
            var codigo = items[i].children[0].innerHTML;
            var cantidad = items[i].children[4].children[0].value;
            var nuevaCantidad = items[i].children[4].children[0].max;
            nuevaCantidad -= parseInt(cantidad);
            var precio = items[i].children[2].innerHTML;
            pdf.text("-> " + codigo + "              " + cantidad + "               $" + precio, 1, y);
            actualizarBD(items[i].id, nuevaCantidad);
        }
    }
    return y;
}

function actualizarBD(id, nuevaCant) {
    $.ajax({
        url: "actualizarExistencia.php",
        data: {
            id: id,
            nuevaCant: nuevaCant,
        },
        error: function(p1, p2, p3) {
            alert("Error: " + p3);
            console.log(p1, p2, p3);
        },
        success: function(data, status, jqXHR) {

        }
    });
}
