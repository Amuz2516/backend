<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all class</h3>
	
		<table>
		
			<tr>
				<th width="150px">Class ID<br><hr></th>
				<th width="250px">cYear<br><hr></th>
				<th width="250px">cNumber<br><hr></th>
				<th width="250px">cCapacity<br><hr></th>
				<th width="250px">cTime<br><hr></th>
                <th width="250px">StudID<br><hr></th>
                <th width="250px">TeachID<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ClassID, cYear, cNumber, cCapacity, cTime , StudID , TeachID FROM class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ClassID']}</th>
				<th>{$row['cYear']}</th>
				<th>{$row['cNumber']}</th>
				<th>{$row['cCapacity']}</th>
				<th>{$row['cTime']}</th>
                <th>{$row['StudID']}</th>
                <th>{$row['TeachID']}</th>
		
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>