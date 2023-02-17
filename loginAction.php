<?php
	
	include ('connection.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($link, "SELECT * FROM users WHERE username='$username' AND password = '$password'");

		if (mysqli_num_rows($query) > 0)
		{

			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			$fetch = mysqli_fetch_array($query);
			$type = $fetch['type'];

			if(isset($_SESSION['username']) && isset($_SESSION['password']))
			{
				if ($type == "admin")
				{
					header ("Location: admin/");
				}

				else if ($type == "seller")
				{
					header ("Location: seller/");
				}

				else
				{
					header ("Location:customer/");
				}
			}
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
    		window.alert('Login Successfully');
    		window.location.href='index.php';
    		</SCRIPT>");
		}
?>