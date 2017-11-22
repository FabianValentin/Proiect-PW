<?php  

	session_start();

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
      <li><a href="indexLogIn.php">Acasa</a></li>
      <li><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favoritul</span></li>
      <li><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="#">Istoria</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Sezon</a></li>
          <li class="active"><a href="History_PilotsLogIn.php">Piloti</a></li>
		  <li><a href="History_TeamsLogIn.php">Echipe</a></li>
        </ul>
		<?php if (!isset($_SESSION['username'])) :?>
		<li class="last"><a href="LogIn_Register.php">Vrei sa te inregistrezi/autentifici?</a></li>
		<?php endif ?>
		 <li style="float: right;"><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="indexLogIn.php?logout='1'" style="color: red;">logout</a> </p>
			<?php endif ?>
		  </li>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="container">
    <h1><font size="6">The most important pilots</font></h1>
    <div class="flex-container">
		<nav class="nav">
			<ul>
				<li><img src="../pilots/vet.jpg" alt="" /></li>
				<li><font size="4"><a href="https://ro.wikipedia.org/wiki/Sebastian_Vettel">Sebastian Vettel</a></font></li>
			</ul>
		</nav>
		<article class="article">
			<h1>Este cel mai tanar pilot care a castigat campionatul mondial de Formula 1. A cucerit titlul la piloti �n sezoanele 2010, 2011,2012 si 2013 ?i totodata cu ajutorul coechipierului sau Mark Webber, a castigat titlurile mondiale la constructori �n aceeasi ani 2010, 2011, 2012 respectiv 2013 pentru echipa lor Red Bull Renault. Vettel detine numeroase recorduri �n Formula 1 de tipul "cel mai tanar pilot",precum: cel mai tanar pilot care a luat parte intr-o sesiune oficiala de antrenamente in marele circ,cel mai tanar pilot care a punctat �n Formula 1,care a condus o cursa, care a plecat din pole position si care a castigat o cursa.</h1>
		</article>
	</div>
	<div class="flex-container">
		<nav class="nav">
			<ul>
				<li><img src="../pilots/ham.jpg" alt="" /></li>
				<li><font size="4"><a href="https://ro.wikipedia.org/wiki/Lewis_Hamilton">Lewis Hamilton</a></font></li>
			</ul>
		</nav>
		<article class="article">
			<h1>El a debutat �n campionatul mondial �n 2007, la echipa McLaren Mercedes. Este primul pilot de culoare din Formula 1, fiind nascut �n Marea Britanie dar din parinti imigranti din Grenada. Lewis si-a inceput cariera �n karting �n 1995, acolo unde a reusit sa se impuna cu usurinta in multe competitii la care a luat startul, fiind inca din acea perioada luat sub aripa protectoare a lui Ron Dennis si a echipei sale, McLaren, care avea sa ii finanteze cariera odata ce si-a facut debutul in Formula Renault, campionatul britanic, seria de iarna - un minicampionat care se organizeaza in lunile de iarna si unde participa de regula multi debutanti - �n 2001 cand a terminat pe locul al cincilea.</h1>
		</article>
	</div>
	<div class="flex-container">
		<nav class="nav">
			<ul>
				<li><img src="../pilots/mic.jpg" alt="" /></li>
				<li><font size="4"><a href="https://ro.wikipedia.org/wiki/Michael_Schumacher">Michael Schumacher</a></font></li>
			</ul>
		</nav>
		<article class="article">
		    <h1>Michael Schumacher  este un fost pilot de Formula 1. Statistic, prin prisma celor sapte titluri mondiale castigate, a celor 91 de victorii, 68 de pole position-uri si 76 de cele mai rapide tururi, Michael Schumacher este considerat drept cel mai bun pilot de Formula 1 din toate timpurile.In 2006, in urma unui sondaj efectuat de FIA, Michael Schumacher a fost votat de catre fanii Formulei 1 drept cel mai popular pilot care a evoluat vreodata in acest sport.Michael Schumacher mai are un frate, Ralf Schumacher, cei doi fiind unicii frati care au castigat curse �n Formula 1, si au devenit primii frati care au terminat pe primele doua pozitii in aceasi cursa, o performanta pe care au mai repetat-o de patru ori..In decembrie 2013, Schumacher a suferit o trauma serioasa la cap in timp ce schia �n statiunea Meribel, din alpii francezi. El a fost transportat pe cale aeriana la spital, operat si indus �n stare coma artificiala. Dupa ce s-a aflat in coma din 29 decembrie 2013 pana pe 16 iunie 2014, el a parasit spitalul din Grenoble pentru a se reabilita in continuare la Spitalul Universitatii din Lausanne, Elvetia.</h1>		
		</article>
	</div>
	<h1><font size="6">Alti piloti marcanti pot fi gasiti la acest<a href="https://ro.wikipedia.org/wiki/Formula_1#Cei_mai_reprezentativi_pilo.C8.9Bi_de_Formula_1"> link</a></font></h1>
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