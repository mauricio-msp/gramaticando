<?php
	
    session_start();
	
	if($_SESSION['cont'] == 0):
		echo 1;
	else:
		echo 2;
	endif;
    
?>