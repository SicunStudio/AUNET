<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class PreviewController extends CommonController
{
	public function Preview{
		$ID = I('POST.ID');
		$type = I('POST.action_type');
		$table = strtolower($type);
        $sql = M("aunet.$table" , 'aunet_material_');
        $all_data = I('POST.');
		$date = array();
        $data[user_name] = I('session.username', '');
		$file_data = $type ->where("ID = $ID")->limit(1)->select()[0];
        $this->file_data = $file_data;
		$this->display();
	}
}
?>