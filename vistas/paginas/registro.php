<div class="d-flex justify-content-center">
	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" id="nombre" name="registroNombre">
			</div>
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-envelope"></i></span>
				</div>	
				<input type="email" class="form-control" id="email" name="registroMail">
			</div>

		</div>

		<div class="form-group">
			<label for="pwe">Contraseña:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-lock"></i></span>
				</div>	
				<input type="pasword" class="form-control" id="pwd" name="registroPass">
			</div>

		</div>

		<?php

		$registro = new ControladorFormularios();
		$registro -> ctrRegistro();

		?>
		<button type="submit" class="btn btn-outline-success btn-block">Enviar</button>
	</form>
</div>