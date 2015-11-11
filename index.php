<?php
//提前引用配置
 define('IN_TG',true);
 define('SCRIPT','index');
 require dirname(__FILE__).'/includes/common.inc.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title>留言系统--首页</title>
        <?php require ROOT_PATH.'/includes/linkCss.inc.php';?>
    </head>
    <body>
        <?php require ROOT_PATH.'includes/header.inc.php';?>
        <div id="list">
            <h2>帖子列表</h2>
        </div>
        <div id="user">
            <h2>新进会员</h2>
        </div>
        <div id="pics">
            <h2>最新图片</h2>
        </div>
        <?php require ROOT_PATH.'includes/footer.inc.php'; ?>
    </body>
</html>