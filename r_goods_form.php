<?php
    require("connect.php");

    $str_goods_status = $_POST['slt_goods_status'];
    $str_goods_code = $_POST['txt_goods_code'];
    $str_goods_name1 = $_POST['txt_goods_name1'];
    $str_goods_name2 = $_POST['txt_goods_name2'];
    $str_goods_type = $_POST['rdo_goods_type'];
    $str_goods_currency_for_sale = $_POST['rdo_currency_for_sale'];
    $str_goods_stocking_unit = $_POST['rdo_stocking_unit'];
    $str_goods_pcs_db = $_POST['txt_goods_pcs_db'];
    $str_goods_pcs_case = $_POST['txt_goods_pcs_case'];
    $str_goods_sales_price_db = $_POST['txt_goods_sales_price_db'];
    $str_goods_sales_price_case = $_POST['txt_goods_sales_price_case'];
    $str_goods_product_category_goods = $_POST['slt_product_category_goods'];
    $str_goods_tax_sale_type = $_POST['slt_tax_sale_type'];
    $str_goods_tax_purchase_type = $_POST['slt_tax_purchase_type'];
    $str_goods_sales_ac = $_POST['slt_goods_sales_ac'];
    $str_goods_sales_return_ac = $_POST['slt_goods_sales_return_ac'];
    $str_goods_purchase_ac = $_POST['slt_goods_purchase_ac'];
    $str_goods_purchase_return_ac = $_POST['slt_goods_purchase_return_ac'];
    $str_goods_incoming_cr_temporary_ac = $_POST['slt_goods_incoming_cr_temporary_ac'];
    $str_goods_outgoing_dr_temporary_ac = $_POST['slt_goods_outgoing_dr_temporary_ac'];
    $str_goods_suspense_ac_operating_ratio_ac = $_POST['slt_goods_suspense_ac_operating_ratio_ac'];
    $str_goods_inventory_ac = $_POST['slt_goods_inventory_ac'];
    $str_goods_inventory_depletion_loss_ac = $_POST['slt_goods_inventory_depletion_loss_ac'];
    $str_goods_valuation_loss_ac = $_POST['slt_goods_valuation_loss_ac'];
    $str_goods_valuation_loss_reserve_ac = $_POST['slt_goods_valuation_loss_reserve_ac'];
    $str_goods_cost_ac = $_POST['slt_goods_cost_ac'];
    $str_goods_transfer_loss_ac = $_POST['slt_goods_transfer_loss_ac'];
    $str_goods_intransit_inventory_ac = $_POST['slt_goods_intransit_inventory_ac'];
    $str_goods_remark = $_POST['txt_goods_remark'];


    $str_sql = "INSERT INTO `goods_tb`(`goods_status`,
     `goods_code`,
      `goods_name1`,
       `goods_name2`,
         `goods_type`,
          `goods_currency`,
           `goods_stocking_unit`,
            `goods_pcs_db`,
             `goods_pcs_case`,
              `goods_sales_unit_price_db`,
               `goods_sales_unit_price_case`,
                `goods_product_category`,
                 `goods_tax_type_code_sales`,
                  `goods_tax_type_code_purchase`,
                   `goods_sales_ac`,
                    `goods_sales_return_ac`,
                     `goods_purchase_ac`,
                      `goods_purchase_return_ac`,
                       `goods_incoming_cr_temporary_ac`,
                        `goods_outgoing_dr_temporary_ac`,
                         `goods_suspense_ac_operating_ratio_ac`,
                          `goods_inventory_ac`,
                           `goods_inventory_depletion_loss_ac`,
                            `goods_valuation_loss_ac`,
                             `goods_valuation_loss_reserve_ac`,
                              `goods_cost_ac`,
                               `goods_transfer_loss_ac`,
                                `goods_intransit_inventory_ac`,
                                 `goods_what_to_do`,
                                  `goods_remark`) VALUES (";
    $str_sql .= "'" .  $str_goods_status . "',";
    $str_sql .= "'" .  $str_goods_code . "',";
    $str_sql .= "'" .  $str_goods_name1 . "',";
    $str_sql .= "'" .  $str_goods_name2 . "',";
    $str_sql .= "'" .  $str_goods_type . "',";
    $str_sql .= "'" .  $str_goods_currency_for_sale . "',";
    $str_sql .= "'" .  $str_goods_stocking_unit . "',";
    $str_sql .= "'" .  $str_goods_pcs_db . "',";
    $str_sql .= "'" .  $str_goods_pcs_case . "',";
    $str_sql .= "'" .  $str_goods_sales_price_db . "',";
    $str_sql .= "'" .  $str_goods_sales_price_case . "',";
    $str_sql .= "'" .  $str_goods_product_category_goods . "',";
    $str_sql .= "'" .  $str_goods_tax_sale_type . "',";
    $str_sql .= "'" .  $str_goods_tax_purchase_type . "',";
    $str_sql .= "'" .  $str_goods_sales_ac . "',";
    $str_sql .= "'" .  $str_goods_sales_return_ac . "',";
    $str_sql .= "'" .  $str_goods_purchase_ac . "',";
    $str_sql .= "'" .  $str_goods_purchase_return_ac . "',";
    $str_sql .= "'" .  $str_goods_incoming_cr_temporary_ac . "',";
    $str_sql .= "'" .  $str_goods_outgoing_dr_temporary_ac . "',";
    $str_sql .= "'" .  $str_goods_suspense_ac_operating_ratio_ac . "',";
    $str_sql .= "'" .  $str_goods_inventory_ac . "',";
    $str_sql .= "'" .  $str_goods_inventory_depletion_loss_ac . "',";
    $str_sql .= "'" .  $str_goods_valuation_loss_ac . "',";
    $str_sql .= "'" .  $str_goods_valuation_loss_reserve_ac . "',";
    $str_sql .= "'" .  $str_goods_cost_ac . "',";
    $str_sql .= "'" .  $str_goods_transfer_loss_ac . "',";
    $str_sql .= "'" .  $str_goods_intransit_inventory_ac . "',";
    $str_sql .= "'" .  $str_goods_remark . "')";


    if ( mysqli_query($conn,$str_sql) ) {
		//echo "Save OK !";
		header("location: goods_manage.php");
		exit;
	} else {
		echo "Save Error ! : " . $str_sql;
	}
    
?>