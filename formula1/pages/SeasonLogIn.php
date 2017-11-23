<?php  

	session_start();

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: indexLogIn.php");
	}

?>
<head>
<title>Formula 1 Then & Now</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="#"><img src="../images/demo/Formula1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li><a href="indexLogIn.php">Acasa</a></li>
      <li><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favoritul</span></li>
      <li class="active"><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="#">Istorie</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Sezon</a></li>
          <li><a href="History_PilotsLogIn.php">Piloti</a></li>
		  <li><a href="History_TeamsLogIn.php">Echipe</a></li>
        </ul>
		<?php if (!isset($_SESSION['username'])) :?>
		<li class="last"><a href="LogIn_Register.php">Vrei sa te inregistrezi/autentifici?</a></li>
		<?php endif ?>
		<div>
		<li style="float: right;">
			<!-- logged in user information -->
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
<div class="wrapper col5">
  <div id="container">
    <div class="title" align="center">Cursele sezonului curent</div><pre></pre>
    <ul>	
		<?php include("racesDB.php")?>
	</ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
      <h2>Ramai informat!</h2>
      <p>Te rog introdu-ti emailul pentru a te inregistra in lista noastra</p>
      <form action="SeasonLogIn.php" method="post">
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