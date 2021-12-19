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

require_once __DIR__ . '/../vendor/autoload.php';
require('simple_html_dom.php');

use Parsehub\Parsehub;

const MY_API_KEY = "tTXn1ETK9h_V";
const MY_PRJ_KEY = "ty88FLuX1Gta";

class utils {

}