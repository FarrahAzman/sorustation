<?php

	include ('connectionCustomer.php');

	//echo "Hello " . $_SESSION['username'];

	$username = $_SESSION['username'];

	$query = mysqli_query($link, "SELECT * FROM customer WHERE c_username = '$username'");

	$row = mysqli_fetch_array($query);
        
?>

<html lang="en">
<title>Reservation</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Soru Station</title>
    <script src="all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../css2/styleReservation.css" />
    <!-- <link rel="stylesheet" href="../css/styleReservation.css"> -->

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

.pic {
    display: block;
    height: 450px;
    width: 600px;
    background: url('../images/floor.png') no-repeat;
    position: relative;
}

.chbox1, .chbox2, .chbox3, .chbox4, .chbox5, .chbox6, .chbox7, .chbox8, .chbox9, .chbox10, .chbox11, .chbox12 {
    position: absolute;
    opacity: 0.5;
    
    
}

.chbox1 {
    top: 62px;
    left: -201px;
}

.chbox2 {
    top: 165px;
    left: -227px;
}

.chbox6 {
    top: 20px;
    left: 201px;
}

.chbox9 {
    top: 90px;
    left: 37px;
}

.chbox10 {
    top: 179px;
    left: 37px;
}

.chbox11 {
    top: 101px;
    left: 135px;
}

.chbox12 {
    top: 185px;
    left: 135px;
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
      <h2>Choose a Date and Time</h2>
      <div></div>
      <label>
        <span>FullName</span>
        <input type="text" name="fullName" size="50" required="on"  value="<?php echo $row['c_fullName'];  ?>">
      </label>
      <label>
        <span>Gender</span>
        <td align="left">:&nbsp<?php echo $row['c_gender'];  ?></td>
     </label>
     <label>
        <span>Date of Reservation</span>
        <input type="date" name="DOR" required="on" >
      </label>
      
      
      <label>
        <span>Time : 8pm-11pm</span><br>
        <select name="reserveTime"  required>
			<option value="8:00 PM">8:00 PM</option>
            <option value="8:30 PM">8:30 PM</option>
			<option value="9:00 PM">9:00 PM</option>
			<option value="9:30 PM">9:30 PM</option>
			<option value="10:00 PM">10:00 PM</option>
			<option value="10:30 PM">10:30 PM</option>
			<option value="11:00 PM">11:00 PM</option>
		</select>
      </label>
      
      
      <label>
        <span>Telephone Number</span>
        <input type="text" name="telephone" size="20" required="on" value="<?php echo $row['c_phone'];  ?>">
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" size="38" required="on" value="<?php echo $row['c_email'];  ?>">
      </label>
      <label>
        <span>Address</span>
        <input type="address" name="address" required="on" value="<?php echo $row['c_address'];  ?>">
      </label>
      <label>
        <span>Username</span>
        <input type="text" name="username" required="on" value="<?php echo $row['c_username'];  ?>">
      </label>
      
    
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Booking </h2>
          <h2>Your Table Now!</h2>
          <p>Sign up if you're our new customer!</p>
        </div>
    </div>
</div>
</div>
</div>

<!--end of form-->
     
        <br>
        <div class="container flex justify-between"> 
            <div class="contact flex items-center">
                <div class="center">
                    <div class='pic'>
                    <input class='chbox1' type="checkbox" name="table" value="1">
                    <input class='chbox2' type="checkbox" name="table" value="2">
                    <input class='chbox6' type="checkbox" name="table" value="6">
                    <input class='chbox9' type="checkbox" name="table" value="9">
                    <input class='chbox10' type="checkbox" name="table" value="10">
                    <input class='chbox11' type="checkbox" name="table" value="11">
                    <input class='chbox12' type="checkbox" name="table" value="12"> 
                    </div>
                </div>
            </div> 
         </div>
    

         <button class="submit" name="submit" type="submit">Submit</button>
      </form>

      <?php
      include ('connectionReservation.php');



      if(isset($_POST['submit']))
      {
        $fullName = $_POST['fullName'];
        $DOR = $_POST['DOR'];
        $r_time = $_POST['reserveTime'];
        $r_phone = $_POST['telephone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $table_id = $_POST ['table'];

        $query = mysqli_query($link, "SELECT * FROM reservation WHERE DOR='$DOR' AND r_time='$r_time' AND table_id='$table_id'");

        if(mysqli_num_rows($query) <= 0) {
            $query = mysqli_query($link,"INSERT INTO reservation (`r_id`, `r_fullName`,`c_id`, `DOR`, `r_time`,`r_phone`, `r_email`, `r_address`,`r_username`, `table_id`) VALUES (NULL, '$fullName','$c_id','$DOR', '$r_time', '$r_phone','$email','$address', '$username', '$table_id')");
            echo "1";
            if($query) {
                echo "<script>alert('Your Reservation Success');location.href='order.php'</script>";
            }
            else {
                echo "<script>alert('Your Reservation Fail, Make New Reservation ');</script>";
            }
        }
        else {
            echo "<script>alert('Your Reservation Fail, Make New Reservation ');</script>";
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
                                    <a href="reservation.php">Reservation</a>
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
                        Copyright © 2020 .All rights reserved by the soru station</a>.
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
<script type="text/javascript">
    window.onload=function(){//from ww  w . j  a  va2s. c  o  m
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("DOR")[0].setAttribute('min', today);
    }

</script> 

<script>
// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>

<!-- <script>
    var markedCheckbox = document.getElementsByName('table').required;
    console.log(markedCheckbox)
</script> -->