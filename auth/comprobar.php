<?php

//Fichero que se encarga de recibir los datos del 
// formulario y llamar al login

// 1. Recoger las variables del formulario
$user = $_POST['user'];
$pass = $_POST['pass'];
$valid = 1;

// 2. Importar la clase Database
require_once('../admin/Database.php');

//$pass = password_hash($pass, PASSWORD_DEFAULT);
// 3. Llamar a la funcion login de la clase Database
$resultado = Database::login($user, $pass);

if ($resultado == null) {

    $valido = 0;
    header('Location: ../inicio-sesion/inicio.php?valido=' . $valido);
} else {
    if ($resultado['rol_id'] == 1) {
        session_start();
        $_SESSION['user'] = $resultado;
        header('Location: ../admin/admin.php?user=".$valid');
    } else if ($resultado['rol_id'] == 2) {
        session_start();
        $_SESSION['user'] = $resultado;

        header('Location: ../index.php');
    } else {
        header('Location: ../inicio-sesion/inicio.php?user=".$valid');
    }
}
