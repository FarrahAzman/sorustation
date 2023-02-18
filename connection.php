<?php

	session_start();

	$link = mysqli_connect("localhost", "admin", "adminpass", "sorustation") or die("Connection failed");


	if(!(isset($_SESSION['username']) && isset($_SESSION['password'])))
	{
		
		header("Location: http://".$_SERVER['HTTP_HOST']."/sorustation/login.php");
	}

?>