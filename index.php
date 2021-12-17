<?php


//use library\utils;

require_once('library/utils.php');
require_once('library/Parsehub/Parsehub.php');

$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

$html = file_get_html($urlFinal);
$agent = 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.0.0 Mobile Safari/537.36';

$utils = new utils();

// echo $utils->runParser($urlFinal);

$params = http_build_query(array(
    "api_key" => MY_API_KEY,
    "offset" => "0",
    "include_options" => "1"
));

$result = file_get_contents(
    'https://parsehub.com/api/v2/projects/ty88FLuX1Gta?'.$params,
    false,
    stream_context_create(array(
        'http' => array(
            'method' => 'GET'
        )
    ))
);
var_dump($result);