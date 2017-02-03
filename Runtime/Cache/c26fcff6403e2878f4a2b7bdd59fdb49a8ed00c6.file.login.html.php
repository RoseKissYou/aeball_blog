<?php /* Smarty version Smarty-3.1.6, created on 2017-01-07 17:30:45
         compiled from "D:/php/www/aeball_blog/Admin/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:163945870b4f37b50e2-56531222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c26fcff6403e2878f4a2b7bdd59fdb49a8ed00c6' => 
    array (
      0 => 'D:/php/www/aeball_blog/Admin/View\\User\\login.html',
      1 => 1483781441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163945870b4f37b50e2-56531222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5870b4f5e6016',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5870b4f5e6016')) {function content_5870b4f5e6016($_smarty_tpl) {?><!DOCTYPE html>
<head>
	<title>登陆页面</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php echo @CSS_URL;?>
font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo @CSS_URL;?>
bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo @CSS_URL;?>
bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo @CSS_URL;?>
templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">民信博客登陆</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">				
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="username" placeholder="用户名">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="password" placeholder="密码">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox"> 记住账号
                		</label>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="登   陆" class="btn btn-info">
		          		<a href="forgot-password.html" class="text-right pull-right">忘记密码?</a>
		          	</div>
		          </div>
		        </div>
		        <hr>
		        <!--<div class="form-group">-->
		        	<!--<div class="col-md-12">-->
		        		<!--<label>Login with: </label>-->
		        		<!--<div class="inline-block">-->
		        			<!--<a href="#"><i class="fa fa-facebook-square login-with"></i></a>-->
			        		<!--<a href="#"><i class="fa fa-twitter-square login-with"></i></a>-->
			        		<!--<a href="#"><i class="fa fa-google-plus-square login-with"></i></a>-->
			        		<!--<a href="#"><i class="fa fa-tumblr-square login-with"></i></a>-->
			        		<!--<a href="#"><i class="fa fa-github-square login-with"></i></a>-->
		        		<!--</div>		        		-->
		        	<!--</div>-->
		        <!--</div>-->
		      </form>
		      <div class="text-center">

		      	<a href="<?php echo U('User/register');?>
" class="templatemo-create-new">创建账号<i class="fa fa-arrow-circle-o-right"></i></a>
		      </div>
		</div>
	</div>
</body>
</html><?php }} ?>