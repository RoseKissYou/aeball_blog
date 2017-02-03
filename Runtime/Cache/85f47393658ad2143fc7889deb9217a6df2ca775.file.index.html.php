<?php /* Smarty version Smarty-3.1.6, created on 2017-01-18 16:22:01
         compiled from "D:/php/www/ThinkPHP3/aeball_blog/Home/View\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4119587f1ff92bf204-65679121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f47393658ad2143fc7889deb9217a6df2ca775' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/aeball_blog/Home/View\\User\\index.html',
      1 => 1484727717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4119587f1ff92bf204-65679121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587f1ff931ce0',
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f1ff931ce0')) {function content_587f1ff931ce0($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>jQuery UI 日期选择器（Datepicker） - 默认功能</title>
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
jquery-ui.css">
    <script src="<?php echo @JS_URL;?>
jquery-1.11.1.min.js"></script>
    <script src="<?php echo @JS_URL;?>
jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</head>
<body>
<volist>
    <input id="end_time" name="create_time_end" type="text"  autocomplete="off" onfocus="selecttime(1)">
</volist>
<input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date" readonly> - <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date" readonly>


<p>日期：<input type="text" id="datepicker"></p>
<!--时间插件-->
<script src="<?php echo @SITE_URL;?>
My97DatePicker/WdatePicker.js"></script>
</body>
</html><?php }} ?>