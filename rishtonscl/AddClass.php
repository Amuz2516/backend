<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $c1 = $_POST['cyear'];
    $c2 = $_POST['cnumber'];
    $c3 = $_POST['ccapacity'];
    $c4= $_POST['ctime'];
    $c5= $_POST['StudID'];
    $c6= $_POST['TeachID'];
    
   

    $sql = "INSERT INTO class (cYear,cNumber,cCapacity,cTime,StudId,TeachID) VALUES ('$c1','$c2','$c3','$c4','$c5',$c6)";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>