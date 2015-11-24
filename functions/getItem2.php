<?php
	
	require_once '../Classes/DAO/conexao.php';
	
	$item = Itens::find("all", array("conditions"=>array("id_quest",$_POST['id'])));
	$item = $item[0];
	
	echo $item->item2;
	
?>