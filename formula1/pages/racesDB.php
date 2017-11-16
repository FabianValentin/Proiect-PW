<?php
	include "../connect.php";
		
	$result = mysqli_query($con, "select * from races");
	$str1 = "";
	$str2 = "";
	$str3 = "";
	while($row = mysqli_fetch_assoc($result)) {
				
		$str1 .='<p><font size="5">'.$row["name"].' '.$row["location"].'</font><p>';
		echo $str1;	
		$str1="";
		
		$str2 .= '<div> <img src='.$row["picturePath"].' alt="" /> </div>';		
		echo $str2;	
		$str2="";
		
		$str3 .='<p><font size="3">'.$row["description"].'</font></p>';
		echo $str3;	
		$str3="";
	}
	mysqli_close($con);
		