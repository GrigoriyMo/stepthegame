<?php
if (isset($_GET['u_score']))
{
$gameOver = true;
extract($_GET);
setcookie('hours',$hours);
setcookie('min',$min);
setcookie('sec',$sec);
setcookie('msecs',$msecs);
setcookie('u_score',$u_score);
//echo "<pre>",print_r($_COOKIE),"</pre>";
unset($_GET);
}

header("Location: credits_add.php");
