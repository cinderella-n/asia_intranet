<?php
    include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goods Form</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div class="container-fluid">
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
                <select id="slt_status" class="form-control" name="slt_status">            
                    <option value="0">กรุณาเลือก...</option>
                </select>                
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
                    <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax type code (sales)</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_sale_type" class="form-control" name="slt_tax_sale_type">
                    <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Tax type code (purchase)</h3>
            </div>
            <div class="col-md-6">
                <select id="slt_tax_purchase_type" class="form-control" name="slt_tax_purchase_type">
                    <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Sales A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Sales return A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Purchase A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                    <option value="0">กรุณาเลือก...</option>
                </select>  
            </div> 

        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Purchase return A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Incoming Cr temporary A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Outgoing Dr temporary A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Suspense A/C(operating ratio) A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Inventory A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Invertory depletion loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Valuation loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Valuation loss reserve A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Cost A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Transfwe loss A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Intransit inventory A/C code</h3>
            </div>
            <div class="col-md-6">
                <select class="form-control slt_sales_ac" name="slt_sales_ac">               
                        <option value="0">กรุณาเลือก...</option>
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

            var sendobj_product_category_goods = {};
            sendobj_product_category_goods.get_product_category_goods = "set";
            $.ajax({
                method: "POST",
                url: "a_product_category_goods.php",
                data: sendobj_product_category_goods,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('#slt_product_category_goods').append($('<option>', {
                                value: data.list[i].ajax_product_category_goods_code,
                                text: data.list[i].ajax_product_category_goods_name1
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

            var sendobj_sales_ac = {};
            sendobj_sales_ac.get_sales_ac = "set";
            $.ajax({
                method: "POST",
                url: "a_sales_ac.php",
                data: sendobj_sales_ac,
                dataType: "json",
                success: function(data) {
                    //alert("OK !");

                    console.log(data);

                    if (data.issuccess) {

                        var i;
                        for (i = 0; i < data.list.length; i++) {
                            $('.slt_sales_ac').append($('<option>', {
                                value: data.list[i].ajax_sales_ac_code,
                                text: data.list[i].ajax_sales_ac_name1
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