<!DOCTYPE html>
<html>
	<style>
		*{margin: 10px; padding: 10px;}
		#main {width: 400px; margin:0px auto; background-color: white; border-style: solid;border-color: #187b32; border-width: 5px; border-radius: 10px; width: 400px;}
	</style>
<head>
	<title>Web System</title>
</head>
<body style="background-color: #d7d7d7;">

<?php 
	include("connection.php");

	if (isset($_POST['first_name'])) {

		$first_name= $_POST['first_name'] ;
		$last_name= $_POST['last_name'] ;
		$user_name= $_POST['user_name'] ;
		$password= $_POST['password'] ;

		if ($first_name != null && $last_name !=null && $user_name !=null && $password !=null) {
			$q ="INSERT INTO user (first_name , last_name ,user_name, password)
				VALUES ('$first_name' , '$last_name' , '$user_name' , '$password')
			" ;
			if (@mysql_query($q , $dbc)) {
				echo "You are successfully registered";
				header("location:login.php") ;
			} else {
				echo $q;
			}

		}
		
	}



?>

	<div id="main">
		<h3 style="text-align: center; margin-top: -5px;">Register Yourself</h3>
		<div id="logo">
			<img src="employeerecords.png" width="300px" height="70px" style="margin-top: -30px;"></img>
		</div>
		<form method="post" action="registration.php" style="margin-top: -40px;">
			<h4>First Name:</h4>
			<input type="text" name="first_name" placeholder="first_name" style="width: 320px; height: 15px; margin-top: -10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" required=""><br>

			<h4 style="margin-top: -5px;">Last Name:</h4>
			<input type="text" name="last_name" placeholder="last_name" style="width: 320px; height: 15px; margin-top: -10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" required=""><br>

			<h4 style="margin-top: -5px;">User Name:</h4>
			<input type="text" name="user_name" placeholder="user_name" style="width: 320px; height: 15px;  margin-top: -10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" required=""><br>

			<h4 style="margin-top: -5px;">Password:</h4>
			<input type="Password" name="password" placeholder="password" style="width: 320px; height: 15px;  margin-top: -10px; border-style: solid; border-color:#187b32; border-radius: 3px; border-width: 1px;" required=""><br>
			<input type="submit" value="Register" name="Register" style="border-style: solid; border-color: #187b32; border-radius: 4px; width: 100px; " >

		</form>
	</div>

</body>
</html>