		<?php require_once('includes/header.php'); ?>

		<?php 
			if(!isset($_POST['busqueda'])) {
			 	header('Location: index.php');
			 } 
		?>

		<?php require_once('includes/lateral.php'); ?>

		<!-- CONTENIDO PRINCIPAL -->
		<div id="principal">
			<h1>Busqueda: <?php echo $_POST['busqueda'] ?></h1>

			<?php 
				$entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);
				if(!empty($entradas)):
					while($entrada = mysqli_fetch_assoc($entradas)):
			?>
				<article class="entrada">
					<a href="detalle-entrada.php?id=<?php echo $entrada['id']; ?>">
						<h2><?php echo $entrada['titulo']; ?></h2>
						<span class="fecha"><?php echo $entrada['categoria'] . ' | ' . $entrada['fecha']; ?></span>
						<p>
							<?php echo substr($entrada['descripcion'], 0, 180)."..." ?>
						</p>
					</a>
				</article>
			<?php
				endwhile;
				else:
			?>
				<div class="alerta alerta-error">No hay entradas en está categoria</div>
			<?php 
				endif;
			?>

		</div> <!-- Fin principal -->
		
<?php require_once('includes/footer.php'); ?>