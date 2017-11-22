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
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li class="active"><a href="indexLogIn.php">Acasa</a></li>
      <li><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favoritul</span></li>
      <li><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="#">Istorie</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Sezon</a></li>
          <li><a href="History_PilotsLogIn.php">Piloti</a></li>
		  <li class="last"><a href="History_TeamsLogIn.php">Echipe</a></li>
        </ul>
		<div>
		  <li style="float: right;"><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Bun venit, <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="indexLogIn.php?logout='1'" style="color: red;">Parasire</a> </p>
			<?php endif ?>
		  </li>
		</div>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col5">
 <div id="container">
   <?php include('errors.php'); ?>
  <div id="SignUp" class="wrapper col5" style="display:block">
	<div align="center" class="title">Formular de inregistrare</div><pre></pre>
	<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc" class="c">
	
	<div class="cont">
		<label class="formtext">Nume</label>
		<input type="text" placeholder="Introdu numele complet" name="name" required>
		
		<label class="formtext">Nume de utilizator</label>
		<input type="text" placeholder="Introdu numele de utilizator" name="username" required>
	
		<label class="formtext">Email</label>
		<input type="text" placeholder="Introdu emailul" name="email" required>

		<label class="formtext">Parola</label>	
		<input type="password" placeholder="Introdu parola" name="psw1" required>
		
		<label class="formtext">Verificare parola</label>	
		<input type="password" placeholder="Introdu parola din nou" name="psw2" required>

		<div class="clearfix">
			<button type="button" class="cancelbtn">Anulare</button>
			<button type="submit" name ="register" class="signupbtn">Inregistrare</button>
		</div>
	</div>
	</form>
	<pre></pre>
	<div align="center"><button type="button" class="autentificare" onclick="myFunction()" >Schimba la autentificare</button></div>
</div> 
	<div id="LogIn" class="wrapper col5" style="display:none">
		<div align="center" class="title">Formular de autentificare</div><pre></pre>
		<form action="LogIn_Register.php" method="post" style="border:1px solid #ccc" class="c"> 	
	
		<?php include('errors.php'); ?>
	
		<div class="cont">
		<label class="formtext">Nume de utilizator</label>
		<input type="text" placeholder="Introdu numele de utilizator" name="uname" required>

		<label class="formtext">Parola</label>
		<input type="password" placeholder="Introdu parola" name="pswd" required>
       
		<div align="center"><button type="submit" class="signin" name="login">Autentificare</button></div>

  </div>
</form>
<div align="center"><button type="button" class="autentificare" onclick="myFunction()" >Schimba la inregistrare </button></div>
</div>
</div>

<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
      <h2>Ramai informat!</h2>
      <p>Te rog introdu-ti emailul pentru a te inregistra in lista noastra</p>
      <form action="Pilots.php" method="post">
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