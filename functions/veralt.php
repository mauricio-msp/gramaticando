<?php
	
	require_once '../Classes/DAO/conexao.php';
	
	session_start();
	
	$quest = Quests::find($_POST['id']);
	$id    = $_POST['id'];
	$item  = $_POST['iten'];
	
	
	if($quest->itemcorect == $item):
		echo 1;
	else:
		
		echo 2;
		
		$itens = Itens::find("all", array("conditions"=>array("id_quest = ?", $_POST['id'])));
		$itens = $itens[0];
				
	endif;
	
	$data['id_user']     = $_SESSION['user_gram'];
	$data['id_quest']    = $id;
	$data['item_select'] = $item;
	
	Reports::create($data);
	
?>