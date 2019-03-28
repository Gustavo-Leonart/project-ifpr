<?php
  if(!isset($_SESSION)){ session_start();}
  session_destroy();
  if(isset($_GET['valida'])){
    $valida = $_GET['valida'];
    echo $login ='<script type="text/javascript">
              window.alert("Você precisa estar Logado!");
              javascript:window.location="index.php"
      </script>';
    header("Location:index.php?valida=$valida?$login"); exit;
  }
 header("Location:index.php"); exit;
?>
