# Sample Shop Application in PHP using YenePay for Payment


## Installation

### Install dependencies

```
composer install
```

### Configuration 

Edit the .env file with your values. 

You can find your `YENEPAY_MERCHANT_ID` and `PDT_KEY` from your account page at https://sandbox.yenepay.com/

```
cp env-dist .env
```

### Run your sample shop
```
php -S localhost:8000
```
The sample shop will be available at http://localhost:8000/