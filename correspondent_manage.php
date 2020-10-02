
<?php
    include("connect.php");
    require("connect.php");

    $str_condition = "";
    $str_kw = "";
    
	if(isset($_GET['kw'])) {
		$str_kw = $_GET['kw'];
		$str_condition = "AND correspondent_name1 LIKE '%" . $str_kw . "%' OR correspondent_code like '%"  . $str_kw . "%'";
	}
  
    $sql = "SELECT * FROM `correspondent_tb` WHERE `correspondent_status`<>'inactive' " . $str_condition;
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Correspondent</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div id="seacrh" class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>All Correspondent</h1>
            </div>
        </div>
        <form name="" action="r_correspondent_manage.php" method="post">
            <div class=row>
                <div class="col-md-10">
                    ค้นหา <input type="text" id="txtkeyword" name="txtkeyword" >
                    <input class="btn btn-primary" type="submit" name="btn_search" value="Search">
                    <input class="btn btn-primary" type="submit" name="btn_add" value="+">
                </div>
            </div>
        </form>
            <div id="tbhd" class="row">
                <div class="col-md-1">สถานะ</div>
                <div class="col-md-1">รหัส</div>
                <div class="col-md-2">ชื่อ(TH)</div>
                <div class="col-md-2">ชื่อ(EN)</div>
                <div class="col-md-3">ที่อยู่(EN)</div>
                <div class="col-md-3">ที่อยู่(TH)</div>
            </div>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="row data">
                    <div class="col-md-1"><?=$row["correspondent_status"]?></div>
                    <div class="col-md-1"><?=$row["correspondent_code"]?></div>
                    <div class="col-md-2"><?=$row["correspondent_name1"]?></div>
                    <div class="col-md-2"><?=$row["correspondent_name2"]?></div>
                    <div class="col-md-3"><?=$row["correspondent_address1_en"]?></div>
                    <div class="col-md-3"><?=$row["correspondent_address2_th"]?></div>
                    <div class="col-md-12 button">
                        <form action="r_correspondent_manage.php" method="post">
                            <input type="hidden" name="hd_correspondent_id" id="hd_correspondent_id" value="<?=$row["correspondent_id"]?>">
                            <input class="btn btn-primary" type="submit" id="btn_edit" name="btn_edit" value="Edit">
                            <input class="btn btn-danger" type="submit" id="btn_delete" name="btn_delete" value="Delete">                            
                        </form>
                    </div>
                </div>
            <?php } ?>
    </div>
   
</body>
</html>