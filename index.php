<?php

require_once __DIR__ . '/vendor/autoload.php';

use Parsehub\Parsehub;

$api_key = "tTXn1ETK9h_V";
$parsehub = new Parsehub($api_key);
$projectList = $parsehub->getProjectList();
print $projectList;

