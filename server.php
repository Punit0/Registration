<?php
session_start();

$db = mysqli_connect('localhost', 'root','phantom','registration');//database connection
if($db){
	echo"connection successful";
	}
else{
	echo"no connection";
	}

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password_1'];
$cpassword=$_POST['password_2'];


//validation for signup fields
if (empty($username)) { echo "Username is empty"; }
if (empty($email)) { echo "Email is empty"; }
if (empty($password)) { echo "Password is empty"; }
if ($password != $cpassword) {
	echo "Your passwords didn't match";
  } 

$query = "INSERT INTO users (username, email, password) 
  		 VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	header('location: login.php');

?>
