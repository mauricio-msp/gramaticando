<?php
	
	require_once '../Classes/DAO/conexao.php';
	
	$quest = Quests::find($_POST['id']);
	$item  = $_POST['iten'];
	
	
	if($quest->itemcorect == $item):
		echo 1;
	else:
		$itens = Itens::find("all", array("conditions"=>array("id_quest = ?", $_POST['id'])));
		$itens = $itens[0];
		
		if($item == 1){
			echo $itens->err1;
		}else if($item == 2){
			echo $itens->err2;
		}else if($item == 3){
			echo $itens->err3;
		}else if($item == 4){
			echo $itens->err4;
		}
		
		session_start();
		var_dump($_SESSION['rand']);
		
	endif;
	
?>