<?php
include "vocabulary.php";

if(isset($_GET['fr'])){
    $lang = 'fr';
    extract($FR);
}elseif(isset($_GET['en'])){
    $lang = 'en';
    extract($EN);
}elseif(isset($_GET['ru'])){
    $lang = 'ru';
    extract($RU);
}