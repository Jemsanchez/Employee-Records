<?php  
 $connect = mysqli_connect("localhost", "root", "", "employeerecords");  
 $query ="SELECT * FROM employee_records ORDER BY ID DESC";  
 $result = mysqli_query($connect, $query);  
 ?> 


 <!DOCTYPE html>  
 <html> 
      <head>  
           <title>All Employee Records</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 


      </head> 

      <?php include('displayconnection.php') ;
      ?>

      <body> 
      <nav style="background-color: #187b32; width: 130%; height: 40px;"></nav>
          
          <div style="margin-left: 20px; margin-right: 20px;">
          <div style="margin-top: 20px;">
          <a href="http://localhost/Websystem/index.php"><img src="employeerecords.png" width="300px" height="70px" >
          </img></a>
          </div>
              <div style="margin-left: 0px; float: right; margin-top: -30px; border-style: solid; border-color: #07255a; border-radius: 5px; padding: 5px;">
              <?php
              session_start() ;
              if (isset($_SESSION ['user_name'])) {

              echo $_SESSION ['user_name'] ;
 
              echo '<a href="logout.php"> Log out</a>' ;
              } else{
              header("location:login.php") ;
              } 
              ?>

              </div>  
              <div class="container" style="background-color: white; margin-right: 10px; margin-top: 30px; width: 130%; height: 800px; border-radius: 10px; border-style: solid;border-width: 7px; border-color: #07255a;">
              <nav style="float: left;"> 

                <h3 align="center">All Employee Records</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>
                                  <th>Full Name</th>
                                  <th>Date of Birth</th>
                                  <th>Address</th>
                                  <th>Email</th>
                                  <th>Phone Number</th>
                                  <th>Employement Status</th>
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
                          <?php
                          $query ="SELECT * FROM employee_records";
                          $r = mysql_query($query, $dbc);
            
                          while($row = mysql_fetch_array($r)){
                          echo "<tr>" ;
                          echo "<td>".$row['full_name']."</td>";
                          echo "<td>".$row['dateof_birth']."</td>";
                          echo "<td>".$row['address']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['phone_number']."</td>";
                          echo "<td>".$row['employment_status']."</td>";
                          echo "<td>".$row['date_hired']."</td>";
                          echo "<td>".$row['tin_no']."</td>";
                          echo "<td>".$row['sss']."</td>";
                          echo "<td>".$row['philhealth']."</td>";
                          echo "<td>".$row['pagibig']."</td>";
                          echo "<td>".$row['weekly_salary']."</td>";
                          echo "<td>".$row['team']."</td>";
                          echo "<td>".$row['leave_used']."</td>";
                          echo "<td><input type='button' name='edit' id='".$row['id']."' value='Edit' class='btn btn-primary edit_data'>
                            </a></td>";
                          echo "</tr>";
                          }
            
                          ?>
                         </div>
                        </div>
                        </div>
                     </table>  
                </div>  
          </div> 
          </div>
          </nav>

      <nav style="background-color: #187b32; width: 130%; height: 40px; margin-top: 40px;"></nav>
      </body>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          
              <div class="modal-dialog" role="document" style="width: 50%; float: center; height: 100%;">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Update Employee Records</h4>
                  <div class="modal-body" style="margin-bottom: 10px;">

                    <form method="post" id="insert_form">
                      <label>Enter Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="form-control"/>  
                        <br /> 
                      <label>Enter Date of Birth</label>
                        <input type="text" name="dateof_birht" id="dateof_birth" class="form-control">
                        </br>
                      <label>Enter Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                        </br>
                      <label>Enter Email</label> 
                        <input type="email" name="email" id="email" class="form-control">
                        </br>
                      <label>Enter Phone Number</label>
                        <input type="Number" name="phonenumber" id="phone_number" class="form-control">
                        </br>
                      <label>Enter Employment Status</label>
                        <input type="text" name="employment_status" id="employment_status" class="form-control">
                        </br>
                      <label>Enter Date Hired</label>
                        <input type="Date" name="datehired" id="date_hired" class="form-control">
                        </br>
                      <label>Enter TIN no.</label>
                        <input type="Number" name="tinno" id="tin_no" class="form-control">
                        </br>
                      <label>Enter SSS</label>
                        <input type="Number" name="sss" id="sss" class="form-control">
                        </br>
                      <label>Enter Philhealth</label>
                        <input type="Number" name="philhealth" id="philhealth" class="form-control">
                        </br>
                      <label>Enter Pag-ibig</label>
                        <input type="Number" name="pagibig" id="pagibig" class="form-control">
                        </br>
                      <label>Enter Weekly Salary</label>
                        <input type="Number" name="weeklysalary" id="weekly_salary" class="form-control">
                        </br>
                      <label>Enter Team</label>
                        <input type="text" name="team" id="team" class="form-control">
                        </br>
                      <label>Enter Leave Used</label>
                        <input type="number" name="leave_used" id="leave_used" class="form-control">
                        </br>
                        <input type="hidden" name="employee_id" id="employee_id" />  
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                    </form>        
                  </div>
                </div>
              </div>
            </div>
          </div>

             

 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });

      $(document).on('click', '.edit_data', function(){ 
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#full_name').val(data.full_name);  
                     $('#dateof_birth').val(data.dateof_birth);  
                     $('#address').val(data.address);  
                     $('#email').val(data.email);  
                     $('#phone_number').val(data.phone_number);
                     $('#employment_status').val(data.employment_status);
                     $('#date_hired').val(data.date_hired);
                     $('#tin_no').val(data.tin_no);
                     $('#sss').val(data.sss);
                     $('#philhealth').val(data.philhealth);
                     $('#pagibig').val(data.pagibig);
                     $('#weekly_salary').val(data.weekly_salary);
                     $('#team').val(data.team);
                     $('#leave_used').val(data.leave_used);
                     $('#employee_id').val(data.id);
                     $('#insert').val("Update");  
                     $('#exampleModal').modal('show');  
                }  
           });  
      }); 

      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#full_name').val() == "")  
           {  
                alert("Full Name is required");  
           }  
           else if($('#dateof_birth').val() == '')  
           {  
                alert("Date of Birth is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("Email is required");  
           }  
           else if($('#phone_number').val() == '')  
           {  
                alert("Phone Number is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#exampleModal').modal('hide');  
                          $('#employee_records').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_records').html(data);  
                          $('#exampleModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

 <script> 

  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
  })


 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  


 </html> 



 