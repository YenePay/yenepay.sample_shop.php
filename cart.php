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
    <form id="myform" method="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-one">
                            <div class="price">
                                <img src="images/product-4.jpg" style="height:175px"/><br/>
                            </div>
                            <div class="plan-div">
                                <p class="plan-text">
                                    <b style="font-size:1.2em;" class="text-primary">Bag</b>
                                    <input type="hidden"
                                           name="ItemName"
                                           value="Bag"
                                           style="color:lavenderblush"/>
                                    <br/>
                                    <b>ETB 300.00</b>
                                    <input type="hidden" name="UnitPrice" value="300"/><br/>
                                    <span>Quantity: </span>
                                    <input type="text" name="Quantity" placeholder="1" value="1"/><br/>
                                    <input type="hidden" name="ItemId" value="1"><br/>
                                    <button class="btn btn-success sub" type="button">Add to Cart</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-one">
                            <div class="price">
                                <img src="images/white-ladies-watch-25778407.jpg" style="height:175px"/><br/>
                            </div>
                            <div class="plan-div">
                                <p class="plan-text">
                                    <b style="font-size:1.2em;" class="text-primary">Watch</b>
                                    <input type="hidden" name="ItemName" value="Watch"/><br/>
                                    <b>ETB 200.00</b>
                                    <input type="hidden" name="UnitPrice" value="200"/><br/>
                                    <span>Quantity: </span>
                                    <input type="text" name="Quantity" placeholder="1" value="1"/><br/>
                                    <input type="hidden" name="ItemId" value="2"><br/>
                                    <button class="btn btn-success sub" type="button">Add to Cart</button>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-one">
                            <div class="price">
                                <img src="images/product-1.jpg" style="height:175px"/><br/>
                            </div>
                            <div class="plan-div">
                                <p class="plan-text">
                                    <b style="font-size:1.2em;" class="text-primary">Book</b>
                                    <input type="hidden" name="ItemName" value="Book"/><br/>
                                    <b>ETB 200.00</b>
                                    <input type="hidden" name="UnitPrice" value="200"/><br/>
                                    <span>Quantity: </span>
                                    <input type="text" name="Quantity" placeholder="1" value="1"/><br/>
                                    <input type="hidden" name="ItemId" value="3"><br/>
                                    <button class="btn btn-success sub" type="button">Add to Cart</button>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-one">
                            <div class="price">
                                <img src="images/product-2.jpg" style="height:175px"/><br/>
                            </div>
                            <div class="plan-div">
                                <p class="plan-text">
                                    <b style="font-size:1.2em;" class="text-primary">Shoe</b>
                                    <input type="hidden" name="ItemName" value="Shoe"/><br/>
                                    <b>ETB 200.00</b>
                                    <input type="hidden" name="UnitPrice" value="2500"/><br/>
                                    <span>Quantity: </span>
                                    <input type="text" name="Quantity" placeholder="1" value="1"/><br/>
                                    <input type="hidden" name="ItemId" value="4"><br/>
                                    <button class="btn btn-success sub" type="button">Add to Cart</button>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 text-center">
                <button class="btn btn-primary" type="button" id="checkout"
                        style="width: 30%; min-width:250px; margin-top:50px">Go to Checkout
                </button>
            </div>
        </div>
    </form>
</div>

<?php
/**
 * TODO: this is ugly, deal with it
 */
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<script type="text/javascript">
    var cartUrl = "<?php rtrim($_ENV['BASE_URL'], '/') ?>/process_cart.php";
</script>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/Application.js"></script>
</body>
</html>




