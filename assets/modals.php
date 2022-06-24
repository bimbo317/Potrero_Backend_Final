<!-- Modal Product -->
<div class="modal fade" id="modal-product" tabindex="-1" aria-labelledby="exampleModalLabelUpdate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="pay.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="clothes_id" id="buy_clothes_id">
                    <div class="col-12">
                        <label for="buy_typeClothes" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="buy_typeClothes" id="buy_typeClothes" readonly>
                    </div>
                    <div class="col-12">
                        <label for="buy_brandClothes" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="buy_brandClothes" id="buy_brandClothes" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="buy_sizeClothes" class="form-label">Talle</label>
                        <input type="text" class="form-control" name="buy_sizeClothes" id="buy_sizeClothes" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="buy_priceClothes" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="buy_priceClothes" id="buy_priceClothes" readonly>
                    </div>
                    <hr class="dropdown-divider">
                    <div class="mb-3">
                        <label for="buy_photo1" class="form-label">Imagen 1</label>
                        <div class="imagenBuy">
                            <img id="buy_img1" src='' alt='Producto' width="100" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="buy_photo2" class="form-label">Imagen 2</label>
                        <div class="imagenBuy">
                            <img id="buy_img2" src='' alt='Producto' width="100" />
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
<!-- Modal Login -->
<div class="modal fade" role="dialog" tabindex="-1" id="modal-login">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #1e2833;"><button class="btn align-self-end btn-close" type="button" data-bs-dismiss="modal" style="margin: 5px;"></button>
            <section class="login-dark">
                <h1>Login</h1>
                <form method="post" action="login.php">
                    <div class="illustration"><i class="icon ion-ios-locked-outline"></i>
                    </div>
                    <div class="mb-3"><input class="form-control" type="email" name="mail" placeholder="Email">
                    </div>
                    <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3"><button class="btn btn-primary d-block w-100" name="login" type="submit">Log In</button>
                    </div>
                    <a class="forgot" href="/index.html" data-bs-target="#modal-recover" data-bs-toggle="modal">Forgot your email or password?</a>
                </form>
            </section>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modal-recover">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The content of your modal.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
        </div>
    </div>
</div>