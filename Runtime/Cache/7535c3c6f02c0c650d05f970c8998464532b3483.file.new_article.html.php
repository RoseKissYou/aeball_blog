<?php /* Smarty version Smarty-3.1.6, created on 2017-01-08 16:49:32
         compiled from "D:/php/www/aeball_blog/Admin/View\Articles\new_article.html" */ ?>
<?php /*%%SmartyHeaderCode:197945870cac735fae4-53525832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7535c3c6f02c0c650d05f970c8998464532b3483' => 
    array (
      0 => 'D:/php/www/aeball_blog/Admin/View\\Articles\\new_article.html',
      1 => 1483865365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197945870cac735fae4-53525832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5870cac773426',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5870cac773426')) {function content_5870cac773426($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>Black &amp; White</title>

    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
ionicons.min.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
pace.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
custom.css">

    <!-- js -->
    <script src="<?php echo @JS_URL;?>
jquery-2.1.3.min.js"></script>
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
    <script src="<?php echo @JS_URL;?>
pace.min.js"></script>
    <script src="<?php echo @JS_URL;?>
modernizr.custom.js"></script>
</head>

<body id="page">
<div class="container">
    <header id="site-header">
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-8">
                <div class="logo">
                    <h1><a href="index.html"><b>民</b>  信</a></h1>
                </div>
            </div><!-- col-md-4 -->
            <div class="col-md-8 col-sm-7 col-xs-4">
                <nav class="main-nav" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="trigger-overlay" class="navbar-toggle">
                            <span class="ion-navicon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="cl-effect-11"><a href="index.html" data-hover="Home">首页</a></li>
                            <li class="cl-effect-11"><a href="<?php echo @SITE_URL;?>
index.php?m=Admin&c=Articles&a=new_article" data-hover="Blog">添加博客</a></li>
                            <li class="cl-effect-11"><a href="about.html" data-hover="About">关于我们</a></li>
                            <li class="cl-effect-11"><a href="contact.html" data-hover="Contact">联系我们</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
                <div id="header-search-box">
                    <a id="search-menu" href="#"><span id="search-icon" class="ion-ios-search-strong"></span></a>
                    <div id="search-form" class="search-form">
                        <form role="search" method="get" id="searchform" action="#">
                            <input type="search" placeholder="Search" required>
                            <button type="submit"><span class="ion-ios-search-strong"></span></button>
                        </form>
                    </div>
                </div>
            </div><!-- col-md-8 -->
        </div>
    </header>
</div>
<div class="copyrights">Collect from <a href="http://www.minxiny.com/" >官网</a></div>


<div class="content-body">
    <div class="container">
        <div class="row">
            <main class="col-md-12">
                <h1 class="page-title">新增博客</h1>
                <article class="post">
                    <div class="entry-content clearfix">
                        <form action="#" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="text" name="name" placeholder="Name" required>
                                    <input type="email" name="email" placeholder="Email" required>
                                    <input type="text" name="subject" placeholder="Subject" required>
                                    <textarea name="message" rows="7" placeholder="Your Message" required></textarea>
                                    <button class="btn-send btn-5 btn-5b ion-ios-paperplane"><span>Drop Me a Line</span></button>
                                </div>
                            </div>	<!-- row -->
                        </form>
                    </div>
                </article>
            </main>
        </div>
    </div>
</div>

<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">&copy; 2017 广州民信药业连锁有限公司 <a href="http://www.minxiny.com/" target="_blank" title="民信">民信</a> - Collect from <a href="http://www.minxiny.com/" title="版权" target="_blank">版权</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu -->
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
    <nav>
        <ul>
            <li><a href="index.html">首页</a></li>
            <li><a href="full-width.html">添加博客</a></li>
            <li><a href="about.html">关于我们</a></li>
            <li><a href="contact.html">联系我们</a></li>
        </ul>
    </nav>
</div>

<script src="js/script.js"></script>

</body>
</html><?php }} ?>