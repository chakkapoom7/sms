<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test sms</title>
</head>
<body>
    <form action="#" method="post">
        phone no : <input type="text" name="msisdn"><br>
        message : <input type="text" name="message"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

$username = "xxxx";
// $username = "thaibulksms";1
$password = "thisispassword";
$msisdn = @$_POST['msisdn'];
$message = @$_POST['message'];
$sender = "TEST";
$ScheduledDelivery = @$_POST['ScheduledDelivery'];
$SMStype = @$_POST['SMStype'];


// ---------------------------------------------------------------------------------------------------------------

if(@$_POST['message']){
$url = "https://secure.thaibulksms.com/sms_api_test.php";

$data_string ="username=$username&password=$password&msisdn=$msisdn&message=$message";
// &sender=$sender&ScheduledDelivery=$ScheduledDelivery&force=$SMStype              


echo $data_string;
$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4)
Gecko/20030624 Netscape/7.1 (ax)";





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
$result = curl_exec ($ch);
curl_close ($ch);



// ---------------------------------------------------------------------------------------------------------------

echo "<pre>";
print_r($result);
echo "</pre>";

}

exit();

$xml = xml($result);
$count = count($xml['SMS']['QUEUE']);
if($count > 0){
    $count_pass = 0;
    $count_fail = 0;
    $used_credit = 0;
    for($i=0;$i<$count;$i++){
        if($xml['SMS']['QUEUE'][$i]['Status']){
            $count_pass++;
            $used_credit += $xml['SMS']['QUEUE'][$i]['UsedCredit'];
        }
        else{
            $count_fail++;
        }
    }
    if($count_pass > 0){
        echo "สามารถส่งออกได้จำนวน $count_pass หมายเลข,ใช้เครดิต ทั้งหมด $used_credit เครดิต";
    }
    if($count_fail > 0){
        echo "ไม่สามารถส่งออกได้จำนวน $count_fail หมายเลข";
    }
}else{
    echo "เกิดข้อผิดพลาดในการทำงาน, (".$xml['SMS']['Detail'].")";
}

?>



