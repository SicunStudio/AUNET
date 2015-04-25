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
        layout('Department/department_layout');
        $this->display('caiwu');
    }
    public function waiqi(){
        layout('Department/department_layout');
        $this->display('waiqi');
    }
    public function mishu(){
        layout('Department/department_layout');
        $this->display('mishu');
    }
    public function renzi(){
        layout('Department/department_layout');
        $this->display('renzi');
    }
    public function shetuan(){
        layout('Department/department_layout');
        $this->display('shetuan');
    }
    public function xingjian(){
        layout('Department/department_layout');
        $this->display('xingjian');
    }
    public function wailian(){
        layout('Department/department_layout');
        $this->display('wailian');
    }
    public function gongguan(){
        layout('Department/department_layout');
        $this->display('gongguan');
    }
    public function meiti(){
        layout('Department/department_layout');
        $this->display('meiti');
    }
    public function xuanchuan(){
        layout('Department/department_layout');
        $this->display('xuanchuan');
    }
    public function sicun(){
        layout('Department/department_layout');
        $this->display('sicun');
    }
    public function xinmeiti(){
        layout('Department/department_layout');
        $this->display('xinmeiti');
    }
    public function wentuo(){
        layout('Department/department_layout');
        $this->display('wentuo');
    }
    public function zhuxituan(){
        layout('Department/department_layout');
        $this->display();
    }

}