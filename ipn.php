<?php
require __DIR__ . '/vendor/autoload.php';

use YenePay\CheckoutHelper;
use YenePay\Models\IPN;


$ipnModel = new IPN();
$ipnModel->setUseSandbox(true);

$json_data = json_decode(file_get_contents('php://input'), true);

if (isset($json_data["TotalAmount"])) {
    $ipnModel->setTotalAmount($json_data["TotalAmount"]);
}
if (isset($json_data["BuyerId"])) {
    $ipnModel->setBuyerId($json_data["BuyerId"]);
}
if (isset($json_data["MerchantOrderId"])) {
    $ipnModel->setMerchantOrderId($json_data["MerchantOrderId"]);
}
if (isset($json_data["MerchantId"])) {
    $ipnModel->setMerchantId($json_data["MerchantId"]);
}
if (isset($json_data["MerchantCode"])) {
    $ipnModel->setMerchantCode($json_data["MerchantCode"]);
}
if (isset($json_data["TransactionCode"])) {
    $ipnModel->setTransactionCode($json_data["TransactionCode"]);
}
if (isset($json_data["TransactionId"])) {
    $ipnModel->setTransactionId($json_data["TransactionId"]);
}
if (isset($json_data["Status"])) {
    $ipnModel->setStatus($json_data["Status"]);
}
if (isset($json_data["Currency"])) {
    $ipnModel->setCurrency($json_data["Currency"]);
}
if (isset($json_data["Signature"])) {
    $ipnModel->setSignature($json_data["Signature"]);
}

$helper = new CheckoutHelper();
if ($helper->isIPNAuthentic($ipnModel)) {    //This means the payment is completed
    //You can now mark the order as "Paid" or "Completed" here and start the delivery process
    echo 'Success!';
} else {
    echo 'Fail';
}
?>
