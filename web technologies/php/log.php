<?php 
include "connect.php";
session_start();
if(isset($_POST['add'])) 
    header('location:addworkshop.php');
if(isset($_POST['view'])) 
    header('location:view.php');
if(isset($_POST['remove'])) 
    header('location:remove.php');
if(isset($_POST['logout'])) 
    header('location:logout.php');
?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="workshop.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
<header>
   <h1>Admin</h1>
   <center>
       <a style="color:white;" href="workshop.php">Home</a>
   </center>
</header>
<footer>
<form method="post" action="">
<button  style=" float:right; color:black;"type="submit" name="logout" >Logout</button>
<nav >
       <button  style="padding:10px; color:black;" type="submit" name="add">Add Workshop</button><br><br>
       <button  style="padding:10px; color:black;" type="submit" name="remove">Remove Workshop</button><br><br>
       <button  style="padding:10px; color:black;" type="submit" name="view">View Registered Users</button><br><br>
</nav>
</form>
</footer>
</body>
</html>