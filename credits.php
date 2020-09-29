<?php
$db    = mysqli_connect("localhost","root","","step");
$query = "SELECT * FROM results;";
$sc    = mysqli_query($db,$query);
if(mysqli_errno($db)>0) echo mysqli_error($db);
?>
<html>
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/mysite.css">
</head> 
<table class = "result_list">
 <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Hours</td>
  <td>Minutes</td>
  <td>Seconds</td>
  <td>Milliseconds</td>
  <td>Score</td>
  <td>Date</td>
 </tr>
<?php
while($row = mysqli_fetch_array($sc,MYSQLI_ASSOC)){
	echo "<tr>";
    echo "<td>",$row["id"];
	echo "<td>",$row["name"];
	echo "<td>",$row["hours"];

	echo "<td>",$row["minutes"];
	echo "<td>",$row["seconds"];
	echo "<td>",$row["milliseconds"];
	echo "<td>",$row["score"];
	echo "<td>",$row["result_date"];
	echo "</tr>";
}

mysqli_close($db);
?>
</table>
 <div class = "list" style="margin:100px auto auto auto">
    <a href = "index.php"><div class = "button" style="margin:0 0 0 350px;">Le menu principal</div></a>
  </div>
  </html>