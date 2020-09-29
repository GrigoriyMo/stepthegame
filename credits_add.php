<head>
    <link rel="stylesheet" type="text/css" href="/css/mysite.css">
</head><meta charset="UTF-8">
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
 $args = 
  [
 "uname" => FILTER_SANITIZE_STRING,
   ];
 $params = filter_input_array(INPUT_POST,$args);
 $uname   = $params["uname"];
 $msecs   = $_COOKIE["msecs"];
 $sec     = $_COOKIE["sec"];
 $min     = $_COOKIE["min"];
 $hours   = $_COOKIE["hours"];
 $u_score   = $_COOKIE["u_score"];
 $link = mysqli_connect("localhost","root","","step");
    if(mysqli_connect_errno() > 0){
	    echo mysqli_connect_error();
	    die;
	//echo "Сайт под нагрузкой";
    }
$today = date("Y-m-d H:i:s");

$sql = "insert into results values(
    NULL,
    '$uname',
    '$hours',
    '$min',
    '$sec',
    '$msecs',
    '$u_score',
    '$today'
    )";

unset($_POST);    
$result = mysqli_query($link,$sql);
if(mysqli_errno($link)>0) echo mysqli_error($link);
mysqli_close($link);
unset($_COOKIE);
header("Location: credits.php");
}

/*
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
}*/
//echo "<pre>",print_r($_COOKIE),"</pre>";
extract($_COOKIE);


?>

<div class = "saveres">
    
<form action="" method="POST" name="save">
<table class = "result_list">
 <tr>
  <td>Hours</td>
  <td>Minutes</td>
  <td>Seconds</td>
  <td>Milliseconds</td>
  <td>Score</td>

 </tr>
 <tr>
  <td><?php echo $hours ?></td>
  <td><?php echo $min ?></td>
  <td><?php echo $sec ?></td>
  <td><?php echo $msecs ?></td>
  <td><?php echo $u_score ?></td>
 </tr>
 </table>
<p>Ecrivez  votre nom pour enregistrer le résultat:</p>
<input type="text" class="form-control" name="uname" value=<?php echo $uname   ?>>

    
<input type="submit" class="btn btn-default" value="saveresults" >
</form>
</div>




