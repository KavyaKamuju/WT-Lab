<?php 
include "connect.php";
session_start();

if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $college=$_POST['college'];
        $branch=$_POST['branch'];
        $workshop=$_POST['workshop'];
	      $remind=$_POST['remind'];

        if($email != "") 
        {
          $sql = "SELECT email FROM user_table where email='".$email."'";
          $result = $conn->query($sql);
          if($result-> num_rows >= 1)
          {
            $message = "Email already exists.  Try some other email...";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
          else
          {
              $qry = "INSERT INTO `user_table` ( `name`, `gender`, `email`,`password`, `college`, `branch`,`worshop`,`remind`) VALUES ('$name' ,'$gender','$email', '$password','$college', '$branch', '$workshop','$remind')";
	            mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error($conn));
              $message = "Thankyou for Registering...";
              echo "<script type='text/javascript'>alert('$message');</script>";
          }
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
<h1>REGISTER</h1>
<a style="color:white;" href="workshop.php">Home</a></center>
</header>
<div>
    <footer>
      <form method="post" action="">
<label>Name : </label>
<input style="color:black;" type="text" name="name"><br><br>
<label>Gender : </label>
<input style="color:black;" type="radio" name="gender" value="m">Male
<input type="radio" name="gender" value="f">Female<br><br>
<label>Email : </label>
<input  style="color:black;"type="text" name="email"><br><br>
<label>Password : </label>
<input  style="color:black;"type="password" name="password"><br><br>
<label>College : </label>
<input style="color:black;" type="text" name="college"><br><br>
<label>Branch : </label>
<input  style="color:black;" type="text" name="branch"><br><br>
<label>Workshop Name : </label>
<input  style="color:black;" type="text" name="workshop"><br><br>
  <br><br>
<input  style="color:black;" type="hidden" name="remind" value="no">
<input  style="color:black;" type="checkbox" name="remind" value="yes">Remind Me<br><br>

<button  style="padding:10px; color:black;"type="submit" name="submit">Submit</button>
</form>
</footer>
</div>
</body>
</html>