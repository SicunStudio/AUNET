<?php
namespace Freshmen\Controller;
use Think\Controller;
class IntroductionController extends Controller {
    public function index(){
//        layout('common_layout');
        $this->display();
    }
    public function introduction(){
        layout('common_layout');
        $this->display();
    }
}