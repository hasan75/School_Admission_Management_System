<?php  
 include '../conn.php'; // MySQL Connection
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $fname = mysqli_real_escape_string($con, $_POST["fname"]);  
      $lname = mysqli_real_escape_string($con, $_POST["lname"]);  
      $father_name = mysqli_real_escape_string($con, $_POST["father_name"]);  
      $mather_name = mysqli_real_escape_string($con, $_POST["mather_name"]);  
      $email = mysqli_real_escape_string($con, $_POST["email"]);  
      $dob = mysqli_real_escape_string($con, $_POST["dob"]);  
      $phone = mysqli_real_escape_string($con, $_POST["phone"]);  
      if($_POST["student_id"] != '')  
      {  
           $query = "  
           UPDATE student_info   
           SET 
           fname='$fname',   
           lname='$lname',   
           father_name='$father_name',   
           mather_name = '$mather_name',   
           email = '$email',
           dob = '$dob', 
           phone = '$phone'
           WHERE student_id='".$_POST["student_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO emp_data(name, address, gender, designation, salary)  
           VALUES('$name', '$address', '$gender', '$designation', '$salary');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($con, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM emp_data ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Employee Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      else 
      {
        echo "fdfdf";
      }
      echo $output;  
 }  
 ?>