<?php
if(!defined('SAFETORUN')) {
    die('');
}

$config = array(
    "urls" => array(
        "baseUrl" => "http://localhost:8000"
    )
);
 
/*
    Templates folder
*/
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("BASE_URL")
    or define("BASE_URL", $config['urls']['baseUrl'] . '/');
 
/*
    Error reporting.
*/
error_reporting(E_ALL);
@ini_set('display_errors', 1);