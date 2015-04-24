<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $news=D('news')->order("time desc")->limit(4)->select();
        $this->news=$news;
        $this->display();
    }
}