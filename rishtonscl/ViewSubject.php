<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Subject</h3>
	
		<table>
		
			<tr>
				<th width="150px">Subject ID<br><hr></th>
				<th width="250px">sCode<br><hr></th>
				<th width="250px">sName<br><hr></th>
				<th width="250px">sDuration<br><hr></th>
				<th width="250px">sCredit<br><hr></th>
                <th width="250px">ClassID<br><hr></th>
                <th width="250px">AsgID<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT SubID, sCode, sName, sDuration, scredit , ClassID , AsgID FROM subject");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['SubID']}</th>
				<th>{$row['sCode']}</th>
				<th>{$row['sName']}</th>
				<th>{$row['sDuration']}</th>
				<th>{$row['sCredit']}</th>
                <th>{$row['ClassID']}</th>
                <th>{$row['AsgID']}</th>
		
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>