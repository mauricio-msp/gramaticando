<?php

$id = $_POST['id'];

session_start();

$id = ver($id);

function ver($id){
	$cont  = 0;
	if(isset($_SESSION['rand'][0])):
		foreach($_SESSION['rand'] as $rand):
			if($rand === $id):
				$id = rand(1, 20);
				$cont++;
			endif;
		endforeach;
	endif;
	if($cont > 0):
		$id = ver($id);
	endif;
	
	$_SESSION['rand'] = $id;
	
	echo $id;
}

?>
