<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('library/utils.php');
require_once('library/saramart.php');

$util = new utils();
$saraObj = new saramart();

$saraArray = json_decode($saraObj->getDataPrj(), true);
$datas = $saraArray["type"][0];
$searchTerm = $datas['searchterm'];

// ================================================================================ \\

$details = $datas['DETAILS'];
$desc_item = $datas['DESC_ITEM'];
echo "<pre>";

$details = $util->deDuplicate($details);
$desc_item = $util->deDuplicate($desc_item);

$util->checkArraysize($details, $desc_item);
$details = $util->addDescItemTo($desc_item, $details);

?>
<html>

<title>PARSING</title>

<body>

<?php

foreach ($details as $dets) {

    echo "<p>" . $dets["ITEM_URL"] . "</p>";

}

?>

</body>

</html>

