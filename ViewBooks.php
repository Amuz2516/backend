<html>
<body> 

<?php


$$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Library Books</h3>
	
		<table>
		
			<tr>
				<th width="150px">Books ID<br><hr></th>
				<th width="250px">bName<br><hr></th>
				<th width="250px">bNumber<br><hr></th>
				<th width="250px">bBorrowDate<br><hr></th>
				<th width="250px">bReturnDate<br><hr></th>
                <th width="250px">StudID<br><hr></th>
                <th width="250px">TeachID<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT BookID, bName, bNumber, bBordate, bRetudate , StudID, TeachID FROM books");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['BookID']}</th>
				<th>{$row['bName']}</th>
				<th>{$row['bNumber']}</th>
				<th>{$row['bBordate']}</th>
				<th>{$row['bRetudate']}</th>
                <th>{$row['StudID']}</th>
                <th>{$row['TeachID']}</th>

		
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>