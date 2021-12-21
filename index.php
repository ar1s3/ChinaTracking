<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');

$parse = new utils();


//$keys = array("moncler", "moncler man"); return $parse->runPrj($keys);


echo "<pre>"; //ciao
$parse ->prettyPrint($parse->getDataPrj());