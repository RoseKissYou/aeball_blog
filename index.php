<?php
     //   header('content-type:text/html,charset=utf-8');
        // 绑定Admin模块到当前入口文件
    //    define('BIND_MODULE','Admin');                         // 模块
    //    define('BUILD_CONTROLLER_LIST','Index,User,Menu');  //控制器
    define('SITE_URL','http://tp3.minxing.mmt/');
    //    define('SITE_URL','http://weixin.wertp.cn/');
    define('COMPANY_NAME','广州聚购网络科技有限公司');

    //公用的css,js,images,fonts文件夹宏定义
    //  ----------------Home----------------------
    define('CSS_URL',SITE_URL.'Public/Home/css/');
    define('JS_URL',SITE_URL.'Public/Home/js/');
    define('IMGS_URL',SITE_URL.'Public/Home/imgs/');
    define('FONTS_URL',SITE_URL.'Public/Home/fonts/');
    define('HTML_URL',SITE_URL.'Public/Home/html/');  // 公用页面底部

    //  ----------------Admin----------------------
    define('CSS_AURL',SITE_URL.'Public/Admin/css/');
    define('JS_AURL',SITE_URL.'Public/Admin/js/');
    define('IMGS_AURL',SITE_URL.'Public/Admin/imgs/');
    define('FONTS_AURL',SITE_URL.'Public/Admin/fonts/');
    define('HTML_AURL',SITE_URL.'Public/Admin/html/');  // 公用页面底部



    //把目前的tp模式改成开发模式
    define('APP_DEBUG',true); //去掉runtime里面生成的缓存文件
	//引入框架的核心程序
	require '../ThinkPHP/ThinkPHP/ThinkPHP.php';