<?php

	include ('connectionAdmin.php');
    $username = $_SESSION['username'];
	$p_id = $_GET['p_id'];

    $query = mysqli_query($link, "SELECT * FROM seller WHERE s_username = '$username'");
	$query1 = mysqli_query($link, "SELECT * FROM product WHERE p_id='$p_id'");
	$query2 = mysqli_query($link, "SELECT p_type FROM product GROUP BY p_type");

	$row = mysqli_fetch_array($query);
    $row1 = mysqli_fetch_array($query1);
	$row2 = mysqli_fetch_array($query2);

	$num = mysqli_num_rows($query2);
	//echo $num;

	$p_name = $row1['p_name'];
	$p_type = $row1['p_type'];
	$p_price = $row1['p_price'];
	$p_description = $row1['p_description'];
	


	if (isset($_POST['submit']))
	{
		$p_name = $_POST['p_name'];
		$p_type = $_POST['p_type'];
		$p_price = $_POST['p_price'];
		$p_description = $_POST['p_description'];


		$query = mysqli_query($link, "UPDATE product SET p_name = '$p_name', p_type = '$p_type', p_price = '$p_price', p_description = '$p_description' WHERE p_id = '$p_id'");

		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Update Sucessfully');
	    	window.location.href='index.php';
	   		</SCRIPT>");
	}

	

?>

<!DOCTYPE html>
<html lang="en">
<title>Edit Item</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Items</title>
    <script src="../all.js"></script>
	<link rel="icon" type="image/png" href="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../css2/style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
</head>
<style>
/Side Navigation Cart/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color:#ffffff;
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
                                <a href="">Admin</a>
                                  <div class="dropdownn-content">
                                    <a href="profile.php" data-toggle="modal" data-target="#Modal_profile"><i class="fa fa-users" aria-hidden="true" ></i>My Profile</a>
                                    <a href="orderList.php" data-toggle="modal" data-target="#Modal_order"><i class="fa fa-first-order" aria-hidden="true"></i>My Order</a> 
									<a href="index.php" data-toggle="modal" data-target="#Modal_product"><i class="fa fa-product-hunt" aria-hidden="true"></i>My Product</a> 
                                    <a href="logout.php" data-toggle="modal" data-target="#Modal_logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                  </div>
                                </div>
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
                            <img src="../images/logo.png" alt=""width="150" height="150">
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
                            <a href="orderList.php">Order</a>
                            <a href="index.php">Menu</a>
                            <a href="booking.php">Booking</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->
    <div class="wrapper1">
    <div class="left">
        <img src="gogo.png" 
        alt="user" width="200">
        <h4>Soru Station's Seller</h4>
         <p><?php echo $row['s_username'];  ?></p>
	</div>
    <div class="right">
        <div class="info">
            <h3>EDIT  ITEM</h3>
		<form method="post" enctype="multipart/form-data">
			<table border="0" align="center">

				<tr>
					<th align="left">Product Name: </th>
					<td align="left"><input type="text" name="p_name" value="<?php echo $p_name ?>"></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>

				<tr>
					<th align="left">Product Type: </th>
					<td align="left">
						<?php 
						 	echo "<select name='p_type'>";

						 	$query2 = mysqli_query($link, "SELECT p_type FROM product GROUP BY p_type");
							while($row2 = mysqli_fetch_array($query2))
							{
								$p_typeDB = $row2['p_type'];

								if ($p_type==$p_typeDB)
								{
									echo "<option value='$p_typeDB' selected>$p_typeDB";
								}

								else
								{
									echo "<option value='$p_typeDB'>$p_typeDB";
								}
								//echo $p_typeDB;
								//echo $p_typeDB;
							}

							echo "</select>";
						?>
					</td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>

				
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>

				<tr>
					<th align="left">Product Price</th>
					<td align="left"><input type="double" name="p_price" value="<?php echo $p_price ?>"></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>

				
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>

				<tr>
					<th align="left">Product Description</th>
					<td align="left"><textarea cols="50" rows="5" name="p_description" ><?php echo $p_description ?></textarea></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				
				</table>
		<div class="lower-container">
            <div>
			<button class="btn" name="submit"name="submit" type="submit" value="Submit">Submit</button>
				
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
	 <br><br><br><br><br><br><br><br>
	   <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>The Soru Station was started as an initiative that supports the local community</p>
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
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            <img src="./icons/instagram.svg" alt="">
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
                        Copyright ©️ 2020 .All rights reserved by the soru station</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>
</html>