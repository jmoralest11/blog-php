<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog de VideoJuegos</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- CABECERA -->
	<header id="cabecera">
		<!-- LOGO -->
		<div id="logo">
			<a href="index.php">
				Blog de VideoJuegos
			</a>
		</div>

		<!-- MENU -->
		<nav id="menu">
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>

				<?php 
					$categorias = conseguirCategorias($db);
					if(!empty($categorias)):
				?>

				<?php while ($categoria = mysqli_fetch_assoc($categorias)): ?>
					<li>
						<a href="categoria.php?id=<?php echo $categoria['id'] ?>"><?php echo $categoria['nombre'] ?></a>
					</li>
				<?php 
					endwhile; 
					endif;
				?>

				<li>
					<a href="#">Sobre mi</a>
				</li>
				<li>
					<a href="#">Contacto</a>
				</li>
			</ul>
		</nav>

		<div class="clearfix"></div>
	</header>
	
	<div id="contenedor">