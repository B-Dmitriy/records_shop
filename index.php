<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen w-full">
<?php include_once 'views/layout/header.php'?>
<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include_once __DIR__ . "/views/main.php";
} elseif ($uri === '/catalog') {
    include_once __DIR__ . "/views/catalog.php";
} elseif ($uri === '/admin') {
    include_once __DIR__ . "/views/admin.php";
} elseif ($uri === '/about') {
    include_once __DIR__ . "/views/about.php";
} elseif ($uri === '/card') {
    include_once __DIR__ . "/views/card.php";
} else {
    include_once __DIR__ . "/views/404.php";
}
?>
<?php include_once 'views/layout/footer.php'?>
<script src="/public/js/main.js"></script>
</body>
</html>