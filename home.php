<?php
session_start(); 

$db = mysqli_connect('localhost', 'root','phantom','registration');

$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
?>

<html>
<head>
  <title>Homepage </title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div class="header">
<h2>Congratulations!!!</h2><br>
<h5>Your account has been created successfully</h5>
<br><br><br><br><br><br>
<h1>
Click here to <a href="login.php">Log_out</a> 
</h1>
</div>
</body>
</html>
