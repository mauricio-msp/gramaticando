<?php
	
	session_start();
	
	$valor = $_POST['val'];
	
	if($_SESSION['money'] >= $valor):
		$_SESSION['money'] = $_SESSION['money'] - $valor;
		echo 1;
	else:
		echo 2;
	endif;
?>