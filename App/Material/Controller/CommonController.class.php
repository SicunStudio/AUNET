<?php
namespace Material\Controller;
use Org\Util\Rbac;
use Think\Controller;
class CommonController extends Controller{
    public function index(){
        $this->redirect(CONTROLLER_NAME.'_index');
    }
    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('Material/Index/index');
        }
        if(Rbac::checkAccess()){
            Rbac::AccessDecision()||$this->error('没有权限');
        }
    }
}
?>