<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 8:51
 */

namespace Admin\Controller;
use Think\Controller;

class ImageController extends Controller{
    //
    public function index(){
        //echo '<img style="width: 100%;height: 100%" src="'.IMGS_URL.'404.jpg">';
//         echo IMGS_AURL;  //  http://tp3.minxing.mmt/Public/Admin/imgs/



        // 图片添加水印
//        $image = new \Think\Image();  // 1 调用系统图片处理框架
//        $image->open('./mine_wechat.jpg');
//        $image->open(IMGS_AURL.'hoke.jpg');// 2 打开本地图片  http://tp3.minxing.mmt/Public/Admin/imgs/hoke.jpg
//        $image->crop(660,660)->save(IMGS_AURL.'hoke1.jpg');
        // 给图片添加图片水印（水印文件位于./logo.png），位置为右下角，保存为water.gif
      //  $image->water('./dawei.png')->save("constellation.gif");


        $this->display();
    }
    public function img_deal(){
        $im = imagecreatetruecolor(400, 30);            //创建400 30像素大小的画布

        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 399, 29, $white);       //输出一个使用白色填充的矩形作为背景

//如果有中文输出，需要将其转码，转换为UTF-8的字符串才可以直接传递
//$text = iconv("GB2312", "UTF-8", "回忆经典");
        $text = "中文aflasjflasjflasjf";
//设定字体，将系统中与simsun.ttc对应的字体复制到当前目录下
        $font = 'SIMSUN.TTC';

        imagettftext($im, 20, 0, 12, 21, $grey, $font, $text);      //输出一个灰色的字符串作为阴影
        imagettftext($im, 20, 0, 10, 20, $black, $font, $text);         //在阴影上输出一个黑色的字符串

        header("Content-type: image/png");
        imagepng($im);

        imagedestroy($im);
        $this->display('index');
    }
    public function water_img(){
        //将图片作为画布
        $img = imagecreatefromjpeg("./mime_wechat.jpg");
        //设置颜色：红色
        $black = imagecolorallocate($img,0,0,0);

        //将文字写在相应的位置
        imagettftext($img, 25, 0, 700, 500, $black, "simkai.ttf", "射雕天龙的博客");
        imagettftext($img, 20, 0, 700, 530, $black, "simkai.ttf", "shediaotianlong.cn");

        //输出图像
        header("Content-type:image/jpeg");
        imagejpeg($img);
        //销毁图像
        imagedestroy($img);
    }
}