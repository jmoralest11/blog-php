		<?php require_once('includes/header.php'); ?>

		<?php 
			$categoria_actual = conseguirCategoria($db, $_GET['id']);

			if (!isset($categoria_actual['id'])) {
			 	header('Location: index.php');
			 } 

		?>

		<?php require_once('includes/lateral.php'); ?>

		<!-- CONTENIDO PRINCIPAL -->
		<div id="principal">
			<h1>Entradas de <?php echo $categoria_actual['nombre'] ?></h1>

			<?php 
				$entradas = conseguirEntradas($db, null, $_GET['id']); 
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