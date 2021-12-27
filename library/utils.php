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

class utils
{

    public function prettyPrint($var)
    {
        echo "<pre>" . print_r($var);
    }

    public function implode_all($glue, $arr)
    {
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            if (@is_array($arr[$i])) {
                $arr[$i] = implode_all($glue, $arr[$i]);
            }
        }
        return implode($glue, $arr);
    }


}