<?php
	
	session_start();
	
	require_once '../Classes/DAO/conexao.php';
	
	$user = Users::find($_SESSION['user_gram']);
	
	$status = $_POST['status'];
	
	if($status == 'acerto'):
		$_SESSION['money'] = $_SESSION['money'] + 5;
		$user->pontuacao = $user->pontuacao + 10;
		$user->save();
	endif;
	
	if($status == 'erro'):
		$user->pontuacao = $user->pontuacao;
		$user->save();
	endif;
	
	echo $user->pontuacao;
	
?>