<?php

include "languages.php";

?>
<html>
<head>
<script>
//var userName = prompt("Please, enter Your name");
</script>
<style>
  h1{
    color:#2d99b6;
  }
</style>
<title><?php echo $h1?></title>
<link rel="stylesheet" type="text/css" href="css/mysite.css">
<meta charset="UTF-8">
</head>
<body>
<div class="main-menu">
  <h1 class="mainmenu" align="center"><?php echo $h1?></h1>
  <div class = "banner"><img src=""></div>
  <div class = "list">
    <a href = "game.php?<?php echo $lang?>"><div class = "button"><?php echo $newgame?></div></a>
    <a href = "mainmenu.php?<?php echo $lng?>"><div class = "button"><?php echo $change_language?></div></a>
    <a href = "credits.php"><div class = "button"><?php echo $results?></div></a>
  </div>
  <br>
  <p><?php echo $controls?></p>
  <div id="controls">
    <img src = "pics/arrowleft.png" style="width:60px;height60px">
    <img src = "pics/arrowright.png"style="width:60px;height60px">
  </div>
</div>
</body>
</html>