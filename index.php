<?php 

if(isset($_GET['ru'])){
  header("location: mainmenu.php?ru");
}elseif(isset($_GET['en'])){
  header("location: mainmenu.php?en");
}
else
header("Location: mainmenu.php?fr");
?>
