<?php

	
	$username = $_SESSION['username'];
	$query = mysqli_query($link, "SELECT * FROM customer WHERE c_username='$username'");
	$fetch = mysqli_fetch_array($query);
	$c_id = $fetch['c_id'];



	$queryTrolley = mysqli_query($link, "SELECT * FROM trolley WHERE c_id = '$c_id'");

	echo "<table border=0 cellspacing=0 id='customers'>";
	echo "<tr>";
	echo "<th>Item Name</th>";
	echo "<th>Price</th>";
	echo "<th>Quantity</th>";
	echo "<th>Total Price</th>";
	echo "</tr>";

	$totalPaymentAll = 0;


	while($rowTrolley = mysqli_fetch_array($queryTrolley))
	{
		$p_id = $rowTrolley['p_id'];


		$queryProduct = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");

		$rowProduct = mysqli_fetch_array($queryProduct);
?>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    color: white;
    background-color: #111;
}

/*#customers tr:nth-child(even){background-color: lightgrey;}*/

.button {
    border: none;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 60px;
    padding: 15px;
    color: black;
}

.button:hover a {
	color: white;
}

.button a {
	padding:0px;
	font-size:15px;
	color: black;
}

#remove, #remove a {
	color: white;
	cursor: pointer;
}
#remove:hover a {
	color: grey;
}
</style>

	<tr>
		<td><?php echo ($rowProduct['p_name']); ?></td>
		<td><?php echo ($rowProduct['p_price']); ?></td>
		<td><?php echo ($rowTrolley['t_quantity']); ?></td>
		<td>
			<?php
				$totalPayment = $rowTrolley['t_quantity']*$rowProduct['p_price'];
				echo $totalPayment;
			?>
		</td>
		<td id="remove" style="background-color:darkred" title="Remove Item"><a href="deleteCart.php?t_id=<?php echo $rowTrolley['t_id']; ?>" style="padding:0px; font-size:15px" onclick="return confirm('SURE?')">&nbsp;<b>X</b>&nbsp;</a></td>
	</tr>

	<?php
	$totalPaymentAll = $totalPaymentAll + $totalPayment; } ?>
	<tr>
		<td colspan=3></td>
		<td><?php echo "Total: RM" . $totalPaymentAll ?></td>
	</tr>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><a href="payment.php?c_id=<?php echo $c_id; ?>"><b>Checkout</b></a></button>