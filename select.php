 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysql_connect("localhost", "root", "", "employeerecords");  
      $query = "SELECT * FROM employee_records WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysql_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysql_fetch_array($result))  
      {  
           $output .= '
                <tr>  
                     <td width="30%"><label>Full name</label></td>
                     <td width="70%">'.$row["full_name"].'</td>  
                </tr>
                <tr>    
                     <td width="30%"><label>Date of Birth</label></td>
                     <td width="70%">'.$row["dateof_birth"].'</td>  
                </tr>    
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone Number</label></td>  
                     <td width="70%">'.$row["phone_number"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Emplyment Status</label></td>
                     <td width="70%">'.$row["employment_status"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date Hired</label></td>  
                     <td width="70%">'.$row["date_hired"].' Year</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Tin No</label></td>
                     <td width="70%">'.$row["tin_no"].'</td>  
                </tr>
                 <tr>  
                     <td width="30%"><label>SSS</label></td>
                     <td width="70%">'.$row["sss"].'</td>  
                </tr>
                 <tr>  
                     <td width="30%"><label>Philhealth</label></td>
                     <td width="70%">'.$row["philhealth"].'</td>  
                </tr>
                 <tr>  
                     <td width="30%"><label>Pag-ibig</label></td>
                     <td width="70%">'.$row["pagibig"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Weekly Salary</label></td>
                     <td width="70%">'.$row["weekly_salary"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Team</label></td>
                     <td width="70%">'.$row["team"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Leave used</label></td>
                     <td width="70%">'.$row["leave_used"].'</td>  
                </tr>          
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 