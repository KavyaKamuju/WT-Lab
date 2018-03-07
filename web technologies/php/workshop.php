<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="workshop.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<h1>WORKSHOP</h1>
<center> <a style="color:white; border-radius:0px;" href="register.php">REGISTER</a>
        <a style="color:white;  border-radius:0px;" href="admin.php">ADMIN</a></center>
</header>
  <footer>
        <p id="hey">Hey TECHNIE!</p>
        <p>Are you interested in learning new emerging technologies within a very less time.</p>
        <p>You are on the right place!!! </p>
        <p>National Level Workshops on emerging technologies near you for 3 days at Vishnu Institute of Technology. Hurry up! Get started now. </p>
	
	<?php 
	include "connect.php";
	session_start();
	$sql = "SELECT * FROM workshop_table"; 
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   	 while($row = $result->fetch_assoc()) {
	echo "<div class='templates'>";
	 echo "<h2>" . $row["workshopno"] . "</h2>
	<h3>" . $row["title"] . "</h3>
	<p>" . $row["description"] . "</p>
	<h4 style='display:inline'>Department : </h4>
	" . $row["department"] . "
	<br>
	<h4 style='display:inline'>Fees : </h4>
	" . $row["fee"] . "<br>";
	echo '</div>';
    }

	}
	?>
	
    </footer>
</body>
</html>