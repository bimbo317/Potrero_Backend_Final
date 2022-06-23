<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <!-- Fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <title>Potrero Digital - Backend</title>
</head>
<body>
    <div class="fluid-container mb">
        <div class="row">
            <div class="col-12 col-md-5 left">
                <div class="container">
                    <div class="segment width45">
                        <a href="./login.php"><i class="fas fa-arrow-left mb-4 mr-1"></i>Volver</a>
                        <h1>Recuperar</h1>
                        <h1>contraseña</h1>
                        <div class="ui negative message alert alert-warning text-wrap" id="error" style="display: none;">
                            <strong>El usuario ingresado no existe</strong>
                        </div>
                        <div class="ui negative message alert alert-warning text-wrap" id="ok" style="display: none;">
                            <strong>Contraseña guardada</strong>
                        </div>
                        <div class="mb-3">
                              <!-- <p>Ingrese un usuario existente y la nueva contraseña, si el usuario existe se guardara la contraseña ingresada.</p>-->
                              <form action="login2.php" id="form_recovery" method="post" style="display:inline">
                                <div class="mb-3">
                                    <input type="text" name="mail" class="form-control" id="id_user" placeholder="Ingrese Usuario" required="required">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="id_pass" placeholder="Nueva Contraseña" required="required">
                                </div>
                                <button type="submit" name="recovery" class="btn">Guardar</button>
                            </form>
                          </div>
                      </div>
                </div>
            </div>
            <div class="col-12 col-md-7 right">
                <div class="container">
                    <img class="logo" src="./img/logo-plataforma.png">
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="txt-white">
            Powered by <img class="meli" src="./img/logo-plat.png">
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>