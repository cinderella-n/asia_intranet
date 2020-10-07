
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/logo.JPG" width="65px" height="36px" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Goods<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Correspondent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sale Price</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AC Code
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
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