<?php

include ('connectionCustomer.php');

	$o_id = $_GET['o_id'];

	$username = $_SESSION['username'];
	$query1 = mysqli_query($link, "SELECT c_id FROM customer WHERE c_username='$username'");
	$fetch = mysqli_fetch_array($query1);
	$c_id = $fetch['c_id'];

	$query = mysqli_query($link, "SELECT * FROM product p,orderproduct o WHERE p.p_id = o.p_id AND p.c_id='$c_id' AND o_status != 'Arrived' AND o.o_id = '$o_id'");
    $o_status = "Arrived";
    $query = mysqli_query($link, "UPDATE orderproduct SET o_status='$o_status' WHERE o_id='$o_id'");

    $query = mysqli_query($link, "SELECT * FROM orderproduct WHERE o_id = '$o_id'");
    $row = mysqli_fetch_array($query);

    $qty = $row['t_quantity'];
    $p_id = $row['p_id'];

    $query = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");

    $row = mysqli_fetch_array($query);

    $p_quantity_onhand = $row['p_quantity_onhand'];
    $p_quantity_sold = $row['p_quantity_sold'];

    $p_quantity_onhand = $p_quantity_onhand - $qty;
    $p_quantity_sold = $p_quantity_sold + $qty;

    $query = mysqli_query($link, "UPDATE product SET p_quantity_onhand = '$p_quantity_onhand', p_quantity_sold = '$p_quantity_sold' WHERE p_id = '$p_id'");

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Update Successfully');
    window.location.href='order.php';
       </SCRIPT>");

?>