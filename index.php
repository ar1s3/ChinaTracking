<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('library/utils.php');

use Parsehub\Parsehub;


$urlBase = "https://www.saramart.pl/it-IT/detail/";
$urlProductDetail = "27639316";
$urlFinal = $urlBase . $urlProductDetail;

$html = file_get_html($urlFinal);
$agent = 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.0.0 Mobile Safari/537.36';

$api_key = MY_API_KEY;
$parsehub = new Parsehub($api_key);
$projectList = $parsehub->getProjectList();
var_dump($projectList);

