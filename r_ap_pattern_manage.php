<?php
    if (isset($_POST["btn_add"])) {
        header("location:ap_pattern_form.php");
    }elseif ($_POST["btn_edit"]) {
        $str_id = "?hd_ap_pattern_id=" . $_POST['hd_ap_pattern_id'];
        header("location:ap_pattern_edit.php" . $str_id);
    }
    elseif ($_POST["btn_delete"]) {
        $str_id = "?hd_ap_pattern_id=" .  $_POST['hd_ap_pattern_id'];
        header("location:ap_pattern_delete.php" . $str_id);
    }
    elseif ($_POST["btn_search"]) {
        $keyword =$_POST["txtkeyword"];
        $str_qs = "";
		if(strlen($keyword) > 0) {
			$str_qs = "?kw=" . $keyword; 
		}
	 	header("location:ap_pattern_manage.php" . $str_qs);

    }else {
        header("location:ap_pattern_manage.php" );
    }
?>