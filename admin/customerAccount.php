<?php
	include 'connectionAdmin.php';
	$queryC = mysqli_query($link, "SELECT * FROM customer c,users u where u.username=c.c_username and u.type='customer'");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Urban Bites</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="style.css">
</head>
<style>
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

			<!-- end of hdr-->
		<div class="container flex justify-between ">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>All <b>Order</b></h2>
					</div>
					<br><br>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Customer ID </th>
                        <th>Username</th>
						<th>Email</th>
						<th>Full Name</th>
						<th>Phone Number</th>												
						<th class="hidden-phone">Status</th>
						<th class="hidden-phone">Action</th>
						<th class="hidden-phone">View</th>
                    </tr>
                </thead>
                <?php
				while ($row = mysqli_fetch_array($queryC))
				{

			?>
                <tbody>
                    <tr>
                        <td><?php echo $row['c_id']; ?></td>
                        <td><?php echo $row['c_username']; ?></td>
						<td><?php echo $row['c_email']; ?></td>
                        <td><?php echo $row['c_fullName']; ?></td>                       
						<td><?php echo $row['c_phone']; ?></td>
						<td><a href="updateCustomer.php?id=<?php echo $row['id']; ?>" button type="button" onclick="return confirm('SURE?')">Status</button></a></td>
						<td><a href="deleteUser.php?id=<?php echo $row['id']; ?>" button type="button" onclick="return confirm('SURE?')">View</button></a></td>

                        
                    </tr>
                </tbody>
                <?php } ?>
            </table>

        </div>
		
    </div>  
 </div>
                <footer class="copyright">
                    <div>
                        Copyright ©️ 2020 .All rights reserved by the urban bites</a>.
                    </div>
                </footer>
</body>
</html>                                

