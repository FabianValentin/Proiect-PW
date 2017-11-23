<?php 
	include "../connect.php";
		
	$result = mysqli_query($con, "select * from user_comment_relation ORDER BY comm_date desc limit 3");
	$str0 = "";
	$str1 = "";
	$str2 = "";
	$str3 = "";
	$str4 = "";
	while($row = mysqli_fetch_assoc($result)) {
		
		$str0 .=' <ul class="commentlist">
					<li class="comment_odd">';
		echo $str0;
		$str0="";
		
		$str1 .='<div class="author"><img class="avatar" src="../images/demo/avatar.png" width="32" height="32" alt="" /><span class="name" style="color:red">'.$row["nameUser"].'</span> <span class="wrote">a scris:</span></div>';
		echo $str1;	
		$str1="";
		
		$str3 .='<p>'.$row["comment"].'</p>';
		echo $str3;	
		$str3="";
		
		$str2 .= '<div class="submitdate" align="right">'.$row["comm_date"].'</div>';		
		echo $str2;	
		$str2="";
		
		$str4=" </li>
			</ul>";
		echo $str4;
		$str4="";
	}
	mysqli_close($con);