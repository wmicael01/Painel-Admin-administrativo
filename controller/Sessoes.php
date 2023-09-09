<?php

include('controller/rotas.php');

class Sessoes extends Rotas{
  
  public static function destroiSessao()
  {
    session_destroy();
    self::login();
  }
}