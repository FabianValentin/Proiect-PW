<?php  

	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: LogIn_Register.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
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
    <div> <a href="#"><img src="../images/demo/Formula-1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li><a href="indexLogIn.php">Home</a></li>
      <li><a href="PilotsLogIn.php">Pilots</a><span>Vote you hero</span></li>
      <li class="active"><a href="SeasonLogIn.php">Season</a><span>Follow the season</span></li>
      <li><a href="#">History</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Season</a></li>
          <li><a href="History_PilotsLogIn.php">Pilots</a></li>
		  <li><a href="History_TeamsLogIn.php">Teams</a></li>
        </ul>
		<li>
			<!-- logged in user information -->
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
    <h1><font size="7">Current Season</font><action="Season.php"></h1>
    <ul>	
		<?php include("racesDB.php")?>
	</ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
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
        <li><a href="#">Number 077x xxx xxx</a></li>
        <li><a href="#">Email codau.fabian@yahoo.com</a></li>
        <li><a href="#">Street Mar.A.Av. nr.49</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</body>
