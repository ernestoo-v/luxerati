 <?php
    //  echo 'hola';
    //  exit();
    // session_abort();
    // session_start();
    // require_once('../admin/Database.php');
    // // $userid = $_GET['userid'];

    // $cardid = $_GET['cardid'];


    // Database::addFavorite('delete from favoritos where id_coche=' . $cardid . ');');
    // header('Location: carrito.php');

    // if (isset($_SESSION['user'])) {

    //    Database::addFavorite('insert into favoritos (id_favorito,id_coche,id_user) values  (null,' . $cardid . ',' . $_SESSION['user']['id'] . ');');
    // }

    //1. Recoger el id de la url. Ver si existe y en tal caso recogerlo
    //2. Importar la clase Database.php
    //3. Invocar la funcion delete de la clase Database.php

    //4. Retornar al index.php


    // Database::addFavorite('insert into favoritos (id_favorito,id_coche,id_user) values  (null,' . $cardid . ',' . $userid . '");');
    //echo 'Hemos recogido el valor del id:'. $_GET['id'];

    //1. Recoger el id de la url. Ver si existe y en tal caso recogerlo
    $id = $_GET['id'];
    $tabla = $_GET['tabla'];
    //2. Importar la clase Database.php
    require_once('../admin/Database.php');
    //3. Invocar la funcion delete de la clase Database.php
    Database::deleteFavorite($id, $tabla);

    //4. Retornar al index.php
    header('Location: carrito.php');

    ?>