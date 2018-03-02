<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// echo json_encode($_REQUEST);

include "sms.class.test.php";

$provider_username = "0873578044";
$provider_password = "956983";
// $provider_username = "xxxx";
// $provider_password = "thisispassword";
$force = "premium";
$forceremain = "credit_remain_premium";

$credit_result = sms::check_credit($provider_username,$provider_password,$forceremain);
echo "<pre>";
print_r( json_decode( $credit_result ) );
echo "</pre>";
// return_result($credit_result);
// return_result("lang : ".$lang);
