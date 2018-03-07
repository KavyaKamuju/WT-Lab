<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="workshop.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<h1>USER TABLE</h1>
<center> <a style="color:white;" href="log.php">Admin</a></center>
</header>
  <footer style='margin:10px 50px;'>

<?php 
include "connect.php";
session_start();
$sql = "SELECT * FROM user_table"; 
$result = $conn->query($sql);
echo "<table style='border: solid 2px black; padding:10px;border-collapse:collapse;'>";
 echo "<tr> <th style='border: solid 1px black;padding:10px;'>Name</th> 
 						<th style='border: solid 1px black;padding:10px;'>Email</th>
 					 	<th style='border: solid 1px black;padding:10px;'>Password</th>
						<th style='border: solid 1px black;padding:10px;'>College</th> 
						<th style='border: solid 1px black;padding:10px;'>Branch</th>
					  <th style='border: solid 1px black;padding:10px;'>Workshop</th> </tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr style='border-collapse: collapse;'> 
	<td style='border: solid 1px black;padding:10px;'>" . $row["name"] . "</td>
	<td style='border: solid 1px black;padding:10px;'>" . $row["email"] . "</td>
	<td style='border: solid 1px black;padding:10px;'>" . $row["password"] . "</td>
	<td style='border: solid 1px black;padding:10px;'>" . $row["college"] . "</td>
	<td style='border: solid 1px black;padding:10px;' >" . $row["branch"] . "</td>
	<td style='border: solid 1px black;padding:10px;'>" . $row["worshop"] . "</td></tr>"; 
    }

	}


echo "</table>";

?>
</footer>
	
</body>
</html>