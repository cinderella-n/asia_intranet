<?php

    $arr_result = array();

    require("connect.php");

    $arr_result['issuccess'] = false;

    if(isset($conn)) {

        mysqli_query($conn,"SET NAMES UTF8");


            $str_sql = "SELECT * FROM `ap_pattern_tb`";
            $obj_rs = mysqli_query($conn,$str_sql);

            $arr_result['list'] = array();
            while($obj_row = mysqli_fetch_array($obj_rs)) {
                $arr_data = array();
                $arr_data['ajax_ap_pattern_code'] = $obj_row['ap_pattern_code'];
                $arr_data['ajax_ap_pattern_name1'] = $obj_row['ap_pattern_name1'];

                $arr_result['list'][] = $arr_data;
            }
            $arr_result['issuccess'] = true;
    }else {
        $arr_result['issuccess'] = false;
    }
   
    echo json_encode($arr_result);

?>

