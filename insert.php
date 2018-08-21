<?php  
 $connect = mysql_connect("localhost", "root", "", "employee_records");  
 if(!empty($_POST))  
 {  
      $output = '';
      $message = '';
      $full_name = mysql_real_escape_string($connect, $_POST["full_name"]);  
      $dateof_birth = mysql_real_escape_string($connect, $_POST["dateof_birth"]);  
      $address = mysql_real_escape_string($connect, $_POST["address"]);  
      $email = mysql_real_escape_string($connect, $_POST["email"]);  
      $phone_number = mysql_real_escape_string($connect, $_POST["phone_number"]);
      $employment_status = mysql_real_escape_string($connect, $_POST["employment_status"]);
      $date_hired = mysql_real_escape_string($connect, $_POST["date_hired"]);  
      $tin_no = mysql_real_escape_string($connect, $_POST["tin_no"]);
      $sss = mysql_real_escape_string($connect, $_POST["sss"]);
      $philhealth = mysql_real_escape_string($connect, $_POST["philhealth"]);
      $pagibig = mysql_real_escape_string($connect, $_POST["pagibig"]);
      $weekly_salary = mysql_real_escape_string($connect, $_POST["weekly_salary"]);
      $team = mysql_real_escape_string($connect, $_POST["team"]);
      $leave_used= mysql_real_escape_string($connect, $_POST["leave_used"]);         
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE employee_records   
           SET full_name='$full_name',   
           dateof_birth='$dateof_birth',   
           address='$address',   
           email = '$email',   
           phone_number = '$phone_number',
           employment_status = '$employment_status',
           date_hired = '$date_hired',
           tin_no = '$tin_no',
           sss = '$sss',
           philhealth = '$philhealth',
           pagibig = '$pagibig',
           weekly_salary = '$weekly_salary',
           team = '$team'
           leave_used = '$leave_used',
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO employee_records(full_name, dateof_birth, address, email, phone_number, employment_status, date_hired, tin_no, sss, philhealth, pagibig, weekly_salary, team, leave_used)  
           VALUES('$full_name', '$dateof_birth', '$address', '$email', '$phone_number', '$employment_status', '$date_hired', '$tin_no', '$sss', '$philhealth', '$pagibig', '$weekly_salary', '$team', '$leave_used');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysql_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM employee_records ORDER BY id DESC";  
           $result = mysql_query($connect, $select_query);  
           $output .= '
                <table id="employee_data" class="table table-striped table-bordered">
                  <thead>  
                      <tr>
                        <th>Full Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Employment Status</th>
                        <th>Date Hired</th>
                        <th>TIN No.</th>
                        <th>SSS</th>
                        <th>Philhealth</th>
                        <th>Pag-ibig</th>
                        <th>Weekly Salary</th>
                        <th>Team</th>
                        <th>Leave Used</th>
                        <th>Update</th>
                      </tr>
                 </thead>     
           ';  
           while($row = mysql_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["full_name"] . '</td>
                          <td>' . $row["dateof_birth"] . '</td>  
                          <td>' . $row["address"] . '</td>
                          <td>' . $row["email"] . '</td>
                          <td>' . $row["phone_number"] . '</td>
                          <td>' . $row["employment_status"] . '</td>
                          <td>' . $row["date_hired"] . '</td>
                          <td>' . $row["tin_no"] . '</td>
                          <td>' . $row["sss"] . '</td>
                          <td>' . $row["philhealth"] . '</td>
                          <td>' . $row["pagibig"] . '</td>
                          <td>' . $row["weekly_salary"] . '</td>
                          <td>' . $row["team"] . '</td>
                          <td>' . $row["leave_used"] . '</td>                
                          <td><input type="button" name="edit" id="'.$row["employee_id"] .'" value="Edit" class="btn btn-primary edit_data" /></td> 
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }
      echo $output;  
 }  
 ?>
 