<div style="width: 70%; margin: 0 auto; margin-top: 50px;border: 5px solid black;padding: 20px;">
	<form action="index.php?login_usuario=yes" method="POST">
		<div class="caja-form">
			<label>Nombre</label>
			<input type="text" name="user_auth" class="componente-form" required="">
		</div>
		<div class="caja-form">
			<label>Contraseña</label>
			<input type="password" name="password_auth" class="componente-form" required="">
		</div>
		<button class="boton" type="submit">Enviar</button>
	</form>
</div>