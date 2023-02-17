<?php 
	include 'connectionIndex.php';

  if(isset($_SESSION['name']) && isset($_SESSION['password']))
  {
    session_destroy();
  }
?>

<html lang="en">
<title>login</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css2/style3.css">
    
 
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
                                <img src="./icons/edit.svg" alt="">
                                <a href="login.php">Admin</a>
							</div>
							<span class="divider">|</span>
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
                            <a href="#">Reservation</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->

 <form method="post" action="loginAction.php">
<div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Username</span>
        <input type="username" name="username">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit"  name="submit" type="submit">Sign In</button>
      <a href="registerCustomer.php" style="text-decoration:none">
      <p class="forgot-pass">Sign Up Here</p>

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
          <h2>Welcome to Soru Station !</h2>
          <p>Just sign in. We've missed you!</p>
        </div>
  </div>
</div>
   



<!-- end of form -->
<footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>The Soru Station was started as an initiative that supports the local community</p>
                            <button class="btn1 btn-secondary">Read More</button>
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
                        Copyright © 2020 .All rights reserved by The Soru Station</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>

<!--end of footer-->
</body>
</html>

    