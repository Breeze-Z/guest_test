<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title>留言系统--首页</title>
        <link rel="stylesheet" type="text/css" href="./style/index.css"/>
    </head>
    <body>
        <?php 
        define('IN_TG',true);
        require dirname(__FILE__).'/includes/common.inc.php';
        require ROOT_PATH.'includes/header.inc.php';
        ?>
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