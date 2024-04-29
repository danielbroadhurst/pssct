<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mytitle ?></title>
    <meta name="Description" content="<?= $myMetaDescription ?>" />

    <link rel="stylesheet" href="<?= BASE_URL, '/' , $mycss ?>?v=1.23">
</head>

<body>
    <div class="<?= $pageClass ?>">
        <?php require "menu.php" ?>