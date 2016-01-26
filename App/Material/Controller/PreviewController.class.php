<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class PreviewController extends CommonController
{
	public function Preview{
		$type = I('POST.action_type');
		$table = strtolower($type);
        $sql = M("aunet.$table" , 'aunet_material_');
        $all_data = I('POST.');
		$date = array();
        $data[user_name] = I('session.username', '');
        $ans = array();
        //得到ID为此的一行数值
		//输出
            $list = D(strtolower($name_en));
            $tmp = $list->where("UserName='%s'", $user_name)->getField('ID,ApproveState,CreateTime,ApproveNote');
            
            if ($tmp)
            {
                $ans[$name_en] = array($name_cn, $tmp);
            }
        }
        //print_r($ans);
        $this->list = $ans;

        $this->display();
	}
}
?>