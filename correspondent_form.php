<?php
    include("connect.php");

    $sql_status = "SELECT * FROM `status_tb`";
    $result_status = $conn->query($sql_status);

    $sql_correspondent_type = "SELECT * FROM `correspondent_type_tb`";
    $result_correspondent_type = $conn->query($sql_correspondent_type);

    $sql_tax_sale_type = "SELECT * FROM `tax_sale_type_tb`";
    $result_tax_sale_type = $conn->query($sql_tax_sale_type);

    $sql_tax_purchase_type = "SELECT * FROM `tax_purchase_type_tb`";
    $result_tax_purchase_type = $conn->query($sql_tax_purchase_type);

    $sql_department = "SELECT * FROM `department_tb`";
    $result_department = $conn->query($sql_department);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Form</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div id="form" class="container-fluid">
        <div class="row">
            <div id="h1" class="col-md-3">
                <h1>Corespondent Form</h1>
            </div>
        </div>
    <form action="r_correspondent_form.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <h3>Status</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_status" class="form-control" name="slt_status">
                <?php while ($row_status = $result_status->fetch_assoc()) {
                
                ?>                
                    <option value="<?=$row_status['status_id']?>" id="slt_status" name="slt_status"> <?=$row_status['status_name']?> </option>
                <?php }  ?>
                </select>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Code</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_code" class="form-control" type="text" name="txt_correspondent_code">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Code(Delivery to)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_delivery" class="form-control" type="text" name="txt_correspondent_delivery">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Name1 (ENG)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_name1" class="form-control" type="text" name="txt_correspondent_name1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Name2 (TH)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_name2" class="form-control" type="text" name="txt_correspondent_name2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Correspondent type</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_correspondent_type" class="form-control" name="slt_correspondent_type">
                    <?php while ($row_correspondent_type = $result_correspondent_type->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_correspondent_type['correspondent_type_id']?>" id="slt_correspondent_type" name="slt_correspondent_type"> <?=$row_correspondent_type['correspondent_type_name']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Zip</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_zip" class="form-control" type="text" name="txt_correspondent_zip">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Address1 (ENG)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_address1" class="form-control" type="text" name="txt_correspondent_address1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Address2 (TH)</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_address2" class="form-control" type="text" name="txt_correspondent_address2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>TEL1</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_tel1" class="form-control" type="text" name="txt_correspondent_tel1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>TEL2</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_tel2" class="form-control" type="text" name="txt_correspondent_tel2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>FAX</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_fax" class="form-control" type="text" name="txt_correspondent_fax">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>E-Mail</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_email" class="form-control" type="text" name="txt_correspondent_email">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Region code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_region" class="form-control" name="slt_region">            
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>AR settlement method code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_ar_settlement_method" name="slt_ar_settlement_method" class="form-control">              
                        <option value="0" >กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>AP settlement method code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_ap_settlement_method" class="form-control" name="slt_ap_settlement_method">             
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Corresp's bank code</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_bank_code" class="form-control" type="text" name="txt_correspondent_bank_code">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Corresp's bank a/c code</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_bank_ac_code" class="form-control" type="text" name="txt_correspondent_bank_ac_code">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>AR pattern code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_ar_pattern" class="form-control" name="slt_ar_pattern">
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>AP pattern code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_ap_pattern" class="form-control" name="slt_ap_pattern">              
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax Type(Sale) Code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_sale_type" class="form-control" name="slt_tax_sale_type">
                    <?php while ($row_tax_sale_type = $result_tax_sale_type->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_tax_sale_type['tax_sale_type_code']?>" id="slt_tax_sale_type" name="slt_tax_sale_type"> <?=$row_tax_sale_type['tax_sale_type_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax Type(Purchase) Code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_purchase_type" class="form-control" name="slt_tax_purchase_type">
                    <?php while ($row_tax_purchase_type = $result_tax_purchase_type->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_tax_purchase_type['tax_purchase_type_code']?>" id="slt_tax_purchase_type" name="slt_tax_purchase_type"> <?=$row_tax_purchase_type['tax_purchase_type_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Department Code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_department" class="form-control" name="slt_department">
                    <?php while ($row_department = $result_department->fetch_assoc()) {
                    
                    ?>                
                        <option value="<?=$row_department['department_code']?>" id="slt_department" name="slt_department"> <?=$row_department['department_code']?>-<?=$row_department['department_name1']?> </option>
                    <?php }  ?>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Remark1</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_remark1" class="form-control" type="text" name="txt_correspondent_remark1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Remark2</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_remark2" class="form-control" type="text" name="txt_correspondent_remark2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Register Company</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_register_company" class="form-control" type="text" name="txt_correspondent_register_company">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Search</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_search" class="form-control" type="text" name="txt_correspondent_search">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Credit limit</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_credit_limit" class="form-control" type="text" name="txt_correspondent_credit_limit">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Branch No.</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_branch_number" class="form-control" type="text" name="txt_correspondent_branch_number">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <input class="btn btn-primary" id="sbt" type="Submit" name="btnsave" value="Save">
                <input class="btn btn-primary" id="sbt" type="Submit" name="btnclr" value="Clear">
            </div>
        </div> 
        </form>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" >
        $(function() {
            var sendobj_region = {};
            sendobj_region.get_region = "set";
            $.ajax({
                method: "POST",
                url: "j_region.php",
                data: sendobj_region,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_region').append($('<option>', {
                                value: data.list[i].ajax_region_code,
                                text: data.list[i].ajax_region_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });

            var sendobj_ap_settlement_method = {};
            sendobj_ap_settlement_method.get_ap_settlement_method = "set";
            $.ajax({
                method: "POST",
                url: "j_ap_settlement_method.php",
                data: sendobj_ap_settlement_method,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_ap_settlement_method').append($('<option>', {
                                value: data.list[i].ajax_ap_settlement_method_code,
                                text: data.list[i].ajax_ap_settlement_method_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });

            var sendobj_ar_settlement_method = {};
            sendobj_ar_settlement_method.get_ar_settlement_method = "set";
            $.ajax({
                method: "POST",
                url: "j_ar_settlement_method.php",
                data: sendobj_ar_settlement_method,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_ar_settlement_method').append($('<option>', {
                                value: data.list[i].ajax_ar_settlement_method_code,
                                text: data.list[i].ajax_ar_settlement_method_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });

            var sendobj_ap_pattern = {};
            sendobj_ap_pattern.get_ap_pattern = "set";
            $.ajax({
                method: "POST",
                url: "j_ap_pattern.php",
                data: sendobj_ap_pattern,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_ap_pattern').append($('<option>', {
                                value: data.list[i].ajax_ap_pattern_code,
                                text: data.list[i].ajax_ap_pattern_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });

            var sendobj_ar_pattern = {};
            sendobj_ar_pattern.get_ar_pattern = "set";
            $.ajax({
                method: "POST",
                url: "j_ar_pattern.php",
                data: sendobj_ar_pattern,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_ar_pattern').append($('<option>', {
                                value: data.list[i].ajax_ar_pattern_code,
                                text: data.list[i].ajax_ar_pattern_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });

            var sendobj_tax_purchase_type = {};
            sendobj_tax_purchase_type.get_tax_purchase_type = "set";
            $.ajax({
                method: "POST",
                url: "j_tax_purchase_type.php",
                data: sendobj_tax_purchase_type,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_tax_purchase_type').append($('<option>', {
                                value: data.list[i].ajax_tax_purchase_type_code,
                                text: data.list[i].ajax_tax_purchase_type_name1
                            }));
                        }

                    } else {
                        alert("Ajax Error");
                    }
                },
                error: function() {
                    alert("Has Error !!");
                }
            });
            
        });
    </script>
</body>
</html>