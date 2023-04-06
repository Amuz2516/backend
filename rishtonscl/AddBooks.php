<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $b1 = $_POST['bname'];
    $b2 = $_POST['bnumber'];
    $b3 = $_POST['bborrow'];
    $b4= $_POST['creturn'];
    $b5= $_POST['StudID'];
    $b6= $_POST['TeachID'];

    
   

    $sql = "INSERT INTO books(bName,bNumber,bBordate,bRetudate,StudID,TeachID) VALUES ('$b1','$b2','$b3','$b4','$b5','$b6')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>