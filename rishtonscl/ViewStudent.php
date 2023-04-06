<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">student ID<br><hr></th>
				<th width="250px">sFname<br><hr></th>
				<th width="250px">sLname<br><hr></th>
				<th width="250px">sAddress<br><hr></th>
				<th width="250px">sAge<br><hr></th>
				<th width="250px">sNumber<br><hr></th>
				<th width="250px">sGender<br><hr></th>
				<th width="250px">ClassID<br><hr></th>
				<th width="250px">ParentID<br><hr></th>
				
				
                
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT StudID, sFname , sLname , sAddress , sAge , sNumber , sGender , ClassID , ParentID FROM student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudID']}</th>
				<th>{$row['sFname']}</th>
				<th>{$row['sLname']}</th>
				<th>{$row['sAddress']}</th>
				<th>{$row['sAge']}</th>
				<th>{$row['sNumber']}</th>
				<th>{$row['sGender']}</th>
				<th>{$row['ClassID']}</th>
                <th>{$row['ParentID']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


