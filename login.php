<?php 

@$userAuth = $_POST['user_auth'];
@$passAuth = $_POST['password_auth'];

if (trim($userAuth) != "" && trim($passAuth) != "")//Aqui compruebo que los datos introducidos no estén vacios
{
	$datosUsuario = $databaseLogin->comprobarLogin($userAuth, $passAuth);

	if ($datosUsuario['error'] == '1')
	{
		$error = "Usuario o contraseña incorrecta";
	}
	else
	{
		$_SESSION['user'] = $userAuth;
	}
}
else
{
	$error = "Todos los campos son obligatorios";
}



?>