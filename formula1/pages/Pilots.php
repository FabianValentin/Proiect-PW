<?php include('pilotsComm.php');?>
<html xmlns="http://www.w3.org/1999/xhtml">
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
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="Pilots.html">Pilots</a><span>Vote your hero</span></li>
      <li><a href="Season.php">Season</a><span>Follow the season</span></li>
      <li><a href="#">History</a>
        <ul>
          <li><a href="History_Season.html">Season</a></li>
          <li><a href="History_Pilots.html">Pilots</a></li>
	  <li><a href="History_Teams.html">Teams</a></li>
        </ul>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h1>Vote your favourite pilot</h1>
		<div class="container">
			<img src="../pilots/alo.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Fernando Alonso </div>
			</div>
		</div>
		<div class="container" class = >
			<img src="../pilots/bot.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Valtteri Bottas </div>
			</div>
		</div>
		<div class="container" class = >
			<img src="../pilots/vet.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Sebastian Vettel </div>
			</div>
		</div>
		<div class="container" class = >
			<img src="../pilots/ham.jpg" alt="Avatar" class="image" style="width:100%">
			<div class="middle">
				<div class="text">Louis Hamilton </div>
			</div>
		</div>
      <h2>Table</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Pilot</th>
            <th>Team</th>
            <th>Points</th>
            <th>Rating</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td>Value 12</td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td>Value 16</td>
          </tr>
        </tbody>
      </table>
      <div id="comments">
        <h2>Comments</h2>
       
			<?php include("pilotsDB.php")?>
		 
      </div>
      <h2>Write A Comment</h2>
      <div id="respond">
        <form action="Pilots.php" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
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