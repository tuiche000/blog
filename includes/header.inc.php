<header>
    <nav id="nav">
        <ul>
            <li><a href="<?php echo ROOT_PATH."index.php"?>">网站首页</a></li>
            <li><a href="#">个人中心</a></li>
            <li><a href="#">关于我们</a></li>
            <li><a href="#">我们的故事</a></li>
            <li><a href="templates/member.php">个人中心</a></li>
            <li><a href="templates/contacts.php">我们的博客</a></li>
            <li><a href="#">联系我们</a></li>
            <?php
                if($_SESSION['username']){
                    echo "<li><a href=\"#\">{$_SESSION['username']}</a></li>";
                    echo "<li><a href=\"app/exit_login.php\">退出</a></li>";
                }else{
                    echo "<li><a href=\"templates/login.php\">登录</a></li>
            <li><a href=\"templates/register.php\">注册</a></li>";
                }
            ?>

        </ul>
        <script src="js/silder.js"></script><!--获取当前页导航 高亮显示标题-->
    </nav>
</header>