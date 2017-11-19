<?php
include "../connect.php";

//if the Submit button is pressed
  if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$comm = mysqli_real_escape_string($con,$_POST['comment']);
	
	date_default_timezone_set('Europe/Bucharest');
	$curr_date=date('Y/m/d h:i:sa',time());
	$sql = "INSERT INTO user_comment_relation (comment,nameUser,comm_date) VALUES ('$comm','$name','$curr_date')";
	mysqli_query($con,$sql);
  }