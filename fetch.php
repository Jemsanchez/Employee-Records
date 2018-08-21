  <?php  
 //fetch.php  
  $connect = @mysql_connect('localhost','root','');
             @mysql_select_db('employeerecords', $connect);
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM employee_records WHERE id = '".$_POST["employee_id"]."'";  
      $result = @mysql_query($query, $connect);  
      $row = @mysql_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>