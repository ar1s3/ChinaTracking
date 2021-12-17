<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/simple_html_dom.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

$html = file_get_html($urlFinal,false);

/*
foreach($html->find('img') as $element)
    echo $element->src . '<br>';

foreach($html->find('a') as $element)
    echo $element->href . '<br>';
*/

$ret = $html->find('.app');

//titolo articolo magari echo file_get_html($urlFinal)->plaintext;ù

var_dump($ret);