<?php
    include("connect.php");
    require("connect.php");

    $correspondent_id = $_POST['txtcorrespondent_id'];


    $sql_correspondent = "";
    $result_correspondent = $conn->query($sql_correspondent);


?>