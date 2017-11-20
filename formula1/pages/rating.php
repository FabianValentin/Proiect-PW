<?php
	include "../connect.php";
	if(isset($_POST['rate'])){
	$selected_val = $_POST['star'];  // Storing Selected Value In Variable
	$sql = "UPDATE pilots SET points = $selected_val WHERE id = 1";
		mysqli_query($con,$sql);

}
?>