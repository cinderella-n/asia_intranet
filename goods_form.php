<?php
    include("connect.php");
    require("connect.php");

    $sql_status = "SELECT * FROM `status_tb`";
    $result_status = $conn->query($sql_status);
    
    $sql_product_category_goods = "SELECT * FROM `product_category_goods_tb`";
    $result_product_category_goods = $conn->query($sql_product_category_goods);

    $sql_tax_sale_type = "SELECT * FROM `tax_sale_type_tb`";
    $result_tax_sale_type = $conn->query($sql_tax_sale_type);

    $sql_tax_purchase_type = "SELECT * FROM `tax_purchase_type_tb`";
    $result_tax_purchase_type = $conn->query($sql_tax_purchase_type);

    $sql_sales_ac = "SELECT * FROM `sales_ac_tb`";
    $result_sales_ac = $conn->query($sql_sales_ac);

    $sql_sales_return_ac = "SELECT * FROM `sales_ac_tb`";
    $result_sales_return_ac = $conn->query($sql_sales_return_ac);

    $sql_purchase_ac = "SELECT * FROM `sales_ac_tb`";
    $result_purchase_ac = $conn->query($sql_purchase_ac);

    $sql_purchase_return_ac = "SELECT * FROM `sales_ac_tb`";
    $result_purchase_return_ac = $conn->query($sql_purchase_return_ac);

    $sql_incoming_cr_temporary_ac = "SELECT * FROM `sales_ac_tb`";
    $result_incoming_cr_temporary_ac = $conn->query($sql_incoming_cr_temporary_ac);

    $sql_outgoing_dr_temporary_ac = "SELECT * FROM `sales_ac_tb`";
    $result_outgoing_dr_temporary_ac = $conn->query($sql_outgoing_dr_temporary_ac);

    $sql_suspense_ac_operating_ratio = "SELECT * FROM `sales_ac_tb`";
    $result_suspense_ac_operating_ratio = $conn->query($sql_suspense_ac_operating_ratio);

    $sql_inventory_ac = "SELECT * FROM `sales_ac_tb`";
    $result_inventory_ac = $conn->query($sql_inventory_ac);

    $sql_invertory_depletion_loss_ac = "SELECT * FROM `sales_ac_tb`";
    $result_invertory_depletion_loss_ac = $conn->query($sql_invertory_depletion_loss_ac);

    $sql_valuation_loss_ac = "SELECT * FROM `sales_ac_tb`";
    $result_valuation_loss_ac = $conn->query($sql_valuation_loss_ac);

    $sql_valuation_loss_reserve_ac = "SELECT * FROM `sales_ac_tb`";
    $result_valuation_loss_reserve_ac = $conn->query($sql_valuation_loss_reserve_ac);

    $sql_cost_ac = "SELECT * FROM `sales_ac_tb`";
    $result_cost_ac = $conn->query($sql_cost_ac);

    $sql_transfwe_loss_ac = "SELECT * FROM `sales_ac_tb`";
    $result_transfwe_loss_ac = $conn->query($sql_transfwe_loss_ac);

    $sql_intransit_inventory_ac = "SELECT * FROM `sales_ac_tb`";
    $result_intransit_inventory_ac = $conn->query($sql_intransit_inventory_ac);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goods Form</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/corespondent_form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div class="contrainer-fluid">
    <div class="row">
            <div id="h1" class="col-md-3">
                <h1>Goods Form</h1>
            </div>
        </div>
        <form action="r_goods_form.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <h3>Status</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Goods code</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Name1(ENg)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Name2(TH)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Goods type</h3>
            </div>
            <div class="col-md-6">
                <div class="radio">
                    <label><input type="radio" name="rdo_goods_type" value="1" checked>Merchandise</label>
                    <label><input type="radio" name="rdo_goods_type" value="2" >Product</label>
                    <label><input type="radio" name="rdo_goods_type" value="3" >Consumables</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Currency(ForSales)</h3>
            </div>
            <div class="col-md-6">
                <div class="radio">
                    <label><input type="radio" name="rdo_currency_for_sale" value="1" checked>THB</label>
                    <label><input type="radio" name="rdo_currency_for_sale" value="2" >USD</label>
                    <label><input type="radio" name="rdo_currency_for_sale" value="3" >JP</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Stocking Unit</h3>
            </div>
            <div class="col-md-6">
                <div class="radio">
                    <label><input type="radio" name="rdo_stocking_unit" value="1" checked>Case</label>
                    <label><input type="radio" name="rdo_stocking_unit" value="2" >DB</label>
                    <label><input type="radio" name="rdo_stocking_unit" value="2" >PCS</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>PCS/DB</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="number" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>PCS/CASE</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="number" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>SalesUnitPrice(DB)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>SalesUnitPrice(CASE)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Product Category Goods</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_product_category_goods" class="form-control" name="slt_product_category_goods">
                    <?php while ($row_product_category_goods = $result_product_category_goods->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_product_category_goods['product_category_goods_id']?>" id="slt_product_category_goods" name="slt_product_category_goods"> <?=$row_product_category_goods['product_category_goods_code']?> - <?=$row_product_category_goods['product_category_goods_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax type code (sales)</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_sale_type" class="form-control" name="slt_tax_sale_type">
                    <?php while ($row_tax_sale_type = $result_tax_sale_type->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_tax_sale_type['tax_sale_type_id']?>" id="slt_tax_sale_type" name="slt_tax_sale_type"><?=$row_tax_sale_type['tax_sale_type_code']?> - <?=$row_tax_sale_type['tax_sale_type_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax type code (purchase)</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_purchase_type" class="form-control" name="slt_tax_purchase_type">
                    <?php while ($row_tax_purchase_type = $result_tax_purchase_type->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_tax_purchase_type['tax_purchase_type_id']?>" id="slt_tax_purchase_type" name="slt_tax_purchase_type"> <?=$row_tax_purchase_type['tax_purchase_type_code']?> - <?=$row_tax_purchase_type['tax_purchase_type_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Sales A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_sales_ac" class="form-control" name="slt_sales_ac">
                    <?php while ($row_sales_ac = $result_sales_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_sales_ac['sales_ac_id']?>" id="slt_sales_ac" name="slt_sales_ac"> <?=$row_sales_ac['sales_ac_code']?> - <?=$row_sales_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Sales return A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_sales_return_ac" class="form-control" name="slt_sales_return_ac">
                    <?php while ($row_sales_return_ac = $result_sales_return_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_sales_return_ac['sales_ac_id']?>" id="slt_sales_return_ac" name="slt_sales_return_ac"> <?=$row_sales_return_ac['sales_ac_code']?> - <?=$row_sales_return_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Purchase A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_purchase_ac" class="form-control" name="slt_purchase_ac">
                    <?php while ($row_purchase_ac = $result_purchase_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_purchase_ac['sales_ac_id']?>" id="slt_purchase_ac" name="slt_purchase_ac"> <?=$row_purchase_ac['sales_ac_code']?> - <?=$row_purchase_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Purchase return A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_purchase_return_ac" class="form-control" name="slt_purchase_return_ac">
                    <?php while ($row_purchase_return_ac = $result_purchase_return_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_purchase_return_ac['sales_ac_id']?>" id="slt_purchase_return_ac" name="slt_purchase_return_ac"> <?=$row_purchase_return_ac['sales_ac_code']?> - <?=$row_purchase_return_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Incoming Cr temporary A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_incoming_cr_temporary_ac" class="form-control" name="slt_purchase_return_ac">
                    <?php while ($row_incoming_cr_temporary_ac = $result_incoming_cr_temporary_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_incoming_cr_temporary_ac['sales_ac_id']?>" id="slt_incoming_cr_temporary_ac" name="slt_incoming_cr_temporary_ac"> <?=$row_incoming_cr_temporary_ac['sales_ac_code']?> - <?=$row_incoming_cr_temporary_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Outgoing Dr temporary A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_outgoing_dr_temporary_ac" class="form-control" name="slt_outgoing_dr_temporary_ac">
                    <?php while ($row_outgoing_dr_temporary_ac = $result_outgoing_dr_temporary_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_outgoing_dr_temporary_ac['sales_ac_id']?>" id="slt_outgoing_dr_temporary_ac" name="slt_outgoing_dr_temporary_ac"> <?=$row_outgoing_dr_temporary_ac['sales_ac_code']?> - <?=$row_outgoing_dr_temporary_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Suspense A/C(operating ratio) A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_suspense_ac_operating_ratio" class="form-control" name="slt_suspense_ac_operating_ratio">
                    <?php while ($row_suspense_ac_operating_ratio = $result_suspense_ac_operating_ratio->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_suspense_ac_operating_ratio['sales_ac_id']?>" id="slt_suspense_ac_operating_ratio" name="slt_suspense_ac_operating_ratio"> <?=$row_suspense_ac_operating_ratio['sales_ac_code']?> - <?=$row_suspense_ac_operating_ratio['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Inventory A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_inventory_ac" class="form-control" name="slt_inventory_ac">
                    <?php while ($row_inventory_ac = $result_inventory_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_inventory_ac['sales_ac_id']?>" id="slt_inventory_ac" name="slt_inventory_ac"> <?=$row_inventory_ac['sales_ac_code']?> - <?=$row_inventory_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Invertory depletion loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_invertory_depletion_loss_ac" class="form-control" name="slt_invertory_depletion_loss_ac">
                    <?php while ($row_invertory_depletion_loss_ac = $result_invertory_depletion_loss_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_invertory_depletion_loss_ac['sales_ac_id']?>" id="slt_invertory_depletion_loss_ac" name="slt_invertory_depletion_loss_ac"> <?=$row_invertory_depletion_loss_ac['sales_ac_code']?> - <?=$row_invertory_depletion_loss_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Valuation loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_valuation_loss_ac" class="form-control" name="slt_valuation_loss_ac">
                    <?php while ($row_valuation_loss_ac = $result_valuation_loss_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_valuation_loss_ac['sales_ac_id']?>" id="slt_valuation_loss_ac" name="slt_valuation_loss_ac"> <?=$row_valuation_loss_ac['sales_ac_code']?> - <?=$row_valuation_loss_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Valuation loss reserve A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_valuation_loss_reserve_ac" class="form-control" name="slt_valuation_loss_reserve_ac">
                    <?php while ($row_valuation_loss_reserve_ac = $result_valuation_loss_reserve_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_valuation_loss_reserve_ac['sales_ac_id']?>" id="slt_valuation_loss_reserve_ac" name="slt_valuation_loss_reserve_ac"> <?=$row_valuation_loss_reserve_ac['sales_ac_code']?> - <?=$row_valuation_loss_reserve_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Cost A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_cost_ac" class="form-control" name="slt_cost_ac">
                    <?php while ($row_cost_ac = $result_cost_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_cost_ac['sales_ac_id']?>" id="slt_cost_ac" name="slt_cost_ac"> <?=$row_cost_ac['sales_ac_code']?> - <?=$row_cost_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Transfwe loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_transfwe_loss_ac" class="form-control" name="slt_transfwe_loss_ac">
                    <?php while ($row_transfwe_loss_ac = $result_transfwe_loss_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_transfwe_loss_ac['sales_ac_id']?>" id="slt_transfwe_loss_ac" name="slt_transfwe_loss_ac"> <?=$row_transfwe_loss_ac['sales_ac_code']?> - <?=$row_transfwe_loss_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Intransit inventory A/C code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_intransit_inventory_ac" class="form-control" name="slt_intransit_inventory_ac">
                    <?php while ($row_intransit_inventory_ac = $result_intransit_inventory_ac->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_intransit_inventory_ac['sales_ac_id']?>" id="slt_intransit_inventory_ac" name="slt_intransit_inventory_ac"> <?=$row_intransit_inventory_ac['sales_ac_code']?> - <?=$row_intransit_inventory_ac['sales_ac_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Remark</h3>
            </div>
            <div class="col-md-6">
                <input id="txt" class="form-control" type="text" name="txt">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-2">
                <input class="btn btn-default" id="sbt" type="Submit" name="btnsave" value="Save">
                <input class="btn btn-default" id="sbt" type="Submit" name="btnclr" value="Clear">
            </div>
        </div> 
        </form>
    </div>
</body>
</html>