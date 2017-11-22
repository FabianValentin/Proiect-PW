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
	<button type="button" class="signupbtn" onclick="location.href='indexLogIn.php';">Inapoi la acasa</button>
</div>
	<button type="button" onclick="myFunction()" >Schimba la autentificare</button>
	<h2>Formular de inregistrare</h2>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc">
	
	<?php include('errors.php'); ?>
	
	<div class="container">
		<label><b>Nume</b></label>
		<input type="text" placeholder="Introdu numele complet" name="name" required>
		
		<label><b>Nume de utilizator</b></label>
		<input type="text" placeholder="Introdu numele de utilizator" name="username" required>
	
		<label><b>Email</b></label>
		<input type="text" placeholder="Introdu emailul" name="email" required>

		<label><b>Parola</b></label>	
		<input type="password" placeholder="Introdu parola" name="psw1" required>
		
		<label><b>Verificare parola</b></label>	
		<input type="password" placeholder="Introdu parola din nou" name="psw2" required>

		<div class="clearfix">
		<button type="button" class="cancelbtn">Anulare</button>
		<button type="submit" name ="register" class="signupbtn">Inregistrare</button>
		</div>
	</div>
	</form>
</div> 

<div id="LogIn" class="wrapper col5" style="display:none">
<div>
	<button type="button" class="signupbtn" onclick="location.href='indexLogIn.php';">Inapoi la acasa</button>
</div>
	<button  type="button" onclick="myFunction()">Schimba la inregistrare</button>
	<h2>Autentificare</h2>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc">>
	
	<?php include('errors.php'); ?>
	
	<div class="container">
    <label><b>Nume de utilizator</b></label>
    <input type="text" placeholder="Introdu numele de utilizator" name="uname" required>

    <label><b>Parola</b></label>
    <input type="password" placeholder="Introdu parola" name="pswd" required>
        
    <button type="submit" name="login">Autentificare</button>

  </div>
</form>
</div>
</div>
</div>

<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
      <h2>Ramai informat!</h2>
      <p>Te rog introdu-ti emailul pentru a te inregistra in lista noastra</p>
      <form action="LogIn_Register.php" method="post">
        <fieldset>
          <legend>News Letter</legend>
		  <?php include('newslatter.php');?>
          <input type="text" value="Introdu emailul aici&hellip;" name="emailU"  onfocus="this.value=(this.value=='Introdu emailul aici&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
    </div>
    <div class="footbox">
      <h2>Contact</h2>
      <ul>
        <li><a href="#">Numar 0770 746 398</a></li>
        <li><a href="#">Email codau.fabian@yahoo.com</a></li>
        <li><a href="#">Starada Maresal.Al.Averescu nr.49</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>