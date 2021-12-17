<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require('simple_html_dom.php');
const MY_API_KEY = "tTXn1ETK9h_V";

class utils
{

    function file_get_contents_curl($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    function runParser($url)
    {

        $params = array(
            "api_key" => MY_API_KEY,
            "start_url" => $url,
            "start_template" => "main_template",
            //"start_value_override" => "{\"query\": \"San Francisco\"}",
            "send_email" => "0"
        );

        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
                'content' => http_build_query($params)
            )
        );

        $context = stream_context_create($options);
        $return = file_get_contents('https://parsehub.com/api/v2/projects/ty88FLuX1Gta/run', false, $context);

        return !empty($return) ?? "Error";

    }

}