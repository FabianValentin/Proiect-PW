<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }	
	
  $dbhost='localhost';
  $username = 'root';
  $password='';
  $db='registration'; 
  //connect to the database
  $condb = mysqli_connect("$dbhost","$username","","$db");	

$errors = array(); 

//if the SignUp button is pressed
  if(isset($_POST['register'])){
	$realname = mysqli_real_escape_string($condb,$_POST['name']);
	$usern = mysqli_real_escape_string($condb,$_POST['username']);
	$mail = mysqli_real_escape_string($condb,$_POST['email']);
	$pass1 = mysqli_real_escape_string($condb,$_POST['psw1']);
	$pass2 = mysqli_real_escape_string($condb,$_POST['psw2']);
	
	// form validation: ensure that the form is correctly filled
	if (empty($realname)) { array_push($errors, "Your name is required"); }
	if (empty($usern)) { array_push($errors, "Username is required"); }
	if (empty($mail)) { array_push($errors, "Email is required"); }
	if (empty($pass1)) { array_push($errors, "Password is required"); }
	if (empty($pass2)) { array_push($errors, "Password confirmation is required"); }
	
	if ($pass1 != $pass2) {
			array_push($errors, "The two passwords do not match");
    }
	
	if (count($errors) == 0) {
		$passwd=md5($pass1);
		$sql = "INSERT INTO users (name,email,username,password) VALUES ('$realname','$mail','$usern','$passwd')";
		mysqli_query($condb,$sql);
		
		$_SESSION['username'] = $usern;
		header('location: indexLogIn.php');
    }
  }
  
  if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($condb, $_POST['uname']);
	$password = mysqli_real_escape_string($condb, $_POST['pswd']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($condb, $query);
		
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			header('location: indexLogIn.php');
			
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
  }
