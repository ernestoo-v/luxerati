<?php

    //1. Recoger todos los elementos del formulario

    $datos=[$_POST['username'], $_POST['email'], $_POST['password'], $_POST['rol_id']];
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::saveUsername($datos);

    //4. Retornar al index.php
    header('Location:../admin.php');

?>