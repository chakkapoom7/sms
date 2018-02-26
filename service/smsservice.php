<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// echo json_encode($_REQUEST);

include "sms.class.test.php";
include_once "connect/connect.php";

$provider_username = "xxxx";
$provider_password = "thisispassword";
// $provider_username = "xxxx";
// $provider_password = "thisispassword";
$force = "premium";

$q='

';



$msisdn = @$_REQUEST['phone'];
$message = @$_REQUEST['message'];
// $sender = $_REQUEST['s_name'];
$sender = @$_REQUEST['s_name'];
$ScheduledDelivery = "";
$user_sender=@$_REQUEST['u'];



function return_result($message) {
    echo json_encode(array("summary"=>$message));
    exit();
}



//=================================================================================================

//reserve for query user data
$current_usage;
$maximum_quota;
$status;
//=================================================================================================



//=================================================================================================

//reserve for quota calculate.
$credit_use;
//=================================================================================================



if($status != "active" ){
    return_result("บัญชีของคุณไม่มีสิทธิ์ส่ง โปรดติดต่อทีม IT");
}

if($current_usage + $credit_use >= $maximum_quota ){
    // return_result("คุณมีเครดิต ไม่เพียงพอสำหรับการส่ง");
}


$type = @$_REQUEST['type'];

$result = sms::send_sms($provider_username, $provider_password, $msisdn, $message, $sender, $ScheduledDelivery, $force);

// // echo "<pre>";
// // print_r($result);
// // echo "</pre>";





// echo "<pre>",json_encode($result, JSON_PRETTY_PRINT),"</pre>";
echo json_encode($result);

?>
