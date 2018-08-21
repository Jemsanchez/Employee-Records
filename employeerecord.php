<?php
	include("connect.php");

	if (isset($_POST['first_name'])) {

		$full_name= $_POST['full_name'] ;
		$dateof_birth= $_POST['dateof_birth'] ;
		$address= $_POST['address'] ;
		$email= $_POST['email'] ;
		$phone_number= $_POST['phone_number'] ;
		$employment_status= $_POST['employment_status'] ;
		$date_hired= $_POST['date_hired'] ;
		$tin_no= $_POST['tin_no'] ;
		$sss= $_POST['sss'] ;
		$philhealth= $_POST['philhealth'] ;
		$pagibig= $_POST['pagibig'] ;
		$weekly_salary= $_POST['weekly_salary'] ;
		$team= $_POST['team'] ;
		$leave_used= $_POST['leave_used'] ;
		$image= $_POST['image'] ;


		if ($full_name != null && $dateof_birth !=null && $address !=null && $email !=null && $phone_number !=null && $employement_status !=null && $date_hired !=null && $tin_no !=null && $sss !=null && $philhealth !=null && $pagibig !=null && $weekly_salary !=null && $team !=null && $leave_used !=null && $image !=null) {
						$q ="INSERT INTO employee_records (full_name , dateof_birth ,address ,email ,phone_number ,employement_status ,date_hired ,tin_no ,sss ,philhealth ,pagibig ,weekly_salary ,team ,leave_used ,image)
							VALUES ('$full_name', '$dateof_birth', '$address', '$email', '$phone_number', '$date_hired', '$tin_no', 'sss', 'philhealth', 'pagibig', '$weekly_salary', '$team', 'leave_used', '$image')
							" ;
						if (@mysql_query($q , $dbc)) {
							echo "Employee Successfully Registered";
						} else {
							echo $q;
						}

						}else {
							echo " <h4> Please fill all the boxes. </h4>";
						}
						}
						?>