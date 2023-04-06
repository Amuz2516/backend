<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pfname = $_POST['pfname'];
    $plname = $_POST['plname'];
    $paddress = $_POST['paddress'];
    $pemail= $_POST['pemail'];
    $pnumber= $_POST['pnumber'];
   

    $sql = "INSERT INTO parent (pFname,pLname,pAddress,pEmail,pNumber) VALUES ('$pfname','$plname','$paddress','$pemail','$pnumber')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>