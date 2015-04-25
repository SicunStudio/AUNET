<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="/AUNET/Public/general.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/top.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/banner.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/buttom.css">


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


    <script type="text/javascript" src="/AUNET/Public/NewsSrc/js/jquery.js"></script>
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>社联机构</title>
 <link type="text/css" rel="stylesheet" href="style/general.css">
 <script type="text/javascript" src="js/jquery.js"></script>
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
	background:url(image/renzi.png);
	background-size:contain; 
	background-position:200px 0;
	background-repeat:no-repeat;
	font-family:微软雅黑;
	font-size:18px;
	}
.infor{
	display:inline-block;
	padding-left:25px;
	padding-top:20px;
	}

 </style>
 
</head>

<body>


<!-- HeadAreaStart -->
<div id="header">
  
    <table width="1200px" border="0" style="background:#74b05c;margin:0px auto;">
      <tbody>
        <tr>
          <td width="33%" align="center" valign="middle"><img src="im/dh.png" width="380" height="106" alt=""/>
          </td>
          <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top"   href="#"   style="color: #FFFFFF">首页</a></td>
          <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a  class="a-top"   href="#"  style="color: #FFFFFF" >新闻</a></td>
          <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a  class="a-top"   href="#" style="color: #FFFFFF">社联</a></td>
          <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a   class="a-top"   href="#"  style="color: #FFFFFF">社团</a>
         </td>
          <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a  class="a-top" href="#"  style="color: #FFFFFF">其他</a></td>
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
            <p><a href="" class="downlistlink">评分系统</a>              </p>
            <p><a href="" class="downlistlink">资源申请</a></p>
            <p>
              <a href="" class="downlistlink">设计委任栏</a></p>
            <p>
              <a href="" class="downlistlink">资料下载</a></p>
          </td>
          <td width="13%" align="left" valign="top">
          <p>
          	<a href="" class="downlistlink">最新动态</a>
          </p>
          <p>
          	<a href="" class="downlistlink">活动预告</a>
          </p>
          <p>
          	<a href="" class="downlistlink">通告栏</a>
          </p>
          
          </td>
          <td width="13%" align="left" valign="top">
          <p>
          	<a href="" class="downlistlink">社联简介</a>
          </p>
          <p>
          	<a href="" class="downlistlink">社联机构</a>
          </p>
          <p>
          	<a href="" class="downlistlink">制度汇编</a>
          </p>
          <p>
          	<a href="" class="downlistlink">社联大事记</a>
          </p>
          <p>
          	<a href="" class="downlistlink">微仔说</a>
          </p>
       
          <p>&nbsp;</p>
          
          </td>
          <td width="13%" align="left" valign="top">&nbsp;
          
          </td>
          <td width="10%" align="left" valign="top">
               <p>
          	<a href="" class="downlistlink">会员维权</a>
          </p>
          <p>
          	<a href="" class="downlistlink">投诉建议</a>
          </p>
          <p>
          	<a href="" class="downlistlink">联系我们</a>
          </p>
          <p>
          	<a href="" class="downlistlink">FAQ</a>
          </p>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
    
 <!-- HeadAreaEnd -->
 
 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span style="font-size:24px">Association Union</span></td>
      </tr>
    <tr>
      <td width="27%" valign="top">
        <p><a href="index.html" class="slidebarlink">&gt;社联简介</a></p>
        <p><a href="department.html" class="slidebarlink now">▶&nbsp;社联机构</a></p>
        <p><a href="regulation.html" class="slidebarlink">&gt;制度汇编</a></p>
        <p><a href="event.html" class="slidebarlink">&gt;社联大事记</a></p>
        <p><a href="au_weizai.html" class="slidebarlink">&gt;微仔说</a></p>      
        </td>
      <td width="73%" height="520px">

              <table width="100%" class="content_table" cellspacing="0" cellpadding="0" height="500px">
            <tr>
              <td width="30%" align="center" valign="center" style="font-size:30px">人力资源部</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30%" align="center" valign="top">
              	<table cellspacing="0" cellpadding="0">
                	<tr>
                      <td height="200px" width="100%" valign="top" align="center"><img src="photo/吴雨晴.jpg" width="70%"></td>
                    </tr>
                    <tr>
                      <td height="50px" align="center">吴雨晴<br>
					  电气与电子工程学院</td>
                    </tr>
                </table>
              </td>
              <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;学生社团联合会人力资源部行使人才的吸纳、发掘、培养和服务的职责，是社团、社联的“组织部”，“人事部”。主要职责具体如下：<br>
                <span class="infor">1．负责学生社团联合会干部招聘、干部调动的工作。</span><br>
                <span class="infor">2．引导各部门进行人才培养，定期组织对社联干部以及社团干部的培训，建立干部培训体系。</span><br>
                <span class="infor">3．对学生社团联合会干部进行统一的绩效考核和评优，审查社团主要干部的就任资格，规范社团干部的行为，并颁发证书。</span><br></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          
                
                </td>
      </tr>
              </tbody>
          </table>

 
 </div>
 
 <!-- FootAreaStart -->
<div id="footer">
        <p class="friendlink">友情链接</p>
</div>
<!-- FootAreaEnd -->
</body>
</html>
<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>