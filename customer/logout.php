<?php
	include ('connectionCustomer.php');

	session_destroy();

	header('Location: ../login.php');
?>