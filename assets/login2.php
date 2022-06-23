<?php
session_start();
$varsession = @$_SESSION['user'];
if ($varsession == null || $varsession = '') {
    if (isset($_POST['login'])) {
        $mail = $_POST["mail"];
        $pass = $_POST["password"];

        // 1) Conexion y selección de base de datos
        require_once('./conexion.php');

        // 2) Preparar la orden SQL

        $consulta = 'SELECT * FROM usuario';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos1 = $mysqli->query($consulta);

        while ($reg1 = mysqli_fetch_array($datos1)) {
            $usuario = $reg1['email'];
            $contra = $reg1['password'];
            if ($mail == $usuario && $pass == $contra) {
                $_SESSION['user']=$mail;
                header("location:products.php");
            }
        }
        //header("location:index.php");
        include("./login.php");
        echo '<script>
            document.getElementById("error").style.display = "block";
            </script>';
    }

    if (isset($_POST['recovery'])) {
        $mail = $_POST["mail"];
        $pass = $_POST["password"];

        // 1) Conexion y selección de base de datos
        require_once('./conexion.php');

        // 2) Preparar la orden SQL
        $consulta = 'SELECT * FROM usuario';
        // 3) Ejecutar la orden y obtenemos los registros
        $datos1 = $mysqli->query($consulta);
        $existe = false;
        $id_usuario = 0;
        while ($reg1 = mysqli_fetch_array($datos1)) {
            $usuario = $reg1['email'];
            if ($mail == $usuario) {
                $existe = true;
                $id_usuario = $reg1['id'];
            }
        }
        if ($existe == true) {
            $actualizar = "UPDATE usuario SET password = '$pass' WHERE usuario.id = $id_usuario";
            if ($mysqli->query($actualizar)) {
                include("recover.php");
                echo '<script>document.getElementById("ok").style.display = "block"</script>';
                echo '<script>document.getElementById("id_user").style.visibility = "hidden"</script>';
                echo '<script>document.getElementById("id_pass").style.visibility = "hidden"</script>';
                echo '<script>document.getElementById("form_recovery").style.display = "none"</script>';
                echo '<script>document.getElementById("form_volver").style.display = "inline"</script>';
            }
            //header("location:login.html");
        } else {
            include("recover.php");
            echo '<script>
        document.getElementById("error").style.display = "block"
        </script>';
        }
    }
} else {
    header("location:../index.php");
}
