		<?php require_once('includes/header.php'); ?>

		<?php 
			$entrada_actual = conseguirEntrada($db, $_GET['id']);

			if (!isset($entrada_actual['id'])) {
			 	header('Location: index.php');
			 } 

		?>

		<?php require_once('includes/lateral.php'); ?>

		<!-- CONTENIDO PRINCIPAL -->
		<div id="principal">
			<h1><?php echo $entrada_actual['titulo']; ?></h1>
			
			<a href="categoria.php?id=<?php echo $entrada_actual['categoria_id']; ?>">
				<h2><?php echo $entrada_actual['categoria']; ?></h2>
			</a>

			<h4><?php echo $entrada_actual['fecha']; ?> | <?php echo $entrada_actual['usuario']; ?></h4>

			<p><?php echo $entrada_actual['descripcion']; ?></p>

			<br>

			<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>

				<a href="editar-entrada.php?id=<?php echo $entrada_actual['id']; ?>" class="boton boton-verde">Editar entrada</a>

				<a href="borrar-entrada.php?id=<?php echo $entrada_actual['id']; ?>" class="boton boton-azul">Eliminar entradas</a>

			<?php endif; ?>

		</div> <!-- Fin principal -->
		
<?php require_once('includes/footer.php'); ?>