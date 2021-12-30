<?php

//VAR_DUMP LIMITS
/*
ini_set('xdebug.var_display_max_depth', -1); //10
ini_set('xdebug.var_display_max_children', -1); //256
ini_set('xdebug.var_display_max_data', -1); //1024
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once(__DIR__ . '/../vendor/autoload.php');

class utils {

    public function prettyPrint($var) {
        echo "<pre>" . print_r($var);
    }

    public function deDuplicate($arr): array {
        return array_map("unserialize", array_unique(array_map("serialize", $arr)));
    }


    public function checkArraysize(array $a, array $b) {
        if (count($a) !== count($b)) {
            echo "Different array size";
            die;
        }
    }

    function addDescItemTo(array $desc_item, array $array): array {


        for ($i = 0, $iMax = count($desc_item); $i < $iMax; $i++) {

            $array[$i]['DESC_ITEM'] = $desc_item[$i]['name'];

        }
        return $array;
    }


}