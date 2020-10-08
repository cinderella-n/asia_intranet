<?php
    session_start();
    if (isset($_POST["btn_add"])) {
        header( "location: correspondent_form.php" );
    }elseif ($_POST["btn_edit"]) {
        $str_correspondent_id = $_POST['hdcorrespondent_id'];
        header( "location: correspondent_edit.php?id=" . $str_correspondent_id );
    }
    elseif ($_POST["btn_delete"]) {
        $str_correspondent_id = $_POST['hdcorrespondent_id'];
        header( "location: correspondent_delete.php?id=" . $str_correspondent_id );
    }
    elseif ($_POST["btn_search"]) {
        $keyword =$_POST["txtkeyword"];
        $str_qs = "";
		if(strlen($keyword) > 0) {
			$str_qs = "?kw=" . $keyword; 
		}
	 	header("location:correspondent_manage.php" . $str_qs);

    }else {
        header( "location: correspondent_manage.php" );
    }
?>