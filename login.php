<!DOCTYPE html>
<html>
<style>
	*{margin: 10px; padding: 10px;}
	#main {background-color: white; border-style: solid;border-color: #187b32; border-width: 5px; border-radius: 10px; width: 400px; margin: 24px auto; }

</style>
<head>
	<title>Login</title>
</head>
<body style="background-color: #d7d7d7;">
	<div id="main">
		<?php 
			session_start() ;
			include ("connection.php") ;

			if(isset($_POST['user_name'])) {
			$user_name = $_POST['user_name'] ;
			$password = $_POST['password'] ;
			$q ="SELECT * FROM  user where user_name='".$user_name."' && password ='".$password."'";
			$r = mysql_query($q , $dbc) ;
			if (mysql_num_rows($r) > 0) {
					$_SESSION['user_name'] = $user_name;
				header("location:index.php") ;
			} else {
				echo 'your password and username do not match' ;
			}

		}
		?>

		<h3 style="text-align: center; color: black; margin-top: -5px; margin-bottom: -15px;">Login Form</h3>
		<div id="logo">
			<img src="employeerecords.png" width="300px" height="70px" style="margin-top: -10px;"></img>
		</div>
		<form method="post" style="color: black; margin-top: -50px;">
			<h4>User name: </h4>
			<input type="text" name="user_name" style="width: 320px; height: 13px; margin-top:-10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" placeholder="User_name" required /> <br>
			<h4>Password: </h4>
			<input type="password" name="password" style="width: 320px; height:13px; margin-top: -10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" placeholder="password" required /> <br>
			<input type="submit" name="Login" value="Login" style="border-style: solid;border-color: #187b32; border-radius: 3px; width: 100px;" /> 
			<a href="registration.php" style="color: #07255a;">Register Now</a>
			
		</form>
	</div>

</body>
</html>