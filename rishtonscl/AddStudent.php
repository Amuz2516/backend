<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-57.hosting.stackcp.net";
   $username  = "student8-3530313590ba";
   $passwd = "ua92-studentAc";
   $dbname = "student8-3530313590ba";
*/
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
    $sadd = $_POST['saddress'];
    $sage = $_POST['sage'];
    $snumber = $_POST['snumber'];
    $classid= $_POST['ClassID'];
    $parentid= $_POST['ParentID'];
   
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO student (sFname,sLname,sAddress,sAge,sNumber,sGender,ClassID,ParentID) VALUES ('$sfname','$slname','$sadd','$sage','$snumber','$classid','$parentid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>