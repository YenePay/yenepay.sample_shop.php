<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Shop Application</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/FormStyle.css" rel="stylesheet"/>
    <link href="css/Site.css" rel="stylesheet"/>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Sample Shop Application</a>
        </div>
        <div class="navbar-collapse collapse">
            <p id="index-p">#Items: </p>
            <img id="index-para" src="images/cart+.jpg" style="width:50px;height:50px"/>
            <ul class="nav navbar-nav">
                <li><a href="/">Buy Single Item</a></li>
                <li><a href="/cart.php">Buy Multiple Items</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container body-content">

    <div class="form-group" style="padding: 50px 10px;">
        <div class="body-content">
            <div class="row">
                <?php
                if ( ! empty($_GET['success'])) {
                    echo '<div class="alert alert-success" role="alert">Payment successfully made, thank you!</div>';
                }
                if ( ! empty($_GET['error'])) {
                    echo '<div class="alert alert-danger" role="alert">An error has occurred processing your payment, sorry!</div>';
                }
                ?>
                <form method="post" action="process.php">
                    <div class="col-xs-4">
                        <img src="images/product-1.jpg" class="col-xs-6"/>
                        <div class="col-xs-6 text-left">
                            <input type="hidden" name="ItemId" value="001"/>
                            <input type="hidden" name="ItemName" value="Sample Item 1"/>
                            <input type="hidden" name="UnitPrice" value="15">
                            <input type="hidden" name="DeliveryFee" value="0.5"/>
                            <input type="hidden" name="Discount" value="0"/>
                            <input type="hidden" name="Tax1" value="1.50"/>
                            <input type="hidden" name="Tax2" value="0"/>
                            <input type="hidden" name="HandlingFee" value="0">
                            <b style="font-size: 1.2em;" class="text-primary">Sample Item 1</b><br/>
                            <span>Qty: <input type="text" value="1" name="Quantity"/></span><br/>
                            <span>ETB 15.00</span>
                            <br/><br/>
                            <button type="submit" value="submit" class="btn btn-success" style="font-size: 0.9em;">Pay
                                with YenePay
                            </button>
                        </div>
                    </div>
                </form>
                <form method="post" action="process.php">
                    <div class="col-xs-4">
                        <img src="images/product-2.jpg" class="col-xs-6"/>
                        <div class="col-xs-6 text-left">
                            <input type="hidden" name="ItemId" value="002"/>
                            <input type="hidden" name="ItemName" value="Sample Item 2"/>
                            <input type="hidden" name="UnitPrice" value="1050">
                            <input type="hidden" name="DeliveryFee" value="50"/>
                            <input type="hidden" name="Discount" value="10"/>
                            <input type="hidden" name="Tax1" value="7.50"/>
                            <input type="hidden" name="Tax2" value="0"/>
                            <input type="hidden" name="HandlingFee" value="0">
                            <b style="font-size: 1.2em;" class="text-primary">Sample Item 2</b><br/>
                            <span>Qty: <input type="text" value="1" name="Quantity"/></span><br/>
                            <span>ETB 1,050.00</span>
                            <br/><br/>
                            <button type="submit" value="submit" class="btn btn-success" style="font-size: 0.9em;">Pay
                                with YenePay
                            </button>
                        </div>
                    </div>
                </form>
                <form method="post" action="process.php">
                    <div class="col-xs-4">
                        <img src="images/product-3.jpg" class="col-xs-6"/>
                        <div class="col-xs-6 text-left">
                            <input type="hidden" name="ItemName" value="Sample Item 3"/>
                            <input type="hidden" name="UnitPrice" value="3000">
                            <input type="hidden" name="DeliveryFee" value="50"/>
                            <input type="hidden" name="Discount" value="10"/>
                            <input type="hidden" name="Tax1" value="7.50"/>
                            <input type="hidden" name="Tax2" value="0"/>
                            <input type="hidden" name="HandlingFee" value="0">
                            <b style="font-size: 1.2em;" class="text-primary">Sample Item 3</b><br/>
                            <span>Qty: <input type="text" value="1" name="Quantity"/></span><br/>
                            <span>ETB 3,000.00</span>
                            <br/><br/>
                            <button type="submit" value="submit" class="btn btn-success" style="font-size: 0.9em;">Pay
                                with YenePay
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>