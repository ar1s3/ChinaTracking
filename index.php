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
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
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

<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a
                class="nav-link active"
                id="ex1-tab-1"
                data-mdb-toggle="tab"
                href="#ex1-tabs-1"
                role="tab"
                aria-controls="ex1-tabs-1"
                aria-selected="true"
        >Tab 1</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a
                class="nav-link"
                id="ex1-tab-2"
                data-mdb-toggle="tab"
                href="#ex1-tabs-2"
                role="tab"
                aria-controls="ex1-tabs-2"
                aria-selected="false"
        >Tab 2</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a
                class="nav-link"
                id="ex1-tab-3"
                data-mdb-toggle="tab"
                href="#ex1-tabs-3"
                role="tab"
                aria-controls="ex1-tabs-3"
                aria-selected="false"
        >Tab 3</a
        >
    </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php foreach ($cleanedArray as $dets => $d) { ?>

                        <div class="col mb-5">
                        <div class="card h-100"> <!-- SCHEDA ITEM -->

                            <!-- Sale badge
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            -->

                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $d['IMG_URL']; ?>"/>
                            <!--  width="420" height="420" -->

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">

                                    <!-- Product name-->
                                    <h5 class="fw-bolder">TEST</h5>

                                    <!-- Product price
                                    <span class="text-muted text-decoration-line-through">$20.00</span>-->
                                    <?php echo $d['ITEM_PRICE']; ?>€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="<?php echo $d['ITEM_URL']; ?>  target="
                                                            _blank">URL</a></div>
                            </div>
                        </div>

                        </div><?php } ?>

                </div>

            </div>

        </section>

    </div>

    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        Tab 2 content
    </div>

    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
        Tab 3 content
    </div>

</div>
<!-- Tabs content -->


</body>

</html>
