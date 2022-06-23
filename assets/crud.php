<?php
// 1) Conexion
require_once './conexion.php';

// ---------------- Agrega una nueva prenda ----------------
//si la variable add_clothes esta presente se realizara el guardado
if (isset($_POST['add_clothes'])) {
  //obtengo los datos de las variables enviadas por el Form
  $tipo_prenda = $_POST['typeClothes'];
  $marca = $_POST['brandClothes'];
  $talle = $_POST['sizeClothes'];
  $precio = $_POST['priceClothes'];
  //verifico si sube 1 foto 2 o ninguna
  if ($_FILES['photo1']['name'] != null && $_FILES['photo2']['name'] != null) {
    $imagen1 = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
    $imagen2 = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
    $queryInsert = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen1,imagen2) VALUES ('','$tipo_prenda','$marca','$talle','$precio','$imagen1','$imagen2')";
  } elseif ($_FILES['photo1']['name'] != null) {
    //verifico si se cargo la 1er imagen
    $imagen1 = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
    $queryInsert = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen1,imagen2) VALUES ('','$tipo_prenda','$marca','$talle','$precio','$imagen1','')";
  } elseif ($_FILES['photo2']['name'] != null) {
    //verifico si se cargo la 2da imagen
    $imagen2 = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
    $queryInsert = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen1,imagen2) VALUES ('','$tipo_prenda','$marca','$talle','$precio','','$imagen2')";
  } else {
    //creo la consulta para el caso que no se haya cargada ninguna imagen
    $queryInsert = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen1,imagen2) VALUES ('','$tipo_prenda','$marca','$talle','$precio','','')";
  }

  //se ejecuta la consulta pero encerrandola dentro de un try catch por si ocurre algun error
  try {
    $resultado = $mysqli->query($queryInsert);
    include("./products.php");
    echo '<script>
          document.getElementById("successAdd").style.display = "block"
          </script>';
    //si se ejecuta correctamente la consulta se vuelve a cargar la pagina con un mensaje de éxito
  } catch (Exception $e) {
    echo $e->getMessage(), "\n";
    include("./products.php");
    echo '<script>
          document.getElementById("errorAdd").style.display = "block"
          </script>';
    //si falla al ejecutar la consulta se vuelve a cargar la pagina con un mensaje de ERROR
  }
  //se elimina la variable add_clothes
  unset($_POST['add_clothes']);
}

// ---------------- Modifica una nueva prenda ----------------
if (isset($_POST['update_clothes'])) {
  $id3 = $_POST['clothes_id'];
  $tipo_prenda = $_POST['typeClothes'];
  $marca = $_POST['brandClothes'];
  $talle = $_POST['sizeClothes'];
  $precio = $_POST['priceClothes'];
  //verifico si las variables estan vacias, si es asi usuario no cargo ninguna foto
  if ($_FILES['upd_photo1']['name'] != null && $_FILES['upd_photo2']['name'] != null) {
    $imagen1 = addslashes(file_get_contents($_FILES['upd_photo1']['tmp_name']));
    $imagen2 = addslashes(file_get_contents($_FILES['upd_photo2']['tmp_name']));
    $queryUpdate = "UPDATE ropa SET tipo_de_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen1='$imagen1', imagen2='$imagen2' WHERE id=$id3";
  } elseif ($_FILES['upd_photo1']['name'] != null) {
    //verifico si se cargo la 1er imagen
    $imagen1 = addslashes(file_get_contents($_FILES['upd_photo1']['tmp_name']));
    $queryUpdate = "UPDATE ropa SET tipo_de_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen1='$imagen1' WHERE id=$id3";
  } elseif ($_FILES['upd_photo2']['name'] != null) {
    //verifico si se cargo la 2da imagen
    $imagen2 = addslashes(file_get_contents($_FILES['upd_photo2']['tmp_name']));
    $queryUpdate = "UPDATE ropa SET tipo_de_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen2='$imagen2' WHERE id=$id3";
  } else {
    //creo la consulta para el caso que no se haya cargada ninguna imagen
    $queryUpdate = "UPDATE ropa SET tipo_de_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio' WHERE id=$id3";
  }
  //se ejecuta la consulta pero encerrandola dentro de un try catch por si ocurre algun error
  try {
    $resultado = $mysqli->query($queryUpdate);
    include("./products.php");
    echo '<script>
          document.getElementById("successUpdate").style.display = "block"
          </script>';
    //si se ejecuta correctamente la consulta se vuelve a cargar la pagina con un mensaje de éxito
  } catch (Exception $e) {
    echo $e->getMessage(), "\n";
    include("products.php");
    echo '<script>
          document.getElementById("errorUpdate").style.display = "block"
          </script>';
    //si falla al ejecutar la consulta se vuelve a cargar la pagina con un mensaje de ERROR
  }
  //se elimina la variable update_clothes
  unset($_POST['update_clothes']);
}

// ---------------- Elimina la prenda elegida ----------------
if (isset($_POST['delete_clothes'])) {
  $id2 = $_POST['clothes_id'];
  $queryDelete = "DELETE FROM ropa WHERE id=$id2";
  //se ejecuta la consulta pero encerrandola dentro de un try catch por si ocurre algun error
  try {
    $datos = $mysqli->query($queryDelete);
    include("products.php");
    echo '<script>
    document.getElementById("successDelete").style.display = "block"
    </script>';
    //si se ejecuta correctamente la consulta se vuelve a cargar la pagina con un mensaje de éxito
  } catch (Exception $e) {
    echo $e->getMessage(), "\n";
    include("products.php");
    echo '<script>
    document.getElementById("errorDelete").style.display = "block"
    </script>';
    //si falla al ejecutar la consulta se vuelve a cargar la pagina con un mensaje de ERROR
  }
  //se elimina la variable delete_clothes
  unset($_POST['delete_clothes']);
}
