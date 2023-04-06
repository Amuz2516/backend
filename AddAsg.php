<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $a1 = $_POST['aname'];
    $a2 = $_POST['acode'];
    $a3 = $_POST['adate'];
    $a4= $_POST['amark'];
    
   

    $sql = "INSERT INTO assignment (aName,acode,submission,totalmarks) VALUES('$a1','$a2','$a3','$a4')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>