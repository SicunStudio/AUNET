<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/top.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/banner.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/buttom.css">
    <script type="text/javascript" src="js/jquery.js"></script>


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


    <script type="text/javascript" src="/AUNET/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.easing.min.js"></script>

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
                    <a href="#" class="downlistlink">微仔说</a>
                </p>

                <p>&nbsp;</p>

            </td>
            <td width="13%" align="left" valign="top">&nbsp;

            </td>
            <td width="10%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/Other/contact');?>" class="downlistlink">会员维权</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/advice');?>" class="downlistlink">投诉建议</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Other/member');?>" class="downlistlink">联系我们</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/FAQ/index');?>" class="downlistlink">FAQ</a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="wrap">
    <table width="99%" border="0" style="margin:25px 0px">
        <tbody>
        <tr>
            <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span style="font-size:24px">Association Union</span></td>
        </tr>
        <tr>
            <td width="27%" valign="top">
                <p><a href="<?php echo U('/Home/AU/index');?>" class="slidebarlink">&gt;社联简介</a></p>
                <p><a href="<?php echo U('/Home/AU/department');?>" class="slidebarlink now">▶&nbsp;社联机构</a></p>
                <p><a href="<?php echo U('/Home/AU/regulation');?>" class="slidebarlink">&gt;制度汇编</a></p>
                <p><a href="<?php echo U('/Home/AU/event');?>" class="slidebarlink">&gt;社联大事记</a></p>
                <p><a href="#" class="slidebarlink">&gt;微仔说</a></p>
            </td>
            <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>社联机构</title>
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
.de_link{
	margin-top:200px;
	margin-left:30px;
	border:1px solid red;
	}
.content_table{
	background:url(/AUNET/Public/AUSrc/image/sicun.png);
	background-size:contain; 
	background-position:200px 50px;
	background-repeat:no-repeat;
	font-family:微软雅黑;
	font-size:18px;
	}
.intro{
	display:inline-block;
	padding-left:20px;
	font-size:20px;
	font-weight:600;
	padding-top:20px;
	}

 </style>
 
</head>

<body>


      <td width="73%" height="520px">

              <table width="100%" class="content_table" cellspacing="0" cellpadding="0" height="500px">
            <tr>
              <td width="30%" align="center" valign="center" style="font-size:30px">思存工作室</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30%" align="center" valign="top">
              	<table cellspacing="0" cellpadding="0">
                	<tr>
                      <td height="200px"  align="center" width="100%" valign="top"><img src="/AUNET/Public/AUSrc/photo/周京漩.jpg" width="70%"></td>
                    </tr>
                    <tr>
                      <td height="50px" align="center">&nbsp;周京漩<br>
					  计算机科学与技术学院</td>
                    </tr>
                </table>
              </td>
              <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;学生社团联合会思存工作室由技术组和事务组两个部分组成，负责社联新技术的研发与技术性维护工作。包括社联网的技术开发与维护；社联各活动的技术操作与调配；社联成员计算机操作技术的培养与改善等工作。主要职责具体如下：<br>
                <span class="intro">技术组：</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;技术团队的精英小组，通过自学、培训与实战相结合的方式，在课余时间里掌握熟练的计算机与网络技术，是工作室的核心部分。<br>
                <span class="intro">事务组：</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;负责工作室作为社联部门所必需的日常事务，有专门的人员负责部内考核和财务账务管理，以保证工作室日常工作有条不紊地进行。<br></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          
                
                </td>

</body>
</html>
        </tr>
        </tbody>
    </table>


</div>




<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>