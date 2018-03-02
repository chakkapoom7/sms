<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// echo json_encode($_REQUEST);

include "sms.class.test.php";
include "get_des_info.class.test.php";
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
$sms_user_check = '
SELECT
	user_id,
	`group`,
	system,
	env,
	current_usage,
	maximum_quota,
	valid_fr,
	valid_to,
	`status`
FROM
	tbl_sms_user
WHERE
	user_id = "' . $user_sender . '"
AND `password` = "' . $pass_sender . '"
';

$user_list_query = '
SELECT
*
FROM
	vw_userinfo
';

function return_result($message)
{
    echo json_encode(array("summary" => $message));
    exit();
}

//=================================================================================================
//query user data
$result = $mysqli->query($sms_user_check); // query
$total = @$result->num_rows; // count row
$mysqli->close();
if (@$total == 0) {
    return_result("username / password ไม่ถูกต้อง.");
    // return_result("u : ".$user_sender." p : ".$pass_sender);
}
$rs = $result->fetch_object();
$current_usage = $rs->current_usage;
$maximum_quota = $rs->maximum_quota;
$status = $rs->status;
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





$message_lent = strlen($message);

// return_result("message lent : ".$message_lent);



$credit_use=0;
//=================================================================================================

if ($status != "active") {
    return_result("บัญชีของคุณไม่มีสิทธิ์ใช้งาน โปรดติดต่อทีม IT");
}

if ($current_usage + $credit_use > $maximum_quota) {
    return_result("คุณมีเครดิต ไม่เพียงพอสำหรับการส่ง");
}

$type = @$_REQUEST['type'];

$result = sms::send_sms($provider_username, $provider_password, $msisdn, $message, $sender, $ScheduledDelivery, $force);

// // echo "<pre>";
// // print_r($result);
// // echo "</pre>";

// echo "<pre>",json_encode($result, JSON_PRETTY_PRINT),"</pre>";
echo json_encode(array_merge($credit_result,$result));


