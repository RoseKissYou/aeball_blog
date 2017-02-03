<?php /*%%SmartyHeaderCode:277545874b75747c724-43336383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b8fefff434fe8a813433e1e6af7d4efe8f3bd9' => 
    array (
      0 => 'D:/php/www/aeball_blog/Admin/View\\Index\\show_article.html',
      1 => 1483856593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277545874b75747c724-43336383',
  'variables' => 
  array (
    'articles' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874b758c294a',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874b758c294a')) {function content_5874b758c294a($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>博客首页</title>
</head>
<body>
<h1>欢迎观看民信博客</h1>
<div id="rightTop">
    <ul class="subnav">


        <li>微信号列表</li>

        <li><a class="btn1" href="/index.php/articles/new_article.html">新增博客</a></li>

    </ul>

</div>

<div>
    <ul>


        <li>
            <h2>标题</h2>
        </li>
    </ul>
    <!---->
    没有数据
    <!---->
</div>

</body>
</html><?php }} ?>