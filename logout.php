<?php
	session_start();
	unset($SESSION['usuario']);
	session_destroy();
	header("location:index.php");
?>