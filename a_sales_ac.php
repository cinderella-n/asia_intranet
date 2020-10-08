<?php

    $arr_result = array();

    require("connect.php");

    $arr_result['issuccess'] = false;

    if(isset($conn)) {

        mysqli_query($conn,"SET NAMES UTF8");


            $str_sql = "SELECT * FROM `sales_ac_tb`";
            $obj_rs = mysqli_query($conn,$str_sql);

            $arr_result['list'] = array();
            while($obj_row = mysqli_fetch_array($obj_rs)) {
                $arr_data = array();
                $arr_data['ajax_sales_ac_code'] = $obj_row['sales_ac_code'];
                $arr_data['ajax_sales_ac_name1'] = $obj_row['sales_ac_name1'];

                $arr_result['list'][] = $arr_data;
            }
            $arr_result['issuccess'] = true;
    }else {
        $arr_result['issuccess'] = false;
    }
   
    echo json_encode($arr_result);

?>

