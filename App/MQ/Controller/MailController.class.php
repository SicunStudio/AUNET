<?php
namespace MQ\Controller;
use Think\Controller;
class MailController extends Controller {
    public function mail(){
        if(IS_CLI) {
            $mail_list_db=M('mq_mail');
            $mail_list=$mail_list_db->select();
            foreach ($mail_list as $mail_item){
                if( sendMail($mail_item['receiver_name'],$mail_item['receiver_mail'],$mail_item['subject'],$mail_item['content'] ) ){
                    $mail_list_db->where("id='".$mail_item['id']."'")->delete();
                }else {
                    $mail_item['state']=$mail_item['state']+1;
                    //设置 当发送失败一定次数后删除此条队列
                    if($mail_item['state']>5){
                        $mail_list_db->where("id='".$mail_item['id']."'")->delete();
                    }else{
                        $mail_list_db->where("id='".$mail_item['id']."'")->save($mail_item);
                    }
                }
            }
        }else {
            $this->error("页面不存在",U("Home/Index/index"));
        }

        
    }
}