<?php include('../../connect.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formula 1 Then & Now</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.toggle.js"></script>
</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="#"><img src="../images/demo/Formula-1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="Pilots.html">Pilots</a><span>Vote you hero</span></li>
      <li><a href="Season.php">Season</a><span>Follow the season</span></li>
      <li><a href="#">History</a>
        <ul>
          <li><a href="History_Season.html">Season</a></li>
          <li><a href="History_Pilots.html">Pilots</a></li>
	  <li><a href="History_Teams.html">Teams</a></li>
        </ul>
      </li>
      <li class="active"><a href="LogIn_Register.html">LogIn/Register</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div id="SignUp"class="wrapper col5">
	<button type="button"onclick="myFunction()" >Switch to log in</button>
	<h2>Signup Form</h2>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc">
	<div class="container">
		<label><b>Name</b></label>
		<input type="text" placeholder="Enter your entire name" name="name" required>
		
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter username" name="username" value="<?php echo $usernam?>"required>
	
		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email"  value="<?php echo $mail?>"required>

		<label><b>Password</b></label>	
		<input type="password" placeholder="Enter Password" name="psw" required>

		<div class="clearfix">
		<button type="button" class="cancelbtn">Cancel</button>
		<button type="submit" name ="register" class="signupbtn">Sign Up</button>
		</div>
	</div>
	</form>
</div>

<div id="LogIn" class="wrapper col5" style="display:none;">
	<button onclick="myFunction()">Switch to sign up</button>
	<h2>Login Form</h2>

	<form>
	<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
</form>
</div>

<div class="wrapper col6" >
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
  
    <div class="footbox">
      <h2>Contact</h2>
      <ul>
        <li>Number 077x xxx xxx</li>
        <li>Email codau.fabian@yahoo.com</li>
        <li>Street Maresal.A.Av. nr.49</li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>