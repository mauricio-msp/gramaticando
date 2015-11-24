<?php
	
	session_start();
	
	require_once '../Classes/DAO/conexao.php';
		
	$quest = Quests::find($_POST['id']);
	
	echo $quest->quest;
	
?>