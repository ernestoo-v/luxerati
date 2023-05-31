<?php

    $datos=[$_POST['id_usuario'], $_POST['nombre_usuario'], $_POST['email_usuario'], $_POST['contraseña_usuario'], $_POST['rol_usuario']];
    
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::updateUsuarios($datos);

    //4. Retornar al index.php
    header('Location: ../admin.php');
?>