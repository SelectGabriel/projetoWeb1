<?php

	$servername = "localhost";
	$username = "root";
	$password = "web1";

	$conn = mysqli_connect($servername, $username, $password, 'projetoweb1');
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id = $query['id']; 

	$sql = "SELECT comentario,id_responsavel FROM `comentarios` WHERE id = 4";
	$com = mysqli_query($conn, $sql);

	$sql = "SELECT * FROM paginagames WHERE id_pagina = $id";
	$result = mysqli_query($conn, $sql);

	$out=mysqli_fetch_assoc($com);
	$comentario=$out["comentario"];
	$id_usuario=$out["id_responsavel"];

	$sql = "SELECT nome FROM users WHERE id = $id_usuario";
	$com = mysqli_query($conn, $sql);

	$out=mysqli_fetch_assoc($com);
	$nome=$out["nome"];

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $paragrafo = $row["para"];
	        $imagem = $row["imagem"];
	        $video = $row["video"];
	        $titulo = $row["titulo"];
	        $nota = $row["nota"];
	    }
	}

	mysqli_close($conn);
?>