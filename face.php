<?php
define('IN_TG',true);
define('SCRIPT','face');
require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言系统--头像选择</title>
<?php require ROOT_PATH.'/includes/linkCss.inc.php';?>
</head>
<body>
<div id="face">
    <h3>选择头像</h3>
    <dl>
        <?php
        //for 方法循环
            for($i=1;$i<10;$i++){ 
        ?>
            <dd><img src="./facepics/m0<?php echo $i?>.gif" alt="m0<?php echo $i?>"/></dd>
        <?php  } ?>
        <?php 
        //foreach 方法循环
            foreach(range(10,64) as $i){
        ?>
            <dd><img src="./facepics/m<?php echo $i?>.gif" alt="m<?php echo $i?>"/></dd>
        <?php } ?>
    </dl>
</div>
</body>
</html>

