<?php 
	include ('connectionCustomer.php');

	$t_id = $_GET['t_id'];

	$query = mysqli_query($link, "DELETE FROM trolley WHERE t_id = '$t_id'");

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Deleted');
    window.location.href='index.php';
    </SCRIPT>");
?>