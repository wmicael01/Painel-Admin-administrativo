<?php

include("models/listaUsuariosModel.php");
$info_usuario = new Informacoes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Formulário de Cadastro</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Ambiente - Bem vindo</title>
</head>

<body>
  <?php
  if (isset($_SESSION['usuario'])) {
    echo 'Bem-vindo! ' . $_SESSION['usuario']['nome'];
  }
  ?>

  <table style="width: 60%;" class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Perfil</th>
        <th scope="col">Cadastro</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($info_usuario->getDadosUsuarios() as $info) { ?>
        <tr>
          <th scope="row"><?= $info['id'] ?></th>
          <td><?= $info['nome'] ?></td>
          <td><?= $info['email'] ?></td>
          <td><?= $info['perfil'] ?></td>
          <td><?= date('d/m/Y' , strtotime($info['data_cadastro'])) ?></td>

        </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
</body>
</html>
