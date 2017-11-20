
<?php
	include "../connect.php";
	$result = mysqli_query($con, "select * from races");
	$str1 = "";
	$str2 = "";
	$str3 = "";
	while($row = mysqli_fetch_assoc($result)) {
				
		$str1 .='<div align="center"> <font size="6">'.$row["name"].' '.$row["location"].'</font></div><pre></pre><pre></pre>';
		echo $str1;	
		$str1="";
		
		$str2 .= '<div align="center"> <img src='.$row["picturePath"].' alt= "" width="600px"/> </div><pre></pre>';		
		echo $str2;	
		$str2="";
		
		$str3 .='<div><font size="3">'.$row["description"].'</font></div> <pre></pre><pre> </pre>';
		echo $str3;	
		$str3="";
	
	}
	mysqli_close($con);
