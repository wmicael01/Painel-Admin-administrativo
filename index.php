<?php
  include('rota.php');
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Ambiente</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <?php include('nav.php') ?>
   
    <?php
      switch ($acao) {
        case 'home':
          echo 'rota home';
        break;
        case 'login':
          if (isset($_SESSION['usuario'])) {
            session_destroy();
          }
          $rota::login();
        break;
        case 'painel':
          $rota::painel();
        break;
        case 'sair':
          $rota::destroiSessao();
        break;
        default:
          $rota::paginaNaoEncontrada();
        break;
      }
    ?>

  </body>
</html>