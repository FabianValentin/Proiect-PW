<?php include('../register.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formula 1 Then & Now</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.toggleForm.js"></script>
</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="index.php"><img src="../images/demo/Formula-1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col5"><div id="container">
<div id="SignUp" class="wrapper col5" style="display:block">
<div>
	<button type="button" class="signupbtn" onclick="location.href='index.php';">Back to index</button>
</div>
	<button type="button" onclick="myFunction()" >Switch to Log in</button>
	<h2>Signup Form</h2>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc">
	
	<?php include('errors.php'); ?>
	
	<div class="container">
		<label><b>Name</b></label>
		<input type="text" placeholder="Enter your entire name" name="name" required>
		
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter username" name="username" required>
	
		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>

		<label><b>Password</b></label>	
		<input type="password" placeholder="Enter Password" name="psw1" required>
		
		<label><b>Verify Password</b></label>	
		<input type="password" placeholder="Enter Password Again" name="psw2" required>

		<div class="clearfix">
		<button type="button" class="cancelbtn">Cancel</button>
		<button type="submit" name ="register" class="signupbtn">Sign Up</button>
		</div>
	</div>
	</form>
</div> 

<div id="LogIn" class="wrapper col5" style="display:none">
<div>
	<button type="button" class="signupbtn" onclick="location.href='index.php';">Back to index</button>
</div>
	<button  type="button" onclick="myFunction()">Switch to Sign up</button>
	<h2>Login Form</h2>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc">>
	
	<?php include('errors.php'); ?>
	
	<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswd" required>
        
    <button type="submit" name="login">Login</button>

  </div>
</form>
</div>
</div>
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