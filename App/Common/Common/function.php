<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 22:59
 */

//根据资料ID下载文件
function downloadFileById($id=0){
    if($id==0){
        return false;
    }else{
        $Doc=M('doc');
        $filename=$Doc->where(array('id'=>$id))->getField('filename');
        $showname=$Doc->where(array('id'=>$id))->getField('remark');
        if(file_exists($filename)){
            $length = filesize($filename);
            header('Content-Description: File Transfer');
            header('Content-Type: application/msword');
            header('Content-Disposition: attachment; filename='.$showname);
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . $length);
            readfile($filename);
            exit();
        }else{
            E($filename.L('下载文件不存在！'));
            return false;
        }

    }

}