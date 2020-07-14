<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "popeyes";

	$connection = new mysqli($host, $user, $pass, $database);
	mysqli_set_charset($connection, "UTF8");
	// Check connection
	if ($connection->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>