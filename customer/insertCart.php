<?php
	
	include ('connectionCustomer.php');

	$username = $_SESSION['username'];
	$query = mysqli_query($link, "SELECT c_id FROM customer WHERE c_username='$username'");
	$fetch = mysqli_fetch_array($query);
	
	$c_id = $fetch['c_id'];

	$p_id = $_GET['p_id'];
	$t_quantity = $_POST['quantity'];

	//echo $p_id;

	//echo $c_id . $p_id . $t_quantity;
	//$o_name = $_POST['o_name'];
	//$o_phone = $_POST['o_phone'];
	//$o_address = $_POST['o_address'];

	//echo $c_id;

	$query = mysqli_query($link, "INSERT INTO trolley(p_id,c_id,t_quantity) VALUES('$p_id','$c_id','$t_quantity')");

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added to Cart');
    window.location.href='index.php';
    </SCRIPT>");

?>