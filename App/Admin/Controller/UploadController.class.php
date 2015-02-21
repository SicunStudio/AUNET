<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 22:27
 */

namespace Admin\Controller;


use Think\Upload;

class UploadController extends CommonController{
    public function upload_index(){
        $this->display();
    }

    //文件上传处理，支持批量上传
    public function upload(){
        $upload=new Upload();
        $upload->maxSize=3145728;
        $upload->exts=array('txt','doc','docx');
        $upload->rootPath='./Upload/UploadsDoc/';
        $upload->subName=$_SESSION['username'];
        $path=$upload->rootPath.$upload->subName.'/';
        if(!file_exists($path)){
            mkdir($path);
        }
        $info=$upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            foreach($info as $v){
                $data[]=array('filename'=>$path.$v['savename'],
                    'remark'=>$v['name'],
                    'user'=>$_SESSION['username'],
                    'time'=>time());
            }
            if(M('doc')->addAll($data)){
                $this->success('添加成功','doc_list');
            }
        }
    }
    public function doc_list(){
        if($_SESSION['username']!=C('RBAC_SUPERADMIN')){
            $where=array('user'=>$_SESSION['username']);
        }else{
            $where='';
        }
        $this->doc=M('doc')->where($where)->select();
        $this->display();
    }

    //删除上传附件
    public function remove(){
        $id=I('id',0,'intval');
        $doc=M('doc')->where(array('id'=>$id))->select();
//        dump($doc);die;
        foreach($doc as $v){
            $filename=$v['filename'];
        }
//        die;
        if(M('doc')->delete($id)&&unlink($filename)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }

    }
} 