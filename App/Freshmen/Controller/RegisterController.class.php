<?php
	//新人报名表填写主过程
	//如果需要，可以合并到Index控制器中
	namespace Freshmen\Controller;
	use Think\Controller;
	
	class RegisterController extends Controller{
		/*
		public function add(){			//新人提交报名表
			//array data:获取表单数据
			$data['name'] = $_POST['name'];
			$data['sex'] = $_POST['sex'];
			$data['uid'] = $_POST['uid'];
			$data['class'] = $_POST['class'];
			$data['dorm'] = $_POST['dorm'];
			$data['tel'] = $_POST['tel'];
			$data['qq'] = $_POST['qq'];
			$data['depart1'] = $_POST['depart1'];
			$data['depart2'] = $_POST['depart2'];
			$data['concede'] = $_POST['concede'];
			$data['introduction'] = $_POST['introduction'];
			$data['expectation'] = $_POST['expectation'];
			
			//连接数据库
			$DBase = M('freshmen');
			//创建新条目（但尚未保存）
			$DBase->create($data);
			//检验是否存在重复提交
				//用于判断的唯一字段为uid和tel
			$dupCheck = $DBase->where('uid=' . $data['uid'] . ' AND tel=' . $data['tel'])->find();
			if($dupCheck != NULL){			//抓到重复提交了
				$this->error("啊哦。。。发现了重复的数据耶！<br> 仔细想一下你之前有没有提交过噢！<br>");
			}
			elseif($dupCheck == false){		//出错了
				$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
			}		
			else		//如果未发现重复的数据，就直接写入
			{
				$DBase->add();
				//检查数据是否真正被写入了
				$finishCheck = $DBase->where($data)->find();
				if($dupCheck != NULL){
					$this->success("报名表提交成功啦！<br>");
				}
				else 	//如果出错或未写入
				{
					$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
				}
			}
			
			$this->display();
		}
		*/
		public function add_test(){			
		//测试专用！看看我操作数据库的代码是否正常。。
			//array data:指定表单数据以进行测试
			$data['name'] = '测试';
			$data['sex'] = '男';
			$data['uid'] = 'U201599956';
			$data['class'] = '社联思存工作室';
			$data['dorm'] = '韵苑99栋666';
			$data['tel'] = '17799999956';
			$data['qq'] = '999999999';
			$data['depart1'] = '思存工作室';
			$data['depart2'] = '人力资源部';
			$data['concede'] = '是';
			$data['introduction'] = '这个条目用于数据库测试';
			$data['expectation'] = '如果无问题，本条目将出现在phpMyAdmin中';
			
			//连接数据库
			$DBase = M('freshmen');
			//创建新条目（但尚未保存）
			$DBase->create($data);
			//检验是否存在重复提交
				//用于判断的唯一字段为uid和tel
			
			$dupCheck = $DBase->where('uid="' . $data['uid'] . '" OR tel="' . $data['tel'] . '"')->find();
			if($dupCheck != NULL){			//抓到重复提交了
				$this->error("啊哦。。。发现了重复的数据耶！<br> 仔细想一下你之前有没有提交过噢！<br>");

			}
			//elseif($dupCheck == false){		//出错了
			//	$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
			//}		
			else		//如果未发现重复的数据，就直接写入
			{
				$DBase->add();
				//检查数据是否真正被写入了
				$finishCheck = $DBase->where($data)->find();
				if($finishCheck != NULL){
					$this->success("报名表提交成功啦！<br>");
					//echo "<br>报名表提交成功啦！<br>";
				}
				else 	//如果出错或未写入
				{
					$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
				}
			}
			
			//echo "如果代码没问题，就不应该出现这行文字";
		}
		
		
		public function modify(){		//新人修改报名表
			//array data:获取数据库中的表单数据
			//【问题】还需要提供报名表的修改吗？并没有账号注册。。。
			
			
		}
		
		public function output(){		//后台管理员输出报名表
			//测试：先dump出RAW数据
			//连接数据库
			//$DBase
		}
	}