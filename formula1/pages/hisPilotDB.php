<?php 
	include "../connect.php";
		
	$result = mysqli_query($con, "select * from hPilots");
	$str0 = "";
	$str1 = "";
	$str2 = "";
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$str0 .=' <div class="flex-container">
					<nav class="nav">
						<ul>';
		echo $str0;
		$str0="";
		
		$str1 .='<div class="polaroid"><li><img src="'.$row["pathPict"].'" alt="" /></li>
				<li><font size="4" ><a style="color:black;background:none"  href="'.$row["linkPath"].' ">'.$row["pilotName"].'</a></font></li></div>';
		echo $str1;	
		$str1="";
		
		$str2 .= '	</ul>
				 </nav>
				<article class="article">
					<h1 style="color:black">'.$row["description"].'</h1>
				</article>
				</div>';		
		echo $str2;	
		$str2="";
		
	}
	mysqli_close($con);