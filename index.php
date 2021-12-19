<?php
require_once('library/utils.php');


$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

$html = file_get_html($urlFinal);
$agent = 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.0.0 Mobile Safari/537.36';

$util = new utils();

$keys = ['iphone 6s case'];

//$util->runPrj($keys);


$dataJson = $util->getDataPrj();

//$dataBeauty = str_replace(array("{",/* "}",*/ '","'), array("{<br />&nbsp;&nbsp;&nbsp;&nbsp;", "<br />}", '",<br />&nbsp;&nbsp;&nbsp;&nbsp;"'), $dataJson);

var_dump($dataJson);


