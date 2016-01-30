<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class DownloadController extends CommonController
{
	$ID = I('POST.ID');
	$table=strtolower(I('POST.action_type'));
	$sql = M("aunet.$table" , 'aunet_material_');
	$file_data = $type ->where("ID = $ID")->limit(1)->select()[0];
	foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
	function start(){
		ob_start();
		echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:w="urn:schemas-microsoft-com:office:word"
		xmlns="http://www.w3.org/TR/REC-html40">';
	}

	function save($path){
		echo "</html>";
		$data = ob_get_contents();
		ob_end_clean();
		$this->wirtefile ($path,$data);
	}
	function wirtefile ($fn,$data){
		$fp=fopen($fn,"wb");
		fwrite($fp,$data);
		fclose($fp);
	}

	function downloadword(){ 
		$this->start(); 
		$wordname = $table.$ID.".doc";
		$this->value = $file_data;
		$this->wordname = $wordname;
		//echo $file_data; 
		$this->save($wordname); 
		$this->display();
		ob_flush();//每次执行前刷新缓存 
		flush(); 
	}
}
?>