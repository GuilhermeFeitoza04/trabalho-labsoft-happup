<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("loindex.php");
	}
	echo ("Bem vindo " . $_SESSION['usuario']);


?>