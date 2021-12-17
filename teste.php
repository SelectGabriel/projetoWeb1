<?php

	$servername = "localhost";
	$username = "root";
	$password = "web1";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, 'projetoweb1');
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

   $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$id = $query['id']; 

	$sql = "SELECT para FROM paginagames WHERE id_pagina = $id";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["para"];
	    }
	}

	mysqli_close($conn);
?>