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
            $tmp = $list->where("username='%s'", $user_name)->getField('ID,ApproveState,CreateTime,ApproveNote');
            //print_r($tmp);
            if ($tmp)
            {
                $ans[$name_en] = array($name_cn, $tmp);
            }
        }
        //print_r($ans);
        $this->list = $ans;

        $this->display();
    }
	//前台申请删除数据
    public function material_upload()
    {
        $type = I('POST.action_type');
		//上传附件
        if (($type == 'OtherStuff') || ($type == 'OtherPlace'))
        {
            $name = 'file_' . $type;
            $upload = new Upload();// 实例化上传类
            $upload->maxSize  = 3145728;// 设置附件上传大小
            $upload->allowExts  = array('doc', 'docx');// 设置附件上传类型
            $upload->savePath =  './Material/' . $type . '/';// 设置附件上传目录
            if(!($info = $upload->upload()))
            {// 上传错误提示错误信息
                $this->error($upload->getError());
            }
            print_r($info);
            $sql = M(strtolower($type));
            $data = array();
            $data['Username'] = I('session.username', '');
            //$data['ApproveState'] = '未审批';
            //$data['CreateTime'] = date("Y-m-d G:i:s");
            $data['StoreURL'] = './Upload/' . substr($info[$name]['savepath'], 1)  . $info[$name]['savename'];
            //$data['Name'] = $info[$name]['name'];
            //$data['AssociationName'] = '';

            $result = $sql->data($data)->add();
            if($result) {
                $this->success(L('操作成功！'));
            }else{
                $this->error($sql->getError());
            }
            return;
        }
		//上传数据
        $sql = M(strtolower(I('POST.action_type')));
        $all_data = I('POST.');
        $data = array();
        foreach ($all_data as $key => $value)
        {
            if (preg_match('/(.*)_' . $type . '$/', $key, $match))
            {
                $data[$match[1]] = $value;
            }
        }
        /*if ($type == 'BuildingClassroom2')
        {
            $data['AssociationName'] = $data['Faculty'];
        }*/
        $data['Username'] = I('session.username', '');
        //$data['ApproveState'] = '未审批';
        //$data['CreateTime'] = date("Y-m-d");
        $result = $sql->data($data)->add();
        if($result) {
            $this->success(L('操作成功！'));
        }else{
            $this->error($sql->getError());
        }
	}
	//后台管理审批状态修改函数
    public function material_adupload()
    {
        $type = I('POST.action_type');
        $sql = M(strtolower($type));
        $all_data = I('POST.');
        $data = array();
        $data[0] = array();
        $data[1] = array();
        $data[2] = array();
        foreach ($all_data as $key => $value)
        {
            if (preg_match('/' . $type . '_(\d*)$/', $key, $match))
            {
                array_push($data[$value], $match[1]);
            }
        }

        if (count($data[1]) > 0)
        {
            $map['id'] = array('in', $data[1]);
            $sql->where($map)->setField('ApproveState', '1');
        }

        if (count($data[2]) > 0)
        {
            $map['id'] = array('in', $data[2]);
            $sql->where($map)->setField('ApproveState', '2');
        }

        foreach ($all_data as $key => $value)
        {
            if (preg_match('/' . $type . '_Review_(\d*)$/', $key, $match))
            {
                $sql->where('id=' . $match[1])->setField('ApproveNote', $value);
            }
        }

        $this->success(L('操作成功！'));
    }
	//后台管理显示函数
    public function admin_table()
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

        $ans = array();
        foreach ($name_list as $name_en => $name_cn)
        {
            //print("$list_name</br>");
            $list = D(strtolower($name_en));
            $tmp = $list->where("ApproveState='未审批'")->getField('ID,AssociationName,CreateTime');

            if ($tmp)
            {
                $ans[$name_en] = $tmp;
            }
        }
        //print_r($ans);
        $this->value = $ans;

        $this->display();
    }
}
?>