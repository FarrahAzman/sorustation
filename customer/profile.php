<?php

	include ('connectionCustomer.php');

	//echo "Hello " . $_SESSION['username'];

	$username = $_SESSION['username'];

	$query = mysqli_query($link, "SELECT * FROM customer WHERE c_username = '$username'");

	$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="icon" type="image/png" href="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="../css2/style1.css">
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="../all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
</style>
<body bgcolor=" #8779b1" >
<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <h2>My Cart</h2>
	  <?php include ('cart.php'); ?>
	</div>
	<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "500px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	</script>
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
		<!--end of nav-->

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
                            <a href="index.php">Home</a>
                            <a href="about.php">Our Story</a>
                            <a href="product.php">Menu</a>
                            <a href="reservation.php">Reservation</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->

	<div class="wrapper">
    <div class="left">
        <img src="gogo.png" 
        alt="user" width="200">
        <h4>Soru Station's Customer</h4>
         <p><?php echo $row['c_username'];  ?></p>
	</div>
	
    <div class="right">
        <div class="info">
            <h3>PROFILE</h3>
            <div class="info_data">
					<table align="center">

				<tr>
					<th align="left">Full Name</th>
					<td align="left">:&nbsp<?php echo $row['c_fullName'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Gender</th>
					<td align="left">:&nbsp<?php echo $row['c_gender'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Date of Birth</th>
					<td align="left">:&nbsp<?php echo $row['c_DOB'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">E-Mail</th>
					<td align="left">:&nbsp<?php echo $row['c_email'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Number Phone</th>
					<td align="left">:&nbsp<?php echo $row['c_phone'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Address</th>
					<td align="left">:&nbsp<?php echo $row['c_address'];  ?></textarea></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				<tr>
					<th align="left">Username</th>
					<td align="left">:&nbsp<?php echo $row['c_username'];  ?></td>
				</tr>
				<tr>
					<td><br></td>
					<td><br></td>
				</tr>
				
			</table>
      <br><br>
			<div class="card-container">
         <div class="lower-container">
            <div>
			<button class="btn" name="submit" onclick="window.location.href='profileEdit.php?c_id=<?php echo $row['c_id']; ?>'" type="submit">Edit profile</button></td>
				
			   
            </div>
         </div>
	  </div>
			
		

            </div>
		</div>	
      
    </div>
</div>
	  
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
        </div>
    </div>




                
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>

<script type="text/javascript">
	function goURL()
	{
		//window.write("banana");
		window.location.href = 'profileEdit.php?c_id=<?php echo $row['id']; ?>'
	}
</script>