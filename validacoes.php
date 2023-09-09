<?php

function mensagensParaCadaAcao($existe_cadastro_campos_vazios) {
  if ($existe_cadastro_campos_vazios === "cadastro") {
    echo "<div class='alert alert-primary text-center' role='alert'>
    Ja existe esse cadastro</div>";
    
  } else if ($existe_cadastro_campos_vazios === "vazio") {
    echo "<div class='alert alert-primary text-center' role='alert'>
    Os campos precisam ser preenchidos! </div>";
  } 
}
