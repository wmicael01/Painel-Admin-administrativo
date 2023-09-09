<?php

include("conexao.php");

class UsuarioLogin extends Conexao
{

  private $id;
  private $nome;
  private $email;
  private $senha;
  private $table = "tipo_usuario";
  private $data;


  public function getVerificaUsuario(){
    $conexao = new Conexao();
    $sql = "SELECT * FROM $this->table WHERE email=:email AND senha=:senha";

    $consulta = $conexao->getBanco()->prepare($sql);
    $consulta->bindParam(":email", $this->getEmail());
    $consulta->bindParam(":senha", $this->getSenha());
    $consulta->execute();

    if ($consulta->rowCount() == 1) {
      $this->data = $consulta->fetch(PDO::FETCH_ASSOC);
    
      $this->setId($this->data['id']);
      $this->setNome($this->data['nome']);

      return true; 
    } else {
      return false; 
    }
  }
  
  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

}
