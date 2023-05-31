 <?php

   session_abort();
   session_start();
   require_once('../admin/Database.php');
   // $userid = $_GET['userid'];

   $cardid = $_GET['cardid'];

   if (isset($_SESSION['user'])) {

      Database::addFavorite('insert into 2_favoritos (id_favorito,id_coche,id_user) values  (null,' . $cardid . ',' . $_SESSION['user']['id'] . ');');
   }




   // Database::addFavorite('insert into favoritos (id_favorito,id_coche,id_user) values  (null,' . $cardid . ',' . $userid . '");');


   ?>