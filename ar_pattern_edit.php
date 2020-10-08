<?php
    require("connect.php");

    $str_id = "";

    $str_id= $_GET['hd_ap_pattern_id'];

    $sql = "SELECT * FROM `ap_pattern_tb` WHERE ap_pattern_id= '". $str_id ."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP Pattern Edit</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/correspondent_form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <form action="r_ap_pattern_edit.php" method="post">
        <div class="contrainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>AP Pattern Edit</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>AP Pattern ID</h3>
                </div>
                <div class="col-md-6">
                    <?=$row['ap_pattern_id']?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>AP Pattern Code</h3>
                </div>
                <div class="col-md-6">
                    <?=$row['ap_pattern_code']?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>AP Pattern Name1</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_ap_pattern_name1" type="text" name="txt_ap_pattern_name1" value="<?=$row['ap_pattern_name1']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>AP Pattern Name2</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_ap_pattern_name2" type="text" name="txt_ap_pattern_name2" value="<?=$row['ap_pattern_name2']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>AP Pattern Status</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_ap_pattern_status" type="text" name="txt_ap_pattern_status" value="<?=$row['ap_pattern_status']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 input">
                <input id="txt_ap_pattern_code" type="hidden" name="txt_ap_pattern_code" value="<?=$row['ap_pattern_code']?>">
                    <input id="txt_ap_pattern_id" type="hidden" name="txt_ap_pattern_id" value="<?=$row['ap_pattern_id']?>">
                    <input class="btn btn-primary" id="sbt" type="Submit" name="btnsave" value="Save">
                    <input class="btn btn-primary" id="sbt" type="Submit" name="btnclr" value="Clear">
                </div>
            </div> 
        </div>
    </form>
</body>
</html>