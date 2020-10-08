<?php
    require("connect.php");

    $str_ap_pattern_code = $_POST['txt_ap_pattern_code'];
    $str_ap_pattern_name1 = $_POST['txt_ap_pattern_name1'];
    $str_ap_pattern_name2 = $_POST['txt_ap_pattern_name2'];

    $str_sql = "INSERT INTO `ap_pattern_tb`(`ap_pattern_code`, `ap_pattern_name1`, `ap_pattern_name2`, `ap_pattern_status`) VALUES(";
	$str_sql .= "'" .  $str_ap_pattern_code . "',";
    $str_sql .= "'" . $str_ap_pattern_name1 . "',";
    $str_sql .= "'" . $str_ap_pattern_name2 . "',";
    $str_sql .= "' 1 ')";

    if ( mysqli_query($conn,$str_sql) ) {
		//echo "Save OK !";
		header("location:ap_pattern_manage.php");
		exit;
	} else {
		echo "Save Error ! : " . $str_sql;
	}
    
?>