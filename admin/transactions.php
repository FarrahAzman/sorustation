<?php

    include 'connectionAdmin.php';
    $username = $_SESSION['username'];
    


?>

                                
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
	
         <title>The Urban Bites</title>
         <link rel="stylesheet" href="../css/style.css">
  </head>
  
<style>

body {
    position: relative;
    overflow-x:hidden;
    background: #bebca0;
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
<body bgcolor=" #bebca0" >
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
                                                <h5>Call US: 05-2413417</h5>
                                                <h6>E-mail : support@thesorustation".com</h6>
                                            </div>
                                        </div>
                                        <div class="branding">
                                        <img src="../images/3182.png" alt=""width="150" height="150">
                                        </div>
                                        <div class="time flex items-center">
                                            <img src="../icons/clock.svg" alt="" width="20" height="20" >
                                            <div>
                                                <h5>Working Hours:</h5>
                                                <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                     
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Purchase History</h4>
                                        <h5 class="card-subtitle">Overview of Purchase History</h5>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Order ID</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Product </th>
                                            <th class="border-top-0">Product Name</th>
                                            <th class="border-top-0">Product Price</th>
                                            <th class="border-top-0">Product Quantity</th>
                                            <th class="border-top-0">Total Price</th>
                                            <th class="border-top-0">Buyer Details</th>
                                            <th class="border-top-0">Buyer Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                         $query = mysqli_query($link, "SELECT * FROM product p,orderproduct o WHERE p.p_id = o.p_id ");
                                        while($row = mysqli_fetch_array($query))
                                            { 
                                                $c_id = $row['c_id'];
                                        ?>
                                            <tr>
                                            <td><?php echo ($row['o_id']); ?></td>
                                                <td><?php echo ($row['date']); ?></td>
                                                <td>
                                                    <?php
                                                        $picture =  $row['p_image'];
                                                        echo "<img src='../seller/prodimg/$picture' width=50 height=40>";
                                                    ?>
                                                </td>
                                                <td><?php echo ($row['p_name']); ?></td>
                                                <td><?php echo ($row['p_price']); ?></td>
                                                <td><?php echo ($row['t_quantity']); ?></td>
                                                <td><?php echo ($row['o_total_price']); ?></td>
                                                
                                                <td>
                                                    <?php echo $row['o_name']; ?><br>
                                                    <?php echo $row['o_phone']; ?><br>
                                                    <?php echo $row['o_address']; ?>
                                                </td>
                                                <?php     
                                                         $resultK = $link->query("SELECT c_username FROM `customer` where c_id =$c_id");
                                                          $cust = $resultK->fetch_row();?>
                                                          
                                                <td><?php echo $cust[0]?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                   

        </div>
  </body>
</html>