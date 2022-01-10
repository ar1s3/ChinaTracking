<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$util = new utils();
$saraObj = new saramart();

/*

$saraObj->runPrj("nike");

echo "started";

sleep(60);

echo "finish - getting data";
*/

$saraArray = json_decode($saraObj->getDataPrj(), true);


$st = $saraArray['type']['0']['searchterm'];
$items = $saraArray['type']['0']['DETAILS'];

//echo "<pre>";

$cleanedArray = $util->cleanArray($items);
$cleanedArray = $util->deDuplicate($cleanedArray);


?>
<!-- HTML BEGIN -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Shop Homepage - Start Bootstrap Template</title

</head>


<body>

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">TEST N1</h1>
            <p class="lead fw-normal text-white-50 mb-0">CAPTION N1</p>
        </div>
    </div>
</header>



</body>

</html>
