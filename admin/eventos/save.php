<?php

    //1. Recoger todos los elementos del formulario

    $datos=[$_POST['nombre_evento'], $_POST['fecha_evento'], $_POST['descripcion_evento'], $_POST['href_evento']];
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::saveEventos($datos);

    //4. Retornar al index.php
    header('Location:../admin.php');

?>