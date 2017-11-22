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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/stars.css" type="text/css" />
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
      <li class="active"><a href="PilotsLogIn.php">Piloti</a><span>Voteaza-ti favoritul</span></li>
      <li><a href="SeasonLogIn.php">Sezon</a><span>Urmareste sezonul</span></li>
      <li><a href="#">Istorie</a>
        <ul>
          <li><a href="History_SeasonLogIn.php">Sezon</a></li>
          <li><a href="History_PilotsLogIn.php">Piltoi</a></li>
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
    <div id="content">
      <h1>Voteaza-ti pilotul favorit</h1>
		<div class="container">
			<img src="../pilots/alo.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Fernando Alonso </div>
			</div>
			<?php if (isset($_SESSION['username'])) : ?>
				<form action="#" method="post">
				<?php
					include "../connect.php";
					if(isset($_POST['rateAlo'])){
						$selected_val = $_POST['star1'];  // Storing Selected Value In Variable
						$result = mysqli_query($con, "select * from pilots WHERE id = 1");
						$points=0;
						$votes=0;
						while($row = mysqli_fetch_assoc($result)) {
							$points = $row["points"];					
							$votes = $row["votes"];
						}
						$selected_val=$selected_val+$points;
						$votes=$votes+1;
						$sql = "UPDATE pilots SET points = $selected_val, votes = $votes WHERE id = 1";
						mysqli_query($con,$sql);
					}
				?>
					<div class="stars">
					<input type="radio" name="star1" class="star-1" id="star-11"  value=1>
					<label class="star-1" for="star-11">1</label>
					
					<input type="radio" name="star1" class="star-2" id="star-12"  value=2>
					<label class="star-2" for="star-12">2</label>
				
					<input type="radio" name="star1" class="star-3" id="star-13"  value=3>
					<label class="star-3" for="star-13">3</label>
				
					<input type="radio" name="star1" class="star-4" id="star-14"  value=4>
					<label class="star-4" for="star-14">4</label>
				
					<input type="radio" name="star1" class="star-5" id="star-15"  value=5>
					<label class="star-5" for="star-15">5</label>
					<span></span>
					</div>
					<input name="rateAlo" type="submit" id="rate" value="Rate Me" />
				</form>
			<?php endif ?>
		</div>
		
		<div class="container">
			<img src="../pilots/bot.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Valtteri Bottas </div>
			</div>
			<?php if (isset($_SESSION['username'])) : ?>
			<form action="#" method="post">
			<?php
				include "../connect.php";
				if(isset($_POST['rateBot'])){
					$selected_val = $_POST['star'];  // Storing Selected Value In Variable
					$result = mysqli_query($con, "select * from pilots WHERE id = 2");
					$points=0;
					$votes=0;
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["name"];
						$points = $row["points"];					
						$votes = $row["votes"];
					}
					$selected_val=$selected_val+$points;
					$votes=$votes+1;
					$sql = "UPDATE pilots SET points = $selected_val, votes = $votes WHERE id = 2";
					mysqli_query($con,$sql);

				}
			  ?>
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-21" value=1>
				<label class="star-1" for="star-21">1</label>
				<input type="radio" name="star" class="star-2" id="star-22" value=2>
				<label class="star-2" for="star-22">2</label>
				<input type="radio" name="star" class="star-3" id="star-23" value=3>
				<label class="star-3" for="star-23">3</label>
				<input type="radio" name="star" class="star-4" id="star-24" value=4>
				<label class="star-4" for="star-24">4</label>
				<input type="radio" name="star" class="star-5" id="star-25" value=5>
				<label class="star-5" for="star-25">5</label>
				<span></span>
				</div>
				<input name="rateBot" type="submit" id="rate" value="Rate Me" />
			</form>
			<?php endif ?>
		</div>

		<div class="container">
			<img src="../pilots/vet.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Sebastian Vettel </div>
			</div>
			<?php if (isset($_SESSION['username'])) : ?>
			<form action="#" method="post">
			<?php
				include "../connect.php";
				if(isset($_POST['rateVet'])){
					$selected_val = $_POST['star'];  // Storing Selected Value In Variable
					$result = mysqli_query($con, "select * from pilots WHERE id = 3");
					$points=0;
					$votes=0;
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["name"];
						$points = $row["points"];					
						$votes = $row["votes"];
					}
					$selected_val=$selected_val+$points;
					$votes=$votes+1;
					$sql = "UPDATE pilots SET points = $selected_val, votes = $votes WHERE id = 3";
					mysqli_query($con,$sql);

				}
			  ?>
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-31" value=1>
				<label class="star-1" for="star-31">1</label>
				<input type="radio" name="star" class="star-2" id="star-32" value=2>
				<label class="star-2" for="star-32">2</label>
				<input type="radio" name="star" class="star-3" id="star-33" value=3>
				<label class="star-3" for="star-33">3</label>
				<input type="radio" name="star" class="star-4" id="star-34" value=4>
				<label class="star-4" for="star-34">4</label>
				<input type="radio" name="star" class="star-5" id="star-35" value=5>
				<label class="star-5" for="star-35">5</label>
				<span></span>
				</div>
				<input name="rateVet" type="submit" id="rate" value="Rate Me" />
			</form>
			<?php endif ?>
		</div>
		
		<div class="container">
			<img src="../pilots/ham.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Louis Hamilton </div>
			</div>
			<?php if (isset($_SESSION['username'])) : ?>
			<form action="#" method="post">
			<?php
				include "../connect.php";
				if(isset($_POST['rateHam'])){
					$selected_val = $_POST['star'];  // Storing Selected Value In Variable
					$result = mysqli_query($con, "select * from pilots WHERE id = 4");
					$points=0;
					$votes=0;
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["name"];
						$points = $row["points"];					
						$votes = $row["votes"];
					}
					$selected_val=$selected_val+$points;
					$votes=$votes+1;
					$sql = "UPDATE pilots SET points = $selected_val, votes = $votes WHERE id = 4";
					mysqli_query($con,$sql);

				}
			  ?>
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-41" value=1>
				<label class="star-1" for="star-41">1</label>
				<input type="radio" name="star" class="star-2" id="star-42" value=2>
				<label class="star-2" for="star-42">2</label>
				<input type="radio" name="star" class="star-3" id="star-43" value=3>
				<label class="star-3" for="star-43">3</label>
				<input type="radio" name="star" class="star-4" id="star-44" value=4>
				<label class="star-4" for="star-44">4</label>
				<input type="radio" name="star" class="star-5" id="star-45" value=5>
				<label class="star-5" for="star-45">5</label>
				<span></span>
				</div>
				<input name="rateHam" type="submit" id="rate" value="Rate Me" />
			</form>
			<?php endif ?>
		</div>
	
      <h2>Clasamentul favoritilor</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Pilot</th>
            <th>Echipa</th>
            <th>Puncte</th>
            <th>Numar de voturi</th>
          </tr>
        </thead>
        <tbody>
             <?php include("tabelPilots.php")?>
        </tbody>
      </table>
      <div id="comments">
        <h2>Comments</h2>
       
			<?php include("pilotsComDB.php")?>
		 
      </div>
	 <?php if (isset($_SESSION['username'])) : ?> 
	  <?php include('pilotsCommInsert.php');?>
      <h2>Scrie un comentariu</h2>
      <div id="respond">
        <form action="PilotsLogIn.php" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Nume de utilizator(necesar)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comentariu</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
	  <?php endif ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
      <h2>Ramai informat!</h2>
      <p>Te rog introdu-ti emailul pentru a te inregistra in lista noastra</p>
      <form action="PilotsLogIn.php" method="post">
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
