<?php
if (!defined('SAFETORUN')) {
  die('');
}
$myTitle = 'Home Page';
$mycss = "assets/css/styles.css";
require "header.php";
// Body
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
