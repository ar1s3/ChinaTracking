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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>


<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">TEST N1</h1>
            <p class="lead fw-normal text-white-50 mb-0">CAPTION N1</p>
        </div>
    </div>
</header>

<body>

<div class="container"><h1>Bootstrap tab panel example (using nav-pills) </h1></div>
<div id="exTab1" class="container">
    <ul class="nav nav-pills">
        <li class="active">
            <a href="#1a" data-toggle="tab">Overview</a>
        </li>
        <li><a href="#2a" data-toggle="tab">Using nav-pills</a>
        </li>
        <li><a href="#3a" data-toggle="tab">Applying clearfix</a>
        </li>
        <li><a href="#4a" data-toggle="tab">Background color</a>
        </li>
    </ul>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="1a">
            <h3>Content's background color is the same for the tab</h3>
        </div>
        <div class="tab-pane" id="2a">
            <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the
                tab</h3>
        </div>
        <div class="tab-pane" id="3a">
            <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
        </div>
        <div class="tab-pane" id="4a">
            <h3>We use css to change the background color of the content to be equal to the tab</h3>
        </div>
    </div>
</div>

</body>

</html>
