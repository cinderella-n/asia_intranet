<?php
    session_start();
    require("connect.php");

    $str_ap_pattern_id = $_POST['txt_ap_pattern_id'];
    $str_ap_pattern_code = $_POST['txt_ap_pattern_code'];
    $str_ap_pattern_name1 = $_POST['txt_ap_pattern_name1'];
    $str_ap_pattern_name2 = $_POST['txt_ap_pattern_name2'];
    $str_ap_pattern_status = $_POST['txt_ap_pattern_status'];

    $str_sql = "UPDATE `ap_pattern_tb` SET ";
	$str_sql .= " `ap_pattern_code`= '" . $str_ap_pattern_code . "',";
    $str_sql .= " `ap_pattern_name1`= '" . $str_ap_pattern_name1 . "',";
    $str_sql .= " `ap_pattern_name2`= '" . $str_ap_pattern_name2 . "',";
    $str_sql .= " `ap_pattern_status`= '0' ";
    $str_sql .= " WHERE `ap_pattern_id` = '" . $str_ap_pattern_id . "'";

    if ( mysqli_query($conn,$str_sql) ) {
		//echo "Save OK !";
		header("location:ap_pattern_manage.php");
		exit;
	} else {
		echo "Save Error ! : " . $str_sql;
	}
    
?>