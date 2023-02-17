<?php 
include 'connectionIndex.php';
if (!isset($_SESSION['isLoggedIn'])) {
    echo '<script>alert("You need to login first.")</script>';
    echo '<script>window.location="login.php"</script>';
    }
?>

<?php 
	include 'connectionCustomer.php';
   
?>

<html lang="en">
<title>About us</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../css/styleRegisterCustomer.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    
    
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
                            <a href="about.php">Our Story</a>
                            <a href="product.php">Menu</a>
                            <a href="reservation.php">Reservation</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->

    <form method="post">
    <div class="cont">
    <div class="form sign-in">
      <h2>Make a Reservation</h2>
      <label>
        <span>FullName</span>
        <input type="text" name="fullName" size="50" required="on"  value="<?php echo $_SESSION['c_fullName'];?>">
      </label>
      <label>
        <span>Gender</span>
        <input type="radio" name="gender" value="Male" required="on">Male
		<input type="radio" name="gender" value="Female">Female
     </label>
     <label>
        <span>Date of Birth</span>
        <input type="date" name="DOB" required="on">
      </label>
      <div class="form-group">
      <label>
        <span>Time</span>
        <input type="time" name="time" required="on">
      </label>
      </div>
      <label>
        <span>Telephone Number</span>
        <input type="text" name="telephone" size="20" required="on">
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" size="38" required="on">
      </label>
      <label>
        <span>Address</span>
        <textarea rows="5" cols="39" name="address" required="on"></textarea>
      </label>
      <label>
        <span>Username</span>
        <input type="text" name="username" required="on">
      </label>
      
      <button class="submit" name="submit" type="submit">Choose a Table</button>
	</form>
  
    <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>
</form>
<div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Booking </h2>
          <h2>Your Table Now!</h2>
          <p>Sign up if you're our new customer!</p>
        </div>
  </div>
</div>
<?php

	include ('connectionRegister.php');

	if(isset($_POST['submit']))
	{
		$c_phone = $_POST['telephone'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$address = $_POST['address'];
		$DOB = $_POST['DOB'];
		$gender = $_POST['gender'];
		$fullName = $_POST['fullName'];

		if ($password == $password2)
		{
			$query = mysqli_query($link, "SELECT * FROM customer WHERE c_email='$email'");

			if (mysqli_num_rows($query)==0)
			{
				$query = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");

				if (mysqli_num_rows($query)==0)
				{
					$query = mysqli_query($link,"INSERT INTO customer(c_username, c_address, c_email, c_fullName, c_gender, c_DOB, c_phone) VALUES('$username', '$address', '$email','$fullName','$gender','$DOB', '$c_phone')");
					$query = mysqli_query($link, "INSERT INTO users(username, password, type) VALUES('$username', '$password', 'customer')");

					

					echo ("<SCRIPT LANGUAGE='JavaScript'>
						    window.alert('Registration Succesfull, You will be redirect to login page');
						    window.location.href='login.php';
						    </SCRIPT>");
				}

				else
				{
					echo "<script>alert('Username already taken');</script>";
				}
				
			}

			else
			{
				echo "<script>alert('Email already taken');</script>";
			}
		}

		else
		{
			echo "<script>alert('Password mismatch');</script>";
		}
	}

?>
<!--end of form-->
                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>Our Story</h3>
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
                                    <a href="about.php">Our Story</a>
                                </li>
                                <li>
                                    <a href="product.php">Menu</a>
                                </li>
                                <li>
                                    <a href="#">Reservation</a>
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
                        Copyright © 2020 .All rights reserved by the urban bites</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>




                
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>

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