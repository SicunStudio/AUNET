<?php



namespace HR\Controller;
class InformationController extends CommonController{
	public function information_index(){
		layout('HR_layout');
		$information= M("information")->select();
		$data=array();
		foreach($informaton as $v) {
            
            $data[]=$v;
        }
		$data = convertArrayToTree($data);
        $this->data=$data;
        $this->display();
	public function add() {
        if(M("Information")->add(array('username'=>$_POST['hr_username'],'number'=>$_POST['hr_number'],'dormitory'=>$_POST['hr_dormitory'],'branch'=>$_POST['hr_branch'],'job'=>$_POST['hr_job'],'academy'=>$_POST['hr_academy'],'class'=>$_POST['hr_class'],'group'=>$_POST['hr_group'],'hometown'=>$_POST['hr_hometown'],'atime'=>$_POST['hr_atime']))) {
            $this->success("提交成功");
        } else {
            $this->error("提交失败");
        }
    }
}