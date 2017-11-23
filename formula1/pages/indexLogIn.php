<?php 
	session_start(); 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: indexLogIn.php");
	}

?>
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
    <div> <a href="indexLogIn.php"><img src="../images/demo/Formula1-Logo.png" alt="" /></a> </div>
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
		<?php if (!isset($_SESSION['username'])) :?>
		<li class="last"><a href="LogIn_Register.php">Vrei sa te inregistrezi/autentifici?</a></li>
		<?php endif ?>
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
    <div class="title" style="padding-bottom:15px" align= "center">Despre acest sport impresionant</div>
      <p align= "center"><font size="3">  Formula 1 (abreviata F1) este o intrecere de automobilism care se
		  organizeaza anual sub forma a doua campionate mondiale, care au loc
 		  in paralel, ambele fiind patronate de Federatia Internationala a 
		  Automobilului (FIA). </p>
	  <p align= "center"><font size="3" >  
			Numele de Formula provine de la faptul ca toate echipele inscrise
		  in campionat trebuie sa isi construiasca masinile (cunoscute si sub
		  numele de monoposturi) dupa un anumit regulament, o formula pe care
		  o decide FIA. Cifra 1 provine de la faptul ca intrecerea este 
		  catalogata drept cea mai prestigioasa formula organizata de FIA.
	  </p>
	  <p align= "center"><font size="3">
			Cele doua campionate sunt Campionatul Mondial al Pilotilor (engl:
		  World Drivers' Championship) si Campionatul Mondial al Constructorilor
		  (engl. World Constructors' Championship). In actuala editie a 
		  campionatului participa 10 echipe si 20 piloti.
	</p>
	 <p align= "center"><font size="3">
			Formula 1 este un sport cu mare trecere la public. Toate etapele campionatului 
			sunt televizate in mai mult de 200 de tari, numarul celor care privesc anual 
			intrecerea fiind depasit doar de numarul celor care urmaresc meciurile din
			Campionatul Mondial de Fotbal si Jocurile Olimpice.
     </p>
    </div>
    <div id="column">
      <div class="holder">
        <div class="title"><h2><font size="5">Ultimele informatii</font></h2></div>
        <ul id="latestnews">
          <li><img class="imgl" src="../images/demo/images(5).jpg" alt="" />
            <p><strong>Aproape campion</strong></p>
            <p>Hamilton este la o victorie distanta de a-si pastra titlul</p>
            <p class="readmore"><a href="http://www.automarket.ro/formula1/" target="_blank">Continua sa citesti &raquo;</a></p>
          </li>
          <li class="last"><img class="imgl" src="../images/demo/download(3).jpg" alt="" />
            <p><strong>Vettel, inca un pas gresit</strong></p>
            <p>Vettel, inca un pas gresit</p>
            <p class="readmore"><a href="http://www.automarket.ro/formula1/" target="_blank">Continua sa citesti &raquo;</a></p>
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