<?php

require_once('library/utils.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;


//titolo articolo magari echo file_get_html($urlFinal)->plaintext;


$f = curl_get_file_contents($urlFinal);

$dom = new DOMDocument();
@$dom->loadHTML($f);
$data = $dom->getElementById("app");
$html = $dom->saveHTML($data);
echo $html;

