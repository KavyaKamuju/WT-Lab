<?php 
include "connect.php";
session_start();
    if(isset($_POST['submit'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $qry = "SELECT * FROM `adminlogin` WHERE  `username`='$username' AND `password`='$password';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error($conn));
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['username']=$row['username'];
            $_SESSION["password"] = $row['password'];
            header('location:log.php');
        } else {
            $warning = "Invalid login";
            echo "<script type='text/javascript'>alert('$warning');</script>";
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
<h1>ADMIN</h1>
<center> <a style="color:white;" href="workshop.php">Home</a></center>
</header>
    <footer>
      <form method="post" action="">
          <center>
 <label>UserName : </label>
<input style="color:black;"type="text" name="username"><br><br>
<label>Password : </label>
<input style="color:black;" type="password" name="password"><br><br>
<button  style="padding:10px;color:black;"type="submit" name="submit">LOG IN</button>
</center>
</form>
</body>
</html>