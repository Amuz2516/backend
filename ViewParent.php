<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">pFname<br><hr></th>
				<th width="250px">pLanme<br><hr></th>
				<th width="250px">pAddress<br><hr></th>
				<th width="250px">pEmail<br><hr></th>
				<th width="250px">pNumber<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentID, pFname, pLname, pAddress, pEmail, pNumber FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentID']}</th>
				<th>{$row['pFname']}</th>
				<th>{$row['pLname']}</th>
				<th>{$row['pAddress']}</th>
				<th>{$row['pAge']}</th>
				<th>{$row['pNumber']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

