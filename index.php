<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$parse = new utils();
$saraObj = new saramart();

// ================================================================================ \\

$saraArray = json_decode($saraObj->getDataPrj(), true);
$datas = $saraArray["type"][0];
$searchTerm = $datas['searchterm'];


echo "<pre>";
//>


print_r($datas);


