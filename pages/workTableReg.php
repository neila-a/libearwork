<?php
    require '../include.php';
?>
<!DOCTYPE html>
<html>
<head>
<?=$source?>
</head>
<body style="text-align:center;">
    <img alt="140x140" src="../img/user.webp" class="img-circle" />
    <br />
    <h1 class="centerh1">请输入您的用户名</h1>
    <form role="form" action="pages/newAccount.php">
        <div class="form-group" style="display:none;">
            <input type="text" name="type" value="<?php echo $_GET['type']; ?>" />
	    <input type="text" name="groupID" value="<?php echo $_GET['groupID']; ?>" />
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="groupID" />
		</div>
        <button type="submit" class="btn btn-default">创建</button>
	</form>
</body>
</html>
