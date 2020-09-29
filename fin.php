<?php session_start(); ?>

<script>

//var userName = prompt("S'il vous plaît entrez votre nom");

</script>

<?php

if (isset($_GET['u_score']))
{
    echo "Значение JavaScript-переменной: ". $_GET['u_score'];
}

else
{   
    echo '<script type="text/javascript">';
    echo 'document.location.href="' ."credits.php". '?u_score=" + userName';
    echo '</script>';
    exit();
}


?>