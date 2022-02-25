<?php
require '../include.php';
$dirname = "../data/" . $_GET["groupID"];
mkdir($dirname,0777,true);
$header = "location:workTableRegAdmin.php?groupID=" . $_GET["groupID"]; 
header($header);
exit;
?>
<!DOCTYPE html>
<html>
<head>
<?=$source?>
</head>
<body>
</body>
</html>
