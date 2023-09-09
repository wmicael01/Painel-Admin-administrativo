<?php
session_start();
require_once("controller/rotas.php");
$rota = new Rotas();
$rotas = $rota->getAcao();
$acao = $rotas[0];