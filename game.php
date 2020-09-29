<?php
include "languages.php";
/*$css =  "/step/css/mysite.css";
$array = ["Windows Phone","Android","IOS","Windows Mobile"];
$agent = $_SERVER['HTTP_USER_AGENT'];
            if(preg_match("~".implode("|",$array)."~",$agent)){
                   header ("Location: mob.php");
            }
*/
?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $h1?></title>
<link rel="stylesheet" type="text/css" href="/step/css/mysite.css">
</head>
<body>
  <canvas id='myCanvas' width='600' height='800'>
  
</canvas>
<div id="panel">
	<button style="font-family: PressStart, 'Comic Sans MS', cursive;"><?php echo $newgame?></button>
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

<script src="js/cs.js"></script>

</body>
</html>
