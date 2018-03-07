<?php 
include "connect.php";
session_start();

if(isset($_POST['add'])) {
        $workshopno=$_POST['workshopno'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $department=$_POST['department'];
        $fee=$_POST['fee'];
        $qry = "INSERT INTO `workshop_table` ( `workshopno`, `title`, `description`,`department`, `fee`) VALUES ('$workshopno' ,'$title','$description', '$department','$fee')";
	    mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error($conn));
        $message = "Workshop Added. ";
        echo "<script type='text/javascript'>alert('$message');</script>";
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
<h1>ADD WORKSHOP</h1>
<center> <a style="color:white;" href="log.php">Admin</a>
</center>
</header>
    <footer>
      <form method="post" action="">
<label>Workshop Number : </label>
<input  style="color:black;" type="text" name="workshopno"><br><br>
<label>Title : </label>
<input  style="color:black;" type="text" name="title"><br><br>
<label>Decription : </label>
<textarea  style="color:black;" name="description"></textarea><br><br>
<label>Department : </label>
<input  style="color:black;" type="text" name="department"><br><br>
<label>Fee : </label>
<input   style="color:black;" type="text" name="fee"><br><br>
<button  style="padding:10px;color:black;"type="submit" name="add">Add</button>
</form>
</footer>
</body>
</html>