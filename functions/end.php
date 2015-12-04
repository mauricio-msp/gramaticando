<?php
	
    session_start();
	
	if($_SESSION['cont'] == 1):
		echo 1;
	else:
		echo 2;
	endif;
    
?>