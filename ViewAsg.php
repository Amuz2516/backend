<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Assignment </h3>
	
		<table>
		
			<tr>
				<th width="150px">Asg ID<br><hr></th>
				<th width="250px">aName<br><hr></th>
				<th width="250px">aCode<br><hr></th>
				<th width="250px">submission<br><hr></th>
				<th width="250px">totalmarks<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT AsgID, aName, aCode, submission, totalmarks FROM assignment");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['AsgID']}</th>
				<th>{$row['aName']}</th>
				<th>{$row['aCode']}</th>
				<th>{$row['submission']}</th>
				<th>{$row['totalmarks ']}</th>
		
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>