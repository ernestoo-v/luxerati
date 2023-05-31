<?php

//Fichero que se encarga de recibir los datos del 
// formulario y llamar al login

// 1. Recoger las variables del formulario
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$valid = 1;

// 2. Importar la clase Database
require_once('../admin/Database.php');

// 3. Llamar a la funcion login de la clase Database
$resultado = Database::register($email, $user, $pass);

//header('Location: ../index.php?valido=' . $resultado);
header('Location: ../inicio-sesion/inicio.php?valido=' . $resultado);


if ($resultado == 0) {
    $valido = 4;
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    Database::addUser($email, $user, $pass);
    header('Location: ../inicio-sesion/inicio.php?valido=' . $valido);
} else {
    $valido = 3;
    header('Location: ../inicio-sesion/inicio.php?valido=' . $valido);
}
