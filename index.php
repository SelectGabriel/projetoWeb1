<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class="logo">
<img src="images/logo.png" alt="logo do site">
</div>

<div class="navbar">
  <a class="active" href="index.php">Pagina Inicial</a>
  <a href="cadastro.php">Faça seu cadastro!</a>
  <a class="login" href="login_de_acesso.php">Login</a>
</div>
<div class="sidenav">
  <a href="projeto1.php?id=1">Análise Daggerfall</a>
  <a href="projeto1.php?id=2">DOOM</a>
</div>



<div class= "main">
  <div id="content">

    <h2 class="subtitle">Confira nossas análises:</h2>
      <div class="fotos">
        <div class="imagem1">
          <img src="images/doom.jpg" alt="Caixa arte do jogo DOOM"><br>
          <button class="button" type="button"><a href="projeto1.php?id=2">DOOM</a></button>
        </div>
        <div class="imagem3">
          <img src="images/tes2.jpg" alt="Caixa arte do jogo Daggerfall"><br>
          <button class="button" type="button"><a href="projeto1.php?id=1">The Elder Scrolls 2:Daggerfall</a></button>
        </div>
        <br>
      </div>
  </div>
</div>
</body>
</html>
