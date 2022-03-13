<?php
require './include.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LibearWork</title>
        <?=$source?>
    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <img
                        src="/img/help.webp"
                        style="float: left"
                        class="mainPageButton"
                    />
                    <a href="/pages/devdoc/">
                        <img
                            src="/img/document.webp"
                            style="float: right"
                            class="mainPageButton"
                        />
                    </a>
                    <div class="jumbotron">
                        <h1 id="lbtitle">LibearWork</h1>
                    </div>
                    <form role="form" action="pages/workTableRegUser.php">
                        <div class="form-group">
                            <h1>加入组</h1>
                        </div>
				        <div class="form-group">
					        <label for="groupID">Email address</label><input type="text" class="form-control" name="groupID" />
				        </div>
                        <button type="submit" class="btn btn-default">加入</button>
			        </form>
                    <br />
                    <form action="pages/createNewGroup.php" class="mainPageForm">
                        <p>创建组</p>
                        <hr />
                        <input name="groupID" type="text" />
                        <br />
                        <button type="submit" class="mainPageSubmitBtn">创建</button>
                    </form>
                </div>
            </div>
        </div>
        <footer>LibearWork，©neila 2022-2022。本软件为开源软件。</footer>
    </body>
</html>
