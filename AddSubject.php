<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $s1 = $_POST['scode'];
    $s2 = $_POST['sname'];
    $s3 = $_POST['scredit'];
    $s4= $_POST['sduration'];
    $s5= $_POST['ClassID'];
    $s6= $_POST['AsgID'];
   
   

    $sql = "INSERT INTO subject (sCode,sName,sDuration,sCredit,ClassID,AsgID) VALUES ('$s1','$s2','$s3','$s4','$s5','$s6')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>