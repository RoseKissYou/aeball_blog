<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6
 * Time: 19:32
 */
namespace Admin\Controller;
use Think\Controller;

class ArticlesController extends Controller{

    function index(){
        $this->display('contact');
    }
    function show_list(){
        //使用数据model模型  显示所有的model信息
        $article = new \Model\ArticlesModel();
//        var_dump($article);
        $articles = $article->select();
        var_dump($articles);




        $this->display();
    }
    function new_article(){
        $this->display('new_article');

    }
}