//Script para modificar prenda
$(document).ready(function () {
    //detecta que boton fue presionado
    $(".product-link").click(function (e) {
        e.preventDefault();
        //obtiene id de prenda seleccionada
        var prenda_id = $(this).closest("tr").find(".prenda_id").text();
        console.log("prenda antes: "+prenda_id);
        prenda_id=3;
        console.log("prenda"+prenda_id);
        var tipo_prenda = $(this).closest("tr").find(".tipo_de_prenda").text();
        var marca = $(this).closest("tr").find(".marca").text();
        var precio = $(this).closest("tr").find(".precio").text();
        var talle = $(this).closest("tr").find(".talle").text();
        //var imagen1 = $(this).closest('tr').find('.imagen1').text();
        //var imagen1=document.getElementById("imagen_re1").src;
        //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
        $("#update_id").val(prenda_id);
        document.getElementById("buy_typeClothes").value = tipo_prenda;
        document.getElementById("buy_brandClothes").value = marca;
        document.getElementById("buy_sizeClothes").value = talle;
        document.getElementById("buy_priceClothes").value = precio;
        //document.getElementById("upd_photo1").value = imagen1;
        document.getElementById("buy_img1").src = "./assets/vistaBuy.php?id1=" + prenda_id;
        document.getElementById("buy_img2").src = "./assets/vistaBuy.php?id2=" + prenda_id;
        //obtiene id de prenda seleccionada
        var prenda_id = $(this).closest("tr").find(".prenda_id").text();
        //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
        $("#buy_clothes_id").val(prenda_id);
        //muestra el modal
        //hideAlerts();
        $("#modal-product").modal("show");
    });
});
