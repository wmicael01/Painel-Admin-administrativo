<?php
  require_once("processa.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Formulário de Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <br>
    <form class="col g-3 container-formulario container d-flex flex-column justifyc-content-center align-items-center" method="POST" action="">
      <fieldset>  
        <h1>Cadastro</h1>
      </fieldset>
        <br>
        <div class="col-md-6">
          <!-- <label for="inputEmail4" class="form-label">Nome</label> -->
          <input type="nome" name="nome" class="form-control" id="inputEmail4" placeholder="Digite o nome">
        </div><br>
        <div class="col-md-6">
          <!-- <label for="inputEmail4" class="form-label">Email</label> -->
          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Digite o email">
        </div><br>
        <div class="col-md-6">
          <!-- <label for="inputPassword4" class="form-label">Senha</label> -->
          <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Digite a senha">
        </div>
        
        <br>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Tipo usuario</label>
          <select id="inputState" name="tipo_usuario" class="form-select">
            <option selected="">Selecione</option>
            <option value="Admin">Admin</option>
            <option value="Comum">Comum</option>
          </select>
        </div>
        <br>
        <div class="col-md-6 d-flex justify-content-around  
          flex-row-reverse">
          <button style="margin: 0 60px;" type="submit" class="btn btn-primary">Enviar</button>
          <a href="index.php" class="btn btn-primary">Voltar para o login</a>
        </div>

    </form>
    
    <!-- End Example Code -->
  </body>
</html>