<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/18
 * Time: 0:39
 */

namespace Design\Controller;


class DesignController extends CommonController{
    public function design_index(){
        layout('Design_layout');
        $this->display();
    }
}