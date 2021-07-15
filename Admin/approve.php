<?php
    include '../conn.php'; // MySQL Connection
    $id = 0;
if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($con,$_POST['id']);
}
if($id > 0){


    $query="insert into student_info(
    student_id,
    fname,
    lname,
    father_name,
    mather_name,
    gender,
    blood_group,
    religion,
    dob,
    phone,
    email,
    paymentnumber,
    class,
    shift,
    photo
    )
    -- Select rows from a Table or View 'TableOrViewName' in schema 'SchemaName'
    SELECT 
    admission_id,
    fname,
    lname,
    father_name,
    mather_name,
    gender,
    blood_group,
    religion,
    dob,
    phone,
    email,
    paymentnumber,
    class,
    shift,
    photo
     FROM admission_form
    WHERE 	admission_id='$id'";
	
    
    $query1="insert into user_list(username, password, role ) SELECT username, password, role FROM admission_form
    WHERE   admission_id='$id'";;

	if(mysqli_query($con, $query) && mysqli_query($con, $query1))
	{
	    $sql = "delete from admission_form where admission_id='$id'"; 
        if(mysqli_query($con, $sql)){
            echo "Account has been accepted.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
		
	}
	 else{
    echo "ERROR: Could not able to execute $res. " . mysqli_error($con);
	}
	}
	else{
    echo "ERROR: Could not able to execute11 $res. " . mysqli_error($con);
	}


  
 
?>