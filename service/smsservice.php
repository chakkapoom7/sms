<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// echo json_encode($_REQUEST);

include "sms.class.test.php";
include "get_info.class.php";
include_once "connect/connect.php";

// $provider_username = "0873578044";
// $provider_password = "956983";
// $provider_username = "xxxx";
$provider_username = "thaibulksms";
$provider_password = "thisispassword";
$force = "premium";
$forceremain = "credit_remain_premium";

$msisdn = @$_REQUEST['phone'];
$message = @$_REQUEST['message'];
$sender = @$_REQUEST['s_name'];
$ScheduledDelivery = "";
$user_sender = @$_REQUEST['u'];
$pass_sender = @$_REQUEST['p'];
$lang = "th";



//=================================================================================================
$user_info = get_info::get_user_info($user_sender,$pass_sender);
$current_usage = @$user_info['current_usage'];
$maximum_quota = @$user_info['maximum_quota'];
$status = @$user_info['status'];
//=================================================================================================


//=================================================================================================
//reserve for quota calculate.
if (!preg_match('/[^A-Za-z0-9]/', $message)) // '/[^a-z\d]/i' should also work.
{
    // string contains only english letters & digits
    $lang="en";
}

// $credit_result = sms::check_credit($provider_username,$provider_password,$forceremain);
$credit_result = sms::check_credit("0873578044","956983",$forceremain);


$user_table = get_info::get_group_info(@$_REQUEST['group']);


$message_lent = strlen($message);

// get_info::return_result("message lent : ".$message_lent);

$credit_use=0;
//=================================================================================================


if ($status != "active") {
    get_info::return_result("บัญชีของคุณไม่มีสิทธิ์ใช้งาน โปรดติดต่อทีม IT");
}

if ($current_usage + $credit_use > $maximum_quota) {
    get_info::return_result("คุณมีเครดิต ไม่เพียงพอสำหรับการส่ง");
}


$type = @$_REQUEST['type'];

$result = sms::send_sms($provider_username, $provider_password, $msisdn, $message, $sender, $ScheduledDelivery, $force);


// // echo "<pre>";
// // print_r($result);
// // echo "</pre>";

// echo "<pre>",json_encode($result, JSON_PRETTY_PRINT),"</pre>";

$last_resault = array_merge($credit_result,$result);

$last_resault['group'] = $_REQUEST['group'];

$last_resault['grouplist'] = $user_table;

echo json_encode($last_resault);


