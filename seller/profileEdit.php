<?php

	include ('connectionAdmin.php');

	//echo "Hello " . $_SESSION['username'];

	$username = $_SESSION['username'];

	$query = mysqli_query($link, "SELECT * FROM seller WHERE s_username = '$username'");
	//echo $username;

	$row = mysqli_fetch_array($query);

	if (isset($_POST['submit']))
	{
		$s_store = $_POST['s_store'];
		$s_phone = $_POST['s_phone'];
		$s_shopname = $_POST['s_shopname'];
		$s_email = $_POST['s_email'];
		$s_fname = $_POST['s_fname'];
		$s_lname = $_POST['s_lname'];
		$s_ic = $_POST['s_ic'];
		$s_companyaddress = $_POST['s_companyaddress'];
		$s_city = $_POST['s_city'];
		$s_postal = $_POST['s_postal'];
		$s_state = $_POST['s_state'];
		$s_bankname = $_POST['s_bankname'];
		$s_accname = $_POST['s_accname'];
		$s_accnumber = $_POST['s_accnumber'];

		$query = mysqli_query($link, "UPDATE seller SET s_store = '$s_store', s_phone = '$s_phone', s_shopname = '$s_shopname', s_email = '$s_email', s_fname = '$s_fname', s_lname = '$s_lname', s_ic = '$s_ic', s_companyaddress = '$s_companyaddress', s_city = '$s_city', s_postal = '$s_postal', s_state = '$s_state', s_bankname = '$s_bankname', s_accname = '$s_accname', s_accnumber = '$s_accnumber' WHERE s_username = '$username'");

		echo ("<SCRIPT LANGUAGE='JavaScript'>
	    	window.alert('Successfully Updated');
	    	window.location.href='profile.php';
	   		</SCRIPT>");
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="icon" type="image/png" href="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="../css2/style1.css">
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/font-awesome.min.css">
	<script src="../all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
</style>
<body bgcolor=" #8779b1">

	<div class= "site-content">
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
                                    <a href="profile.php" data-toggle="modal" data-target="#Modal_profile"><i class="fa fa-users" aria-hidden="true" ></i>My Profile</a>
                                    <a href="orderList.php" data-toggle="modal" data-target="#Modal_order"><i class="fa fa-first-order" aria-hidden="true"></i>My Order</a> 
									<a href="index.php" data-toggle="modal" data-target="#Modal_product"><i class="fa fa-product-hunt" aria-hidden="true"></i>My Product</a> 
                                    <a href="logout.php" data-toggle="modal" data-target="#Modal_logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                                  </div>
                                </div>
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
						    <a href="orderList.php">Order</a>
                            <a href="index.php">Menu</a>
                            <a href="booking.php">Booking</a>
                        </div>
                    </div>
                </nav>
    <!-- end of nav-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="wrapper1">
    <div class="left">
        <img src="gogo.png" 
        alt="user" width="200">
        <h4>Soru Station's User</h4>
         <p><?php echo $row['s_username'];  ?></p>
	</div>
	
    <div class="right">
        <div class="info">
            <h3>PROFILE EDIT</h3>
            <div class="info_data">
	<form method="post">
	      <table align="center">
                     <tr>
						<th align="left">Store Type</th>
						<td align="left">&nbsp<input type="radio" name="s_store" value="Individual" checked="checked"> Individual &emsp;
						<input type="radio" name="s_store" value="Company"> Company</td>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Shop Name</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_shopname" value="<?php echo $row['s_shopname'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Phone number</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_phone" value="<?php echo $row['s_phone'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Email Address</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_email" value="<?php echo $row['s_email'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">First Name</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_fname" value="<?php echo $row['s_fname'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Last Name</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_lname" value="<?php echo $row['s_lname'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">IC Number</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_ic" value="<?php echo $row['s_ic'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Company Address</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_companyaddress" value="<?php echo $row['s_companyaddress'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">City / Town</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_city" value="<?php echo $row['s_city'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Postal Code</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_postal" value="<?php echo $row['s_postal'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">State</th>
						<td align="left">
							<select name="s_state">
							<option value="Federal Territory of Kuala Lumpur">Federal Territory of Kuala Lumpur</option>
							<option value="Federal Territory of Putrajaya">Federal Territory of Putrajaya</option>
							<option value="Johor">Johor</option>
							<option value="Kedah">Kedah</option>
							<option value="Malacca">Malacca</option>
							<option value="Negeri Sembilan">Negeri Sembilan</option>
							<option value="Pahang">Pahang</option>
							<option value="Perak">Perak</option>
							<option value="Perlis">Perlis</option>
							<option value="Pulau Pinang">Pulau Pinang</option>
							<option value="Sabah">Sabah</option>
							<option value="Sarawak">Sarawak</option>
							<option value="Selangor">Selangor</option>
							<option value="Terengganu">Terengganu</option>
						</select>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Postal Code</th>
						<td align="left"><select name="s_bankname">
							<option value="Affin Bank Berhad">Affin Bank Berhad</option>
							<option value="Affin Islamic Bank Berhad">Affin Islamic Bank Berhad</option>
							<option value="Alliance Bank Malaysia Berhad">Alliance Bank Malaysia Berhad</option>
							<option value="Alliance Islamic Bank">Alliance Islamic Bank</option>
							<option value="Al Rajhi Banking & Investment Corporation (Malaysia) Berhad">Al Rajhi Banking & Investment Corporation (Malaysia) Berhad</option>
							<option value="Alkhair Internation Islamic Bank Bhd">Alkhair Internation Islamic Bank Bhd</option>
							<option value="Ambank (M) Berhad">Ambank (M) Berhad</option>
							<option value="AmIslamic Bank">AmIslamic Bank</option>
							<option value="Asian Finance Bank Berhad">Asian Finance Bank Berhad</option>
							<option value="Bank Islam Malaysia Berhad">Bank Islam Malaysia Berhad</option>
							<option value="Bank Muamalat Malaysia Berhad">Bank Muamalat Malaysia Berhad</option>
							<option value="Bank of America Malaysia Berhad">Bank of America Malaysia Berhad</option>
							<option value="Bank of China (Malaysia) Berhad">Bank of China (Malaysia) Berhad</option>
							<option value="Bank Simpanan Nasional">Bank Simpanan Nasional</option>
							<option value="BNP Paribas Malaysia Berhad">BNP Paribas Malaysia Berhad</option>
							<option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
							<option value="CIMB Islamic Bank">CIMB Islamic Bank</option>
							<option value="Citibank Berhad">Citibank Berhad</option>
							<option value="Hong Leong Bank Berhad">Hong Leong Bank Berhad</option>
							<option value="Hong Leong Islamic Bank Berhad">Hong Leong Islamic Bank Berhad</option>
							<option value="HSBC Bank Malaysia Berhad">HSBC Bank Malaysia Berhad</option>
							<option value="HSBC Amanah Malaysia Berhad">HSBC Amanah Malaysia Berhad</option>
							<option value="India International Bank (Malaysia) Berhad">India International Bank (Malaysia) Berhad</option>
							<option value="Industrial and Commercial Bank of China">Industrial and Commercial Bank of China</option>
							<option value="Kuwait Finance House (Malaysia) Berhad">Kuwait Finance House (Malaysia) Berhad</option>
							<option value="Maybank Banking Berhad">Maybank Banking Berhad</option>
							<option value="Maybank Islamic Berhad">Maybank Islamic Berhad</option>
							<option value="National Bank of Abu Dhabi Malaysia Berhad">National Bank of Abu Dhabi Malaysia Berhad</option>
							<option value="OCBC Bank (Malaysia) Berhad">OCBC Bank (Malaysia) Berhad</option>
							<option value="OCBC Al-Amin Bank Berhad">OCBC Al-Amin Bank Berhad</option>
							<option value="Public Bank Berhad">Public Bank Berhad</option>
							<option value="Public Islamic Bank Berhad">Public Islamic Bank Berhad</option>
							<option value="RHB Bank Berhad">RHB Bank Berhad</option>
							<option value="RHB Islamic Bank Berhad">RHB Islamic Bank Berhad</option>
							<option value="Standard Chartered Bank Malaysia Berhad">Standard Chartered Bank Malaysia Berhad</option>
							<option value="United Overseas Bank (Malaysia) Berhad">United Overseas Bank (Malaysia) Berhad</option>
							<option value="DBS Bank Ltd">DBS Bank Ltd</option>
							<option value="Bank kerjasama Rakyat Malaysia Berhad">Bank kerjasama Rakyat Malaysia Berhad</option>
							<option value="Bank Pertanian Malaysia Berhad (Agrobank)">Bank Pertanian Malaysia Berhad (Agrobank)</option>
						</select>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Account Holder Name</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_accname" value="<?php echo $row['s_accname'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<th align="left">Account Number</th>
						<td align="left">&nbsp<input style="width: 300px;" type="text" name="s_accnumber" value="<?php echo $row['s_accnumber'];?>" required='on'/>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>
					
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>
					
					
				</table>
			<div class="lower-container">
			<button class="btn" name="submit" type="submit" value="submit">Submit</button>			
	        </div>
  </div>
</form>
	<!--end of form-->
            </div>
		</div>	
      
    </div>
</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>

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
                        Copyright ©️ 2020 .All rights reserved by the urban bites</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>




                
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>