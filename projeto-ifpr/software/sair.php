<?php
  if(!isset($_SESSION)){ session_start();}
  session_destroy();
  if(isset($_GET['valida'])){
    $valida = $_GET['valida'];
    header("Location:index.php?valida=$valida"); exit;
  }
 header("Location:index.php"); exit;
?>
