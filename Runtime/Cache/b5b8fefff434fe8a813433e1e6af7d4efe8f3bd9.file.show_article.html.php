<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 19:03:00
         compiled from "D:/php/www/aeball_blog/Admin/View\Index\show_article.html" */ ?>
<?php /*%%SmartyHeaderCode:179095874bf64a930a5-13317153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '179095874bf64a930a5-13317153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874bf6627102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874bf6627102')) {function content_5874bf6627102($_smarty_tpl) {?><!DOCTYPE html>
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

        <li><a class="btn1" href="<?php echo U('Admin/Articles/new_article');?>
">新增博客</a></li>

    </ul>

</div>

<div>
    <ul>


        <li>
            <h2>标题</h2>
        </li>
    </ul>
    <!--<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>-->

    <p>
        <?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>

    </p>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['art']->value['content'];?>

    </p>
    <!--<?php }
if (!$_smarty_tpl->tpl_vars['art']->_loop) {
?>-->
    没有数据
    <!--<?php } ?>-->
</div>

</body>
</html><?php }} ?>