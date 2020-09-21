
<?php
    include("connect.php");
    require("connect.php");
  
    $sql = "";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corespondent Edit</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/corespondent_manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <div id="seacrh" class="contrainer-fluid">
        <div class="row">
            <div class="col-md-6">
                    <h1>Manage Corespondent Type</h1>
            </div>
        </div>
        <div class=row>
            <div class="col-md-6">
                ค้นหา <input type="text" >
                <input class="btn btn-primary" type="submit" name="btn_search" value="Search">
                <input class="btn btn-primary" type="submit" name="btn_add" value="+">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">Correspondent Type Id</div>
            <div class="col-md-1">Corrspondent Type Name</div>
            <div class="col-md-1">Process</div>
        </div>
        <?php while ($row = $result->fetch_assoc()) {
            
        ?>
        <div class="row">
            <div class="col-md-1"><?=$row["correspondent_id"]?></div>
            <div class="col-md-1"><?=$row["correspondent_name"]?></div>
            <div class="col-md-1">
                <input class="btn btn-primary" type="submit" id="btnedit" name="btnedit" value="Edit">
            </div>
        </div>
        <?php }  ?>
    </div>
   
</body>
</html>