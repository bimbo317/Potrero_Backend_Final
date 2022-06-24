<?php
require_once './conexion.php';

if (!empty($_GET['id1'])) {
  //Extraer imagen de la BD mediante GET
  $result = $mysqli->query("SELECT imagen1 FROM ropa WHERE id = {$_GET['id1']}");
  if ($result->num_rows > 0) {
    while ($reg = mysqli_fetch_array($result)) {
      header("Content-type: image/jpg");
      echo $reg["imagen1"];
    }
  } else {
    echo 'Imagen no existe...';
  }
}

if (!empty($_GET['id2'])) {
  //Extraer imagen de la BD mediante GET
  $result = $mysqli->query("SELECT imagen2 FROM ropa WHERE id = {$_GET['id2']}");
  if ($result->num_rows > 0) {
    while ($reg = mysqli_fetch_array($result)) {
      header("Content-type: image/jpg");
      echo $reg["imagen2"];
    }
  } else {
    echo 'Imagen no existe...';
  }
}

if (!empty($_GET['namePhoto1'])) {
  //Extraer imagen de la BD mediante GET
  $result = $mysqli->query("SELECT imagen2 FROM ropa WHERE id = {$_GET['id2']}");
  if ($result->num_rows > 0) {
    while ($reg = mysqli_fetch_array($result)) {
      header("Content-type: image/jpg");
      echo $reg["imagen2"];
    }
  } else {
    echo 'Imagen no existe...';
  }
}