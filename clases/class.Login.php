<?php
include_once("class.Database.php");

class Login
{

	var $conn;

	function Login()
	{
		$this->database = new Database();
		$this->conn = new mysqli($this->database->host, $this->database->user, $this->database->password, $this->database->database);
		$this->conn->set_charset("utf8");
	}

	//Función que hace un select en la base de datos para ver si existe ese usuario, en caso afirmativo devuelve un array con datos del usuario
	//de lo contrario un array con un campo error = 1
	function comprobarLogin($userAuth, $passAuth)
	{
		$passMd5 = md5($passAuth);
		$query = "SELECT * FROM tabal_usuarios WHERE email = '" . $userAuth . "' AND password = '" . $passMd5 . "';";
		$result = $this->conn->query($query);
		$arrayUsuario = array();
		if ($result->num_rows > 0)//Si ese usuario existe en la base de datos
		{
			$row = $result->fetch_assoc();
			$arrayUsuario['nombre'] = $row['nombre'];
			$arrayUsuario['apellido'] = $row['nombre'];
			$arrayUsuario['email'] = $userAuth;
			$arrayUsuario['error'] = '0';
		}
		else
		{
			$arrayUsuario['error'] = '1';
		}

		return $arrayUsuario;
	}

}