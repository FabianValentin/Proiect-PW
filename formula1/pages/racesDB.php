
<?php
	include "../connect.php";
	$result = mysqli_query($con, "select * from races");
	$str1 = "";
	$str2 = "";
	$str3 = "";
	$count = 1;
	while($row = mysqli_fetch_assoc($result)) {
				
		$str1 .='<div align="center" class="race">'.$count.'. '.$row["location"].'</div><pre></pre><pre></pre>';
		echo $str1;	
		$str1="";
		
		$str2 .= '<div align="center"> <div class="polaroid"> <img src='.$row["picturePath"].' alt= "" width="100%"/>';		
		echo $str2;	
		$str2="";
		
		$str3 .='<div class="containere">'.$row["description"].'</div></div></div> <pre></pre><pre> </pre>';
		echo $str3;	
		$str3="";
		$count = $count + 1;
	}
	mysqli_close($con);
