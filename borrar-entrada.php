<?php 
	require_once 'includes/conexion.php';

	if(isset($_SESSION['usuario']) && isset($_GET['id'])){
		$entrada_id = $_GET['id'];
		$usuario_id = $_SESSION['usuario']['id'];
		$sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
		$bprrar = mysqli_query($db, $sql);

		/*echo mysqli_error($db);
		die(); // Para la ejecución*/
	}

	header('Location: index.php');
?>