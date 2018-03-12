<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>CESI AP - Blog/e-commerce</title>
    <link rel="stylesheet"  href="./assets/css/style.css">
</head>

<?php
include('./includes/header.php');
include('./includes/footer.php');

$page = $_GET['page'] ?? "";
$page = "./includes/". $page . ".inc.php";
$files = glob("./includes/*.inc.php");

if (in_array($page, $files)) {
    include $page;
} else {
    include "./includes/home.php";
}




