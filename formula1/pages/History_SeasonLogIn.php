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
<script type="text/javascript" src="../layout/scripts/modal.js"></script>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/modal.css" type="text/css" />

</head>
<body id="top">
<div class="wrapper col2">
  <div id="header">
    <div> <a href="#"><img src="../images/demo/Formula1-Logo.png" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li><a href="indexLogIn.php">Acasa</a></li>
      <li><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favoritul</span></li>
      <li><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="#">Istorie</a>
        <ul>
          <li class="active"><a href="History_SeasonLogIn.php">Sezon</a></li>
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
<div class="wrapper col5">
  <div id="container" align="center">
	<div class="title"  style="padding-bottom:15px">Momente remarcabile in istoria acestui sport</div><pre></pre>
	<img src="../images/demo/first.jpg" alt="Avatar" class="Avatar" onclick="document.getElementById('hisSea2').style.display='block'">
	<img src="../images/demo/crash.jpg" alt="Avatar" class="Avatar" onclick="document.getElementById('hisSea').style.display='block'">
	<img src="../images/demo/bernie.jpg" alt="Avatar" class="Avatar" onclick="document.getElementById('hisSea3').style.display='block'">
	<img src="../images/demo/sena.jpg" alt="Avatar" class="Avatar" onclick="document.getElementById('hisSea4').style.display='block'">
  </div>
  <div id="hisSea" class="modal">
  <form class="modal-content animate" action="/action_page.php"> 
    <div class="imgcontainer">
      <span onclick="document.getElementById('hisSea').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/demo/crash.jpg" alt="Avatar" class="avatar">
    </div>

    <div>
	
     <p><font size="3"> La data de 1 august 1976, in timpul celui de-al doilea tur la un viraj de stanga, Niki
				Lauda a fost implicat intr-un accident in care monopostul sau s-a desprins temporar de pe pista, a lovit un maarginea de protectie, a izbucnit in flacari si a 
				intrat in contact cu masina altor 2 piloti. Lauda a fost blocat in masina. Cativa piloti au ajuns in cateva momente la fata locului, dar inainte de a-l putea trage 
				pe Lauda din masina lui, el a suferit arsuri grave la cap si a inhalat gaze toxice si fierbinti care i-au afectat plamanii și sangele. 
				Desi Lauda a fost constient imediat după accident, a intrat ulterior in coma. </p>
				<p><font size="3">Lauda a suferit cicatrici la nivelul capului, pierzand cea mai mare parte a urechii drepte, precum si parul de pe partea dreapta a capului,
				sprancenele si pleoapele. De la accident, el a purtat întotdeauna un capac pentru a acoperi cicatricile de pe cap. </p>
				<p><font size="3">Dupa doar 6 saptamani el s-a intors pe circuit, iar la finalul sezonului chiar a devenit campion mondial</p>
			
	</div>
  </form>
</div>

<div id="hisSea2" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('hisSea2').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/demo/title.jpg" alt="Avatar" class="avatar">
    </div>

    <div>
	
     <p><font size="3"> In anul 1901 a fost folosit pentru prima data cuvantul de mare circ(grand prix) pentru a descrie o cursa. Aceasta a avut loc in Franta la Le Mans si este 
				cunoscuta drept Marele Cirs Francez(French Grand Prix). Interesul a fost destul de mare astfel incat in anul 1904 s-a infiintat Federatia Internationala de Automobile(FIA).
				O asociatie non-profit care reprezenta interesul oamenilor pentru sportul cu motor si automobilele utilizate in aceste competitii. Au avut loc un numar mare de intalniri
				 pentru a se crea si stabili un regulament,care continea reguli precum datele tehnice ale automobilului, interventia asupra sa in timpul cursei, dar si modul de alcatuire al grilei
				 de start.</p>
	 <p><font size="3">Fiind un astfel de interes si avand un public destul de infocat dupa aceste intreceri au aparut numeroase circuite noi. Din acest motiv a fost pusa problema care dintre 
				acestea ar trebui sa conteze pentru titlul de campion mondial atat la piloti, cat si la echipe(constructori). Fiecare echipa avea sponsori pentru a se putea finanta si dezvolta.</p>
	 <p><font size="3">	Astfel in 1958 Stirling Moss a castigat primul titlu de campion din Formula 1 pentru echipa sa care a castigat de asemena titlul pentru constructori.</p>		
			
	</div>
  </form>
</div>

<div id="hisSea3" class="modal">
  <form class="modal-content animate" action="/action_page.php">  
    <div class="imgcontainer">
      <span onclick="document.getElementById('hisSea3').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/demo/bernie2.jpg" alt="Avatar" class="avatar">
    </div>

    <div>
	
     <p><font size="3"> Bernie Ecclestone a devenit presedintele Asociatie de Constructori din Formula 1(FOCA) in anul 1978. Ca prima decizie a sa a fost sa introduca o masina medicala care sa ruleze in urma 
	 monoposturilor, gata sa intervina in caz ca in turul intai de cursa se produce vreun accident. La prima aparitie a acesteia, s-a izbit de marginea de protectie, destul de ironic.
	 Insa cu toate acestea el a introdus multe alte idei utile pentru Formula 1. Nu s-a dat in laturi de la nimic si nu s-a lasat intimidat de refuzul unor echipe la deciziile sale</p>
	 <p><font size="3">Pe baza acestei functii el a devenit un important om de afaceri si unul dintre miliardarii pamantului. Acest lucru s-a intamplat si mai mult in momentul in care el
	 a inceput sa negocieze drepturile de televiziune. Suma detinuta de acesta a ajuns la aproximativ 1,5 miliarde de lire sterline.</p>
	 <p><font size="3">	Datorita acestui om si ideilor sale Formula 1 a reusit sa se dezvolte semnificativ si a atras o multime de oameni si fani.</p>		
			
	</div>
  </form>
</div>

<div id="hisSea4" class="modal">
  <form class="modal-content animate" action="/action_page.php">
   <div class="imgcontainer">
      <span onclick="document.getElementById('hisSea4').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/demo/sena2.jpg" alt="Avatar" class="avatar">
    </div>

    <div>
     <p><font size="3">Ayrton Senna a fost un fost pilot de Formula 1 care s-a stins intr-un accident in anul 1994 in timpul Grand Prix-ului din San Marino in urma unui compportament neobiisnuit al monopostului sau.
	 Cu doar o zi inainte se mai stinsese un alt pilot, Roland Ratzenberger, in timpul calificarilor. A fost desemnat de multi alti cunoscatori, drept cel mai mare pilot care a concurat
	 vreodata, fiind peste Michael Schumacher si altii, pentru ca, dupa cum spuneau acestia, el isi depasea mereu limitele cand conducea.
	 El a fost ultimul pilot care a decedat intr-o cursa de Formula 1. A cucerit 3 titluri mondiale si probabil ar mai fi cucerit si altele.
	 </p>
	 <p><font size="3">A condus primul kart la doar 4 ani si ii facea o enorma placere sa urce la volanul tractorului tatalui seu de la ferma. La 13 ani a debutat oficial in intrecerile de karting, iar debutul in Formula 1 l-a facut la 16 ani 
	 in cursa din Brazilia. La cea de a doua cursa a reusit chiar sa il depaseasca pe cel care avea sa devina campion mondial.</p>
	 <p><font size="3">	In urma decesului sau au fost luate multe decizii de siguranta astfel incat sa nu se mai piarda alte vieti in timpul raliului.</p>		
			
	</div>
  </form>
</div>
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