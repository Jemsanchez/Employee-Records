<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>

	<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<nav style="background-color: #187b32; width: 100%; height: 40px;"></nav>

	<div id="wrapper" style="width: 90%;">
		<div id="header">
			<div id="header_top">
				<div id="logo">
					<img src="employeerecords.png" width="300px" height="70px" style="margin-top: 10px; margin-left:10px;"></img>
				</div>

				<div id="php" style="float: right; margin-top: 50px; margin-right: 10px; border-style: solid; border-color: #07255a; border-radius: 5px; padding: 5px; ">
				<?php
					session_start() ;
					if (isset($_SESSION ['user_name'])) {

					echo $_SESSION ['user_name'] ;
 
					echo '<a href="logout.php">  Log out</a>' ;
					} else{
					header("location:login.php") ;
					} 
				?>
				</div>

				<div class="container" style="background-color: #07255a; margin-top: 100px; width: 100%; height: 790px; border-radius: 10px;">
				<nav style="float: left;">
					<h3 style="color: white; margin:20px;">Add New Employee</h3>
					<div style="float: right; margin-left: 900px; ">
					<h4 style="color: white; margin-top: -40px;"> See all records</h4>
					<a href="http://localhost/Websystem/datatables.php">
					<button class="button" style="vertical-align: middle; float: right;"> <span>See All</span>
					</button></a>
					</div>
					
				

				</nav>

				<nav style="border-radius:20px; background-color: #d7d7d7; border-style: solid; border-width: 2px; border-color: white; width: 50%; height: 670px; margin-top: 100px; margin-left: 50px;">

				<div>
					<div style="color: blue; margin-left: 180px;">
						<?php
						include("connect.php");

							if (isset($_POST['full_name'])) {
							$full_name			= $_POST['full_name'] ;
							$dateof_birth		= $_POST['dateof_birth'] ;
							$address			= $_POST['address'] ;
							$email				= $_POST['email'] ;
							$phone_number		= $_POST['phone_number'] ;
							$employement_status	= $_POST['employement_status'] ;
							$date_hired			= $_POST['date_hired'] ;
							$tin_no				= $_POST['tin_no'] ;
							$sss				= $_POST['sss'] ;
							$philhealth			= $_POST['philhealth'] ;
							$pagibig			= $_POST['pagibig'] ;
							$weekly_salary		= $_POST['weekly_salary'] ;
							$team				= $_POST['team'] ;
							$leave_used			= $_POST['leave_used'] ;
							$image				= $_POST['image'] ;

						if ($full_name != null && $dateof_birth !=null && $address !=null && $email !=null && $phone_number !=null && $employement_status !=null && $date_hired !=null && $tin_no !=null && $sss !=null && $philhealth !=null && $pagibig !=null && $weekly_salary !=null && $team !=null && $leave_used !=null && $image !=null) {
						$q ="INSERT INTO employee_records(
							full_name,
							dateof_birth,
							address,
							email,
							phone_number,
							employement_status,
							date_hired,
							tin_no,
							sss,
							philhealth,
							pagibig,
							weekly_salary,
							team,
							leave_used,
							image)
							VALUES(
							'$full_name',
							'$dateof_birth',
							'$address',
							'$email', 
							'$phone_number',
							'$date_hired',
							'$tin_no',
							'$sss',
							'$philhealth',
							'$pagibig',
							'$weekly_salary',
							'$team',
							'$leave_used',
							'$image')" ;
						if (@mysql_query($q , $dbc)) {
							echo "Employee Successfully Registered";
						}

						}else {
							echo " <h4> Please fill all the boxes. </h4>";
						}
						}
						?>
					</div>

					<h4 style="text-align: center; color: black;">Fill up form for new Employee</h4>
					<form method="post" action="index.php" style="margin: 20px; color: black;">
						Full Name:
						<input type="text" name="full_name" placeholder=" full name" style="width: 400px; height: 20px; float: right;" required><br><br>

						Date of Birth:
						<input type="date" name="dateof_birth" placeholder=" date of birth" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Address:
						<input type="text" name="address" placeholder=" Ortigas City" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Email:
						<input type="email" name="email" placeholder=" sample@gmail.com" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Phone Number:
						<input type="text" name="phone_number" placeholder=" 09xxxxxxxxxx" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Employment Status:
						<input type="text" name="employement_status" placeholder=" emplyment status" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Date Hired:
						<input type="date" name="date_hired" placeholder=" January 1 2018" style="width: 400px; height: 20px;float: right;" required=""><br><br>


						TIN No.:
						<input type="text" name="tin_no" placeholder=" 0912456" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						SSS No.:
						<input type="text" name="sss" placeholder=" 000 000 00" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Philhealth:
						<input type="text" name="philhealth" placeholder=" 000 000 00" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Pag-ibig:
						<input type="text" name="pagibig" placeholder=" 000 000 00" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Weekly Salary:
						<input type="text" name="weekly_salary" placeholder=" 4000" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Team/Branch:
						<input type="text" name="team" placeholder=" Metacom" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						Leave Used:
						<input type="number" name="leave_used" placeholder=" 1-10" style="width: 400px; height: 20px;float: right;" required=""><br><br>

						2X2 Image:
						<input type="file" name="image" style="margin-left: 150px; margin-top: -20px;" required="" />

						<input type="submit" value="Register" name="Add>>" style="color: black; float: right; border-left-style: solid; border-width: 2px; border-radius: 4px; border-color: green;">

					</form>

				</div>
				</nav>


				</div>

			</div>

		</div>
	</div>

	<div style="margin-top: 80px;">
		<nav style="background-color: #187b32; width: 100%; height: 40px;"></nav>
	</div>

<script src="js/jquery-3.3.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>