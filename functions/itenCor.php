<?php
	
	require_once '../Classes/DAO/conexao.php';
	
	$quest = Quests::find($_POST['id']);
	
	
	$cor = $quest->itemcorect;	
	
	$iten = Itens::find("all", array("conditions"=>array("id_quest = ?", $_POST['id'])));
	$iten = $iten[0];
	
	$cor = 'item'.$cor;
	
	echo $iten->$cor;
	
?>