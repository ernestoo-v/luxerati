<?php

    $datos=[$_POST['id_noticias'], $_POST['nombre_noticias'], $_POST['href_noticia']];
    
    //2. Importar la clase Database.php
    require_once('../Database.php');

    //3. Invocar la funcion save de Database llevandole los datos
    Database::updateNoticias($datos);

    //4. Retornar al index.php
    header('Location: ../admin.php');
?>