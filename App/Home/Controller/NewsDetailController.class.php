<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 20:38
 */

namespace Home\Controller;


use Think\Controller;

class NewsDetailController extends Controller{
    public function index(){
        $id=I('id',0,'intval');
        if($id){
            $this->news=D('news')->where(array('id'=>$id))->find();
            $this->display();
        }else{
            $this->error('页面不存在');
        }


    }
}