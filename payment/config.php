<?php
// Product information
$itemName = 'Membership Subscription';
$itemNumber = 'MS123456';

// Subscription price for one month
$itemPrice = 25.00;

// PayPal configuration
define('PAYPAL_ID', 'KidumSkill@gmail.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE

define('PAYPAL_RETURN_URL', 'http://cf75f55f3610.ngrok.io/kidumskill/payment/success.php');
define('PAYPAL_CANCEL_URL', 'http://cf75f55f3610.ngrok.io/kidumskill/payment/cancel.php');
define('PAYPAL_NOTIFY_URL', 'http://cf75f55f3610.ngrok.io/kidumskill/payment/paypal_ipn.php');
define('PAYPAL_CURRENCY', 'USD');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'kidumskillnew');

// Change not required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
