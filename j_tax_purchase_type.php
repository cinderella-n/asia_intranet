<?php

    $arr_result = array();

    include("connect.php");

    $arr_result['issuccess'] = false;

    if(isset($conn)) {

        mysqli_query($conn,"SET NAMES UTF8");


            $str_sql = "SELECT * FROM `tax_purchase_type_tb`";
            $obj_rs = mysqli_query($conn,$str_sql);

            $arr_result['list'] = array();
            while($obj_row = mysqli_fetch_array($obj_rs)) {
                $arr_data = array();
                $arr_data['ajax_tax_purchase_type_code'] = $obj_row['tax_purchase_type_code'];
                $arr_data['ajax_tax_purchase_type_name1'] = $obj_row['tax_purchase_type_name1'];

                $arr_result['list'][] = $arr_data;
            }
            $arr_result['issuccess'] = true;
    }else {
        $arr_result['issuccess'] = false;
    }
   
    echo json_encode($arr_result);

?>

