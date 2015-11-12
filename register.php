<?php
    define('IN_TG',true);
    define('SCRIPT','register');
    require dirname(__FILE__).'/includes/common.inc.php';
?>
<htlm>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title>留言系统--注册</title>
    <?php require ROOT_PATH.'/includes/linkCss.inc.php';?>
    </head>
    <body> 
    <?php require ROOT_PATH.'/includes/header.inc.php';?>
        <div id="register">
            <form name="register">
                <h2>会员注册</h2>
                <dl>
                    <dt>请认真填写以下内容：</dt>
                    <dd>用 户 名：<input type="text" name="username"/></dd>
                    <dd>密　  码：<input type="password" name="password"/></dd>
                    <dd>重复密码：<input type="password" name="password"/></dd>
                    <dd>密码提示：<input type="text" name="pass_prompt"/></dd>
                    <dd>密码回答：<input type="text" name="pass_answer"/></dd>
                    <dd>性　　别：
                       <input type="radio" name="sex" value="man" checked="checked"/>男
                       <input type="radio" name="sex" value="woman" />女
                    </dd>
                    <dd class="face">
                        <input type="hidden" name="face" value="./facepics/m01.gif"/>
                        <img src="./facepics/m01.gif" alt="头像选择" id="faceimg"/>
                    </dd>
                    <dd>电子邮件：<input type="text" name="email"/></dd>
                    <dd>Q　　　Q：<input type="text" name="qq"/></dd>
                    <dd>博客地址：<input type="text" name="http"/></dd>
                    <dd>验 证 码：
                        <input type="text" name="code" class="code"/>
                        <img src="code.php" id="codeimg" name='codeimg' class="codeimg"/>
                    </dd>
                    <dd><input type="submit" name="submit" value="注册" class="submit"/></dd>
                </dl>
 
            </form>
        </div>
        <?php require ROOT_PATH.'/includes/footer.inc.php';?>
        <script type="text/javascript" src="./js/register.js"></script>
    </body>
</htlm>

