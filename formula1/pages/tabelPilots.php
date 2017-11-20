<?php 
	include "../connect.php";
	$result = mysqli_query($con, "select * from pilots ORDER BY points DESC limit 4");
	$str0 = "";
	$str1 = "";
	$str2 = "";
	$str3 = "";
	while($row = mysqli_fetch_assoc($result)) {
		
		$str0 .='<tr class="light"><td>' .$row["name"]. '</td>';
		echo $str0;
		$str0="";
		
		$str1 .='<td>' .$row["team"]. '</td>';
		echo $str1;
		$str1="";
		
		$str2 .='<td>' .$row["points"]. '</td>';
		echo $str2;
		$str2="";
		
		$str3 .='<td>' .$row["votes"]. '</td></tr>';
		echo $str3;
		$str3="";
	}
	mysqli_close($con);
	
      