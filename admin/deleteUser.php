<?php

	include ('connectionAdmin.php');

	$id = $_GET['id'];

	$query = mysqli_query($link, "SELECT * FROM users WHERE id = '$id'");

	$row = mysqli_fetch_array($query);

	$type = $row['type'];

	//echo $type;

	if ($type == 'seller')
	{
		$username = $row['username'];
		$query = mysqli_query($link, "SELECT * FROM seller WHERE s_username = '$username'");
		$row = mysqli_fetch_array($query);
		$s_id = $row['s_id'];

		$query = mysqli_query($link, "DELETE FROM seller WHERE s_id = '$s_id'");

		$query = mysqli_query($link, "SELECT * FROM product WHERE s_id = '$s_id'");
		
		$p_id = array();
		$i = 0;

		while($row = mysqli_fetch_array($query))
		{
			$p_id[$i] = $row['p_id'];
			//echo $p_id[$i];

			$query = mysqli_query($link, "DELETE FROM orderproduct WHERE p_id = '$p_id[$i]'");
			$query = mysqli_query($link, "DELETE FROM trolley WHERE p_id = '$p_id[$i]'");
			$i = $i + 1;
		}

	}

	$query = mysqli_query($link, "DELETE FROM users WHERE id = '$id'");

	echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('User and all asoosciated data is deleted');
	    	window.location.href='customerAccount.php';
	   		</SCRIPT>");
?>