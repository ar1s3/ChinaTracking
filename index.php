<?php
require_once('library/simple_html_dom.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

//$html = file_get_html($urlFinal);
$cl = curl_exec($urlFinal);
$html = new simple_html_dom();
$html->load($cl);


/* Find all images
foreach ($html->find('img') as $element)
    echo "<img src=\"".$element->src ."\"</img>". '<br>';
*/

//$ret1 = $html->find('div[class=image-viewer]');
$ret2 = $html->find('div.image-viewer',0)->children(1)->outertext;

var_dump($ret2);

