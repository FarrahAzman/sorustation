<?php

include ('connectionAdmin.php');

	$r_id = $_GET['r_id'];

	$username = $_SESSION['username'];
	$query1 = mysqli_query($link, "SELECT r_id FROM reservation WHERE r_username='$username'");
	$fetch = mysqli_fetch_array($query1);
	

	$query = mysqli_query($link, "SELECT * FROM reservation r WHERE r.r_id='$r_id' AND r_status != 'Confirmed' AND r.r_id = '$r_id'");
    $r_status = "Confirmed";
    $query = mysqli_query($link, "UPDATE reservation SET r_status='$r_status' WHERE r_id='$r_id'");

    $query = mysqli_query($link, "SELECT * FROM reservation WHERE r_id = '$r_id'");
    $row = mysqli_fetch_array($query);

    

    

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Update Successfully');
    window.location.href='orderList.php';
       </SCRIPT>");

?>