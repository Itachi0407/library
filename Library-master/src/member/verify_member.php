<?php
	session_start();
	error_reporting(0);(E_ALL^E_NOTICE)	;
	if(empty($_SESSION['type']))
		header("Location: ..");
	
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: ../librarian/home.php");
?>