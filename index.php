<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$parse = new utils();
$saraObj = new saramart();


//$keys = array("moncler", "moncler man"); return $parse->runPrj($keys);

print_r($saraObj->getDataPrj());