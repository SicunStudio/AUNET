<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/general.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/top.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/banner.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general/buttom.css">
    <script type="text/javascript" src="/AUNET/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.easing.min.js"></script>


    <style>

        .slideimgs {
            height: 600px;
            overflow: hidden;
        }

        #flexsliderarea {
            width: 100%;
            height: 600px;
        }
    </style>




    <script>

        $(function () {
            $(".flexslider").flexslider({
                animation: "slide",
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true, //是否支持触屏滑动

            });
        });

        $(document).ready(
                function () {

                    $(".a-top").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });

                    $("#downlist").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });


                    $("#downlist").mouseleave(
                            function (e) {
                                $("#downlist").slideUp("fast");
                            });

                });
    </script>
    <title></title>
</head>
<body>
<div id="header">

    <table width="1200px" border="0" style="background:#74b05c;margin:0px auto;">
        <tbody>
        <tr>
            <td width="33%" align="center" valign="middle"><img src="/AUNET/Public/NewsSrc/im/dh.png" width="380" height="106"
                                                                alt=""/>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('Home/Index/index');?>"
                                                                                        style="color: #FFFFFF">首页</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('/Home/News/index');?>"
                                                                                        style="color: #FFFFFF">新闻</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('/Home/AU/index');?>"
                                                                                        style="color: #FFFFFF">社联</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('/Home/Association/index');?>"
                                                                                        style="color: #FFFFFF">社团</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('/Home/Other/index');?>"
                                                                                        style="color: #FFFFFF">其他</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="downlist" style="display:none;">
    <table width="1200px" border="0" style="margin:0px auto;">
        <tbody>
        <tr>
            <td width="36%" align="center" valign="middle">&nbsp;


            </td>
            <td width="13%" align="left" valign="top">
                <p><a href="<?php echo U('/Grade/Index/index');?>" class="downlistlink">评分系统</a></p>

                <p><a href="<?php echo U('/Material/Index/index');?>" class="downlistlink">资源申请</a></p>

                <p>
                    <a href="<?php echo U('/Design/Index/index');?>" class="downlistlink">设计委任栏</a></p>

                <p>
                    <a href="" class="downlistlink">资料下载</a></p>
            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/News/index');?>" class="downlistlink">最新动态</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Activity/index');?>" class="downlistlink">活动预告</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/BroadCast/index');?>" class="downlistlink">通告栏</a>
                </p>

            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/AU/index');?>" class="downlistlink">社联简介</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/department');?>" class="downlistlink">社联机构</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/regulation');?>" class="downlistlink">制度汇编</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/AU/event');?>" class="downlistlink">社联大事记</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/WeiZai/index');?>" class="downlistlink">微仔说</a>
                </p>

                <p>&nbsp;</p>

            </td>
            <td width="13%" align="left" valign="top">&nbsp;

            </td>
            <td width="10%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/Other/member');?>" class="downlistlink">会员维权</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/advice');?>" class="downlistlink">投诉建议</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/contact');?>" class="downlistlink">联系我们</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/FAQ/index');?>" class="downlistlink">FAQ</a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>财务部</title>
  <link href="/AUNET/Public/FAQSrc/content.css" rel="stylesheet" type="text/css">
 <script>
  $(document).ready(
	   function() {
		 
		   $(".a-top").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
		$("#downlist").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
	
		
		$("#downlist").mouseleave(
		   function(e) {
            $("#downlist").slideUp("fast");	
        });
		
    });
 </script>

</head>

<body>


 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;FAQ&nbsp;&nbsp;</span><span style="font-size:24px">常见问题&amp;解答</span></td>
      </tr>
    <tr>
      <td width="27%" valign="top">
        <p><a href="index.html" class="slidebarlink">&gt;FAQ首页</a></p>
        <p><a href="faq_question.html" class="slidebarlink">&gt;常见问题</a></p>
        <p><a href="faq_financial.html" class="slidebarlink now">▶&nbsp;财务部</a></p>
        <p><a href="faq_secretary.html" class="slidebarlink">&gt;秘书部</a></p>
        <p><a href="faq_media.html" class="slidebarlink">&gt;新媒体工作室</a></p>
        <p><a href="faq_art.html" class="slidebarlink">&gt;文艺拓展部</a></p>
          <p><a href="faq_hr.html" class="slidebarlink">&gt;人力资源部</a></p>
        <p><a href="faq_supervise.html" class="slidebarlink">&gt;财监委</a></p>
        <p><a href="faq_guide.html" class="slidebarlink">&gt;社团成立指南</a></p>
        </td>
      <td width="73%" valign="top">      
      <div class="content_container">
          <div class="content_title">Q：社联财务部值班时间？</div>
          <div class="content_text">A：逢周一至周五中午12：40——13：30在大活413有财务部人员值班
财务部公邮：caiwu@auhust.net
</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q：财务部相关表格在哪里下载？</div>
          <div class="content_text">A：社团网上财务公开月度报表以及年度报表，财务部会打包发至第二公邮。请各协会登陆第二公邮自行下载。<br>第二公邮地址：caiwuau2015@163.com 密码：womendeau
</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q：文化节期间，如何向社联申报专项活动？</div>
          <div class="content_text">A：文化节期间，团委会通过专项基金的形式会社团文化节子活动提供资金支持，如有协会想要申请文化节子活动，具体流程如下：<br>1、各协会根据举行的活动书写详细的活动策划以及填写预算表，然后统一交给社团部。<br>2、社团财务部根据社团部提供的策划、等级和价格表进行预算审批。<br>3、财务部专员通知协会活动预算审批结果（共两次通知）；有异议的协会可以提出申请。（通知者即为跟进该协会的财务部专员）
</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q：社联能否为协会各部门提供干训，如财务？</div>
          <div class="content_text">A：财务部每学期会对社团财务负责人进行统一培训。如果协会有需要进行财务培训或交流的可以跟财务部说明，我们会尽最大努力与协会分享经验，帮助社团的财务工作朝制度化、规范化发展。 </div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q：关于协会在非招新期间招新的问题?</div>
          <div class="content_text">A：秋季学期社团统一招新，而春季学期由社团在一定时间内自主招新。考虑到保障会员利益，所以下学期协会只在开学初按自己需求选择是否自主招新。如果需要自主招新，则按已公布的流程进行。</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q：社团财务的网上公开制度具体如何实施？如何上传协会财务状况表？</div>
          <div class="content_text">A：社团网专设一个社团财务专栏，让各协会每个月把财务情况在网上发布，让广大会员了解协会的资金运用情况，也可以促进各协会定期对自己的财务状况进行总结和规划。这一内容在社团评估中也将作为“社团财务公开”的一个评审标准。具体流程如下：<br>1、每月末，各社团财务负责人讲各自社团月度财务社团总结报表发至财务部公邮 caiwu@auhust.net。<br>2、财务部总结各协会月度表以后，会将月度财务总结以群邮形式在财务负责人专群进行公布。月度财务结果在年终评估评优中占一定比重。<br>3、六月份协会财务负责人自行总结协会年度财务报告，与协会年度财务报表一起发至财务部公邮。年度财务总结与月度财务总结共同构成年终评估评优中财务部分的评分。
</div>
      </div>
      </td>
    </tr>
    </tbody>
</table>

 
 </div>

</body>
</html>

<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>