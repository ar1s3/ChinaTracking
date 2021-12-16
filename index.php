<?php
require_once('library/simple_html_dom.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

$html = file_get_html($urlFinal);

/* Find all images
foreach ($html->find('img') as $element)
    echo "<img src=\"".$element->src ."\"</img>". '<br>';
*/

$ret = $html->find('image-viewer');

var_dump($ret);
