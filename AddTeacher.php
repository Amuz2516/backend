<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $tfname = $_POST['tfname'];
    $tlname = $_POST['tlname'];
    $taddress = $_POST['taddress'];
    $temail= $_POST['temail'];
    $tnumber= $_POST['tnumber'];
    $tquali= $_POST['tquali'];
   

    $sql = "INSERT INTO teacher (tFname,tLname,tAddress,tEmail,tNumber,tQaulifi) VALUES ('$tfname','$tlname','$taddress','$temail','$tnumber',$tquali)";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>