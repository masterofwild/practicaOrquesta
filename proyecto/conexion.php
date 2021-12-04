<?php
	$mysqli = new mysqli('dbmysql', 'root', 'root', "empresa");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}		
