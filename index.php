<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');

$parse = new utils();

$keys = array("moncler");

$res = $parse->runPrj($keys);

var_dump($res);

