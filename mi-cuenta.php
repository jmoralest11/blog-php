<?php require_once('includes/redireccion.php'); ?>

<?php require_once('includes/header.php'); ?>

<?php require_once('includes/lateral.php'); ?>

<!-- CONTENIDO PRINCIPAL -->
		<div id="principal">
			<h1>Mis datos</h1>
			<!-- Mostrar errores -->

			<?php if(isset($_SESSION['completado'])): ?>
				<div class="alerta alerta-exito"><?php echo $_SESSION['completado']; ?></div>
			<?php elseif(isset($_SESSION['errores']['general'])): ?>
				<?php echo $_SESSION['errores']['general'] ?>
			<?php endif; ?>

			<form action="actualizar-usuario.php" method="POST">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" value="<?php echo $_SESSION['usuario']['nombre'] ?>">

				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>

				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" value="<?php echo $_SESSION['usuario']['apellidos'] ?>">

				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ?>

				<label for="email">Email</label>
				<input type="email" name="email" value="<?php echo $_SESSION['usuario']['email'] ?>">

				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>

				<input type="submit" value="Actualizar">
			</form>

			<?php borrarErrores(); ?>

		</div> <!-- Fin principal -->

<?php require_once('includes/footer.php'); ?>