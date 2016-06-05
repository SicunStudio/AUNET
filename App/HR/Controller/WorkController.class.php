<?php



namespace HR\Controller;
class WorkController extends CommonController{
	public function Work_index(){
		layout('HR_layout');
		$work= M("work")->select();
		$data=array();
		foreach($informaton as $v) {
            
            $data[]=$v;
        }
		$data = convertArrayToTree($data);
        $this->data=$data;
        $this->display();
	public function add() {
        if(M("Work")->add(array('worked'=>$_POST['hr_worked'],'workname'=>$_POST['hr_workname'],'workjob'=>$_POST['hr_workjob']))) {
            $this->success("提交成功");
        } else {
            $this->error("提交失败");
        }
    }
}