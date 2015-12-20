<?php
namespace Material\Controller;
use Think\Controller;
class MaterialController extends Controller {
    public function apply(){
        layout("common_layout");
        $this->show();
    }
    public function admin(){
        layout("common_layout");
        $this->show();
    }
}