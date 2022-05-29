<?php 

	// Conexión
	
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'blog_master';

	$db = mysqli_connect($server, $username, $password, $database);

	mysqli_query($db, "SET NAMES 'utf8'");

	if($db->connect_error){
        echo $db->connect_error;
    }

    // Iniciar la sesión

    if(!isset($_SESSION)){
		session_start();
	}
?>