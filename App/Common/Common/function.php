<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 22:59
 */
function downloadFileById($id=0){
    $doc=M('doc')->where(array('id'=>$id))->select();
//    dump($doc);die;
    foreach($doc as $v){
        $filename=$v['filename'];
        $showname=$v['remark'];
//        dump($filename);dump($showname);
        \Org\Net\Http::download($filename,$showname);
    }
}