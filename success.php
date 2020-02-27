<?php
require __DIR__ . '/vendor/autoload.php';

use YenePay\CheckoutHelper;

include_once "_pdt.php";

$helper = new CheckoutHelper();
$result = $helper->RequestPDT($pdtModel);

if ($result['result'] === "SUCCESS") {
    $order_status = $result['Status'];
    if ($order_status === 'Paid') {
        //This means the payment is completed.
        //You can extract more information of the transaction from the $result array
        //You can now mark the order as "Paid" or "Completed" here and start the delivery process
        header("Location: /?success=1");

    }
} else {
    //This means the pdt request has failed.
    //possible reasons are
    //1. the TransactionId is not valid
    //2. the PDT_Key is incorrect
    header("Location: /?error=1");

}

header("Location: /");


?>
