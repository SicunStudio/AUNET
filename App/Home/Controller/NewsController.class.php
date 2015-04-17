<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/18
 * Time: 4:27
 */

namespace Home\Controller;


use Think\Controller;

class NewsController extends Controller{
    public function index(){
//        layout('news_layout');
        $this->display();
    }
}