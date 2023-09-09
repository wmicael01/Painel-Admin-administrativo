<?php

include("conexao.php");

class Cadastro extends Conexao{

  private $nome;
  private $email;
  private $senha;
  private $tipo;


  public function __construct(&$nome, $email, $senha, $tipo)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->tipo = $tipo;
  }

  public function getInsereDados() {
    $conexao = new Conexao();

    $sql = "INSERT INTO tipo_usuario (nome, email, senha, perfil)
    VALUES (:nome, :email, :senha, :tipo)";

    $insere = $conexao->getBanco()->prepare($sql);
    $insere->bindParam(":nome",  $this->getNome());
    $insere->bindParam(":email", $this->getEmail());
    $insere->bindParam(":senha", $this->getSenha());
    $insere->bindParam(":tipo",  $this->getTipo());
    $insere->execute();

  }

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getSenha(){
    return $this->senha;
  }

  public function setSenha($senha){
    $this->senha = $senha;
  }

  public function getTipo(){
    return $this->tipo;
  }

  public function setTipo($tipo){
    $this->tipo = $tipo;
  }

} 

  

  