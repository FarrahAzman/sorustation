<?php 
	include 'connectionIndex.php';
	$query = mysqli_query($link, "SELECT * FROM product WHERE p_name != '' ORDER BY RAND()");
?>

<!DOCTYPE html>
<html lang="en">
<title>The Soru Station</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css2/style.css">
    
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

    <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome flex items-center">
                            
                        </div>
                        <h1>Eat Big <span>Eat Cheap!</span></h1>
                        <p>The Soru Station is the luxury restaurant for foodie lover. We provides freshly ingredient, naturally grilled , delicious food, delivered to your table.
                        and also creates unforgettable experiences through a  platter of our foods.</p>
                        <div>
                            <a href="about.php" style="text-decoration:none"><button class="btn btn-primary">Read More</button></a>
                      
                            <a href="product.php" style="text-decoration:none"><button class="btn btn-secondary">Shop Now</button></a>
                
                        </div>
                        <div class="hero-image">
                            <img src="images/sotong.png" width="520" height="720" loading="lazy" alt="Burger" class="w-100 hero-img">
                        </div>
                    </div>
                </header>
        <!--end of header-->

        <section class="top-products">
			<div class="container">
			  <h1 class="section-heading">Top products</h1>
			     <div class="slider">
								<button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
								<button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
					<div class="food-slider">
									<?php
										while ($row = mysqli_fetch_array($query))
										{
									?>
								<div class="food-card magic-shadow-sm">
									<div class="product-image flex items-center justify-center">
										<?php $picture =  $row['p_image']; ?>
										<?php
											echo "<img src='seller/prodimg/$picture'>";
										?>
									</div>
									<hr>
									<div>
										<h2 class="text-center"><?php echo "<p><b>".($row['p_name'])."</b><br/>";?></h2>
											<div class="stars flex justify-center items-center">
											    <img src="./icons/start-filled.svg" alt="">
											    <img src="./icons/start-filled.svg" alt="">
												<img src="./icons/start-filled.svg" alt="">
											    <img src="./icons/star-grey.svg" alt="">
												<img src="./icons/star-grey.svg" alt="">
											</div>										
												<div class="price text-center">
												<?php echo "Price: RM" . ($row['p_price'])."<br/>";?>
                                                    </div>	
                                                        <a href="purchase.php?p_id=<?php echo $row['p_id']; ?>">
														   <div class="flex justify-center"> 
                                                              <button>
                                                                 <img src="./icons/cart-2.svg" >
                                                                 <a href="purchase.php?p_id=<?php echo $row['p_id']; ?>" style="text-decoration:none">
                                                                    <span>Add to cart</span>
																</button>
														    </div></a>
									       </div>
							         </div>
							<?php } ?>
				        </div>	   
			        </div>
                </div>
                             <div class="text-center btn-wrapper">
                             <a href="product.php" style="text-decoration:none">
                            <button class="btn btn-secondary">View More</button>
                        </div>
        </section>
        
    <!--end of section top products--->

    <section class="about-ub">
                    <div class="container">
                        <h1 class="section-heading">About Soru Station</h1>
                        <div class="about-ub-wrap flex">
                            <div class="flex-1">
                                <img src="images/ub.png" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>Our Humble Beginning</h2>
                                <p>The Soru Station comes from humble beginning of a food truck serving Bandar Sri Permaisuri area. We then expanded to a food court, serving almost 20,000 patrons per month. 
                                After planning for a year, we opened a new branch in Kota Damansara to serve even more customers after a very good demand at our food booth.</p>
                                    <a href="about.php" style="text-decoration:none">
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
    <!--end of section about-->

    <section class="big-deal">
                    <div class="container">
                        <h1 class="section-heading text-pure">Big Deals of the Week</h1>
                        <div class="timer">
                            <div>
                                <span>02</span>
                                <span>Days</span>
                            </div>
                            <div>
                                <span>24</span>
                                <span>Hours</span>
                            </div>
                            <div>
                                <span>55</span>
                                <span>Minutes</span>
                            </div>
                            <div>
                                <span>58</span>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end of section big deals-->

            <section class="subscribe">
                    <div class="container flex items-center">
                        <div>
                            <img src="icons/1.png" alt="">
                        </div>
                        <div>
                            <h1>Subscribe to your newsletter</h1>
                            <p>Subscribe our newsletter to receive the latest news and exclusive offer every week</p>
                            <div class="input-wrap">
                                <input type="email" placeholder="email@thesorustation.com">
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </section>
       <!-- end of newsletter-->
                <section class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="./icons/phone-2.svg" alt="">
                                    <div>
                                        <span>Call us:</span>
                                        <span>010-554 7701</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/bag-2.svg" alt="">
                                    <div>
                                        <span>E-mail:</span>
                                        <span>support@thesorustation.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/clock-2.svg" alt="">
                                    <div>
                                        <span>Working Hours:</span>
                                        <span>Mon - Sun (8:00pm - 11:00pm)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://maps.google.com/maps?q=sorustation,%20shah%20alam%20seksyen%2013&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"
                    
                            width="150%" height="150%" frameborder="0" style="border:0;" allowfullscreen="yes"></iframe>
                    </div>
                </section>

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

z


                
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>

    

  
