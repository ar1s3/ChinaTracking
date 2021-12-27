<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$util = new utils();
$saraObj = new saramart();

// ================================================================================ \\

$saraArray = json_decode($saraObj->getDataPrj(), true);
$datas = $saraArray["type"][0];
$searchTerm = $datas['searchterm'];

$details = $datas['DETAILS'];
$desc_item = $datas['DESC_ITEM'];
echo "<pre>";

$details = array_map("unserialize", array_unique(array_map("serialize", $details)));
$desc_item = array_map("unserialize", array_unique(array_map("serialize", $desc_item)));

if (count($details) !== count($desc_item)) {
    echo "Different array size";
    die;
}

for ($i = 0, $iMax = count($desc_item); $i < $iMax; $i++) {

    $details[$i]['DESC_ITEM'] = $desc_item[$i]['name'];

}

print_r($details);