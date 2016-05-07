<?php 
session_start();

//Inicialización de clases
include_once('/clases/class.Login.php');
$databaseLogin = new Login();

if (isset($_GET['login_usuario']) && $_GET['login_usuario'] == 'yes')//Si se loguea
{
	include('login.php');
	$fileToShow = "principal.php";
}

if (!isset($_GET) || !isset($_SESSION['user']))
{
	$fileToShow = "inicio.php";
}

$templateHead = "template_head.php";
$templateFoot = "template_foot.php";








include($templateHead);
include($fileToShow);
include($templateFoot);

?>