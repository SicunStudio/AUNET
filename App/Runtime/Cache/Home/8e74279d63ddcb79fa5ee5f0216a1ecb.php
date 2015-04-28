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
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">新闻</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社联</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社团</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
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
<title>秘书部</title>
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
 <style>
 .slidebarlink{
	 padding:12px 12px;
	 font-size:22px;
	 margin:15px;
	 display:block;
	 color:#444e41;
	 transition:.2s;
	 border-radius:3px;
	 
	 }
	 
	 .now{color:#FFFFFF;
	background-color:#74b05c;}
	 
.slidebarlink:hover{
	color:#FFFFFF;
	background-color:#74b05c;
}

</style>
 
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
        <p><a href="faq_financial.html" class="slidebarlink">&gt;财务部</a></p>
        <p><a href="faq_secretary.html" class="slidebarlink now">▶&nbsp;秘书部</a></p>
        <p><a href="faq_media.html" class="slidebarlink">&gt;新媒体工作室</a></p>
        <p><a href="faq_art.html" class="slidebarlink">&gt;文艺拓展部</a></p>
        <p><a href="faq_supervise.html" class="slidebarlink">&gt;财监委</a></p>
        <p><a href="faq_guide.html" class="slidebarlink">&gt;社团成立指南</a></p>
        </td>
      <td width="73%" valign="top">
      <div class="content_container">
          <div class="content_title">Q1:如何借用社联办公室？</div>
          <div class="content_text">A：413办公室只限在社联内部（各部门）办公使用，不得外借；414办公室对社团、表演队以及相关其他校级学生组织开放。各社团或表演队分别作为一个整体单位，不得以个人名义提出借用申请，每个社团或表演队的有效借用人有且只有一名，社团为其会长，表演队为其经理人，办公室借用只可由其有效借用人提出申请。借用办公室需提前与秘书部办公室借用负责人（张悦萌：15927051637）联系。在使用办公室时，须保持办公室的整洁。</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q2.社联办公室值班时间是如何安排的？</div>
          <div class="content_text">A：值班的具体时间为：周一至周五上午08:30-09:55，09:55-11:50，下午14:20-16:15，16:15-18:00（夏季作息），13:50-15:45，15:45-17:30（秋季作息），其中行政监察部将负责周一至周五晚上的值班，秘书部将负责周一至周五中午的值班，社团部将于周一至周五下午第七、八节课值班。具体值班时间为：中午12：30-14：00（夏季作息）12：30-13：30（秋季作息），晚上7：00-9：30（夏季作息）6：30-8：30（秋季作息）。</div>
      </div>
      
      <div class="content_container">
          <div class="content_title">Q3.社团委员会有哪些工作职责？</div>
          <div class="content_text">
          A：社团委员会是全校社团的最高权力机关和最高决策机构，学生社团联合会主席团由其产生并在其指导和监督下展开工作，而社团委员会作为社团代表大会的常设机构，社团委员会代表广大社团的根本利益，全心全意服务于社团，在社团代表大会闭会期间行使社团代表大会的权力。社团委员会有以下工作职责：<br>
1．审议和批准我校学生社团联合会及社团的工作报告，决定我校社团活动的重大事项；<br>
2．协调社团之间的关系，加强互相间的合作交流；<br>
3．定期修改学生社团联合会章程和制度，并监督其执行；<br>
4．管理、审批社团发展基金，监督社团发展基金使用；<br>
5．协助学校开展其他学生工作；<br>
6．讨论决定应当由社团委员会决议的其他重大事项。<br>

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