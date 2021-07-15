<?php 
include "../conn.php";

$id = 0;
if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($con,$_POST['id']);
}
if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($con,"SELECT * FROM admission_form WHERE admission_id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM admission_form WHERE admission_id=".$id;
    $query1 = "DELETE FROM user_list WHERE id=".$id;
    mysqli_query($con,$query);
    mysqli_query($con,$query1);
    echo 1;
    exit;
  }else{
    echo 0;
    exit;
  }
}

echo 0;
exit;