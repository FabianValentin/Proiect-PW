<?php
include"../connect.php";

if(isset($_POST['news_go'])){

	$emailUser = mysqli_real_escape_string($con,$_POST['emailU']);
	$sql = "INSERT INTO newslatter (email) VALUES ('$emailUser')";
	mysqli_query($con,$sql);
}
