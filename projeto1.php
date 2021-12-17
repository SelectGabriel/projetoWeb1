<?php
   require "php/paginas.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Review Daggerfall</title>
   <meta charset="UTF-8">
   <link type="text/css" rel="stylesheet" href="css/estilo_paginas.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/scripts.js"></script>

   	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<div class="navbar">
		<a class="active" href="index.php">Pagina Inicial</a>
		<a href="cadastro.php">Faça seu cadastro!</a>
		<a class="login" href="login_de_acesso.php">Login</a>
	</div>

	<div class="sidenav">
		<a href="projeto1.php?id=1">Análise Daggerfall</a>
		<a href="projeto1.php?id=2">DOOM</a>
	</div>

	<div class="main">
	   <div id="ingredientes">
	   <h1>
	   <?php
	   	echo $titulo;
	   ?>
	   </h1>
	   <?php
	   	echo $imagem;
	   ?>
	   <br>
	   <h2>
	   	<?php
	    		echo $nota;
	    	?>
	   <h2>
	   <br>
	    	<?php
	    		echo $video;
	    	?>

		</div>
	    <div id="analise">

	    	<h2>SOBRE O JOGO!</h2>

	    	<?php
	    		echo $paragrafo;
	    	?>
	
	    </div>
		<div id="comment">
			<h3>Gostou do jogo? Deixe um comentario!!</h3>
	  		<br>
		   <form onsubmit="return verificaCampos()" action = "php/comentarios.php" id="form" name="form" method="get">
	        <label for="comentario">nome</label> 
	        <input type="text" name="nome" value=''>
	        <label for="comentario">Comentário</label> 
	        <input type="text" name="comentario" value=''>
	        <input type="submit" value="Confirmar">
	      </form>
		</div>

	<textarea rows="4" cols="10" >
			<?php
	    		echo $nome;
	    	?>
		</textarea>

		<textarea rows="4" cols="50" >
			<?php
	    		echo $comentario;
	    	?>
		</textarea>

	</div>
</body>
</html>
