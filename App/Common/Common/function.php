<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 22:59
 */

/*
 * 验证码认证函数
 */
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
//根据资料ID下载文件
function downloadFileById($id=0){
    if($id==0){
        return false;
    }else{
        $Doc=M('doc');
        $filename=$Doc->where(array('id'=>$id))->getField('filename');    //getField('filename') to getField('url') in Sae
        $showname=$Doc->where(array('id'=>$id))->getField('remark');
        if(file_exists($filename)){             //file_exists不生效  in Sae
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

function msubstr($str, $start=0, $length, $charset="utf-8") {
    if(function_exists("mb_substr"))
        $slice = mb_substr($str, $start, $length, $charset);
    elseif(function_exists('iconv_substr')) {
        $slice = iconv_substr($str,$start,$length,$charset);
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    return $slice;
}
//转换event为多维数组
function data_merge($event){
    $arr=array();
    $data=$event->distinct(true)->field('year')->select();
    foreach($data as $v){
        $month=$event->where(array('year'=>$v['year']))->select();
        dump($month);
        $arr['year'][]=$v['year'];
//        foreach($arr['year'] as $k=>$v){
//            $arr['year']=$event->where(array('year'=>$v))->select();
//        }
    }

    return $arr;
}