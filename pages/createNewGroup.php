<?php
require '../include.php';
$path = "../data/" . $_GET["groupID"];
$mkdirconv = mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
if ($mkdirconv){

			echo "目录 $path 创建成功";

		}else{

			echo "目录 $path 创建失败";

		}exit;
$header = "location:workTableReg.php?type=admin&groupID=" . $_GET["groupID"]; 
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
