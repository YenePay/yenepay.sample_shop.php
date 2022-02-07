<?php

require __DIR__ . '/vendor/autoload.php';

use YenePay\CheckoutHelper;
use YenePay\Models\CheckoutItem;
use YenePay\Models\CheckoutOptions;
use YenePay\Models\CheckoutType;

include_once "_config.php";

$checkoutOptions = new CheckoutOptions($sellerCode, $useSandbox);
$checkoutOptions->setProcess(CheckoutType::Cart);
$checkoutOptions->setSuccessUrl($successUrl);
$checkoutOptions->setCancelUrl($cancelUrl);
$checkoutOptions->setIPNUrl($ipnUrl);
$checkoutOptions->setTotalItemsDeliveryFee(30);

$data               = json_decode(file_get_contents('php://input'), true);
$checkoutOrderArray = $data['Items'];

$checkoutOrderItems = array();
foreach ($checkoutOrderArray as $key => $value) {
    $item                     = new CheckoutItem();
    $checkoutOrderItems[$key] = $item->getFromArray($value);
}

$checkoutHelper = new CheckoutHelper();
$checkoutUrl    = $checkoutHelper->getCartCheckoutUrl($checkoutOptions, $checkoutOrderItems);

$obj    = array("redirectUrl" => $checkoutUrl);
$result = json_encode($obj);
header("Content-type: application/json");
echo $result;
?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							