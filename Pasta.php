<?php 
	include 'connectionIndex.php';
    
    $queryT = mysqli_query($link, "SELECT * FROM product WHERE p_name != '' AND p_quantity_onhand != 0 AND p_type = 'Traditional Snacks'");
   
    
?>
<!DOCTYPE html>
<html lang="en">
<title>Products</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Urban Bites</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css2/styleProduct.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
</head>


<body bgcolor=" #bebca0" >

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
                                <a href="registerSeller.php">Become A Seller</a>
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
                                    <h5>Call US: 05-2413417</h5>
                                    <h6>E-mail : support@theurbanbites.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                            <img src="images/3182.png" alt=""width="150" height="150">
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="" width="20" height="20" >
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="index.php">Home</a>
                            <a href="about.php">About us</a>
                            <a href="groupmate.html">Our Teams</a>
                            <a href="product.php">Products</a>
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
                    <a href="TraditionalSnacks.php">
                        <img src="images/feature_1.png">
                    </a>
                </div>
                <span>Traditional Snacks</span>
            </li>
            <!--box-2--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="FruitSnacks.php">
                        <img src="images/feature_2.png">
                    </a>
                </div>
                <span>Fruit Snacks</span>
            </li>
            <!--box-3--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="HealthySnacks.php">
                        <img src="images/feauture_3.png">
                    </a>
                </div>
                <span>Healthy Snacks</span>
            </li>
            <!--box-4--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Chocojar.php">
                        <img src="images/feature_4.png">
                    </a>
                </div>
                <span>Chocojar</span>
            </li>
            <!--box-5--------------------->
            <li class="item">
                <div class="feature-box">
                    <a href="Beverage.php">
                        <img src="images/feature_5.png">
                    </a>
                </div>
                <span>Beverage</span>
            </li>
              <!--box-6--------------------->
              <li class="item">
                <div class="feature-box">
                    <a href="Others.php">
                        <img src="images/feature_7.png">
                    </a>
                </div>
                <span>Others</span>
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
                while( $row = mysqli_fetch_array($queryT))
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
											echo"<img src='seller/prodimg/$picture'>";
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
                        Copyright ©️ 2020 .All rights reserved by the urban bites</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>
</html>