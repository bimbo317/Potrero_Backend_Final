<div class="row">
    <?php
    $filtro = isset($_GET['p']) ? strtolower($_GET['p']) : 'todos';
    // 2) Preparar la orden SQL
    if ($filtro == 'todos') {
        $consulta = 'SELECT * FROM ropa';
    } elseif ($filtro == 'menor') {
        $consulta = 'SELECT * FROM ropa WHERE precio<500';
    } else {
        $consulta = 'SELECT * FROM ropa WHERE marca="' . $filtro . '"';
    }
    // 3) Ejecutar la orden y obtenemos los registros
    $datos1 = $mysqli->query($consulta);
    while ($reg = mysqli_fetch_array($datos1)) {
    ?>
        <div class="card col-sm-12 col-md-6 col-lg-3 py-3">
            <!-- Carrousel -->
            <div id="slide<?php echo $reg["id"] ?>" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!-- Se agrega link descripcion de producto-->
                <a href="index.php" data-bs-target="#modal-product" data-bs-toggle="modal" class="product-link">
                    <div class="carousel-inner">
                        <div class="carousel-item active" width="30px" height="30px">
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg["imagen1"]) ?>" alt="" )>
                        </div>
                        <div class="carousel-item" width="30px" height="30px">
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen2']) ?>" alt="" )>
                        </div>
                    </div>
                </a>
                <!-- Botones de control del carrusel / no debe tener link del producto-->
                <button class="carousel-control-prev" type="button" data-bs-target="#slide<?php echo $reg["id"] ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slide<?php echo $reg["id"] ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Se agrega link descripcion de producto-->
            <a href="index.php" data-bs-target="#modal-product" data-bs-toggle="modal" class="product-link">
                <h3 class="card-title pt-3" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
                <span>$ <?php echo $reg['precio']; ?></span>
            </a>
        </div>
    <?php } ?>
</div>
</div>