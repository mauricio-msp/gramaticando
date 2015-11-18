<?php
	
    require '../Classes/DAO/conexao.php';
	session_start();
	
	$user = Users::find($_SESSION['user_gram']);
	$user->pontuacao = $user->pontuacao / 2;
	$user->save();
	
	echo 1;
	
