<?php
	
	session_start();
	
	require_once 'Classes/DAO/conexao.php';
	
	$user = Users::find($_SESSION['user']);
	
	function acerto(){
		$user->pontuacao = $user->pontuacao + 10;
		$user->save();
	}
	
	function erro(){
		$user->pontuacao = $user->pontuacao + (10/4);
		$user->save();
	}
	
?>