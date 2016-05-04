<?php
namespace Material\Controller;

use Think\Upload;

use Think\Controller;

class MaterialController extends CommonController
{
    public function apply(){
        layout("common_layout");
        $this->display();
    }
    public function admin(){
        layout("common_layout");
        $this->display();
    }
    private static $ON_CHECKED = 0;
    private static $IS_PASSED = 1;
    private static $PASSED_FAILED = 2;
	private static $db = 'aunet_material';

	//天知道这个type数组是干什么的
    private static $type = array('power' => 0,
        'monitor' => 1,
        'bus' => 2,
        'decoration' => 3,
        'activity_center' => 4,
        'ground' => 5,
        'class' => 6,
        'special_place' => 7,
        'sport' => 8,
        'east_side' => 9,
        'others' => 10);
	//前台申请显示函数
    public function apply_state()
    {
        $name_list = array('material_sports' => '体育场馆申请',
            'material_materialapply' => '物资申请',
            'material_special' => '特殊场地申请',
			'material_teachingbuilding' => '教学楼教室申请',
			'material_outdoor' => '户外路演场地申请',
			'material_east4' => '东四三楼申请',
			'material_sacenter' => '大活教室申请',
			'material_colorprinting' => '彩喷悬挂申请',
		);
        $user_name = I('session.username', '');
        $ans = array();
        foreach ($name_list as $name_en => $name_cn)
        {
            //print("$list_name</br>");
            $list = D(strtolower($name_en));
            $tmp = $list->where("UserName='%s'", $user_name)->getField('ID,ApproveState,ApprovePrint,CreateTime,ApproveNote,ApproveTime');
            //print_r($tmp);
            if ($tmp)
            {
                $ans[$name_en] = array($name_cn, $tmp,substr($name_en,9));
            }
        }
        //print_r($ans);
		
        $this->list = $ans;

        $this->display();
    }
	//前台申请上传附件和数据函数
    public function material_upload()
    {
        $name_list = array('sports' => '体育场馆申请',
            'materialapply' => '物资申请',
            'special' => '特殊场地申请',
            'teachingbuilding' => '教学楼教室申请',
            'outdoor' => '户外路演场地申请',
            'east4' => '东四三楼申请',
            'sacenter' => '大活教室申请',
            'colorprinting' => '彩喷悬挂申请',
        );
		$type = I('POST.action_type');
        $ifUploadFile = I('POST.ifUploadFile');
		if($ifUploadFile == 'file'){
			$name = 'file_' . $type;
			$upload = new Upload();// 实例化上传类
			$upload->maxSize  = 8388608;// 设置附件上传大小
			$upload->exts  = array('txt','doc', 'docx','pdf','zip','7z','rar');// 设置附件上传类型
			$upload->savePath =  './Material/' . $type . '/';// 设置附件上传目录
			if(!($info = $upload->upload())){// 上传错误提示错误信息
                $this->error($upload->getError());
			}
		}
        $table=strtolower(I('POST.action_type'));
		$sql = M("aunet.$table" , 'aunet_material_');
		$all_data = I('POST.');
        $data = array();
        foreach ($all_data as $key => $value)
        {
            if (preg_match('/^(.*)$/', $key, $match))
            {
                $data[$match[1]] = $value;
            }
        }
		if($ifUploadFile == 'file'){
			$data['StoreURL'] = '/Upload' . substr($info['file']['savepath'], 1)  . $info['file']['savename'];
		}
        $data['UserName'] = I('session.username', '');
        $result = $sql->data($data)->add();
        if($result) {
            $mail=M('user')->where("id=".$_SESSION['uid'])->getField("mail");
            addMQ($_SESSION['username'],$mail,'场地物资申请提交成功',"<p>尊敬的用户".$_SESSION['username']."</p><p>您提交的<strong>".$name_list[$type]."</strong>已经收到，我们将尽快处理，请关注审批进度</p>");
            $this->success(L('操作成功！'));
        }else{
            $this->error($sql->getError());
        }
	}
    
    
    //申请者撤销
    public function apply_cancel() {
        $type = I('POST.type');
        $id = I('POST.id');
        $allowDel=true;
        $msg="";
        $apply_item_data=M("material_".$type)->where("id=".$id)->getField('id,UserName,ApproveState,ApprovePrint',1);
        $apply_item=$apply_item_data[$id];
        //检查是否是提交申请的用户
        $user=$apply_item["username"];
        if($user!=$_SESSION['username']) {
            $allowDel=false;
            //$this->success("撤销失败，你无权撤销这份申请");
            $msg="你无权撤销这份申请";
        }

        //检查申请状态
        if($allowDel) {
            if( $apply_item['approvestate']=="审批中" && $apply_item['approveprint'][0]==0){}
            else{
                $allowDel=false;
                $msg="此申请已无法撤销";
            }
        }

        $del_state=false;

        if($allowDel){
            $del_state=M("material_".$type)->where("id=".$id)->delete();
            if(!$del_state) { $msg="请重试"; }

        }
        if ($del_state && $allowDel) {
            $this->success("撤销成功");
        }else {
            $this->error("撤销失败，".$msg);
        }
    }
    
	//后台管理审批状态修改函数
    public function material_adupload()
    {
		$type = I('POST.action_type');
		$table = strtolower($type);
        $sql = M("aunet.$table" , 'aunet_material_');
        $all_data = I('POST.');
        $data = array();
     
        $data['ApproveState']= $all_data['ApproveState'];
        $data['ApproveActivity']= $all_data['ApproveActivity'];
        $data['ApproveTime'] = date("Y-m-d H:i:s");
        $data['ApproveNote'] = $all_data['ApproveNote'];
        if ($all_data['ApprovePrint']==null){ $data['ApprovePrint'] = 0; }
        else{ $data['ApprovePrint'] = 1; };
        $sql->where('ID=' .$all_data[ID])->save($data);

        $this->success(L('操作成功！'));
    }
	//后台管理显示函数
    public function admin_table()
    {
        $name_list = array('material_sports' => '体育场馆申请',
            'material_materialapply' => '物资申请',
            'material_special' => '特殊场地申请',
			'material_teachingbuilding' => '教学楼教室申请',
			'material_outdoor' => '户外路演场地申请',
			'material_east4' => '东四三楼申请',
			'material_sacenter' => '大活教室申请',
			'material_colorprinting' => '彩喷悬挂申请',
		);

        $ans = array();
        foreach ($name_list as $name_en => $name_cn)
        {
            //print("$list_name</br>");
            $list = D(strtolower($name_en));
            $tmp = $list->getField('ID,UserName,CreateTime,ApproveTime,ApprovePrint,ApproveState,ApproveActivity,ApproveNote,StoreURL');
			if ($tmp)
            {
                $ans[$name_en] = array(substr($name_en,9),$name_cn,$tmp);
            }
			
        }

        $this->value = $ans;

        $this->display();
    }


}
?>