<?php 
include "connect.php";
session_start();

if(isset($_POST['remove'])) {
        $delete=$_POST['delete'];
        $sql="DELETE FROM workshop_table WHERE workshopno='$delete'";
         mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($conn));
        if ($conn->query($sql) === TRUE) {
         $message = "Workshop Removed. ";
        echo "<script type='text/javascript'>alert('$message');</script>";   
        } else {
        echo "Error deleting record: " . $conn->error;
            }
    }
?>
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
<h1>REMOVE WORKSHOP</h1>
<center> <a style="color:white;" href="log.php">Admin</a>
</center>
</header>
    <footer>
      <form method="post" action="">
<label>Enter Id to Delete: </label>
<input  style="color:black;"  type="text" name="delete"><br><br>
<button  style="padding:10px;color:black;"type="submit" name="remove">REMOVE</button>
</form>
</footer>
</body>
</html>