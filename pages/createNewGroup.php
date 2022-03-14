<?php
    $groupID = $_GET["groupID"];
    $jsonfile = fopen("../data.json", "a+");
    $data = json_decode($jsonfile, true);
    $data["groups"][$groupID] = array();
    fwrite("../data.json",json_encode($data));
    fclose("../data.json");
    echo "<script>window.location.href = http://libearwork.herokuapp.com/pages/workTableReg.php?type=admin&groupID=" . $groupID . ";</script>";
    exit;
?>
