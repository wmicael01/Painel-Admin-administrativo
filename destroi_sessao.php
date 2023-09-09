<?php
function destroi_sessao(){

  unset($_SESSION['usuario']);
  session_destroy();
  header('location:index.php');
}
