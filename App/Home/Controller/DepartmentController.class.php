<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 21:26
 */

namespace Home\Controller;


use Think\Controller;

class DepartmentController extends Controller{
    public function caiwu(){
        layout('department_layout');
        $this->display('caiwu');
    }
    public function waiqi(){
        layout('department_layout');
        $this->display('waiqi');
    }
    public function mishu(){
        layout('department_layout');
        $this->display('mishu');
    }
    public function renzi(){
        layout('department_layout');
        $this->display('renzi');
    }
    public function shetuan(){
        layout('department_layout');
        $this->display('shetuan');
    }
    public function xingjian(){
        layout('department_layout');
        $this->display('xingjian');
    }
    public function wailian(){
        layout('department_layout');
        $this->display('wailian');
    }
    public function gongguan(){
        layout('department_layout');
        $this->display('gongguan');
    }
    public function meiti(){
        layout('department_layout');
        $this->display('meiti');
    }
    public function xuanchuan(){
        layout('department_layout');
        $this->display('xuanchuan');
    }
    public function sicun(){
        layout('department_layout');
        $this->display('sicun');
    }
    public function xinmeiti(){
        layout('department_layout');
        $this->display('xinmeiti');
    }
    public function wentuo(){
        layout('department_layout');
        $this->display('wentuo');
    }
    public function zhuxituan(){
        layout('department_layout');
        $this->display();
    }

}