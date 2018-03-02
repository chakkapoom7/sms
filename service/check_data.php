<?php
header('Access-Control-Allow-Origin: *');

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

date_default_timezone_set('Asia/Bangkok');

include_once "connect/connect.php";

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

// exit();

$scr_type = @$_REQUEST['scr_type'];
$phone = @$_REQUEST['phone'];
$group = @$_REQUEST['group'];
$message = @$_REQUEST['message'];
$rep_str1 = @$_REQUEST['rep_str1'];
$rep_feild1 = @$_REQUEST['rep_feild1'];
$rep_str2 = @$_REQUEST['rep_str2'];
$rep_feild2 = @$_REQUEST['rep_feild2'];
$rep_str3 = @$_REQUEST['rep_str3'];
$rep_feild3 = @$_REQUEST['rep_feild3'];
$type = @$_REQUEST['type'];
$s_name = @$_REQUEST['s_name'];


$my_payload = array(
    "scr_type" => $scr_type,
    "phone" => $phone,
    "group" => $group,
    "message" => $message,
    "rep_str1" => $rep_str1,
    "rep_feild1" => $rep_feild1,
    "rep_str2" => $rep_str2,
    "rep_feild2" => $rep_feild2,
    "rep_str3" => $rep_str3,
    "rep_feild3" => $rep_feild3,
    "type" => $type,
    "s_name" => $s_name,
    "u"=>"zzzzz",
    "p"=>"zzzzz"
);

if ($type == 'now') { //================================================================== send

    echo "now!  ";

    //post json to sms service
    $service_url = 'http://localhost/sms/service/smsservice.php';
    $curl = curl_init($service_url);
    $curl_post_data = $my_payload;
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
    $curl_response = curl_exec($curl);
    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('error occured during curl exec. Additioanl info: ' . var_export($info));
    }
    curl_close($curl);
    $decoded = json_decode($curl_response);
    if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
        die('error occured: ' . $decoded->response->errormessage);
    }

    echo 'response ok!<b>';

    // var_export($decoded->response);
    echo $curl_response;

    echo "<pre>";
    print_r($decoded);
    // echo "<br>redponse : ".@$decoded->message;
    echo "</pre>";
    // echo "<br>".$decoded->summary;

} else { //============================================================================== keep

    //keep data to db

    // echo "<br>==========================================================================================================================<br>";
    // echo "keep";
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
        \"" . $phone . "\",
        \"" . $scr_type . "\",
        \"" . $message . "\",
        \"" . $group . "\",
        \"" . $rep_str1 . "\",
        \"" . $rep_str2 . "\",
        \"" . $rep_str3 . "\",
        \"" . $rep_feild1 . "\",
        \"" . $rep_feild2 . "\",
        \"" . $rep_feild3 . "\",
        \"" . $s_name . "\",
        \"" . "999" . "\",
        \"wait\",
        \"" . date("Y-m-d H:i:s") . "\",
        \"\",
        \"\"
    );
";

    // echo "<pre>".$q."</pre>" ;
    // echo "<br>==========================================================================================================================<br>";

    $result = $mysqli->query($q); // query
    // $total = @$result->num_rows; // count row
    $mysqli->close();

    if (!$result) {
        // echo "ไม่พบข้อมูล";
        echo json_encode(array(
            'keep_result' => 'fail',
        ));
        exit();
    } elseif ($result) {
        // echo "เก็บลงคิวเรียบร้อย";
        echo json_encode(array(
            'keep_result' => 'success',
        ));
        exit();
    }

}
