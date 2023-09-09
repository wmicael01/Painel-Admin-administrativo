<?php
require_once("models/CadastroModel.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $array = array(
    'nome'  =>   $_POST['nome'],
    'email' =>   $_POST['email'],
    'senha' =>   $_POST['senha'],
    'tipo'  =>   $_POST['tipo_usuario'],
  );

  $grava = new Cadastro($array['nome'], $array['email'], $array['senha'], $array['tipo']);

  if( $grava->getInsereDados()) {
    echo 'Cadastro realizado com sucesso';
  }else {
    echo 'Erro ao fazer o cadastro';
  }  
}