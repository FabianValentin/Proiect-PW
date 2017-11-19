<?php 
include "../connect.php";
if(isset( $_POST['starAlo'])){  
	$value = $_POST['starAlo']; 
	$sql = "UPDATE pilots SET points = $value WHERE id = 1";
	mysqli_query($con,$sql);
}
