<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/14
 * Time: 16:20
 */

namespace Admin\Controller;
use Admin\Util\Category;
use Org\Util\Ueditor;

/*
 *
 * pic---文章缩略图，以第一张图片制作
 *
 *
 * create table aunet_news(id int unsigned not null primary key auto_increme
 * nt,title varchar(30) not null default '',content text,time int(10) unsigned not
 * null default 0,cid int unsigned not null,del tinyint(1) unsigned not null defaul
 * t 0,pic text not null default '')ENGINE=MyISAM default charset=utf8;
 */
/*
 * 新闻与标签多对多关联数据库
 * create table aunet_news_attr(nid int unsigned not null,aid int unsigned n
 * ot null,index nid(nid),index aid(aid));
 */
class NewsController extends CommonController{


    //新闻列表
    public function news_index(){
        $this->news=D('NewsRelation')->getNews();
        $this->display();
    }


    //添加新闻界面
    public function addNews(){
        $cate=M('cate')->order('sort')->select();
        $this->cate=Category::unlimitedForLevel($cate);
        $this->attr=M('attr')->select();
        $this->display();
    }

    public function ueditor(){
        $ueditor=new Ueditor();
        echo $ueditor->output();
    }

    //新增 OR 修改新闻后台处理
    public function addNewsHandle(){

        if(!IS_POST){
            $this->error('页面不存在',U('news_index'));
        }
        //相关数据
        $data=array();
        if(preg_match_all("/src=([\"|']?)([^\"'>]+\.(gif|jpg|jpeg|bmp|png))\\1/i",$_POST['content'],$match)){
            $data['pic']=$match[2][0];
        }
        if(isset($_POST['aid'])){
            foreach($_POST['aid'] as $v){
                $data['attr'][]=$v;
            }
        }
        $data['title']=I('title');
        $data['content']=$_POST['content'];
        $data['time']=time();

        if(M('news')->where(array('id'=>I('id')))->find()){
            if(D('NewsRelation')->where(array('id'=>I('id')))->relation(true)->save($data)){
                $this->success('修改成功',U('news_index'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $data['cid']=(int)$_POST['cid'];
            if(D('NewsRelation')->relation(true)->add($data)){
                $this->success('添加成功',U('news_index'));
            }else{
                $this->error('添加失败');
            }
        }
    }



    //删除 OR 还原新闻
    public function toTrash(){
        $id=I('id','','intval');
        $type=I('type','','intval');

        $msg=$type?'删除':'还原';
        $update=array('id'=>$id,
            'del'=>$type,
        );
        if(M('news')->save($update)){
            $this->success($msg.'成功',U('news_index'));
        }else{
            $this->error($msg.'失败');
        }


    }

    //编辑原有新闻
    public function edit(){
        $id=I('id','','intval');
        $text=D('NewsRelation')->getNewsById($id);
        $this->attr=M('attr')->select();
        foreach($text as $v){
            $this->text=$v;
        }
        $this->display();
    }


    //回收站页面
    public function trash(){
        $this->news=D('NewsRelation')->getNews(1);
        $this->display('news_index');
    }


    //删除新闻
    public function delete(){
        $id=I('id','','intval');
        D('NewsRelation')->relation('attr')->where(array('id'=>$id))->delete();
        $this->redirect('news_index');
    }
    public function deleteAll(){
        $del=array('del'=>1);
        D('NewsRelation')->relation('attr')->where($del)->delete();
    }


    //新闻预览
    public function Text(){
        $id=I('id','','intval');
        $text=D('NewsRelation')->getNewsById($id);
//        dump($text);die;
        foreach($text as $v){
            $this->attr=$v['attr'];
            $this->cate=$v['cate'];
            $this->text=$v['content'];
            $this->title=$v['title'];
            $this->time=date('Y-m-d H:i',$v['time']);
        }
        $this->display();

    }
} 