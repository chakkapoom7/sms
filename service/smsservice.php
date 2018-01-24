<?php
	include("sms.class.test.php");
	$username = "xxxx";
	$password = "thisispassword";
	$msisdn = $_REQUEST['number'];
	$message = $_REQUEST['message'];
	$sender = "SMS";
	$ScheduledDelivery = $_REQUEST['ScheduledDelivery'];
	$force = "premium";
	// $force = "standard";
	
	$result = sms::send_sms($username,$password,$msisdn,$message,$sender,$ScheduledDelivery,$force);
	
	// echo "<pre>";
	// print_r($result);
	// echo "</pre>";
	
	// echo "<pre>",json_encode($result, JSON_PRETTY_PRINT),"</pre>";
	echo json_encode($result);

?>