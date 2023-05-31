<?php
    //echo 'Hemos recogido el valor del id:'. $_GET['id'];

    //1. Recoger el id de la url. Ver si existe y en tal caso recogerlo
    $id = $_GET['id'];
    $tabla = $_GET['tabla'];
    //2. Importar la clase Database.php
    require_once('Database.php');
    //3. Invocar la funcion delete de la clase Database.php
    Database::delete($id, $tabla);

    //4. Retornar al index.php
    header('Location: admin.php');
?>