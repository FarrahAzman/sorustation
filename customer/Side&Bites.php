<?php 
	include 'connectionCustomer.php';
    
    $queryCC = mysqli_query($link, "SELECT * FROM product WHERE p_name != '' AND p_type = 'Side&Bites'");
   
    
?>
<!DOCTYPE html>
<html lang="en">
<title>Products</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../css2/styleProduct.css">
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
                            <img src="../images/logo.png" alt=""width="150" height="150">
                            </div>
                            <div class="time flex items-center">
                                <img src="../icons/clock.svg" alt="" width="20" height="20" >
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
     <!--product-categories-slider---------------------->
     <ul id="autoWidth" class="container" class="cs-hidden">
            <!--box-1--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Pasta.php">
                        <img src="../images/pasta bolognese.jpg">
                    </a>
                </div>
                <span>Pasta</span>
            </li>
            <!--box-2--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Platter.php">
                        <img src="../images/Big Platter.jpg">
                    </a>
                </div>
                <span>Platter</span>
            </li>
            <!--box-3--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="MixGrill.php">
                        <img src="../images/Asian Fusion.jpg">
                    </a>
                </div>
                <span>Mix Grill</span>
            </li>
            <!--box-4--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Side&Bites.php">
                        <img src="../images/Onion Ring.jpg">
                    </a>
                </div>
                <span>Side & Bites</span>
            </li>
            <!--box-5--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Beverage.php">
                        <img src="../images/root beer.jpg">
                    </a>
                </div>
                <span>Beverage</span>
            </li>
             
            
            
          </ul>
    <!--end of product categories-->
    <div class = "products">
             <h1 class = "lg-title">Special Snacks With Offers</h1>
                <p class = "text-light">Enjoy our snacks at lowest price</p> 
             
            <div class = "container1">
            <?php echo "<table>";
             
              $i=0;
              ?>
                <?php 
                while( $row = mysqli_fetch_array($queryCC))
                {
                 ?>
                 <?php if($i==4){
                      echo '<tr>';
                 }?>
               
                <div class = "product-items">
                    <?php
                       echo "<td>";					
					?>
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img" align="center">
                            <?php $picture =  $row['p_image']; ?>
										<?php
											echo"<img src='../seller/prodimg/$picture'>";
										?>
                            </div>
                            <div class = "product-btns">
                            <a href="purchase.php?p_id=<?php echo $row['p_id']; ?>">
                                <button type = "button" class = "btn-cart"> add to cart
                                    <span><i class = "fas fa-plus"></i></span>
                                </button></a>
                                <a href="purchase.php?p_id=<?php echo $row['p_id']; ?>">
                                <button type = "button" class = "btn-buy">
                                    <span><i class = "fas fa-shopping-cart"></i></span>
                                </button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title"><?php echo $row['p_type'];?></h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name"><?php echo $row['p_name'];?></a>
                            <p class = "">
                            <p class = "product-price"><?php echo "RM" . ($row['p_price'])."<br/>";?>
                        </div>
                    </div>
                    <?php echo "</td>" ?>
                 </div>
                 <?php if($i>6)
                 {  $i=3;
                   echo "</tr>";};
                   $i++;?>
              <?php } ?>
              <?php echo '</table>' ?>
            </div>
        </div>

     
<!-- end of section all products-->
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