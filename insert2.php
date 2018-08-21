<?php  
 $connect = mysql_connect("localhost", "root", "", "employee_records");  
 if(!empty($_POST))  
 {  
      $output = '';
      $message = '';
      $first_name = mysql_real_escape_string($connect, $_POST["first_name"]);  
      $last_name = mysql_real_escape_string($connect, $_POST["last_name"]);  
      $address = mysql_real_escape_string($connect, $_POST["address"]);  
      $email = mysql_real_escape_string($connect, $_POST["email"]);  
      $phone_number = mysql_real_escape_string($connect, $_POST["phone_number"]);
      $date_hired = mysql_real_escape_string($connect, $_POST["date_hired"]);  
      $contract_sign = mysql_real_escape_string($connect, $_POST["contract_sign"]);
      $tin_no = mysql_real_escape_string($connect, $_POST["tin_no"]);
      $weekly_salary = mysql_real_escape_string($connect, $_POST["weekly_salary"]);
      $team = mysql_real_escape_string($connect, $_POST["team"]);          
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE employee_records   
           SET first_name='$first_name',   
           last_name='$last_name',   
           address='$address',   
           email = '$email',   
           phone_number = '$phone_number',
           date_hired = '$date_hired',
           contract_sign = '$contract_sign',
           tin_no = '$tin_no',
           weekly_salary = '$weekly_salary',
           team = '$team'
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
      }  
      echo $output;  
 }  
 ?>
 