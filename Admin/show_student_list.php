<?php
if (isset($_POST["id"])) {
    $output = '';
    include '../conn.php'; // MySQL Connection
    $query  = "SELECT * FROM student_info WHERE student_id = '" . $_POST["id"] . "'";
    $result = mysqli_query($con, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row["fname"] .' ' . $row["lname"] .'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Father Name</label></td>  
                     <td width="70%">' . $row["father_name"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mather Name</label></td>  
                     <td width="70%">' . $row["mather_name"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date of Birth</label></td>  
                     <td width="70%">' . $row["dob"] . '</td>  
                </tr>  
                
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">' . $row["gender"] . '</td>  
                </tr>  
                 <tr>  
                     <td width="30%"><label>Religion</label></td>  
                     <td width="70%">' . $row["religion"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Blood Group</label></td>  
                     <td width="70%">' . $row["blood_group"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone Number</label></td>  
                     <td width="70%">' . $row["phone"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>E-mail</label></td>  
                     <td width="70%">' . $row["email"] . '</td>  
                </tr>  
                 
                 <tr>  
                     <td width="30%"><label>Payment Number</label></td>  
                     <td width="70%">' . $row["paymentnumber"] . '</td>  
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