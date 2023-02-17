<?php 
	include ('connectionSeller.php');

	$p_id = $_GET['p_id'];

	$query = mysqli_query($link, "DELETE FROM product WHERE p_id = '$p_id'");

	echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Item Deleted');
	    	window.location.href='index.php';
	   		</SCRIPT>");
?>