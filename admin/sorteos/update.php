<?php

    $datos=[$_POST['id_sorteos'], $_POST['nombre_sorteo'], $_POST['descripcion_sorteo'], $_POST['fecha_fin_sorteo']];
    
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::updateSorteos($datos);

    //4. Retornar al index.php
    header('Location: ../admin.php');
?>