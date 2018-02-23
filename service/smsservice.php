<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// echo json_encode($_REQUEST);

include "sms.class.test.php";

$provider_username = "xxxx";
$provider_password = "thisispassword";
// $provider_username = "xxxx";
// $provider_password = "thisispassword";
$force = "premium";


$msisdn = @$_REQUEST['phone'];
$message = @$_REQUEST['message'];
// $sender = $_REQUEST['s_name'];
$sender = @$_REQUEST['s_name'];
$ScheduledDelivery = "";


$type = @$_REQUEST['type'];

$result = sms::send_sms($provider_username, $provider_password, $msisdn, $message, $sender, $ScheduledDelivery, $force);

// // echo "<pre>";
// // print_r($result);
// // echo "</pre>";





// echo "<pre>",json_encode($result, JSON_PRETTY_PRINT),"</pre>";
echo json_encode($result);

?>
