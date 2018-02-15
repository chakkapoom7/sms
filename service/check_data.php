<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

date_default_timezone_set('Asia/Bangkok');

include_once "connect/connect.php";



echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

// exit();

$scr_type   =   $_REQUEST['scr_type'];
$phone      =   $_REQUEST['phone'];
$group      =   $_REQUEST['group'];
$message    =   $_REQUEST['message'];
$rep_str1   =   $_REQUEST['rep_str1'];
$rep_feild1 =   $_REQUEST['rep_feild1'];
$rep_str2   =   $_REQUEST['rep_str2'];
$rep_feild2 =   $_REQUEST['rep_feild2'];
$rep_str3   =   $_REQUEST['rep_str3'];
$rep_feild3 =   $_REQUEST['rep_feild3'];
$type       =   $_REQUEST['type'];
$s_name     =   $_REQUEST['s_name'];



if($type == 'now'){//================================================================== send
    echo "now";












}else{ //============================================================================== keep



echo "<br>==========================================================================================================================<br>";
$q = " 
INSERT INTO tbl_sms (
	number,
	msg_type,
	message,
	group_list,
	dyn1,
	dyn2,
	dyn3,
	dyn1_replace_field,
	dyn2_replace_field,
	dyn3_replace_field,
	sender,
	quota,
    STATUS,
	save_on,
	send_on,
	response
)
VALUES
	(
		\"".$phone ."\",
		\"".$scr_type."\",
		\"".$message."\",
		\"".$group."\",
		\"".$rep_str1."\",
		\"".$rep_str2."\",
		\"".$rep_str3."\",
		\"".$rep_feild1."\",
		\"".$rep_feild2."\",
		\"".$rep_feild3."\",
		\"".$s_name ."\",
		\""."999"."\",          
		\"wait\",
		\"".date("Y-m-d H:i:s")."\",
		\"\",
		\"\"
	);

";


echo "<pre>".$q."</pre>" ;
echo "<br>==========================================================================================================================<br>";







$result = $mysqli->query($q); // query 
$total  = @$result->num_rows; // count row
$mysqli->close();

if(@$total == 0){
	// echo "ไม่พบข้อมูล";
	echo json_encode(array('keep_result'=>'fail'));
	exit();
}elseif(@$total == 1){
	// echo "เก็บลงคิวเรียบร้อย";
	echo json_encode(array('keep_result'=>'success'));
	exit();
}


}






// while ($rs = $result->fetch_object()) {

//     $tempdata = array(
//         'id' => $rs->id ,
//         'date' => $rs->date,
//         'time' => $rs->time,
//         'user' => $rs->user ,
//         'shopcode'=>$rs->shopcode,
//         'shopname' => $rs->shopname, 
//         'openstatus' => $rs->openstatus 
//     );

//     array_push($return_data,$tempdata);

//     unset($tempdata);

// }



// echo json_encode($return_data);
// echo json_encode($resultArray , 128 );




?>