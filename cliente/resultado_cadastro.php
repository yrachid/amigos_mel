<?php
  if (empty($_POST)) {
    header("Location: /mel/cliente/index.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de amigos da Mel!</title>

    <!--  PHP -->
     <?php require_once '../servidor/cadastro_amigo.php'; ?>

    <!--  Fontes -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>

    <!--  Estilos -->
    <link rel="stylesheet" href="/mel/cliente/css/principal.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/mel/cliente/css/resultado-cadastro.css" media="screen" title="no title" charset="utf-8">

  </head>
  <body>

    <header>
      <h1><?php echo $titulo; ?></h1>
      <h3><?php echo $subtitulo; ?></h3>
    </header>

    <main>

      <ul class="error-list">
        <?php if(!empty($erros)){ ?>
          <?php foreach ($erros as $erro => $mensagem) { ?>
                  <li class="error-message"> <?php echo $mensagem; ?> </li>
          <?php } ?>
        <?php } ?>
      </ul>

      <a class="link-button" href="/mel/cliente/index.php"> < voltar ao cadastro</a>

    </main>
  </body>
</html>
