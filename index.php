<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$parse = new utils();
$saraObj = new saramart();
$datas = json_decode($saraObj->getDataPrj());

echo "<pre>";

foreach ($datas->type[0]->selection3 as $key => $data) {

    //echo "<img src='".$data->image."'</img><br>";
    if (strpos($data->image, "data:image/svg+xml") === false) {
        echo $data->image . "<br>";
    }
    
}

