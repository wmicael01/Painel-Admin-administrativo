<?php
require_once("classes/usuario_login.php");
require_once("controller/rotas.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $usuario = new UsuarioLogin();
  $array = array(
   'email' => $_POST['email'],
   'senha' => $_POST['senha']
  );

  $usuario->setEmail($array['email']);
  $usuario->setSenha($array['senha']);


  if ($usuario->getVerificaUsuario()) {

    $dados_usuarios = array(
      'id' => $usuario->getId(),
      'nome' => $usuario->getNome(),
      'email' => $usuario->getEmail()
    );
  
    $_SESSION['usuario'] = $dados_usuarios;
   
   header('location:painel');
  }

}
  


  