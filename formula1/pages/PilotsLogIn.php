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
      <li><a href="indexLogIn.php">Home</a></li>
      <li class="active"><a href="PilotsLogIn.php">Pilots</a><span>Vote your hero</span></li>
      <li><a href="SeasonLogIn.php">Season</a><span>Follow the season</span></li>
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
    <div id="content">
	<?php include("rating.php")?>
      <h1>Vote your favourite pilot</h1>
		<div class="container">
			<img src="../pilots/alo.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Fernando Alonso </div>
			</div>
			  <form action="result.php" method="post">
			  	<div class="stars">
				<input type="radio" name="starAlo" class="star-1" id="star-1" value=1/>
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="starAlo" class="star-2" id="star-2" value=2 />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="starAlo" class="star-3" id="star-3" value=3/>
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="starAlo" class="star-4" id="star-4" value=4/>
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="starAlo" class="star-5" id="star-5" value=5/>
				<label class="star-5" for="star-5">5</label>
				<span></span>
				</div>
			  </form>
			  <a href="PilotsLogIn.php" ><input name="rate" type="button" id="submit" value="Rate me" /></a>
			</div>
		<div class="container" class = >
			<img src="../pilots/bot.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Valtteri Bottas </div>
			</div>
			<form id="ratingsForm">
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
				</div>
			</form>
		</div>
		<div class="container" class = >
			<img src="../pilots/vet.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Sebastian Vettel </div>
			</div>
			<form id="ratingsForm">
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
				</div>
			</form>
		</div>
		<div class="container" class = >
			<img src="../pilots/ham.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Louis Hamilton </div>
			</div>
			<form id="ratingsForm">
				<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
				</div>
			</form>
		</div>
      <h2>Table</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Pilot</th>
            <th>Team</th>
            <th>Points</th>
            <th>Number of votes</th>
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
	  <?php include('pilotsCommInsert.php');?>
      <h2>Write A Comment</h2>
      <div id="respond">
        <form action="PilotsLogIn.php" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name required</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div class="clear"></div>
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
      <h2>Lacus interdum</h2>
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
</html>