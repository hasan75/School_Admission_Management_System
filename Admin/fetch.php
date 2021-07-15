<?php
include '../conn.php'; // MySQL
if (isset($_POST["id"])) {
    $query  = "SELECT * FROM student_info WHERE student_id = '" . $_POST["id"] . "'";
    $result = mysqli_query($con, $query);
    $row    = mysqli_fetch_array($result);
    echo json_encode($row);


}
?>