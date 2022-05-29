		<?php require_once('includes/header.php'); ?>

		<?php require_once('includes/lateral.php'); ?>

		<!-- CONTENIDO PRINCIPAL -->
		<div id="principal">
			<h1>Últimas entradas</h1>

			<?php 
				$entradas = conseguirEntradas($db, true); 
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
				endif;
			?>

			<div id="ver-todas">
				<a href="entradas.php">Ver todas las entradas</a>
			</div>

		</div> <!-- Fin principal -->
		

<?php require_once('includes/footer.php'); ?>