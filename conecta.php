<?php 

	set_time_limit(240);

	$host = "localhost";
	$usuario = "root";
	$senhac = "";
	$bd = "tecflix";

	$mysqli = new mysqli($host, $user, $senha, $bd);

	if ($mysqli->connect_errno) {
		echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	}

 ?>