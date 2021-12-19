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
const MY_PRJ_KEY = "ty88FLuX1Gta";

class utils {

    function file_get_contents_curl($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    public function getPrjList($api_key = MY_API_KEY) {
        $parsehub = new Parsehub($api_key);
        $projectList = $parsehub->getProjectList();
        echo "<pre>";
        var_dump($projectList);
    }

    public function getDataPrj($api_key = MY_API_KEY, $prj_key = MY_PRJ_KEY): string {

        $parsehub = new Parsehub($api_key);
        return $parsehub->getLastReadyRunData($prj_key);

    }

    public function customGetDataPrj($format = 'csv', $api_key = MY_API_KEY, $prj_key = MY_PRJ_KEY) {

        $params = http_build_query(array(
            "api_key" => $api_key,
            "format" => $format
        ));

        $result = file_get_contents(
            'https://parsehub.com/api/v2/projects/' . $prj_key . '/last_ready_run/data?' . $params,
            false,
            stream_context_create(array(
                'http' => array(
                    'method' => 'GET'
                )
            ))
        );
        echo($result);

    }

    public function runPrj(array $keywords, $api_key = MY_API_KEY, $prj_key = MY_PRJ_KEY) {
        if (empty($keywords)) {
            return 0;
        }

        $parsehub = new Parsehub($api_key);
        $options = array(
            // Skip start_url option if don't want to override starting url configured
            // on parsehub.
            'start_url' => 'https://www.saramart.pl/it-IT/s/',
            // Enter comma separated list of keywords to pass into `start_value_override`
            'keywords' => implode($keywords),
            // Set send_email options. Skip to remain this value default.
            'send_email' => 0
        );
        return $parsehub->runProject($prj_key, $options);
    }
}