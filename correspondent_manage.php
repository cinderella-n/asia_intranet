
<?php
    include("connect.php");
    require("connect.php");

    $str_condition = "";
	$str_kw = "";
	if(isset($_GET['kw'])) {
		$str_kw = $_GET['kw'];
		$str_condition = "AND correspondent_name1 LIKE '%" . $str_kw . "%' or correspondent_id like '%"  . $str_kw . "%'";
	}
  
    $sql = "SELECT `correspondent_id`, `correspondent_status`, `correspondent_code`, `correspondent_code_delivery`, `correspondent_name1`, `correspondent_name2`, `correspondent_type`, `correspondent_zip`, `correspondent_address1_en`, `correspondent_address2_th`, `correspondent_tel1`, `correspondent_tel2`, `correspondent_fax`, `correspondent_email`, `correspondent_region_code`, `correspondent_ar_settlement_method_code`, `correspondent_ap_settlement_method_code`, `correspondent_bank_code`, `correspondent_bank_ac_code`, `correspondent_ar_pattern_code`, `correspondent_ap_pattern_code`, `correspondent_tax_type_sale_code`, `correspondent_tax_type_purchase_code`, `correspondent_remark1`, `correspondent_remark2`, `correspondent_register_company`, `correspondent_search`, `correspondent_credit_limit`, `correspondent_branch_no`, `correspondent_create_by`, `correspondent_create_date`, `correspondent_post_by`, `correspondent_post_date`, `correspondent_it` FROM `correspondent_tb` WHERE `correspondent_status`<>'5' " . $str_condition;;
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corespondent Edit</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div id="seacrh" class="contrainer-fluid">
        <div class="row">
            <div class="col-md-12">
                    <h1>All Correspondent</h1>
            </div>
        </div>
        <form action="r_correspondent_manage.php" method="post">
            <div class=row>
                <div class="col-md-12">
                    ค้นหา <input type="text" id="txtkeyword" name="txtkeyword" >
                    <input class="btn btn-primary" type="submit" name="btn_search" value="Search">
                    <input class="btn btn-primary" type="submit" name="btn_add" value="+">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Status</div>
                <div class="col-md-1">ID</div>
                <div class="col-md-1">Code Corrspondent</div>
                <div class="col-md-1">Name1</div>
                <div class="col-md-1">Name2</div>
                <div class="col-md-1">address1</div>
                <div class="col-md-1">address2</div>
                <div class="col-md-1">Creater by.</div>
                <div class="col-md-1">Creater Date.</div>
                <div class="col-md-1">POST by.</div>
                <div class="col-md-1">POST Date.</div>
                <div class="col-md-1">Process</div>
            </div>
            <?php while ($row = $result->fetch_assoc()) {                
            ?>
            <div class="row">
                <div class="col-md-1"><?=$row["correspondent_status"]?></div>
                <div class="col-md-1"><?=$row["correspondent_id"]?></div>
                <div class="col-md-1"><?=$row["correspondent_code"]?></div>
                <div class="col-md-1"><?=$row["correspondent_name1"]?></div>
                <div class="col-md-1"><?=$row["correspondent_name2"]?></div>
                <div class="col-md-1"><?=$row["correspondent_address1_en"]?></div>
                <div class="col-md-1"><?=$row["correspondent_address2_th"]?></div>
                <div class="col-md-1"><?=$row["correspondent_create_by"]?></div>
                <div class="col-md-1"><?=$row["correspondent_create_date"]?></div>
                <div class="col-md-1"><?=$row["correspondent_post_by"]?></div>
                <div class="col-md-1"><?=$row["correspondent_post_date"]?></div>
                <div class="col-md-1">
                    <input type="hidden" name="hdcorrespondent_id" id="hdcorrespondent_id" value="<?=$row["correspondent_id"]?>">
                    <input class="btn btn-primary" type="submit" id="btn_edit" name="btn_edit" value="edit">
                </div>
            </div>
            <?php }  ?>
        </form>
    </div>
   
</body>
</html>