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
.slidebarlink {
	padding: 12px 12px;
	font-size: 22px;
	margin: 15px;
	display: block;
	color: #444e41;
	transition: .2s;
	border-radius: 3px;
}
.now {
	color: #FFFFFF;
	background-color: #74b05c;
}
.slidebarlink:hover {
	color: #FFFFFF;
	background-color: #74b05c;
}
.de_link {
	margin-top: 200px;
	margin-left: 30px;
	border: 1px solid red;
}
.content_table {
	background: url(/AUNET/Public/AUSrc/image/meiti.png);
	background-size: contain;
	background-position: 200px 0;
	background-repeat: no-repeat;
	font-family: 微软雅黑;
	font-size: 18px;
}
.intro {
	display: inline-block;
	padding-left: 20px;
	font-size: 20px;
	font-weight: 600;
	padding-top: 20px;
}
.infor {
	display: inline-block;
}
</style>
 </head>

 <body>

        <td width="73%" height="520px">
           <table width="100%" class="content_table" cellspacing="0" cellpadding="0" height="500px">
            <tr>
               <td width="30%" align="center" valign="center" style="font-size:30px">社团部</td>
               <td>&nbsp;</td>
             </tr>
            <tr>
               <td width="30%" align="center" valign="top">
                <table cellspacing="0" cellpadding="0">
                   <tr>
                    <td>&nbsp;</td>
                  </tr>
                   <tr>
                    <td height="200px" width="100%" valign="top" align="center"><img src="/AUNET/Public/AUSrc/photo/谷家瑞 社团.jpg" width="70%"></td>
                  </tr>
                   <tr>
                    <td height="50px" align="center">谷家瑞<br>
                       计算机科学与技术学院</td>
                  </tr>
                 </table>
              </td>
               <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;学生社团联合会社团部直接与社团联系沟通，主要负责对全校注册的合法社团的引导、协调、服务、管理工作。坚决以“服务于社团，服务于会员”为恒久的信念和目标。主要职责具体如下：<br>
                <span class="intro">发展组：</span><br>
                <span class="infor">1．与外联信息中心合作，开展校内外交流工作，引导社团参与校外交流活动，促进社团在校外的交流合作，提高社团的校外影响力。</span><br>
                <span class="infor">2．汇总社团中心各类渠道所了解到的信息，总结社团发展面临的典型问题，针对每个问题进行细致研究，探讨出解决方案，并上报主席团为社团提供及时的反馈。</span><br>
                <span class="infor">3．定期召开面向社团的交流会议，促进社团与社联之间的直接沟通交流。</span><br>
                <span class="intro">活动组：</span><br>
                <span class="infor">1．负责部分社联主办活动的组织和策划，在社联承办的大型系列活动中起重要的组织领导作用。</span><br>
                <span class="infor">2．负责优秀社团的精品活动，全面参与活动的策划、组织、开展及后期总结工作，为进一步扩大精品活动的影响力出谋划策。</span><br>
                <span class="intro">常务组：</span><br>
                <span class="infor">1．负责各社团的基本资料、工作计划、活动策划及总结的收集管理，建立社团资料库。</span><br>
                <span class="infor">2．负责部门内部各类制度规则的编写以部门的人事考核。</span><br>
                <span class="infor">3．负责各种所需的文字资料的准备和编辑，为各类活动提供资料保障。</span><br>
                <span class="infor">4．负责部门内部的财务及值班等常规工作。</span><br>
                <span class="infor">5．与人力资源部合作，有组织地开展部内的各种形式的干训及交流活动。</span><br>
                <span class="infor">6．负责部门内部各项资料的整理和更新，制作每学期的社团大事记及部门总结。</span><br>
                <span class="infor">7．定期与宣传部、媒体部合作，更新社团网上信息，制作各种社团宣传资料。</span><br>
                <span class="infor">8．每月定期向会长发放调查问卷，并及时进行搜集和反馈。</span><br>
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