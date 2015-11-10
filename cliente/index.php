<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de amigos da Mel!</title>
    <!--  Fontes -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>

    <!--  Estilos -->
    <link rel="stylesheet" href="css/principal.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/form.css" media="screen" title="no title" charset="utf-8">

  </head>
  <body>

    <header>
      <h1>Cadastro de amigos da Mel</h1>
      <h3>Tente sua candidatura!</h3>
    </header>

    <form class="formulario-amigo" action="../servidor/cadastro_amigo.php" method="post">

      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php if(isset($_POST['nome'])) $_POST['nome']; ?>" />
      </div>

      <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="text" name="idade" value="<?php if(isset($_POST['idade'])) $_POST['idade']; ?>" />
      </div>

      <div class="submit-wrapper">
        <button class="submit-button" type="submit" name="submit">Enviar</button>
      </div>

    </form>

  </body>
</html>
