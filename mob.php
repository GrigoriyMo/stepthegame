<?php
include "languages.php";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
<meta charset="UTF-8">
<title><?php echo $h1?></title>
<link rel="stylesheet" type="text/css" href="css/mb.css">
</head>
<body>
<div class = "button" id = 'game'><b><?php echo $newgame?></b></div>
<div id ='playArea'>
</div>
<div id = 'controls'>
<div class='left'></div>
<div class='right'></div>
</div>
<script src="js/new.js"></script>
<div id="panel">
	<!--<button class = "stop" >stopMoving</button> -->
	<p><b><?php echo $birds_missed?></b> <span id="errors"></span></p>
	<p><b><?php echo $score?></b> <span id="score"></span> </p>
	<p><b><?php echo $time?> </b>
    <div class="top-block">
        <div class="sw"><?php echo $hours?>
          <p class="hours">00</p>
        </div>
        <div class="sw"><?php echo $mins?>
          <p class="mins">00</p>
        </div>
        <div class="sw"><?php echo $secs?>
          <p class="secs">00</p>
        </div>
        <div class="sw"><?php echo $msecs?>
          <p class="milis">00</p>
        </div>
    </div>
  <a href = "mainmenu.php?<?php echo $lang?>"><div class = "button" id = 'game'><b><?php echo $to_main_menu?></b></div></a>  
</div>
</body>
</html>