<?php
$rand = rand(1, 5);

$op = file_get_contents('series/series'.$rand.'_text.txt');
$naz = file_get_contents('series/series'.$rand.'_header.txt');
$kart = file_get_contents('series/series'.$rand.'.jpg');



$assocArr = array(
    "opisanie" => $op,
    "nazvanie" => $naz,
    "kartinka" => $kart
);

function render($path_to_file, $assocArr){
    $str = file_get_contents($path_to_file);
    $tpl = strtr($str, $assocArr);
    return $tpl;
}

echo render('templates/template.html', $assocArr);

?>