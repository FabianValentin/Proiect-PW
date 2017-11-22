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
		
		$str1 .='<li><img src="'.$row["pathPict"].'" alt="" /></li>
				<li><font size="4"><a href="'.$row["linkPath"].'">'.$row["pilotName"].'</a></font></li>';
		echo $str1;	
		$str1="";
		
		$str2 .= '	</ul>
				 </nav>
				<article class="article">
					<h1>'.$row["description"].'</h1>
				</article>
				</div>';		
		echo $str2;	
		$str2="";
		
	}
	mysqli_close($con);