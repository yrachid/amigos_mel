<?php

$erros = array();
$tudo_valido = TRUE;

if (!isset($_POST['nome']) || empty($_POST['nome'])) {
  $erros['nome'] = "O nome digitado é inválido!";
  $tudo_valido = FALSE;
}

if (!isset($_POST['idade']) || empty($_POST['idade']) || !is_numeric($_POST['idade'])) {
  $erros['idade'] = "A idade digitada é inválida!";
  $tudo_valido = FALSE;
}

if ($tudo_valido) {
  $titulo = "Cadastro realizado com sucesso!";
  $subtitulo = "Aguarde o processo seletivo.";
} else {
  $titulo = "Falha ao cadastrar!";
  $subtitulo = "Entenda porque não foi possível completar o cadastro:";
}

include '../cliente/resultado_cadastro.php';

?>
