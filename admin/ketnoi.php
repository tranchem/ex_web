<?php
	$host = "Localhost";
	$user = "root";
	$pass = "";
	$database = "popeyes";

	$connection = new mysqli($host, $user, $pass, $database);
	mysqli_set_charset($connection,"UTF8");
?>