<?php

	session_start();

	if (isset($_SESSION['tipo'])) {
		$tipo = $_SESSION['tipo'];
	}
	else{
		$tipo = "tipo indefinido";
	}

?>