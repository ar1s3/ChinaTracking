<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//START INIT LIBS
require_once('library/utils.php');
require_once('library/saramart.php');
//END INIT LIBS

$util = new utils();
$saraObj = new saramart();

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ChinaTracking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#myTab a:first").tab("show"); // show first/last tab
            });
        </script>
    </head>

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">TEST N1</h1>
                <p class="lead fw-normal text-white-50 mb-0">CAPTION N1</p>
            </div>
        </div>
    </header>

    <div class="text-center text-black">
        <form name="s1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Cerca: <input type="text" name="item"><br>
            <input type="submit">
        </form>
    </div>

<?php


if (isset($_POST['item']) & !empty($_POST['item'])) {

    $its = $_POST['item'];
    echo "<pre>";

    $response = json_decode(json_encode($saraObj->checkEmptiness()));
    $run_token = "";

    //print_r($response->run_list[0]->pages);die;

    $run_tks = (array_column((array)$response, 'run_token'));


    //cancella dati
    if (!empty($run_tks)) {

        foreach ($run_tks as $item => $i) {
            $saraObj->clearProject($i);
        }
    }

    try {

        $saraObj->runPrj($its);

    } catch (Exception $e) {
        var_dump("ERROR: $e");
        die;
    }


} else {
    $response = json_decode(json_encode($saraObj->checkEmptiness()));
    /*echo "<pre>";
    print_r($response->last_ready_run);
    die;
    print_r(__LINE__);die;
    */

    if ($response->last_ready_run && $response->last_ready_run->pages > 0) {

        $saraArray = json_decode($saraObj->getDataPrj(), true);


        $st = $saraArray['type']['0']['searchterm'];
        $items = $saraArray['type']['0']['DETAILS'];

        $cleanedArray = $util->cleanArray($items);
        $cleanedArray = $util->deDuplicate($cleanedArray);
    } else { ?>

        <div class="alert alert-primary" role="alert">
            ricerca item vuoto!
        </div>

    <?php } ?>

    <body>
    <div class="m-4">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#sm" class="nav-link" data-bs-toggle="tab">SaraMart</a>
            </li>
            <li class="nav-item">
                <a href="#ae" class="nav-link" data-bs-toggle="tab">Aliexpress</a>
            </li>
            <li class="nav-item">
                <a href="#lb" class="nav-link" data-bs-toggle="tab">LightInTheBox</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="sm">
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

                                            <!-- Product name <h5 class="fw-bolder">TEST</h5>-->

                                            <!-- Product price
                                            <span class="text-muted text-decoration-line-through">$20.00</span>-->
                                            <?php echo $d['ITEM_PRICE']; ?>€
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                                    href="<?php echo $d['ITEM_URL']; ?>"
                                                                    target="_blank">URL</a></div>
                                    </div>
                                </div>

                                </div><?php } ?>

                        </div>

                    </div>

                </section>


            </div>
            <div class="tab-pane fade" id="ae">
                <h4 class="mt-2">Profile tab content</h4>
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida
                    ut,
                    mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit
                    bibendum
                    turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum
                    convallis.
                    Nunc facilisis leo at faucibus adipiscing.</p>
            </div>
            <div class="tab-pane fade" id="lb">
                <h4 class="mt-2">Messages tab content</h4>
                <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit.
                    Donec
                    at
                    erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum
                    laoreet.
                    Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in
                    tempus
                    imperdiet. Cum sociis natoque penatibus et magnis.</p>
            </div>
        </div>
    </div>
    </body>
    </html>

    <?php
}
?>