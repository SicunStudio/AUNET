<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/9
 * Time: 22:13
 */
/*
 * create table aunet_cate(id int unsigned not null primary key auto_increme
 * nt,name char(15) not null default '',pid int unsigned not null default 0,sort sm
 * allint(6) not null default 100)ENGINE=MyISAM default charset=utf8;
 */

namespace Admin\Controller;
use Admin\Util\Category;

/*
 * 无限级分类
 */
class CategoryController extends CommonController{
    public function index(){
        import('Util.Category',APP_PATH);
        $cate=M('cate')->order('sort')->select();
        $this->cate=Category::unlimitedForLevel($cate);

        $this->display();
    }
    public function addCate(){
        $this->pid=I('pid',0,'intval');
        $this->display();
    }
    public function runAddCate(){
        if(M('cate')->add($_POST)){
            $this->success('操作成功',U('index'));
        }else{
            $this->error('操作失败');
        }

    }
    public function sortCate(){
//        dump(($_POST));die;
        $db=M('cate');
        foreach($_POST as $id=>$sort){
            $db->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Admin/Category/index');
    }
} 