<?php

    $datos=[$_POST['id_coche'], $_POST['marca_coche'], $_POST['modelo_coche'], $_POST['ano_coche'], $_POST['precio_coche'], $_POST['color_coche'], $_POST['velocidad_coche'], $_POST['potencia_coche'], $_POST['consumo_coche']];
    
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::updateCoches($datos);

    //4. Retornar al index.php
    header('Location: ../admin.php');
?>