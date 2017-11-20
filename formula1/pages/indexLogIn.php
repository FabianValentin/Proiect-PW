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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formula 1 Then & Now</title>
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />

<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.jcarousel.setup.js"></script>
</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="indexLogIn.php"><img src="../images/demo/Formula-1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li class="active"><a href="indexLogIn.php">Home</a></li>
      <li><a href="PilotsLogIn.php">Pilots</a><span>Vote your hero</span></li>
      <li><a href="SeasonLogIn.php">Season</a><span>Follow the season</span></li>
      <li><a href="#">History</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Season</a></li>
          <li><a href="History_PilotsLogIn.php">Pilots</a></li>
		  <li class="last"><a href="History_TeamsLogIn.php">Teams</a></li>
        </ul>
		<div>
		  <li><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<?php endif ?>
		  </li>
		 </div>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="featured_slide">
    <div id="featured_content" >
      <ul>
			<?php include("indexPictDB.php")?>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="../layout/images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="../layout/images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h1 align= "center">About This Amazing Sport</h1>
      <p><font size="3">  Formula 1 (abreviata F1) este o intrecere de automobilism care se
		  organizeaza anual sub forma a doua campionate mondiale, care au loc
 		  in paralel, ambele fiind patronate de Federatia Internationala a 
		  Automobilului (FIA). </p>
	  <p><font size="3">  
			Numele de Formula provine de la faptul ca toate echipele inscrise
		  in campionat trebuie sa isi construiasca masinile (cunoscute si sub
		  numele de monoposturi) dupa un anumit regulament, o formula pe care
		  o decide FIA. Cifra 1 provine de la faptul ca intrecerea este 
		  catalogata drept cea mai prestigioasa formula organizata de FIA.
	  </p>
			Cele doua campionate sunt Campionatul Mondial al Pilotilor (engl:
		  World Drivers' Championship) si Campionatul Mondial al Constructorilor
		  (engl. World Constructors' Championship). In actuala editie a 
		  campionatului participa 10 echipe si 20 piloti.
	 <p><font size="3">
			Formula 1 este un sport cu mare trecere la public. Toate etapele campionatului 
			sunt televizate in mai mult de 200 de tari, numarul celor care privesc anual 
			intrecerea fiind depasit doar de numarul celor care urmaresc meciurile din
			Campionatul Mondial de Fotbal si Jocurile Olimpice.
     </p>
    </div>
    <div id="column">
      <div class="holder">
        <h2>News</h2>
        <ul id="latestnews">
          <li><img class="imgl" src="../images/demo/images(5).jpg" alt="" />
            <p><strong>Almost champions</strong></p>
            <p>Hamilton at one victory to keep the title.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img class="imgl" src="../images/demo/download(3).jpg" alt="" />
            <p><strong>Vettel, another wrong step</strong></p>
            <p>Vettel had an another accident and lost points in front of Hamilton</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
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