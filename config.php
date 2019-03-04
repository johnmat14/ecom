<?php
  require_once "database.php";
  //inicia a sessão
  session_start();
  //obtem conexão
  $dblink = Database::getConnection();
?>