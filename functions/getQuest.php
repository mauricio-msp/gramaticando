<?php
	
	session_start();
	
	require_once '../Classes/DAO/conexao.php';
		
	$quest = Quests::find($_POST['id']);
	
	$_SESSION['cont']--;
	echo $quest->quest;
	
?>