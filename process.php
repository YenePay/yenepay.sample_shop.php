<?php

require __DIR__ . '/vendor/autoload.php';

use YenePay\Models\CheckoutOptions;
use YenePay\Models\CheckoutItem;
use YenePay\CheckoutHelper;


include_once "_config.php";

$checkoutOptions = new CheckoutOptions($sellerCode, $useSandbox);
$checkoutOptions->setSuccessUrl($successUrl);
$checkoutOptions->setCancelUrl($cancelUrl);
$checkoutOptions->setIPNUrl($ipnUrl);

$checkoutOrderItem = new CheckoutItem($_POST["ItemName"], $_POST["UnitPrice"], $_POST["Quantity"]);
if (isset($_POST["ItemId"])) {
    $checkoutOrderItem->setId($_POST["ItemId"]);
}
if (isset($_POST["DeliveryFee"])) {
    $checkoutOrderItem->setDeliveryFee($_POST["DeliveryFee"]);
}
if (isset($_POST["Tax1"])) {
    $checkoutOrderItem->setTax1($_POST["Tax1"]);
}
if (isset($_POST["Tax2"])) {
    $checkoutOrderItem->setTax2($_POST["Tax2"]);
}
if (isset($_POST["Discount"])) {
    $checkoutOrderItem->setDiscount($_POST["Discount"]);
}
if (isset($_POST["HandlingFee"])) {
    $checkoutOrderItem->setHandlingFee($_POST["HandlingFee"]);
}

$checkoutHelper = new CheckoutHelper();
$checkoutUrl    = $checkoutHelper->getSingleCheckoutUrl($checkoutOptions, $checkoutOrderItem);

header("Location: " . $checkoutUrl);
?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							