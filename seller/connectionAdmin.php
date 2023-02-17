<?php

	session_start();

	$link = mysqli_connect("localhost", "root", "", "sorustation") or die("Connection failed");



	if(!(isset($_SESSION['username']) && isset($_SESSION['password'])))
	{
		header("Location: http://".$_SERVER['HTTP_HOST']."/sorustation/login.php");
	}

	else
	{
		$username = $_SESSION['username'];

		$query = mysqli_query($link, "SELECT s_username FROM seller WHERE s_username = '$username'");

		if (mysqli_num_rows($query) <= 0)
		{
			header("Location: http://".$_SERVER['HTTP_HOST']."/sorustation/login.php");
		}
	}

?>