<?php
namespace Material\Controller;
use Org\Util\Rbac;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
	public function index(){

        $this->display();
    }
    public function material_login(){
        if(!check_verify(I('code',''))){
            $this->error('验证码错误');
        }
        $username=I('username');
        $user=M('user')->where(array('username'=>$username))->find();
        $pwd=I('password','','md5');
        if(!$user|$user['password']!=$pwd){
            $this->error('用户名或密码错误');
        }
        if($user['lock']){
            $this->error('用户被锁定,请联系管理员解锁');
        }
        $data=array('id'=>$user['id'],
            'logintime'=>time(),
            'loginip'=>get_client_ip()
        );
        M('user')->save($data);
        session(C('USER_AUTH_KEY'),$user['id']);
        session('username',$user['username']);
        session('lastlogintime',date('Y-m-d H:i',$user['logintime']));
        session('lastloginip',$user['loginip']);
        if($user['username']==C('RBAC_SUPERADMIN')){
            session(C('ADMIN_AUTH_KEY'),true);
        }

        import('Org.Util.Rbac');
        Rbac::saveAccessList();
//        dump($_SESSION);die;
        $this->redirect('Material/Material/apply');

    }
    public function verify(){
        $config=array(
            'codeSet'=>'0123456789',
            'fontsize'=>20,
            'length'=>3,
        );
        $verify=new Verify($config);
        $verify->entry();
    }
}
?>