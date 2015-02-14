<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 16:25
 */

namespace Admin\Controller;
/*
* 新闻标签
*/
/*
 * create table aunet_attr(id int unsigned not null primary key auto_increme
   nt,name char(10) not null default '',color char(10) not null default '')ENGINE=M
   yISAM default charset=utf8;
 */
class NewsAttributeController extends CommonController{
    public function index(){
        $this->attr=M('attr')->select();
        $this->display();
    }
    public function addAttr(){
        $this->display();
    }
    public function runAddAttr(){
        if(M('attr')->add($_POST)){
            $this->success('添加成功','index');
        }else{
            $this->error('添加失败');
        }
    }

} 