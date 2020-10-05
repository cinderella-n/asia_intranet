<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correspondent Form</title>

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
                    <option value="0">กรุณาเลือก...</option>
                </select>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Code</h3>
            </div>
            <div class="col-md-6">
                <input id="txt_correspondent_code" class="form-control"  type="text" name="txt_correspondent_code" >
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
                        <option value="0" >กรุณาเลือก...</option>
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
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax Type(Purchase) Code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_purchase_type" class="form-control" name="slt_tax_purchase_type">              
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Department Code</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_department" class="form-control" name="slt_department">             
                        <option value="0" >กรุณาเลือก...</option>
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

            var sendobj_status = {};
            sendobj_status.get_status = "set";
            $.ajax({
                method: "POST",
                url: "a_status.php",
                data: sendobj_status,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_status').append($('<option>', {
                                value: data.list[i].ajax_status_id,
                                text: data.list[i].ajax_status_name1
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

            var sendobj_correspondent_type = {};
            sendobj_correspondent_type.get_correspondent_type = "set";
            $.ajax({
                method: "POST",
                url: "a_correspondent_type.php",
                data: sendobj_correspondent_type,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_correspondent_type').append($('<option>', {
                                value: data.list[i].ajax_correspondent_type_id,
                                text: data.list[i].ajax_correspondent_type_name1
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

            var sendobj_region = {};
            sendobj_region.get_region = "set";
            $.ajax({
                method: "POST",
                url: "a_region.php",
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
                url: "a_ap_settlement_method.php",
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
                url: "a_ar_settlement_method.php",
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
                url: "a_ap_pattern.php",
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
                url: "a_ar_pattern.php",
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

            var sendobj_tax_sale_type = {};
            sendobj_tax_sale_type.get_tax_sale_type = "set";
            $.ajax({
                method: "POST",
                url: "a_tax_sale_type.php",
                data: sendobj_tax_sale_type,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_tax_sale_type').append($('<option>', {
                                value: data.list[i].ajax_tax_sale_type_code,
                                text: data.list[i].ajax_tax_sale_type_name1
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
                url: "a_tax_purchase_type.php",
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
            
            var sendobj_department = {};
            sendobj_department.get_department = "set";
            $.ajax({
                method: "POST",
                url: "a_department.php",
                data: sendobj_department,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_department').append($('<option>', {
                                value: data.list[i].ajax_department_code,
                                text: data.list[i].ajax_department_name1
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