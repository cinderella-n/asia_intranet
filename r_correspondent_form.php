<?php
    require("connect.php");

    $str_correspondent_status = $_POST['slt_status'];
    $str_correspondent_code = $_POST['txt_correspondent_code'];
    $str_correspondent_delivery = $_POST['txt_correspondent_delivery'];
    $str_correspondent_name1 = $_POST['txt_correspondent_name1'];
    $str_correspondent_name2 = $_POST['txt_correspondent_name2'];
    $str_correspondent_type = $_POST['slt_correspondent_type'];
    $str_correspondent_zip = $_POST['txt_correspondent_zip'];
    $str_correspondent_address1 = $_POST['txt_correspondent_address1'];
    $str_correspondent_address2 = $_POST['txt_correspondent_address2'];
    $str_correspondent_tel1 = $_POST['txt_correspondent_tel1'];
    $str_correspondent_tel2 = $_POST['txt_correspondent_tel2'];
    $str_correspondent_fax = $_POST['txt_correspondent_fax'];
    $str_correspondent_email = $_POST['txt_correspondent_email'];
    $str_correspondent_region = $_POST['slt_region'];
    $str_correspondent_ar_settlement_method = $_POST['slt_ar_settlement_method'];
    $str_correspondent_ap_settlement_method = $_POST['slt_ap_settlement_method'];
    $str_correspondent_bank_code = $_POST['txt_correspondent_bank_code'];
    $str_correspondent_bank_ac_code = $_POST['txt_correspondent_bank_ac_code'];
    $str_correspondent_ar_pattern = $_POST['slt_ar_pattern'];
    $str_correspondent_ap_pattern = $_POST['slt_ap_pattern'];
    $str_correspondent_tax_sale_type = $_POST['slt_tax_sale_type'];
    $str_correspondent_tax_purchase_type = $_POST['slt_tax_purchase_type'];
    $str_correspondent_remark1 = $_POST['txt_correspondent_remark1'];
    $str_correspondent_remark2 = $_POST['txt_correspondent_remark2'];
    $str_correspondent_register_company = $_POST['txt_correspondent_register_company'];
    $str_correspondent_search = $_POST['txt_correspondent_search'];
    $str_correspondent_credit_limit = $_POST['txt_correspondent_credit_limit'];
    $str_correspondent_branch_number = $_POST['txt_correspondent_branch_number'];

    $str_sql = "INSERT INTO `correspondent_tb`(`correspondent_status`,
     `correspondent_code`,
      `correspondent_code_delivery`,
       `correspondent_name1`,
        `correspondent_name2`,
         `correspondent_type`,
          `correspondent_zip`,
           `correspondent_address1_en`,
            `correspondent_address2_th`,
             `correspondent_tel1`,
              `correspondent_tel2`,
               `correspondent_fax`,
                `correspondent_email`,
                 `correspondent_region_code`,
                  `correspondent_ar_settlement_method_code`,
                   `correspondent_ap_settlement_method_code`,
                    `correspondent_bank_code`,
                     `correspondent_bank_ac_code`,
                      `correspondent_ar_pattern_code`,
                       `correspondent_ap_pattern_code`,
                        `correspondent_tax_type_sale_code`,
                         `correspondent_tax_type_purchase_code`,
                          `correspondent_department_code`,
                           `correspondent_remark1`,
                            `correspondent_remark2`,
                             `correspondent_register_company`,
                              `correspondent_credit_limit`,
                               `correspondent_branch_no`) VALUES (";
	  $str_sql .= "'" .  $str_correspondent_status . "',";
    $str_sql .= "'" .  $str_correspondent_code . "',";
    $str_sql .= "'" .  $str_correspondent_delivery . "',";
    $str_sql .= "'" .  $str_correspondent_name1 . "',";
    $str_sql .= "'" .  $str_correspondent_name2 . "',";
    $str_sql .= "'" .  $str_correspondent_type . "',";
    $str_sql .= "'" .  $str_correspondent_zip . "',";
    $str_sql .= "'" .  $str_correspondent_address1 . "',";
    $str_sql .= "'" .  $str_correspondent_address2 . "',";
    $str_sql .= "'" .  $str_correspondent_tel1 . "',";
    $str_sql .= "'" .  $str_correspondent_tel2 . "',";
    $str_sql .= "'" .  $str_correspondent_fax . "',";
    $str_sql .= "'" .  $str_correspondent_email . "',";
    $str_sql .= "'" .  $str_correspondent_region . "',";
    $str_sql .= "'" .  $str_correspondent_ar_settlement_method . "',";
    $str_sql .= "'" .  $str_correspondent_ap_settlement_method . "',";
    $str_sql .= "'" .  $str_correspondent_bank_code . "',";
    $str_sql .= "'" .  $str_correspondent_bank_ac_code . "',";
    $str_sql .= "'" .  $str_correspondent_ar_pattern . "',";
    $str_sql .= "'" .  $str_correspondent_ap_pattern . "',";
    $str_sql .= "'" .  $str_correspondent_tax_sale_type . "',";
    $str_sql .= "'" .  $str_correspondent_tax_purchase_type . "',";
    $str_sql .= "'" .  $str_correspondent_remark1 . "',";
    $str_sql .= "'" .  $str_correspondent_remark2 . "',";
    $str_sql .= "'" .  $str_correspondent_register_company . "',";
    $str_sql .= "'" .  $str_correspondent_search . "',";
    $str_sql .= "'" .  $str_correspondent_credit_limit . "',";
    $str_sql .= "'" .  $str_correspondent_branch_number . "')";


    if ( mysqli_query($conn,$str_sql) ) {
		//echo "Save OK !";
		header("location: correspondent_manage.php");
		exit;
	} else {
		echo "Save Error ! : " . $str_sql;
	}
    
?>