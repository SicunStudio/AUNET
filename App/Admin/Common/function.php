<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/6
 * Time: 20:51
 */
/*
 * 验证码认证函数
 */
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
/*
 * 递归重组节点信息为多维数组
 */
function node_merge($node,$access=null,$pid=0){
    $arr=array();
    foreach($node as $v){
        if(is_array($access)){
            if(in_array($v['id'],$access)){
                $v['access']=1;
            }else{
                $v['access']=0;
            }
        }
        if($v['pid']==$pid){
            $v['child']=node_merge($node,$access,$v['id']);
            $arr[]=$v;
        }
    }
    return $arr;
}