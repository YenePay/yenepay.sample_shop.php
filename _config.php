<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$sellerCode = $_ENV['YENEPAY_MERCHANT_ID'];
$baseUrl    = rtrim($_ENV['BASE_URL'], '/');
$successUrl = sprintf("%s/success.php", $baseUrl); //"YOUR_SUCCESS_URL";
$cancelUrl  = sprintf("%s/cancel.php", $baseUrl); //"YOUR_CANCEL_URL";
$ipnUrl     = sprintf("%s/ipn.php", $baseUrl); //"YOUR_IPN_URL";
$useSandbox = $_ENV['SANBOX'] === 'true'; // set this to false if you are on production environment