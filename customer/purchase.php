<?php 

	include ('connectionCustomer.php');

	$p_id = $_GET['p_id'];

	$query = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");

	$row = mysqli_fetch_array($query);

	$s_id = $row['s_id'];

	$query2 = mysqli_query($link, "SELECT * FROM seller WHERE s_id = '$s_id'");

	$row2 = mysqli_fetch_array($query2);

?>


<!DOCTYPE html>
<html lang="en">
<title>The Soru Station</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Urban Bites</title>
    <script src="../all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../css2/style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
</head>
<style>
/*Side Navigation Cart*/
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#searchTable{
	border: 1px solid white;
	border-radius: 5px;
	width: 700px;
	height: 100px;
	margin: auto;
	background-color: #07DAD3;
	color: white;
}

#body h4{
	font-size: 50px;
}

#body table {
	margin-left: 300px;
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
                            <a href="about.php">Our Story</a>
                            <a href="product.php">Menu</a>
                            <a href="reservation.php">Reservation</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->
	
	 
     <br><br>
	 <div id="body">
		<h4 align="center">&nbsp;&nbsp;<b><?php echo ($row['p_name']); ?></b></h4>
		<h3 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($row['p_brand']); ?></h3>
		
		<hr>

		<table border="0">
			<!--FIRST SECTION-->
			<tr>
				<td>
					<?php
						$picture =  $row['p_image'];
						echo "<img src='../seller/prodimg/$picture'>";
					?>
				</td>
				<td rowspan="3">
                <table border="0">
                         <tr>
							<td><p><b><?php echo $row['p_name']; ?></b></p></td>
						</tr>
						<tr>
							<td><p>Description :<br><b><?php echo $row['p_description']; ?></b></p></td>
						</tr>
						<tr>
                            <td><p>Price :<b><?php echo $row['p_price']; ?></b></p></td>

						<tr>
							<td><p><hr></p></td>
						</tr>
						<tr>
							<td><p>Sold by:</p></td>
						</tr>
						<tr>
							<td><a href="sellerpage.php?s_id=<?php echo $row['s_id'] ?>"><p><?php echo ($row2['s_shopname']); ?></p></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<!--FIRST SECTION-->
			<tr>
				<td><h3>Price : RM <?php echo ($row['p_price']); ?></h3></td>
			</tr>
			<tr>
				<td>
					<form method="post" id="formSearch" action="insertCart.php?p_id=<?php echo $row['p_id']; ?>">
						Quantity:&nbsp;<input type="number" name="quantity" min="1"  required="on" style="width:50px">
						<button class="buttonSearch" type="submit" onclick="formSubmit()" name="submit" value="Add to Cart">Add to Cart</button></td>			
					</form>
				</td>
				
				
			</tr>
		</table>
	</div>

           <script>
			$('input').on('keypress', function (event) {
				var regex = new RegExp("^[a-zA-Z0-9]+$");
				var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
				if (!regex.test(key)) {
				event.preventDefault();
				return false;
				}
			});
			</script>

					<br><br>

					<br><br><br><br>
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
                        Copyright ©️ 2020 .All rights reserved by the soru station</a>.
                    </div>
                </footer>
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
<script type="text/javascript">
	function error()
	{
		window.location.href = 'error.php';
	}

	function formSubmit()
	{
		document.getElementByID("formSearch").submit();
	}

</script>