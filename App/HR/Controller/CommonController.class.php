<?php
namespace HR\Controller;
use Org\Util\Rbac;
use Think\Controller;
class CommonController extends Controller{
    public function index(){
        $this->redirect('apply');
    }
    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('HR/Index/index');
        }
        if(Rbac::checkAccess()){
            Rbac::AccessDecision()||$this->error('û��Ȩ��');
        }
    }
}