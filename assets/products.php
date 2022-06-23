<?php
//verifico si usuario esta autorizado para visualizar pantalla de administracion
session_start();
$varsession= $_SESSION['user'];
if ($varsession == null || $varsession ='') {
    header("location:../index.php");
    die();
}
include_once('./header_admin.php');
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./js/crud.js"></script>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Mostrando error de login -->
            <div class="ui negative message alert alert-warning text-wrap" id="error" style="display: none;">
                <strong>Ud no es un usuario registrado o confundió su nombre de usuario y contraseña</strong>
            </div>
            <h1 class="mb-4" style="color: var(--bs-white);">Tiendita Digital</h1>
            <div class="Alertas">
                <!--Alerta Agregar prenda nueva -->
                <div class="alert alert-success" role="alert" id="successAdd" style="display: none;">
                    La prenda ha sido guardada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorAdd" style="display: none;">
                    Error al guardar la nueva prenda!!!
                </div>
                <!--Alerta Agregar prenda nueva -->
                <div class="alert alert-success" role="alert" id="successUpdate" style="display: none;">
                    La prenda ha sido modificada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorUpdate" style="display: none;">
                    Error al guardar la nueva prenda!!!
                </div>
                <!--Alerta Eliminar prenda -->
                <div class="alert alert-success" role="alert" id="successDelete" style="display: none;">
                    La prenda ha sido eliminada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorDelete" style="display: none;">
                    Error al eliminar la prenda!!!
                </div>
            </div>
            <div class="centrado">
                <a href="#" class="add_btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Nueva Prenda</a>
            </div>
            <table class="table align-middle">
                <tr class="text-center">
                    <!-- <th>ID</th> -->
                    <th>TIPO DE PRENDA</th>
                    <th>MARCA</th>
                    <th>TALLE</th>
                    <th>PRECIO</th>
                    <th>IMAGEN 1</th>
                    <th>IMAGEN 2</th>
                    <!-- <th>EDITAR</th> -->
                    <th>BORRAR</th>
                    <th>MODIFICAR</th>
                </tr>
                <!-- requiero conexion -->
                <?php
                require_once './conexion.php';
                $consulta = 'SELECT * FROM ropa';

                // 3) Ejecutar la orden y obtenemos los registros
                $datos = $mysqli->query($consulta);
                // 4) Mostrar los datos del registro
                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <tr class="text-center">
                        <td class="prenda_id" style="display: none;"><?php echo $reg['id']; ?></td>
                        <td class="tipo_de_prenda"><?php echo ucwords($reg['tipo_de_prenda']); ?></td>
                        <td class="marca"><?php echo ucwords($reg['marca']); ?></td>
                        <td class="talle"><?php echo strtoupper($reg['talle']); ?></td>
                        <td class="precio"><?php echo $reg['precio']; ?></td>
                        <td class="imagen1"><img id="imagen_re1" src="data:image/png;base64, <?php echo base64_encode($reg['imagen1']) ?>" alt="" width="85px" height="85px"></td>
                        <td class="imagen2"><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen2']) ?>" alt="" width="85px" height="85px"></td>
                        <td><a href="#" class="btn delete_btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Borrar</a></td>
                        <td><a href="#" class="btn update_btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate">Modificar</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php
require_once './modals_admin.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>