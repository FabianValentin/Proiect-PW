<?php
include "connect.php";

//if the SignUp button is pressed
  if(isset($_POST['register'])){
	$realname = mysqli_real_escape_string($con,$_POST['name']);
	$usern = mysqli_real_escape_string($con,$_POST['username']);
	$mail = mysqli_real_escape_string($con,$_POST['email']);
	$pass = mysqli_real_escape_string($con,$_POST['psw']);
	
	$passwd=md5($pass);
	$sql = "INSERT INTO user (name,username,email,password) VALUES ('$realname','$usern','$mail','$passwd')";
	mysqli_query($con,$sql);
  }
  
  if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($con, $_POST['uname']);
	$password = mysqli_real_escape_string($con, $_POST['pswd']);

	$password = md5($password);
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$results = mysqli_query($con, $query);
	
  }
