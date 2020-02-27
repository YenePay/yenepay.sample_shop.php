<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use YenePay\Models\PDT;

$pdtToken = $_ENV['PDT_KEY'];
$pdtModel = new PDT($pdtToken);
$pdtModel->setUseSandbox($_ENV['SANBOX']);

if (isset($_GET["TransactionId"])) {
    $pdtModel->setTransactionId($_GET["TransactionId"]);
}
if (isset($_GET["MerchantOrderId"])) {
    $pdtModel->setMerchantOrderId($_GET["MerchantOrderId"]);
}

