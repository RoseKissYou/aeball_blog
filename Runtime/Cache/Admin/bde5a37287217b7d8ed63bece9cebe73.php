<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>博客首页</title>
</head>
<body>
<div>博客首页</div>
<div>
    <ul>
        <text>
            {foreach $articles $article}
            <p>
                <?php echo ($article["title"]); ?>
            </p>

        </text>
        <li>
            <h2>标题</h2>
        </li>
    </ul>
</div>

</body>
</html>