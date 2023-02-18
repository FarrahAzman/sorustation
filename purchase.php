<?php 

	include 'connectionIndex.php';

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
    <title>The Soru Station</title>
    <script src="../all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css2/style.css">
    
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

<div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="#"><img src="./icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="./icons/twitter.svg" alt=""></a>
                            <a href="#"><img src="./icons/google.svg" alt=""></a>
                            <a href="#"><img src="./icons/instagram.svg" alt=""></a>
                            <a href="#"><img src="./icons/search.svg" alt=""></a>
                        </div>
                        <div class="auth flex items-center">
						
                            <div>
                                <img src="./icons/user-icon.svg" alt="">
                                <a href="login.php">Log in</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="./icons/edit.svg" alt="">
                                <a href="registerCustomer.php">Register Now</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="./icons/cart.svg" alt="">
                                <a href="login.php">0 Items - (RM 0.00)</a>
                            </div>
                        </div>
                    </div>
                </header>

    <!-- end of hdr-->
    <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="./icons/phone.svg" alt="" width="20" height="20">
                                <div>
                                    <h5>Call US: 010-554 7701</h5>
                                    <h6>E-mail : support@thesorustation.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                            <img src="images/logo.png" alt=""width="250" height="250">
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="" width="20" height="20" >
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sun (8:00pm - 11:00pm)</h6>
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
						echo "<img src='seller/prodimg/$picture'>";
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
		
            <td><button class="button" name="submit" type="submit" onclick="error()">Add to Cart</button></td>
				
			</tr>
		</table><br><br>

					<br><br><br><br>
	</div>

					
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
                                            <img src="icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="icons/google.svg" alt="">
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
<script type="text/javascript">
	function error()
	{
		window.location.href = 'login.php';
	}
</script>