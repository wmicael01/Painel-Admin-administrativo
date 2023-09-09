<?php

include("conexao.php");

class Informacoes {
  private $table = 'tipo_usuario';
  private $array;

  public  function getDadosUsuarios(): array {

    $conexao = new Conexao();
    $sql = "SELECT * FROM $this->table";
    $data = $conexao->getBanco()->prepare($sql);
    $data->execute();


    if ($data->rowCount() > 0 ) {
      $this->array = $data->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $this->array;
  }

}