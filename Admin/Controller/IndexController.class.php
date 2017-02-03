<?php
namespace Admin\Controller;
use Model\IndexModel;
use Think\Controller;

class IndexController extends Controller {
    //这里写
    public function index(){
        $this->display('index');
        //从数据库读取信息显示
    }
    //苗疆
    public function miaojiang(){
        $this->display();
    }
    //民信
    public function mingxin(){
        $this->display();
    }
    //贺卡制作
    public function heka(){
        $this->display('HK');
    }


}