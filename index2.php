<?php
  require_once("pega_dados.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Entrar</h1>
  <form action="" method="POST">
    <fieldset>
      <label>Email</label>
      <input type="email" name="email" id="email">
      <br>
      <label for="">senha</label>
      <input type="password" name="senha" id="senha">
      <br>
      <input type="submit" value="enviar">
      <a href="cadastro">Não tem cadastro ?</a>
    </fieldset>
  </form>
</body>
</html>