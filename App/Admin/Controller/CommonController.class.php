<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/8
 * Time: 23:02
 */

namespace Admin\Controller;
use Org\Util\Rbac;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('Admin/Index/index');
        }
        import('Org.Util.Rbac');
        if(Rbac::checkAccess()){

            Rbac::AccessDecision()||$this->error('没有权限');
        }
    }
} 