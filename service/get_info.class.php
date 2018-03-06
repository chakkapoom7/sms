<?php
class get_info
{

    public static function get_group_info($group)
    {
        include "connect/connect.php";
        $return_data = array();
        $q = '
            SELECT * FROM vw_userinfo WHERE User_group = "'.$group.'"
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
        return $return_data;
    }


    public static function get_user_info($user_sender,$pass_sender)
    {
        include "connect/connect.php";
        $return_data = array();
        $q = '
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
        $result = $mysqli->query($q); // query
        $total = @$result->num_rows; // count row
        $mysqli->close();
        if (@$total == 0) {
            // echo "ไม่พบข้อมูล";
            return array("");
        }
        $rs = $result->fetch_object();

        $return_data['current_usage']=$rs->current_usage;
        $return_data['maximum_quota']=$rs->maximum_quota;
        $return_data['status']=$rs->status;
        
        return $return_data;
    }

}
