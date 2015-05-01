<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/1
 * Time: 20:41
 */

namespace Admin\Controller;


use Think\Upload;

class EventController extends CommonController
{
    public function add_event(){

        $this->display();
    }
    public function event_index()
    {
        $this->data=M('event')->order('time desc')->select();
        $this->display();
    }

    public function add_event_handle()
    {
        dump($_POST);

        $upload = new Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'png');
        $upload->rootPath = './Upload/Event/';
        $upload->subName = $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'] . '/';
        $path = $upload->rootPath . $upload->subName;
        if (!file_exists($path)) {
            mkdir($path);
        }
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        } else {
            foreach ($info as $v) {
                $data[] = array('pic' => $path . $v['savename'],      //$path.$v['savename'] to $v['url'] in Sae
                    //add 'url'=>$v['url'] in Sae
                    'content' => $_POST['content'],
                    'year' => $_POST['year'],
                    'month' => $_POST['month'],
                    'day' => $_POST['day'],
                    'time' => time());
            }
//            $data=array('content'=>$_POST['content'],'year'=>$_POST['year'],'month'=>$_POST['month'],'day'=>$_POST['day'],'time'=>time(),'pic'=>$path.$info['file']['savename']);

            dump($data);
            if (M('event')->addAll($data)) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }


        }

    }
}