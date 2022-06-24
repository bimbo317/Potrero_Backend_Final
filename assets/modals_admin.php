<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="clothes_id" id="delete_id">
                    <h4>Seguro que desea eliminar este artículo?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="delete_clothes" class="btn btn-outline-danger">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelAdd">Agregar Prenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <h4>Ingrese los datos de la prenda.</h4>
                    <div class="col-12">
                        <label for="typeClothes" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="typeClothes" id="typeClothes" placeholder="Buzo, Pantalón, Remera, etc">
                    </div>
                    <div class="col-12">
                        <label for="brandClothes" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="brandClothes" id="brandClothes" placeholder="Adidas, Nike, Supreme, etc">
                    </div>
                    <div class="col-md-6">
                        <label for="sizeClothes" class="form-label">Talle</label>
                        <input type="text" class="form-control" name="sizeClothes" id="sizeClothes" placeholder="XS, M, L, X, XL, XXL, etc">
                    </div>
                    <div class="col-md-4">
                        <label for="priceClothes" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="priceClothes" id="priceClothes" placeholder="$00,00">
                    </div>
                    <div class="col-md-4">
                        <label for="linkClothes" class="form-label">Link de pago</label>
                        <input type="text" class="form-control linkpago" name="linkClothes" id="linkClothes" placeholder="https://mpago.la/">
                    </div>
                    <hr class="dropdown-divider">
                    <div class="mb-3">
                        <label for="photo1" class="form-label">Imagen 1</label>
                        <input class="form-control" type="file" name="photo1" id="photo1" accept="image/jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="photo2" class="form-label">Imagen 2</label>
                        <input class="form-control" type="file" name="photo2" id="photo2" accept="image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" name="btn_cancel" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="add_clothes" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabelUpdate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <h4>Ingrese los datos de la prenda.</h4>
                    <input type="hidden" name="clothes_id" id="update_id">
                    <div class="col-12">
                        <label for="typeClothes" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="typeClothes" id="upd_typeClothes" placeholder="Buzo, Pantalón, Remera, etc">
                    </div>
                    <div class="col-12">
                        <label for="brandClothes" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="brandClothes" id="upd_brandClothes" placeholder="Adidas, Nike, Supreme, etc">
                    </div>
                    <div class="col-md-6">
                        <label for="sizeClothes" class="form-label">Talle</label>
                        <input type="text" class="form-control" name="sizeClothes" id="upd_sizeClothes" placeholder="XS, M, L, X, XL, XXL, etc">
                    </div>
                    <div class="col-md-4">
                        <label for="priceClothes" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="priceClothes" id="upd_priceClothes" placeholder="$00,00">
                    </div>
                    <div class="col-md-4">
                        <label for="linkPayClothes" class="form-label">Link de pago</label>
                        <input type="text" class="form-control linkpago" name="linkPayClothes" id="upd_linkPayClothes" placeholder="https://mpago.la/">
                    </div>
                    <hr class="dropdown-divider">
                    <div class="mb-3">
                        <label for="upd_photo1" class="form-label">Imagen 1</label>
                        <div class="imagenUpdate">
                            <input class="form-control" type="file" name="upd_photo1" id="upd_photo1" placeholder="imagen1" accept="image/jpeg">
                            <img id="img1" src='' alt='Img desde MySQL' width="100" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="upd_photo2" class="form-label">Imagen 2</label>
                        <div class="imagenUpdate">
                            <input class="form-control" type="file" name="upd_photo2" id="upd_photo2" placeholder="imagen2" accept="image/jpeg">
                            <img id="img2" src='' alt='Img desde MySQL' width="100" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" name="btn_cancel" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="update_clothes" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>