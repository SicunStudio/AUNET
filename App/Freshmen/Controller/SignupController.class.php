<?php
	//新人报名表填写主过程
	//由 爱拼安小匠（AnClark） 设计
	namespace Freshmen\Controller;
	use Think\Controller;
	
	//引入ThinkPHP PHPWord 支持库
	require_once 'ThinkPHP\Library\Org\phpword\Autoloader.php';
	use PhpOffice\PhpWord\Autoloader;
	use PhpOffice\PhpWord\Settings;
	
	class SignupController extends Controller{


		public function signup(){
			layout('common_layout');
			$this->display();
		}
		public function xmodify(){
			layout('common_layout');
			$this->display();
		}
		
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
			
			$dupCheck = $DBase->where('tel="' . $data['tel'] . '"')->find();
			if($dupCheck != NULL){			//抓到重复提交了
				$this->error('你已经报过名了',U('/Freshmen/Index'));

			}
//			elseif($dupCheck == false){		//出错了
//				$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
//			}
			else		//如果未发现重复的数据，就直接写入
			{
				$DBase->add();
				$this->success('报名表提交成功啦！',U('/Freshmen/Index'),3);
				//检查数据是否真正被写入了
//				$finishCheck = $DBase->where($data)->find();
//				if($finishCheck!= NULL){
//
//					//echo "<br>报名表提交成功啦！<br>";
//				}
//				else 	//如果出错或未写入
//				{
//					$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
//				}
			}
		}
		
		public function add_test(){			
		//测试专用！看看我操作数据库的代码是否正常。。
			//array data:指定表单数据以进行测试
			$data['name'] = '测试';
			$data['sex'] = '男';
			$data['uid'] = 'U201599942';
			$data['class'] = '社联思存工作室';
			$data['dorm'] = '韵苑99栋666';
			$data['tel'] = '17799999422';
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
				$this->error('啊哦。。。发现了重复的数据耶！<br> 仔细想一下你之前有没有提交过噢！',U('/Freshmen/Index'));

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
					$this->success('报名表提交成功啦！',U('/Freshmen/Index'),3);
					//echo "<br>报名表提交成功啦！<br>";
				}
				else 	//如果出错或未写入
				{
					$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
				}
			}
			
			//echo "如果代码没问题，就不应该出现这行文字";
		}
		
		
		public function modify(){		//新人修改报名表，将报名信息输出到前端
			//定义全局变量，存放修改条目的id，以保证修改成功
			global $readId;
			
			//连接数据库
			$DBase = M('freshmen');
			
			//获取用户提交的查询条件：姓名和电话
			$keyword['name'] = I('post.name');
			$keyword['tel'] = I('post.tel');
			
			//array readData:获取数据库中的表单数据
			//依据关键字：姓名和电话号码，二者必须匹配，缺一不可
			//【提示】可以直接给where方法传入数组，而无须凑成SQL语句！
			$readData = $DBase->where($keyword)->find();
			//检查数据是否存在
			if($readData != NULL) 			//如果确实存在
			{
				//获取修改条目的id
				$readId = $readData['id'];
				//将表单信息传给前台
				$this->assign('data',$readData);
				//在前端使获取的数据显示出来
				layout('common_layout');
				$this->display();
			}
			else		//如果“查无此人”或出错
			{
				$this->error('不好意思啊。。。查不到你的信息。。。<br> 可能是你还没报名吧~~~');
			}
		}
		
		public function modify_sure(){			//新人修改报名表，确认修改
			//连接数据库
			$DBase = M('freshmen');
			
			//获取用户修改好的表单信息
			//注意“姓名”和“电话”不必传到前台
			//array data:获取表单数据
			$data['sex'] = $_POST['sex'];
			$data['uid'] = $_POST['uid'];
			$data['class'] = $_POST['class'];
			$data['dorm'] = $_POST['dorm'];
			$data['qq'] = $_POST['qq'];
			$data['depart1'] = $_POST['depart1'];
			$data['depart2'] = $_POST['depart2'];
			$data['concede'] = $_POST['concede'];
			$data['introduction'] = $_POST['introduction'];
			$data['expectation'] = $_POST['expectation'];
			$readId=I("post.id");
			//更新数据
			$successFlag = $DBase->where('id=' . $readId)->save($data);
			//检查更新是否成功
			if($successFlag != false){
				$this->success('报名表修改成功啦！',U('/Freshmen/Index'),3);
			}
			else{
				$this->error('不好意思啊。。。<br> 报名表修改失败了( ▼-▼ )');
			}
			
		}
		public function admin(){
			$DBase = M('freshmen');
			$readData = $DBase->select();
			$this->assign('list',$readData);
			$this->display();
		}
		
		public function downloadWord(){		//下载 Word 格式报名表
		//PHPWord 配置
				//加载 PHPWord 类库
				Autoloader::register();
				//指定模板路径
				$modroot ='http://'.$_SERVER['HTTP_HOST'].__ROOT__.'/Public/FreshmenSrc/docx/signupsheet_temp.docx';
				//指定最终生成文件路径
				$docroot ='App\\Runtime\\Temp\\'.$type.'-'.$ID.'.docx'; 
				//新建Word模板处理器对象
				$document = new \PhpOffice\PhpWord\TemplateProcessor($modroot);		
		//配置部分结束
		
			//连接数据库
			$DBase = M('freshmen');
			//从表单获取用于提取报名表条目的关键字：姓名和电话

			$keyword['id'] = I('post.id');
			//【问题】要不要把检索条件设为id？好像不太现实啊。。。
			//$data['id']  = $readId;
			//array data:获取数据库中的表单数据
			$data = $DBase->where($keyword)->find();
			
			//检查数据是否存在
			if($data != NULL){			//如果存在，就开始输出
			
				//指定替换值
				$document->setValue('name',$data['name']);
				$document->setValue('sex',$data['sex']);
				$document->setValue('uid',$data['uid']);
				$document->setValue('class',$data['class']);
				$document->setValue('tel',$data['tel']);
				$document->setValue('qq',$data['qq']);
				$document->setValue('dorm',$data['dorm']);
				$document->setValue('depart1',$data['depart1']);
				$document->setValue('depart2',$data['depart2']);
				$document->setValue('concede',$data['concede']);
				$document->setValue('introduction',$data['introduction']);
				$document->setValue('expectation',$data['expectation']);	

				//将生成的DOCX文件保存到服务器上
				$document->saveAs($docroot);
				
				//获取DOCX文件的下载地址
				$fileurl='http://'.$_SERVER['HTTP_HOST'].__ROOT__.'/'.str_replace("\\","/",$docroot);
				
				//设置下载文件名
				//【注意】以下代码直接引用物资系统的对应源码！
				header("Content-type:text/html;charset=utf-8");
				$filename=$data['name']."-".$data['tel'].".docx";
				$encoded_filename = urlencode($filename);
				$encoded_filename = str_replace("+", "%20", $encoded_filename);

				$ua = $_SERVER["HTTP_USER_AGENT"];

		// $_SERVER["HTTP_USER_AGENT"]在IE中显示为：
		// Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko
				header('Content-Type: application/octet-stream');


		//兼容IE11
				if(preg_match("/MSIE/", $ua) || preg_match("/Trident\/7.0/", $ua)){
					header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
				} else if (preg_match("/Firefox/", $ua)) {
					header('Content-Disposition: attachment; filename*="utf8\'\'' . $filename . '"');
				} else {
					header('Content-Disposition: attachment; filename="' . $filename . '"');
				}

				readfile($fileurl);
				
				//删除缓存文件
				unlink($docroot);
				//$this->show($fileurl);
				ob_flush();//每次执行前刷新缓存
				flush();
			}
			elseif($dupCheck == false){		//出错了
				$this->error("啊呀。。。出错了。。。<br> 待会再试试吧，是小编不好( ▼-▼ )<br>");
			}
			else		//如果“查无此人”或出错
			{
				$this->error('不好意思啊。。。查不到你的信息。。。<br> 可能是你还没报名吧~~~');
			}
		}
	}