<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

date_default_timezone_set('Asia/Bangkok');

include_once "connect/connect.php";

$return_data = array();


$q = " 
SELECT
	column_name
FROM
	INFORMATION_SCHEMA. COLUMNS
WHERE
	table_name = 'vw_userinfo';
";

$result = $mysqli->query($q); // query 
$total  = @$result->num_rows; // count row
$mysqli->close();
if(@$total == 0){
	echo json_encode(array("error"=>"ไม่พบข้อมูล"));
	exit();
}


while ($rs = $result->fetch_object()) {
    array_push($return_data,array( "feild" => $rs->column_name));
}


echo json_encode($return_data);
// echo json_encode($resultArray , 128 );

?>