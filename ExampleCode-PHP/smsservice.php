<?php
	include("sms.class.test.php");
	$username = "xxxx";
	$password = "thisispassword";
	$msisdn = $_REQUEST['msisdn'];
	$message = $_REQUEST['message'];
	$sender = "SMS";
	$ScheduledDelivery = $_REQUEST['ScheduledDelivery'];
	$force = $_REQUEST['force'];
	
	$result = sms::send_sms($username,$password,$msisdn,$message,$sender,$ScheduledDelivery,$force);
	echo "<pre>";
	print_r($result);
	echo "</pre>";

	// echo json_encode($result);

?>