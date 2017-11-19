<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: LogIn_Register.php');
	}

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
      <li><a href="indexLogIn.php">Home</a></li>
      <li><a href="PilotsLogIn.php">Pilots</a><span>Vote you hero</span></li>
      <li><a href="SeasonLogIn.php">Season</a><span>Follow the season</span></li>
      <li><a href="">History</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Season</a></li>
          <li><a href="History_PilotsLogIn.php">Pilots</a></li>
		  <li class="active"><a href="History_TeamsLogIn.php">Teams</a></li>
        </ul>
		  <li><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<?php endif ?>
		  </li>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
   <div id="container">
    <h1 align="center"><font size="6" >The most important teams</font></h1>
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
</body>
</html>