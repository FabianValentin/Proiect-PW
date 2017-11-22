<?php 
	session_start(); 


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: LogIn_Register.php");
	}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formula 1 Then & Now</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="indexLogIn.php"><img src="../images/demo/Formula-1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li><a href="indexLogIn.php">Acasa</a></li>
      <li><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favorit</span></li>
      <li><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="">Istorie</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Sezon</a></li>
          <li><a href="History_PilotsLogIn.php">Piloti</a></li>
		  <li class="active"><a href="History_TeamsLogIn.php">Echipe</a></li>
        </ul>
		<?php if (!isset($_SESSION['username'])) :?>
		<li class="last"><a href="LogIn_Register.php">Vrei sa te inregistrezi/autentifici?</a></li>
		<?php endif ?>
		  <li style="float: right;"><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Bun venit, <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="indexLogIn.php?logout='1'" style="color: red;">Parasire</a> </p>
			<?php endif ?>
		  </li>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
   <div id="container">
    <h1 align="center"><font size="6" >Cele mai importante echipe</font></h1>
    <div class="flex-container">
		<nav class="nav">
			<ul>
				<li><img src="../teams/redbull.jpg" alt="" /></li>
				<li><img src="../teams/redbullCar.jpg" alt="" /></li>
				<li><font size="4"><a href="https://ro.wikipedia.org/wiki/Red_Bull_Racing">Red Bull Racing</a></font></li>

			</ul>
		</nav>
		<article class="article">
		   <div class="flex-container">
			<nav class="nav">
				<ul>
				<li><img src="../teams/rici.jpg" alt="" /></li>
				<h1>Daniel Ricciardo</h1>
				<li><img src="../teams/max.jpg" alt="" /></li>
				<h1>Max Verstappen</h1>
				</ul>
			</nav>
		   </div>
		</article>
   </div>

   <div class="flex-container">
		<nav class="nav">
			<ul>
				<li><img src="../teams/ferrari.png" alt="" /></li>
				<li><img src="../teams/ferrariCar.jpg" alt="" /></li>
				<li><font size="4" style="samp"><a href="https://ro.wikipedia.org/wiki/Scuderia_Ferrari">Scuderia Ferrari</a></font></li>

			</ul>
		</nav>
		<article class="article">
		  <div class="flex-container">
		   <nav class="nav">
			<ul>
				<li><img src="../pilots/vet.jpg" alt="" /></li>
				<h1>Sebastian Vettel</h1>
				<li><img src="../teams/kimi.jpg" alt="" /></li>
				<h1>Kimi Rainkonen</h1>
			</ul>
		   </nav>	
	      </div>
		</article>
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
</div>
</body>
</html>