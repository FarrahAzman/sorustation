<?php 
	include 'connectionIndex.php';

  if(isset($_SESSION['name']) && isset($_SESSION['password']))
  {
    session_destroy();
  }
?>

<html lang="en">
<title>Register Customer</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Urban Bites</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css2/styleRegisterCustomer.css">
    
 
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    
</head>


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
                                <a href="#registerCustomer.php">Register Now</a>
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
      <h2>Register</h2>
      <label>
        <span>FullName</span>
        <input type="text" name="fullName" size="50" required="on">
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
      <label>
        <span>Password</span>
        <input type="password" name="password" required="on">
      </label>
      <label>
        <span>Re-type Password</span>
        <input type="password" name="password2" required="on">
      </label>
      <button class="submit" name="submit" type="submit">Submit</button>
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
          <h2>Welcome !</h2>
          <h2>New Here?</h2>
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
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                                passage.</p>
                            <button class="btn1 btn-secondary">Read More</button>
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
                        Copyright © 2020 .All rights reserved by the soru station</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>

<!--end of footer-->
</body>
</html>

    