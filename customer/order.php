<?php

	include ('connectionCustomer.php');

	$username = $_SESSION['username'];
	$query = mysqli_query($link, "SELECT c_id FROM customer WHERE c_username='$username'");
    
	$fetch = mysqli_fetch_array($query);
	

	//echo $c_id;
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Soru Station</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css2/style.css">
<style>
    body {
        color: #8779b1;
		background: #8779b1;

		@font-face {
    font-family:"Raleway-regular";
    src:url(../fonts/Raleway-Regular.ttf)
  }
  @font-face {
    font-family:"Raleway-medium";
    src:url(../fonts/Raleway-Medium.ttf)
  }
  @font-face {
    font-family:"Raleway-bold";
    src:url(../fonts/Raleway-Bold.ttf)
  }
  @font-face {
    font-family:"Raleway-extrabold";
    src:url(../fonts/Raleway-ExtraBold.ttf)
  }
  @font-face {
    font-family:"Raleway-semibold";
    src:url(../fonts/Raleway-SemiBold.ttf)
  }
  @font-face {
    font-family:"Raleway-black";
    src:url(../fonts/Raleway-Black.ttf)
  }
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-wrapper .btn {
		float: right;
		color: #333;
    	background-color: #fff;
		border-radius: 3px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-wrapper .btn:hover {
        color: #333;
		background: #f2f2f2;
	}
	.table-wrapper .btn.btn-primary {
		color: #fff;
		background: #03A9F4;
	}
	.table-wrapper .btn.btn-primary:hover {
		background: #03a3e7;
	}
	.table-title .btn {		
		font-size: 13px;
		border: none;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
	.table-title {
		color: #fff;
		background: #4b5366;		
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.show-entries select.form-control {        
        width: 60px;
		margin: 0 5px;
	}
	.table-filter .filter-group {
        float: right;
		margin-left: 15px;
    }
	.table-filter input, .table-filter select {
		height: 34px;
		border-radius: 3px;
		border-color: #ddd;
        box-shadow: none;
	}
	.table-filter {
		padding: 5px 0 15px;
		border-bottom: 1px solid #e9e9e9;
		margin-bottom: 5px;
	}
	.table-filter .btn {
		height: 34px;
	}
	.table-filter label {
		font-weight: normal;
		margin-left: 10px;
	}
	.table-filter select, .table-filter input {
		display: inline-block;
		margin-left: 5px;
	}
	.table-filter input {
		width: 200px;
		display: inline-block;
	}
	.filter-group select.form-control {
		width: 110px;
	}
	.filter-icon {
		float: right;
		margin-top: 7px;
	}
	.filter-icon i {
		font-size: 18px;
		opacity: 0.7;
	}	
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 80px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.view {        
		width: 30px;
		height: 30px;
		color: #2196F3;
		border: 2px solid;
		border-radius: 30px;
		text-align: center;
    }
    table.table td a.view i {
        font-size: 22px;
		margin: 2px 0 0 1px;
    }   
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	} 
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
</head>
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
		<div class="container flex justify-between ">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Order <b>Details</b></h2>
					</div>
					<br><br>
                </div>
            </div>
			<div class="table-filter">
				<div class="row">
                    <div class="col-sm-3">
					</div>
                </div>
			</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Order ID </th>
                        <th>Table ID </th>
                        <th>Order Date</th>
                        <th>Order Details</th>
                        <th>Item Name</th>
						<th>Quantity</th>
						<th>Total Price</th>						
                        <th>Status</th>								
						<th>Action</th>
                    </tr>
                </thead>
                <?php
                
				$query = mysqli_query($link, "SELECT * FROM orderproduct WHERE c_id = '$c_id' ORDER BY FIELD(o_status, 'Pending','Arrived')");
				while ($row = mysqli_fetch_array($query))
				{
					$p_id = $row['p_id'];

                    $query2 = mysqli_query($link, "SELECT * FROM product WHERE p_id = '$p_id'");
                    

					$row2 = mysqli_fetch_array($query2);
                    $p_name = $row2['p_name'];

                    $picture =  $row2['p_image'];

					$totalPayment = $row['t_quantity']*$row2['p_price'];

			?>
                <tbody>
                    <tr>
                        <td><?php echo $row['o_id']; ?></td>
                        <td><?php echo $row['table_id']; ?></td> 
                        <td><?php echo $row['date']; ?></td> 
                        <td>
                            <?php echo $row['o_name']; ?><br>
                            <?php echo $row['o_phone']; ?><br>
                            <?php echo $row['o_address']; ?>
                        </td>
                        <td><a href="purchase.php?p_id=<?php echo $row['p_id']; ?>"><?php echo $p_name; ?></a></td>
						<td><?php echo $row['t_quantity']; ?></td>
						<td><?php echo $totalPayment; ?></td>                       
						<td><?php echo $row['o_status']; ?></td>
                        

                        <?php if($row['o_status']!='Arrived') 
                         { ?>
						<td><a href="uo.php?o_id=<?php echo $row['o_id'] ?>"><button class="button button1">Order Delivered</button></a></td>
                        <?php } ?>
                    </tr>
                </tbody>
                <?php } ?>
            </table>

        </div>
		
    </div>  
 </div>
 <!-- end of nav-->
 <div class="container flex justify-between ">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                    <h2>Booking <b>Details</b></h2>
					</div>
					<br><br>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Reserve ID </th>
                        <th>Reserve Date</th>
                        <th>Reserve Time</th>
                        <th>Reserve Details</th>
						<th>Table ID</th>						
                        <th>Status</th>						
                    </tr>
                </thead>
                <?php

                
                //$username = $_SESSION['username'];
                
                //$query = mysqli_query($link, "SELECT r_id FROM reservation WHERE r_username='$username'");
                
                
                //$fetch = mysqli_fetch_array($query);
                //echo $c_id;
	

               // $result = mysqli_query($link,"SELECT * FROM reservation" );

               $username = $_SESSION['username'];
               $query = mysqli_query($link, "SELECT c_id FROM customer WHERE c_username='$username'");
               
               $fetch = mysqli_fetch_array($query);
                ?>

                <?php
               $query = mysqli_query($link, "SELECT * FROM reservation WHERE c_id = '$c_id' ORDER BY FIELD(r_status, ' ','Confirm')");
			   while($row = mysqli_fetch_array($query))
                
				{
                    $r_id = $row['r_id'];
                    
                    
					/*$p_name = $row['p_name'];
					$t_quantity = $row['t_quantity'];
					$o_total_price = $row['o_total_price'];
					$status = $row['o_status'];*/;

			   ?>
                <tbody>
				<tr>
                <td><?php echo $row['r_id']; ?></td>
                <td><?php echo $row['DOR']; ?></td> 
                <td><?php echo $row['r_time']; ?></td> 
                <td>
                     <?php echo $row['r_fullName']; ?><br>
                    <?php echo $row['r_phone']; ?><br>
                    <?php echo $row['r_email']; ?>
                </td>
                <td><?php echo $row['table_id']; ?></td>
				<td><?php echo $row['r_status']; ?></td>
                

                <?php  
                { ?>
				
                <?php } ?>
			</tr>
                </tbody>
                <?php } ?>
            </table>
        <br><br>
        
        </div>
		
    </div>  
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
                        Copyright ©️ 2020 .All rights reserved by the soru station</a>.
                    </div>
                </footer>
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


