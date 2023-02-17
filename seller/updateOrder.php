<?php
	include ('connectionSeller.php');

	$o_id = $_GET['o_id'];


    $username = $_SESSION['username'];
    $query = mysqli_query($link, "SELECT * FROM seller WHERE s_username='$username'");
    $fetch = mysqli_fetch_array($query);
    $s_usname = $fetch['s_username'];
    $s_id = $fetch['s_id'];
    $query = mysqli_query($link, "SELECT * FROM product p,orderproduct o WHERE p.p_id = o.p_id AND p.s_id='$s_id' AND o.o_id = '$o_id'");
    $row = mysqli_fetch_array($query);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Order</title>
	<link rel="icon" type="image/png" href="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="style5.css">
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="../all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body bgcolor=" #bebca0" >
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
                                    <a href="product.php" data-toggle="modal" data-target="#Modal_product"><i class="fa fa-dropbox" aria-hidden="true"></i>My Product</a>  
                                    <a href="logout.php" data-toggle="modal" data-target="#Modal_logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                  </div>
                                </div>
                            </div>
                            
                                
                            
                        </div>
                    </div>
                </header>
		<!--end of nav-->

		<nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="../icons/phone.svg" alt="" width="20" height="20">
                                <div>
                                    <h5>Call US: 05-2413417</h5>
                                    <h6>E-mail : support@theurbanbites.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                            <img src="../images/3182.png" alt=""width="150" height="150">
                            </div>
                            <div class="time flex items-center">
                                <img src="../icons/clock.svg" alt="" width="20" height="20" >
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="#">My Order</a>
                            <a href="#">My Product</a>
                            
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->
    
    <div class="wrapper1">
    <div class="left">
        <img src="gogo.png" 
        alt="user" width="200">
        <h4>Urban Bites's Seller</h4>
         <p><?php echo $s_usname ?></p>
	</div>
    <div class="right">
        <div class="info">
            <h3>UPDATE ORDER</h3>
            <form method="post" id="form1">
            <div class="info_data">
					<table align="center">

				<tr>
					<th align="left">Product</th>
					<td align="left">:&nbsp<?php echo $row['p_name'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Delivery Address</th>
					<td align="left">:&nbsp<?php echo $row['o_address'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Quantity</th>
					<td align="left">:&nbsp<?php echo $row['t_quantity'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Total Price</th>
					<td align="left">:RM&nbsp<?php echo $row['o_total_price'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Status: </th>
					<td align="left">
                    <select name="o_status">
							<option value="Pending">Pending</option>
							<option value="Shipped">Shipped</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
                <tr>
					<th align="left">Tracking Number: </th>
					<td align="left">&nbsp<input type="text" id="tracking" name="tracking"></td>
				</tr>
                
		
				
			</table>
        </form>
		<div class="lower-container">
            <div>
			<button class="btn" name="submit"name="submit" type="submit" onclick="formSubmit()">Update Order</button>		
	      </div>
	</div>
  </div>
</form>

	<!--end of form-->
	</div>
		</div>	
      
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br>
   
    <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>The Urban Bites was started as an initiative that supports the local community</p>
                            <button class="btn btn-secondary">Read More</button>
                        </div>
                        <div class="box">
                            <h3>Quik Links</h3>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About us</a>
                                </li>
                                <li>
                                    <a href="product.php">Products</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="../icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="../icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            <img src="../icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright ©️ 2020 .All rights reserved by the urban bites</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>
<!-- end of footer-->
<script type="text/javascript">
	function formSubmit()
	{
		document.getElementByID("form1").submit();
	}
</script>

<?php
	if(isset($_POST['submit']))
	{
        $o_status = $_POST['o_status'];
        $tracking = $_POST['tracking'];

		if ($o_status == 'Arrived')
		{
			$query = mysqli_query($link, "UPDATE orderproduct SET o_status='$o_status' WHERE o_id='$o_id'");

			$query = mysqli_query($link, "SELECT * FROM orderproduct WHERE o_id = '$o_id'");

			$row = mysqli_fetch_array($query);

			$p_id = $row['p_id'];

			$query = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");

			$row = mysqli_fetch_array($query);

			$p_quantity_onhand = $row['p_quantity_onhand'];
			$p_quantity_sold = $row['p_quantity_sold'];

			$p_quantity_onhand = $p_quantity_onhand - 1;
			$p_quantity_sold = $p_quantity_sold + 1;

			$query = mysqli_query($link, "UPDATE product SET p_quantity_onhand = '$p_quantity_onhand', p_quantity_sold = '$p_quantity_sold' WHERE p_id = '$p_id'");

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Update Successfully');
	    	window.location.href='orderList.php';
	   		</SCRIPT>");

		}

		else
		{
			$query = mysqli_query($link, "UPDATE orderproduct SET o_status='$o_status', tracking='$tracking' WHERE o_id='$o_id'");

			echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Update Successfully');
	    	window.location.href='orderList.php';
	   		</SCRIPT>");

		}


	}
?> 