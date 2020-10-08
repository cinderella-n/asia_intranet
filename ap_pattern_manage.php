
<?php
    require("connect.php");

    $str_condition = "";
    $str_kw = "";
    
	if(isset($_GET['kw'])) {
		$str_kw = $_GET['kw'];
		$str_condition = "AND ap_pattern_name1 LIKE '%" . $str_kw . "%' OR ap_pattern_code like '%"  . $str_kw . "%'";
	}
  
    $sql = "SELECT * FROM `ap_pattern_tb` WHERE `ap_pattern_status`<>'0' " . $str_condition;
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP Pattern</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div id="seacrh" class="contrainer">
        <div class="row">
            <div class="col-md-10">
                <h1>All AP Pattern</h1>
            </div>
        </div>
        <form name="" action="r_ap_pattern_manage.php" method="post">
            <div class=row>
                <div class="col-md-10">
                    ค้นหา <input type="text" id="txtkeyword" name="txtkeyword" >
                    <input class="btn btn-primary" type="submit" name="btn_search" value="Search">
                    <input class="btn btn-primary" type="submit" name="btn_add" value="+">
                </div>
            </div>
        </form>
            <div id="tbhd" class="row">
                <div class="col-md-1">Status</div>
                <div class="col-md-1">Code</div>
                <div class="col-md-2">Name TH</div>
                <div class="col-md-2">Name EN</div>
                <div class="col-md-2">Process</div>
            </div>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="row">
                    <div class="col-md-1"><?=$row["ap_pattern_status"]?></div>
                    <div class="col-md-1"><?=$row["ap_pattern_code"]?></div>
                    <div class="col-md-2"><?=$row["ap_pattern_name1"]?></div>
                    <div class="col-md-2"><?=$row["ap_pattern_name2"]?></div>
                    <div class="col-md-2">
                        <form action="r_ap_pattern_manage.php" method="post">
                            <input type="hidden" name="hd_ap_pattern_id" id="hd_ap_pattern_id" value="<?=$row["ap_pattern_id"]?>">
                            <input class="btn btn-primary" type="submit" id="btn_delete" name="btn_delete" value="Delete">
                            <input class="btn btn-primary" type="submit" id="btn_edit" name="btn_edit" value="Edit">
                        </form>
                    </div>
                </div>
            <?php } ?>
    </div>
   
</body>
</html>