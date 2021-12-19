<?php
//VAR_DUMP LIMITS
$ch = curl_init();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once __DIR__ . '/vendor/autoload.php';

use Parsehub\Parsehub;

$api_key = "tTXn1ETK9h_V";
$parsehub = new Parsehub($api_key);
$projectList = $parsehub->getProjectList();
var_dump($projectList);

