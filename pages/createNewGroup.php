<?php
require '../include.php';
$dirname = "../data/" . $_GET["groupID"];
mkdir($dirname);
header("location:workTableAdmin.php");
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
