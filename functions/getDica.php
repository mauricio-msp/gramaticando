<?php
	
	require_once '../Classes/DAO/conexao.php';
	
	$quest = Quests::find($_POST['id']);
	
	echo $quest->dica;
	
?>