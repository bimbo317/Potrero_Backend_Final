<?php
//verifico si usuario esta logueado, si esta muestra boton logout
session_start();
$varsession= @$_SESSION['user'];
if ($varsession == null || $varsession ='') {
    include_once('./assets/header.php');
} else {
    include_once('./assets/header_admin2.php');
}


?>
    <!-- Start: 1 Row 1 Column -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!-- Mostrando error de login -->
                <div class="ui negative message alert alert-warning text-wrap" id="error" style="display: none;">
                    <strong>Ud no es un usuario registrado o confundió su nombre de usuario y contraseña</strong>
                </div>
                <h1 class="mb-4" style="color: var(--bs-white);">Tiendita Digital</h1>
                <div class="cabecera">
                    <ul class="row1">
                        <a href="?p=menor" type="submit" class="btn btn-outline-secondary m-1" name="menor">Menor a $500</a>
                        <?php
                        // 1) Buscamos archivo de conexion
                        require_once('./assets/conexion.php');
                        // 2) Preparar la orden SQL
                        $consulta0 = 'SELECT DISTINCT marca FROM ropa';
                        //$datos0 = mysqli_query($conexion, $consulta0);
                        $datos0 = $mysqli->query($consulta0);
                        ?>
                        <div class="dropdown btn selectoption">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Filtrar Marca
                            </button>
                            <ul class="dropdown-menu m-1" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?p=todos">Todos</a></li>
                                <?php
                                while ($fila = mysqli_fetch_array($datos0)) {
                                    echo '<li><a class="dropdown-item" href="?p=' . strtolower(ucwords($fila[0])) . '">' . ucwords($fila[0]) . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </ul>
                </div>
                <!-- Mostrando las cards -->
                <div class="tarjetas">
                    <div class="pagina-filtrada">
                        <?php
                        //
                        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'todos';
                        //cargamos el php con los filtros, por defecto cargamos el filtro TODOS
                        require_once './assets/filtrar.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal's -->
        <?php
        require_once('./assets/modals.php');
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>