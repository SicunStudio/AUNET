<?php



namespace HR\Controller;
class PersonalController extends CommonController{
	public function personal_index(){
		layout('HR_layout');
		$personal= M("personal")->select();
		$data=array();
		foreach($informaton as $v) {
            
            $data[]=$v;
        }
		$data = convertArrayToTree($data);
        $this->data=$data;
        $this->display();
	public function add() {
        if(M("Personal")->add(array('qq'=>$_POST['hr_qq'],'phone'=>$_POST['hr_phone']))) {
            $this->success("提交成功");
        } else {
            $this->error("提交失败");
        }
    }
}