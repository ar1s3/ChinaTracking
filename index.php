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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>

    <link href="css/styles.css" rel="stylesheet"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<body>

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">TEST N1</h1>
            <p class="lead fw-normal text-white-50 mb-0">CAPTION N1</p>
        </div>
    </div>
</header>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container w3-animate-opacity">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Servers')">Servers List</button>
        <button class="tablinks" onclick="openCity(event, 'Fruits')">Fruits Price</button>
        <button class="tablinks" onclick="openCity(event, 'Workers')">Workers List</button>
    </div>
    <div id="Servers" class="tabcontent">
        <table class="w3-animate-opacity">
            <tr>
                <th>Servers List</th>
                <th>Status</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Ubuntu Server 16.04.4</td>
                <td class="actived"><a href="#">Available</a></td>
                <td>1 year, 11 months, 23 hours, 59minutes, 59seconds</td>
            </tr>
            <tr>
                <td>Virtual Machine Windows Server 2002</td>
                <td class="actived"><a href="#">Available</a></td>
                <td>2 year, 11 months, 23 hours, 59minutes, 59seconds</td>
            </tr>
            <tr>
                <td>Windows 10 Spark server</td>
                <td class="deactivated"><a href="#">Unavailable</a></td>
                <td>0 year, 6 months, 2 hours, 9minutes, 40seconds</td>
            </tr>
            <tr>
                <td>Windows XP Professional</td>
                <td class="deactivated"><a href="#">Unavailable</a></td>
                <td>0 year, 0 month, 0 hours, 0 minutes, 0 seconds</td>
            </tr>

        </table>
    </div>

    <div id="Fruits" class="tabcontent w3-animate-opacity">
        <table>
            <tr>
                <th>Fruits</th>
                <th>Ammount</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Orange</td>
                <td>1 unit</td>
                <td>U$ 0,10</td>
            </tr>
            <tr>
                <td>Pineapple</td>
                <td>1 unit</td>
                <td>U$ 0,20</td>
            </tr>
            <tr>
                <td>Strawberry</td>
                <td>1 unit</td>
                <td>U$ 0,40</td>
            </tr>
            <tr>
                <td>Apple</td>
                <td>2 units</td>
                <td>U$ 0,40</td>
            </tr>

        </table>
    </div>

    <div id="Workers" class="tabcontent w3-animate-opacity">
        <table>
            <tr>
                <th>Officers</th>
                <th>Department</th>
                <th>Date of birth</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Leandro Bizzinotto Ferreira</td>
                <td>Web Designer</td>
                <td>23/09/1994</td>
                <td class="intraining">In training</td>
            </tr>
            <tr>
                <td>Cristiano Bizzinotto Ferreira</td>
                <td>Advertising</td>
                <td>23/09/1994</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Amanda Maria Bizzinotto Ferreira</td>
                <td>Polyglot, Translator, Developer</td>
                <td>17/07/1993</td>
                <td class="vacation">Vacation</td>
            </tr>
            <tr>
                <td>Luis Antonio Ferreira</td>
                <td>Personal Manager</td>
                <td>20/08/1966</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Luis Antonio Ferreira</td>
                <td>Personal Manager</td>
                <td>20/08/1968</td>
                <td class="available">Available</td>
            </tr>
            <tr>
                <td>Rita Helena Bizzinotto Ferreira</td>
                <td>Housewife</td>
                <td>20/07/1962</td>
                <td class="disable">Disable</td>
            </tr>
        </table>
    </div>
</div>

</body>

</html>
