<?php

    include 'connectionAdmin.php';
    $username = $_SESSION['username'];
    
    $result1 = $link->query("SELECT COUNT(*) FROM `users` where type='customer'");
    $cust = $result1->fetch_row();
    $result2 = $link->query("SELECT COUNT(*) FROM `users` where type='seller'");
    $seller = $result2->fetch_row();
    $result3 = $link->query("SELECT COUNT(*) FROM `users` where type='admin'");
    $admin = $result3->fetch_row();
    $result4 = $link->query("SELECT DISTINCT Count(o_id) FROM `orderproduct` ");
    $trans = $result4->fetch_row();

?>
                                    <?php
                                        $totalAmount=0;
                                        $queryX = mysqli_query($link, "SELECT * FROM seller");
                                        while($row = mysqli_fetch_array($queryX))
                                            {
                                                $s_id = $row['s_id'];
                                                 $queryY = mysqli_query($link, "SELECT * FROM product WHERE s_id = '$s_id'");
                                            
                                            $totalProduct = 0;
                                            while($row2 = mysqli_fetch_array($queryY))
                                            {
                                                $totalProduct = $totalProduct + $row2['p_quantity_sold']*$row2['p_price'];
                                            }
                                            $totalAmount= $totalAmount + $totalProduct;                         
                                            ?>
                                    <?php }  ?>
                                    

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">	
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
	
         <title>The Soru Station</title>
         <link rel="stylesheet" href="../css/style.css">
  </head>
  
<style>

body {
    position: relative;
    overflow-x:hidden;
    background: #8779b1;
    font-family: 'Roboto', sans-serif;
}

a:hover{
  color:white;
  text-decoration:none;
}

body,
html { height: 100%;}

.text-gray-600 {
    color: #858796!important;
}
.nav-link .img-profile {
    height:40px;
    width:40px;
}

.badge-counter {
    position: absolute;
    transform:scale(.7);
    transform-origin: top right;
    right:6px;
	margin-top:4px;
}


.position-relative {
    position: relative!important;
}


.card {
    margin-bottom: 24px;
	border:none;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-title {
    font-size: .875rem;
    color: #495057;
}

.card-body h1{
font-size: 1.75rem;
font-weight: 400;
    line-height: 1.2;
    color: #000;
}
.table td, .table th {
    padding: 1rem;
	font-size:14px;
	color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5{
      font-size: 16px;
	  font-weight:600;
	  color:#585858;
}


.text-gray-800 {
    color: #5a5c69!important;
	font-size: 1.75rem;
	font-weight: 400;
    line-height: 1.2;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
}


.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


.font-16 {
    font-size: 16px;
}


 .m-r-10 {
    margin-right: 10px;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}


.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
	  margin-top: -0.375rem;
}


.table td, .table th {
    padding: 1rem;
	font-size:14px;
	color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
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
                                    <a href="">Admin</a>
                                      <div class="dropdownn-content">
                            
                                        <a href="index.php" data-toggle="modal" data-target="#Modal_order"><i class="fa fa-first-order" aria-hidden="true"></i>Dashboard</a> 
                                        <a href="logout.php" data-toggle="modal" data-target="#Modal_logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
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
                            </nav>
  
                <div class="container-fluid px-lg-4">
                  <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="javascript:window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 
                        Generate Report</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Order</h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $cust[0]?></h1>
												<div class="mb-1">
                                                    <a href="customerAccount.php">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>View All</span></a>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Reservation</h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $seller[0]?></h1>
												<div class="mb-1">
                                                    <a href="sellerAccount.php">
                                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>View All</span></a>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Admin</h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $admin[0]?></h1>
												<div class="mb-1">
                                                    <a href="">
                                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>View All</span></a>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Earnings</h5>
												<h1 class="display-5 mt-1 mb-3"><?php echo $totalAmount?></h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo $trans[0]?> </span>
													<a href ="transactions.php"><span class="text-muted">Transactions</span></a>
												</div>
											</div>
										</div>
									</div>
									
									
						</div>
                    </div>


     
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Restaurant Revenue</h4>
                                        <h5 class="card-subtitle">Overview of Restaurant Performance</h5>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Fullname</th>
                                            <th class="border-top-0">Type</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">Phone Number</th>
                                            <th class="border-top-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                        $totalAmount=0;
                                        $query = mysqli_query($link, "SELECT * FROM seller");
                                        while($row = mysqli_fetch_array($query))
                                            {
                                                $s_id = $row['s_id'];
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-info text-white">UB</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $row['s_shopname']; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row['s_store']; ?></td>
                                            <td><?php echo $row['s_username']; ?></td>
                                            <?php

                                            $queryS = mysqli_query($link, "SELECT * FROM product WHERE s_id = '$s_id'");
                                            $totalSold = 0;

                                            while($rowS = mysqli_fetch_array($queryS))
                                            {
                                                $totalSold = $totalSold + $rowS['p_quantity_sold'];
                                            }

                                            ?>
                                            <?php

                                            $query2 = mysqli_query($link, "SELECT * FROM product WHERE s_id = '$s_id'");
                                            $totalProduct = 0;
                                            while($row2 = mysqli_fetch_array($query2))
                                            {
                                                $totalProduct = $totalProduct + $row2['p_quantity_sold'] * $row2['p_price'];
                                            }

                                            $totalAmount= $totalAmount + $totalProduct;
                                            
                                            ?>
                                            <td><?php echo $totalSold; ?></td>
                                            <td>
                                                <h5 class="m-b-0">RM<?php echo $totalProduct; ?></h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }  ?>
                                </table>
                            </div>
                        </div>
                    </div>
                   

        </div>
  </body>
</html>