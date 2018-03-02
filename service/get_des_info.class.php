<?php
class get_des_info
{

    public static function get_group_info($group)
    {
        include_once "connect/connect.php";
        $return_data = array();
        $q = '
            
        ';
        $result = $mysqli->query($q); // query
        $total = @$result->num_rows; // count row
        $mysqli->close();
        if (@$total == 0) {
            // echo "ไม่พบข้อมูล";
            return array("");
        }
        while ($rs = $result->fetch_object()) {

            $tempdata = array(
                'Userid'=>$rs->Userid,
                'User_group'=>$rs->User_group,
                'firstname'=>$rs->firstname,
                'lastname'=>$rs->lastname,
                'phone'=>$rs->phone
            );
        
            array_push($return_data,$tempdata);
        
            unset($tempdata);
        
        }
        return;
    }

}
