<?php
    
    include("../conn.php");
    
    if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$father_name=$_POST['father_name'];
	$mather_name=$_POST['mather_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$blood_group=$_POST['blood_group'];
	$religion=$_POST['religion'];
	$class=$_POST['class'];
	$shift=$_POST['shift'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$paymentnumber=$_POST['paymentnumber'];
	$photo = $_POST['photo'];

	$sql_u = "SELECT * FROM user_list WHERE username='$username'";
	$res_u = mysqli_query($con, $sql_u);
	if (mysqli_num_rows($res_u) > 0) {
		echo '<script type="text/javascript">alert("Sorry... username already taken");history.go(-1);</script>';
  	}
  	else{
        // Get image name
        $destination = "../admission/images/".$_FILES['photo']['name'];
        $filename = $_FILES['photo']['tmp_name'];
        move_uploaded_file($filename, $destination);


$query="insert into student_info(fname, lname, father_name, mather_name, email, phone, gender, dob, blood_group, religion, class, shift,paymentnumber, photo) values('$fname', '$lname', '$father_name', '$mather_name', '$email', '$phone', '$gender', '$dob', '$blood_group', '$religion', '$class', '$shift', '$paymentnumber', '$destination')";

$role = "Student";
$query1="insert into user_list(username, password, role ) values('$username', '$password','$role')";

if(mysqli_query($con, $query) && mysqli_query($con, $query1))
	{
			echo '<script type="text/javascript">alert("Admission Form Data Inserted Successfully!!");history.go(-1);</script>';
	}
	 else{
    echo "ERROR: Could not able to execute $res. " . mysqli_error($con);
	}

        	}

     }
 
?>