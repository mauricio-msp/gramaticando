<?php
	if(isset($_POST['btn'])):
		require_once 'Classes/DAO/conexao.php';
		
		$data['quest'] = $_POST['quest'];
		$data['dica']  = $_POST['dica'];
		$inserir = Quests::create($data);
		
		if(count($inserir) > 0):
			$data1['item1'] = $_POST['iten1'];
			$data1['item2'] = $_POST['iten2'];
			$data1['item3'] = $_POST['iten3'];
			$data1['item4'] = $_POST['iten4'];
			$data1['err1']  = $_POST['err1'];
			$data1['err2']  = $_POST['err2'];
			$data1['err3']  = $_POST['err3'];
			$data1['err4']  = $_POST['err4'];
			
			$quest = Quests::last();
			$data1['id_quest'] = $quest->id;
			
			$inserir1 = Itens::create($data1);
			
			if(count($inserir1) > 0):
				echo 'questão registrada';
			else:
				echo 'erro em inserir os items';
			endif;
		else:
			echo 'erro em inserir a questão';
		endif;
		
	endif;
?>
<form action="" method="post">
	<input type="text" placeholder="pergunta" name="quest"><br>
    <input type="text" placeholder="dica" name="dica"><br>
    <input type="text" placeholder="item correto entre 1,2,3,4" name="itemcorect"><br>
    <input type="text" placeholder="item1" name="iten1"><br>
    <input type="text" placeholder="pq iten 1 esta errado" name="err1"><br>
    <input type="text" placeholder="item2" name="iten2"><br>
    <input type="text" placeholder="pq iten 2 esta errado" name="err2"><br>
    <input type="text" placeholder="item3" name="iten3"><br>
    <input type="text" placeholder="pq iten 3 esta errado" name="err3"><br>
    <input type="text" placeholder="item4" name="iten4"><br>
    <input type="text" placeholder="pq iten 4 esta errado" name="err4"><br>
    <input type="submit" value="Enviar" name="btn">
</form>