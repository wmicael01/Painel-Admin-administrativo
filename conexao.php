<?php

class Conexao {
  private $conexao = null; 
  private $host = "localhost"; 
  private $banco = "usuarios"; 
  private $user = "root"; 
  private $pass = ""; 


  public function getBanco() {
   
    try {
      $this->conexao = new PDO("mysql:host=".$this->host.";dbname=".$this->banco, $this->user, $this->pass);
      
    } catch (\Throwable $th) {
      echo "Erro na conexão: " . $th->getMessage();
    }
  
    return $this->conexao;
  }

}

