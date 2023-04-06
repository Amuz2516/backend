<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teacher</h3>
	
		<table>
		
			<tr>
				<th width="150px">Teacher ID<br><hr></th>
				<th width="250px">tFname<br><hr></th>
				<th width="250px">tLanme<br><hr></th>
				<th width="250px">tAddress<br><hr></th>
				<th width="250px">tEmail<br><hr></th>
				<th width="250px">tNumber<br><hr></th>
                <th width="250px">tQualifi<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT TeachID, tFname, tLname, tAddress, tEmail, tNumber,tQualifi FROM teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['tFname']}</th>
				<th>{$row['tLname']}</th>
				<th>{$row['tAddress']}</th>
				<th>{$row['tAge']}</th>
				<th>{$row['tNumber']}</th>
                <th>{$row['tQualifi']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>