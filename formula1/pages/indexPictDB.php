<?php
	include "../connect.php";	
	$result = mysqli_query($con, "select * from index_page");
	$str = "";

	while($row = mysqli_fetch_assoc($result)) {	
		$str .='<li><img src='.$row["picturePath"].' alt="" />/li>';
		echo $str;	
		$str="";
	}
	mysqli_close($con);