    //Ocultamos alertas
    function hideAlerts() {
        document.getElementById("successAdd").style.display = "none";
        document.getElementById("errorAdd").style.display = "none";
        document.getElementById("successDelete").style.display = "none";
        document.getElementById("errorDelete").style.display = "none";
    }
    //Script para agregar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.add_btn').click(function(e) {
            e.preventDefault();
            hideAlerts();
            //muestra el modal
            $('#modalAdd').modal('show');
        });
    });

    //Script para modificar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.update_btn').click(function(e) {
            e.preventDefault();
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            var tipo_prenda = $(this).closest('tr').find('.tipo_de_prenda').text();
            var marca = $(this).closest('tr').find('.marca').text();
            var talle = $(this).closest('tr').find('.talle').text();
            var precio = $(this).closest('tr').find('.precio').text();
            var link = $(this).closest('tr').find('.link').text();
            //var imagen1 = $(this).closest('tr').find('.imagen1').text();
            //var imagen1=document.getElementById("imagen_re1").src;
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#update_id').val(prenda_id);
            document.getElementById("upd_typeClothes").value = tipo_prenda;
            document.getElementById("upd_brandClothes").value = marca;
            document.getElementById("upd_sizeClothes").value = talle;
            document.getElementById("upd_priceClothes").value = precio;
            document.getElementById("upd_linkPayClothes").value = link;
            //document.getElementById("upd_photo1").value = imagen1;
            document.getElementById("img1").src = "./vista.php?id1=" + prenda_id;
            document.getElementById("img2").src = "./vista.php?id2=" + prenda_id;
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#update_id').val(prenda_id);
            //muestra el modal
            hideAlerts();
            $('#modalUpdate').modal('show');
        });
    });

    //Script para eliminar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.delete_btn').click(function(e) {
            e.preventDefault();
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#delete_id').val(prenda_id);
            //muestra el modal
            hideAlerts();
            $('#modalDelete').modal('show');
        });
    });