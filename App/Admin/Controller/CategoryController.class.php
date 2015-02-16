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
    public function cate_index(){
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
        if(!IS_POST){
            $this->error('页面不存在',U('cate_index'));
        }
//        dump(I('id',0,'intval'));die;
        if(I('id',0,'intval')){
            if(M('cate')->save($_POST)){
                $this->success('修改成功',U('cate_index'));
            }else{
                $this->error('修改失败');
            }
        }else{
            if(M('cate')->add($_POST)){
                $this->success('操作成功',U('cate_index'));
            }else{
                $this->error('操作失败');
            }
        }

    }
    public function sortCate(){
//        dump(($_POST));die;
        $db=M('cate');
        foreach($_POST as $id=>$sort){
            $db->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Admin/Category/cate_index');
    }
    //编辑分类
    public function editCate(){
        $id=I('id',0,'intval');
        $this->cate=M('cate')->where(array('id'=>$id))->find();
//        dump($this->cate);die;
        $this->display('addCate');
    }

    //删除分类及其子分类
    public function deleteCate(){
        $id=I('id',0,'intval');
        $Cate=M('cate');
        $cate=$Cate->order('sort')->select();
        $arr=Category::getChildsId($cate,$id);
        $arr[]=$id;
//        dump($arr);die;
        foreach($arr as $v=>$k){
            $Cate->delete($k);
        }
        $this->success('删除成功',U('cate_index'));

    }
} 