<?php
//VAR_DUMP LIMITS
ini_set('xdebug.var_display_max_depth', -1); //10
ini_set('xdebug.var_display_max_children', -1); //256
ini_set('xdebug.var_display_max_data', -1); //1024

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
require('simple_html_dom.php');

use Parsehub\Parsehub;
const MY_API_KEY = "tTXn1ETK9h_V";

class utils
{

    function file_get_contents_curl($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    public function getPrjList($api_key = MY_API_KEY){
        $parsehub = new Parsehub($api_key);
        $projectList = $parsehub->getProjectList();
        echo "<pre>";
        var_dump($projectList);
    }
}