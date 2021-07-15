<?php
    session_start();
    include("../conn.php");
    
    if(isset($_POST['Login']))
    {
        
        // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['username'] , $_POST['password']) ) {
	    // Could not get the data that should have been sent.
	    echo '<script language="javascript">';
        echo 'alert("Please fill both the mobile and password fields!");history.go(-1);';
        echo '</script>';
	    //exit('Please fill both the email and password fields!');
    }


    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password,role,username FROM user_list WHERE username = ?')) {
    //echo 'dussdfu2';
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the email is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	    //echo 'dussdfu3';
	$stmt->bind_result($id, $password, $role,$username);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
	    //echo 'dussdfu3';
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $username;
		$_SESSION['id'] = $id;
		$_SESSION['role']=$role;
		
		if($_POST['loginas']=='Admin'){
			header('Location: ../admin');
			//echo "$role";
			die();
		}else if($_POST['loginas']=='Student'){
			header('location:../student/index.php');
			die();
		}
		
	} else {

			echo '<script type="text/javascript">alert("Incorrect password!");history.go(-1);</script>';
		
	}
} else {
	if($_POST['loginas']=='Student'){
	    	echo '<script type="text/javascript">alert("Result is not published yet or You are not selected!!");history.go(-1);</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Incorrect password!");history.go(-1);</script>';
		}
    //echo '<script type="text/javascript">alert("Incorrect username!");history.go(-1);</script>';
}

	$stmt->close();
}
}

?>