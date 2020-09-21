<?php
    include("connect.php");
    require("connect.php");

    $str_ap_pattern_id = $_POST['txt_ap_pattern_id'];
    $str_ap_pattern_code = $_POST['txt_ap_pattern_code'];
    $str_ap_pattern_name1 = $_POST['txt_ap_pattern_name1'];
    $str_ap_pattern_name2 = $_POST['txt_ap_pattern_name2'];


    $sql_ap_pattern = "INSERT INTO `ap_pattern_tb`(`ap_pattern_code`, `ap_pattern_name1`, `ap_pattern_name2`, `ap_pattern_status`) VALUES( ";
    $sql_ap_pattern .= ".'$str_ap_pattern_code'.";
    $sql_ap_pattern .= ".'$str_ap_pattern_name1'.";
    $sql_ap_pattern .= ".'$str_ap_pattern_nam2'.')'";
    $sql_ap_pattern .= " WHERE .''."
    $result_correspondent = $conn->query($sql_correspondent);


?>