<?php
namespace Home\Controller;
use Model\IndexModel;
use Think\Controller;

class IndexController extends Controller {
    /*
     * 首页
     * @author xiongan
     * @date 2017 02 04
     * */
    public function index(){
        $this->assign('title','首页');
        $this->display('index');
        //从数据库读取信息显示
    }
    /*
     * 联系我们
     * @author xiongan
     * @date 2017 02 04
     * */
    public function contact(){
        $this->assign('title','联系我们');
        $this->display();
    }
    /*
     * 关于我们
     * @author xiongan
     * @date 2017 02 04
     * */
    public function about(){
        $this->assign('title','关于我们');
        $this->display();
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