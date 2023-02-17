<?php 

	include '../connectionIndex.php';
	$c_id = $_GET['c_id'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css2/style.css">
    
</head>
<style>

    * {
    box-sizing: border-box;
    }

    .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 10 26px;
    }

    .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    }

    .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
    }

    .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
    padding: 0 16px;
    }

    .containerx {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
    }

    input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    label {
    margin-bottom: 10px;
    display: block;
    }

    .icon-containerx {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
    }

    .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    }

    .btn:hover {
    background-color: #45a049;
    }

    a {
    color: #2196F3;
    }

    hr {
    border: 1px solid lightgrey;
    }

    span.price {
    float: right;
    color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
    }
    /*Side Navigation Cart*/
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
    .dropdownn {
  position: relative;
  display: inline-block;
}

.dropdownn-content {
  display: none;
  position: absolute;
  background-color: #838060;
  min-width: 160px;
  box-shadow: #838060;
  z-index: 1;
}

.dropdownn-content a {
  color:#fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdownn-content a:hover {background-color: #838060}

.dropdownn:hover .dropdownn-content {
  display: block;
}
    </style>

<body bgcolor=" #8779b1" >
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <h2>My Cart</h2>
	  <?php include ('cart.php'); ?>
	</div>

<div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="#"><img src="../icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="../icons/twitter.svg" alt=""></a>
                            <a href="#"><img src="../icons/google.svg" alt=""></a>
                            <a href="#"><img src="../icons/instagram.svg" alt=""></a>
                            <a href="#"><img src="../icons/search.svg" alt=""></a>
                        </div>
                        <div class="auth flex items-center">
                        <div>       
                        <div class="dropdownn">
                                <img src="../icons/user-icon.svg" alt="">
                                <a href="">User</a>
                                  <div class="dropdownn-content">
                                    <a href="profile.php" data-toggle="modal" data-target="#Modal_profile"><i class="fa fa-users" aria-hidden="true" ></i>My Profile</a>
                                    <a href="order.php" data-toggle="modal" data-target="#Modal_order"><i class="fa fa-first-order" aria-hidden="true"></i>My Order</a> 
                                    <a href="logout.php" data-toggle="modal" data-target="#Modal_logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                  </div>
                                </div>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="../icons/cart.svg" alt="">
                                <a href="javascript:void(0)" onclick="openNav()" style="cursor:pointer">(RM <?php echo ($totalPaymentAll); ?>)</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </header>

    <!-- end of hdr-->
    <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="../icons/phone.svg" alt="" width="20" height="20">
                                <div>
                                    <h5>Call US: 010-554 7701</h5>
                                    <h6>E-mail : support@thesorustation.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                            <img src="../images/logo.png" alt=""width="250" height="250">
                            </div>
                            <div class="time flex items-center">
                                <img src="../icons/clock.svg" alt="" width="20" height="20" >
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Tue - Sun (12:00pm - 10:00pm)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="index.php">Home</a>
                            <a href="about.php">About us</a>
                            <a href="product.php">Products</a>
                            <a href="reservation.php">Reservation</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->

    <div class="row">
		<div class="col-75">
			<div class="containerx">
			<form method="POST">
			
				<div class="row">
				<div class="col-50">
					<h3>Billing Address</h3>
                    <label for="table"> Table Number</label>
					<select name="table">
							<option  value="3">Table 3</option>
							<option  value="4">Table 4</option>
							<option  value="5">Table 5</option>
							<option  value="7">Table 7</option>
							<option  value="8">Table 8</option>
						</select>
					<label for="fname"><i class="fa fa-user"></i> Full Name</label>
					<input type="text" id="fname" name="fullname" placeholder="John M. Doe" required>
                    <label for="fname"><i class="fa fa-phone"></i> Phone Number</label>
					<input type="text" id="phone" name="phone" placeholder="019447786" required>
					<label for="email"><i class="fa fa-envelope"></i> Email</label>
					<input type="text" id="email" name="email" placeholder="john@example.com" required>
					<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
					<input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
				</div>
				<div class="col-50">
					<h3>Payment</h3>
					<label for="fname">Accepted Cards</label>
					<div class="icon-container">
					<i class="fa fa-cc-visa" style="color:navy;"></i>
					<i class="fa fa-cc-amex" style="color:blue;"></i>
					<i class="fa fa-cc-mastercard" style="color:red;"></i>
					<i class="fa fa-cc-discover" style="color:orange;"></i>
					</div>
					<label for="cname">Name on Card</label>
					<input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
					<label for="ccnum">Credit card number</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
					<label for="expmonth">Exp Month</label>
					<input type="text" id="expmonth" name="expmonth" placeholder="September" required>
					<div class="row">
					<div class="col-50">
						<label for="expyear">Exp Year</label>
						<input type="text" id="expyear" name="expyear" placeholder="2027"> required
					</div>
					<div class="col-50">
						<label for="cvv">CVV</label>
						<input type="text" id="cvv" name="cvv" placeholder="352" required>
					</div>
					</div>
				</div>
				
				</div>
				<label>
				<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
				</label>
				<input type="submit" name="submit" value="Submit" class="btn" />
			</form>
			</div>
		</div>

		<div class="col-25">
			<div class="containerx">
			<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
			<?php
				$username = $_SESSION['username'];
				$query = mysqli_query($link, "SELECT * FROM customer WHERE c_username='$username'");
				$fetch = mysqli_fetch_array($query);
				$c_id = $fetch['c_id'];
			
				$totalPaymentAll = 0;
			
				$queryTrolley = mysqli_query($link, "SELECT * FROM trolley WHERE c_id = '$c_id'");

			while($rowTrolley = mysqli_fetch_array($queryTrolley))
			{
				$p_id = $rowTrolley['p_id'];
		
		
				$queryProduct = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");
		
				$rowProduct = mysqli_fetch_array($queryProduct);
		?>
				<?php
					$totalPayment = $rowTrolley['t_quantity']*$rowProduct['p_price'];
				?>
			<p><?php echo ($rowProduct['p_name']); ?> &nbsp;x&nbsp;<?php echo ($rowTrolley['t_quantity']); ?> <span class="price"><?php echo ($totalPayment); ?></span> </p>
			<hr>
	
			<?php $totalPaymentAll = $totalPaymentAll + $totalPayment; } ?>

			<b><p>Total <span class="price" style="color:black" ><?php echo ($totalPaymentAll); ?></span></p></b>
	
			</div>
		</div>
    </div>
    </body>
</html>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "500px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>

<?php

	if (isset($_POST['submit']))
	{
		//$o_name = $_POST['o_name'];
		//$o_phone = $_POST['o_phone'];
		//$o_address = $_POST['o_address'];

		//echo $o_name . $o_phone . $o_address;

		$totalPaymentAll = 0;

		$queryTrolley = mysqli_query($link, "SELECT * FROM trolley WHERE c_id = '$c_id'");

		$queryCustomer = mysqli_query($link, "SELECT * FROM customer WHERE c_id = '$c_id'");


		$rowCustomer = mysqli_fetch_array($queryCustomer);

		$o_name = $_POST['fullname'];
		$o_phone = $_POST['phone'];
		$o_address = $_POST['address'];
        $table_id = $_POST['table'];
        

		while($rowTrolley = mysqli_fetch_array($queryTrolley))
		{
			$p_id = $rowTrolley['p_id'];

			$queryProduct = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");

			$rowProduct = mysqli_fetch_array($queryProduct);

			$t_quantity = $rowTrolley['t_quantity'];
			$totalPayment = $rowTrolley['t_quantity']*$rowProduct['p_price'];

			//echo $c_id . "<br>" . $p_id . "<br>" . $o_name . "<br>" . $o_phone . "<br>" . $o_address . "<br>" . $o_address . "<br>" . $t_quantity . "<br>" . $totalPayment . "<br>";



			$query = mysqli_query($link, "INSERT INTO orderproduct(c_id, p_id, table_id, o_name, o_phone, o_address, t_quantity, o_total_price, o_status) VALUES('$c_id','$p_id','$table_id','$o_name','$o_phone','$o_address','$t_quantity','$totalPayment','Pending')");
		}

		$query = mysqli_query($link, "DELETE FROM trolley WHERE c_id='$c_id'");

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Successfully Paid, Order Submitted');
	    	window.location.href='order.php';
	   		</SCRIPT>");
	}

?>