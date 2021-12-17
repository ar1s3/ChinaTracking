<?php

require_once('library/utils.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;


//titolo articolo magari echo file_get_html($urlFinal)->plaintext;

/*
$a = new utils();
$a->file_get_contents_curl("google.it");
$dom = new DOMDocument();
@$dom->loadHTML($a);
$data = $dom->getElementById("app");
$html = $dom->saveHTML($data);
echo $html;
*/

$a = file_get_contents("https://www.google.it");
echo "<pre>";
var_dump($a);

