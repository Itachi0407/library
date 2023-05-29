<?php
	error_reporting(0);(E_ALL^E_NOTICE)	;
	session_start();
	
	if(empty($_SESSION['type']))
		header("Location: ..");
	
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: ../member/home.php");
?>