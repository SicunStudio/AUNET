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
                    <a href="#" class="downlistlink">微仔说</a>
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
<title>投诉建议</title>
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
	
	function ChangeRecFeedback(subject)
	{
		document.getElementById("ReceiveFeedback_Yes").checked=false;
		document.getElementById("ReceiveFeedback_No").checked=false;
		document.getElementById("IfReceiveNo").style.backgroundColor="#e6f6c5";
		document.getElementById("IfReceiveYes").style.backgroundColor="#e6f6c5";
		switch (subject)
		{ 
		case 1:
		document.getElementById("ReceiveFeedback_Yes").checked=true;
		document.getElementById("IfReceiveYes").style.backgroundColor="#9bd288";
		document.getElementById("ReceiveInfo").style.display="block";
		break;
		
		case 2:
		document.getElementById("ReceiveFeedback_No").checked=true;
		document.getElementById("IfReceiveNo").style.backgroundColor="#9bd288";
		document.getElementById("ReceiveInfo").style.display="none";
		break;
			}
	};
	
	<!-- 设置默认接受反馈 -->

    ChangeRecFeedback(1);

 </script>
 <style>
.subtitle_container{
	background-color:#9bd288;
	margin-top:5px;
	margin-left:5px;
	padding:5px;
	border-radius:2px;
	}
	
.subtitle{
		color:#ffffff;
		font-family:幼圆;
		font-size:20px;
		font-weight:bold;
		display:block;
		margin:5px auto;
		}
		
.inputbox{
	background-color:#e6f6c5;
	border:none;
	font-size:22px;
	padding:5px;
	width:90%;
	height:auto;
	margin:5px;
	border-radius:2px;}
	
.IfReceiveContainer{
	width:35%;
	color:#74b05c;
	font-size:20px;}
	
.IfReceiveDot{
	height:20px;
	width:20px;
	border-radius:10px;
	background-color:#e6f6c5;
	margin-left:180px;
	top:5px;
	float:left;}
	
#submitbtn{
	width:70%;
	background-color:#9bd288;
	font-size:20px;
	color:#ffffff;
	border:none;
	border-radius:2px;
	height:50px;
	margin:10px auto;
	padding:10px auto;
}
	
</style>
 
</head>

<body>


 
 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;其他 Other&nbsp;&nbsp;</span><span style="font-size: 24px">&gt;&gt; 投诉建议</span></td>
      </tr>
    <tr>
      <td width="27%" height="672" valign="top">
        <p><a href="<?php echo U('/Home/Other/member');?>" class="slidebarlink">&gt;会员维权</a></p>
        <p><a href="<?php echo U('/Home/Other/advice');?>" class="slidebarlink now">▶&nbsp;投诉建议</a></p>
        <p><a href="<?php echo U('/Home/Other/contact');?>" class="slidebarlink">&gt;联系我们</a></p>
        <p><a href="<?php echo U('/Home/FAQ/index');?>" class="slidebarlink">&gt;FAQ</a></p>

        </td>
      <td width="73%" align="center" valign="top">
      
      <form id="main" method="post" action="<?php echo U('/Admin/Advise/advise_handle');?>"><table width="90%" border="0">
        <tbody>
          <tr>
            <td width="29%" height="71">
            <div class="subtitle_container" style="width:200px;">
                <p class="subtitle" >投诉（建议）主题</p>
            </div>
            </td>
            <td width="71%">
              <input type="text" name="subject" class="inputbox" id="subject"></td>
          </tr>
          <tr>
            <td height="65" colspan="2"> 
            <div class="subtitle_container" style="width:150px;">
                <p class="subtitle">内容</p>
            </div>
            </td>
            </tr>
          <tr>
            <td height="255" colspan="2">
              <textarea name="text" id="text" class="inputbox" style="height:90%"></textarea>
              </td>
            </tr>
          <tr>
            <td height="78" colspan="2">
             <div class="subtitle_container" style="width:150px;">
                <p class="subtitle" >是否接受反馈</p>
            </div>
            </td>
            </tr>
          <tr>
            <td colspan="2" align="center" valign="middle">
              <div class="IfReceiveContainer" style="float:left;">
                <div class="IfReceiveDot" id="IfReceiveYes"  onClick="ChangeRecFeedback(1)" style="background-color:#9bd288"></div>是
                </div>
              <div class="IfReceiveContainer" style="float:left;">
                <div class="IfReceiveDot" id="IfReceiveNo" onClick="ChangeRecFeedback(2)"></div>否
              </div>
              
              <p>
               
                  <input name="ReceiveFeedback" type="radio" id="ReceiveFeedback_Yes" value="1" checked style="display:none;" >
                 
                <br>
               
                  <input type="radio" name="ReceiveFeedback" value="0" id="ReceiveFeedback_No" style="display:none;">
                  
                <br>
              </p></td>
            </tr>
        </tbody>
      </table>
      
      <div id="ReceiveInfo">
      <table width="80%" border="0">
  <tbody>
    <tr>
      <td width="25%" height="41">
      <div class="subtitle_container">
      <p class="subtitle" style="width:60px;">姓名</p>
      </div>
      </td>
      <td width="75%" valign="middle">
      
      <input name="info_name" type="text" class="inputbox" id="info_name" ></td>
    </tr>
    <tr>
      <td height="37"><div class="subtitle_container">
      <p class="subtitle" style="width:60px;">电话</p>
      </div></td>
      <td valign="middle"><input name="info_phone" type="text" class="inputbox" id="info_phone" ></td>
    </tr>
    <tr>
      <td height="42"><div class="subtitle_container">
      <p class="subtitle"  style="width:60px;">QQ</p>
      </div></td>
      <td valign="middle"><input name="info_qq" type="text" class="inputbox" id="info_qq"> </td>
    </tr>
  </tbody>
</table>
      </div>
      <input name="submit" type="submit" id="submitbtn" value="提交">
      
      
      </form>
      
      
      
      
      
      
      
      
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