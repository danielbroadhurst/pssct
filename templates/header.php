<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mytitle ?></title>
    <meta name="Description" content="<?= $myMetaDescription ?>" />

    <link rel="canonical" href="<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:locale" content="en_GB">
    <meta property="og:site_name" content="Positive Safety Solutions - Health and Safety Consultants, NVQ and training providers">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $mytitle ?>">
    <meta property="og:description" content="<?= $myMetaDescription ?>">
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= $mytitle ?>">
    <meta property="twitter:description" content="<?= $myMetaDescription ?>">

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/swiper.css" />
    <link rel="stylesheet" href="<?= BASE_URL, '/' , $mycss ?>?v=1.233">
</head>

<body>
    <div class="<?= $pageClass ?>">
        <?php require "menu.php" ?>