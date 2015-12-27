<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class DownloadController extends CommonController
{
    private static $ON_CHECKED = 0;
    private static $IS_PASSED = 1;
    private static $PASSED_FAILED = 2;
    private static $type = array('power' => 0,
        'monitor' => 1,
        'bus' => 2,
        'decoration' => 3,
        'activity_center' => 4,
        'ground' => 5,
        'class' => 6,
        'special_place' => 7,
        'sport' => 8,
        'east_side' => 9,
        'others' => 10);
    public function TeachingBuilding($ID = 0)
    {
        $file_data = D('teachingbuilding')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='教学楼教室申请表-$ID.doc'");
        $this->display();
    }

    public function ColorPrinting($ID = 0)
    {
        $file_data = D('colorprinting')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='彩喷悬挂申请表-$ID.doc'");
        $this->display();
    }
    public function East4($ID = 0)
    {
        $file_data = D('east4')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='东四三楼申请表-$ID.doc'");
        $this->display();
    }
    public function Outdoor($ID = 0)
    {
        $file_data = D('outdoor')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='户外路演场地申请表-$ID.doc'");
        $this->display();
    }
    public function Special($ID = 0)
    {
        $file_data = D('special')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='特殊场地申请表-$ID.doc'");
        $this->display();
    }
    public function Sports($ID = 0)
    {
        $file_data = D('sports')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='韵苑体育馆申请表-$ID.doc'");
        $this->display();
    }
    public function Secenter($ID = 0)
    {
        $file_data = D('secenter')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-Disposition:attachment;filename='大活教室申请表-$ID.doc'");
        $this->display();
    }
    public function MaterialApply($ID = 0)
    {
        $file_data = D('materialapply')->where("ID = $ID")->limit(1)->select()[0];
        if ($file_data == NULL)
        {
            $this->error("没有这条信息");
        }
        foreach($file_data as $key => $val)
        {
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
        }
        $this->value = $file_data;
        $this->ID = $ID;
        header("Content-type: text/html; charset=utf-8");
        header("Content-Disposition:attachment;filename='物资申请表-$ID.doc'");
        $this->display();
    }
   /* public function OtherStuff($ID = 0)
    {
        $file_data=D('otherstuff')->where("ID = $ID")->limit(1)->select()[0];;
        $filename=$file_data['path'];
        $showname=$file_data['name'];
        if(file_exists($filename))         //file_exists不生效  in Sae
        {
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
            return;
        }
    }
    public function OtherPlace($ID = 0)
    {
        $file_data=D('otherplace')->where("ID = $ID")->limit(1)->select()[0];;
        $filename=$file_data['path'];
        $showname=$file_data['name'];
        if(file_exists($filename))         //file_exists不生效  in Sae
        {
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
            return;
        }
    }*/
}
?>