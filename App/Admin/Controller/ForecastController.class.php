<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/15
 * Time: 18:41
 *
 * 社联地带活动预告后台模块
 * create table aunet_forecast(id int not null primary key auto_increment,us
 * ername varchar(30) not null default '',time int(10) not null default 0,ti
 * tle text not null default '')ENGINE=MyISAM,default charset=utf8;
 *
 * 非admin账号只允许修改和删除自己发布的预告，但可以查看所有预告
 */

namespace Admin\Controller;



use Think\Page;

class ForecastController extends CommonController{
    public function forecast_index(){
        $Forecast=M('forecast');
        $count=$Forecast->count();
        $Page=new Page($count,5);
        $this->count=$count;
        $this->data=$Forecast->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->page=$Page->show();
        $this->display();
    }
    public function addforecast(){
        $this->display();
    }
    public function addForecastHandle(){
//        dump($_POST);die;
        $id=I('id',0,'intval');
//        dump($id);die;
        $Forecast=M('forecast');
        $data['username']=$_SESSION['username'];
        $data['time']=time();
        $data['title']=$_POST['title'];
        $data['place']=$_POST['place'];
//        die;
        if($id){
            if($Forecast->where(array('id'=>$id))->save($data)){
                $this->success('修改成功','forecast_index');
            }else{
                $this->success('修改失败',U('forecast_index'));
            }
        }else{

            if($Forecast->add($data)){
                $this->success('添加成功','forecast_index');
            }else{
                $this->error('添加失败');
            }
        }
    }
    public function editforecast(){
        $id=I('id',0,'intval');
        if($_SESSION['username']==C('RBAC_SUPERADMIN')){
            $this->data=M('forecast')->where(array('id'=>$id))->find();
            $this->display();
        }else{
            if(I('name')!=$_SESSION['username']){
                $this->error('没有权限');
            }
            $this->data=M('forecast')->where(array('id'=>$id))->find();
            $this->display();
        }



    }
    public function delForecast(){
        $id=I('id',0,'intval');
        if($_SESSION['username']!=C('RBAC_SUPERADMIN')&&I('name')!=$_SESSION['username']){
            $this->error('没有权限');
        }else {
           if(M('forecast')->delete($id)){
               $this->success('删除成功');
           }else{
               $this->error('删除失败');
           }
        }
    }
} 