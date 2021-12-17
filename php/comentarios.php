<?php

	$servername = "localhost";
	$username = "root";
	$password = "web1";

	$conn = mysqli_connect($servername, $username, $password, 'projetoweb1');
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}


	$nome = $_GET["nome"];
	$com = $_GET["comentario"];

	$sql= "SELECT id FROM `users` WHERE nome = '$nome'";

	$result=mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$id = $row["id"];

	$sql = "INSERT INTO comentarios(comentario, id_responsavel, id_pagina) VALUES ('$com',$id,1)";
	mysqli_query($conn, $sql);
	echo $nome;
	header('Location: ' . "http://localhost/website/projeto1.php?id=1");
?>
