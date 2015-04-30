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
<title>微仔说</title>
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
.photos{
	height:180px;
	width:180px;
	border:1px solid #74B05C;
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
        <p><a href="au_info.html" class="slidebarlink">&gt;社联简介</a></p>
        <p><a href="au_department.html" class="slidebarlink">&gt;社联机构</a></p> 
        <p><a href="au_regulation.html" class="slidebarlink">&gt;制度汇编</a></p>
        <p><a href="au_event.html" class="slidebarlink">&gt;社联大事记</a></p>  
        <p><a href="au_weizai.html" class="slidebarlink now">▶&nbsp;微仔说</a></p>      
        </td>
      <td width="73%" align="center" valign="top">
		  <table width="800px">
		  <tr><td colspan="3">
			<span style="width:680px; border:ridge 3px #74B05C; display:block; margin-left:60px; float:left;"><p style=" margin:14px; font-size:20px; text-align:left; color:#74B05C;">大家好我是仔仔，大名微仔，是华中大社联的吉祥物。我圆圆的身体是嫩绿色，头上顶着@天线，小短腿和手都萌萌哒(&lt;_&gt;)。绿色是生机和活力的象征，我们社联就是这样一个积极向上的团体。天线是我用来接收各种新创意和新念头的工具，能用脑电波和大家沟通哦。关于我的作用嘛，我会变大变小变成各种身份出现在社联的活动中，大家看到我就能够认出和我一样萌萌哒的社联人啦。</p></span>
		  </td></tr>
		  <tr><td colspan="3">
		    <span style=" width:800px; height:30px;display:block"></span>	
			<span style="display:inline">
			<h2 style="float:left; margin-left:64px; margin-top:20px; clear:left; color:#444E41">微仔相册</h2>
			<a style="float:right; margin-top:22px; margin-right:80px;" href="#">&lt;&lt;更多</a>
			</span>
		  </td></tr>

		  <tr><td colspan="3"><span style=" width:800px; height:30px;display:block"></span></td></tr>
		  <tr>
		  <td>
			<span>
			<a href="au_weizai_bumen.html" style="margin-left:60px;"><img src="bumen/思存工作室.jpg" class="photos"/></a><br/>
			<a href="au_weizai_bumen.html" style="color:#444E41; font:'幼圆'; font-size:20px; margin-left:106px;">部门微仔</a>				
			</span>
		   </td>
		   <td>
			<span><a href="au_weizai_shetuan.html" style="margin-left:8px;"><img src="shetuan/创业者协会.jpg" class="photos"/></a><br/>
			<a href="au_weizai_shetuan.html" style="color:#444E41; font:'幼圆'; font-size:20px; margin-left:56px;">社团微仔</a>
			</span>
		   </td>
		   <td>
			<span><a href="au_weizai_heci.html" style="margin-left:18px;"><img src="hetu/清明.jpg" class="photos"/></a><br/>
			<a href="au_weizai_hetu.html" style="color:#444E41; font:'幼圆'; font-size:20px; margin-left:64px;">微仔贺词</a>
			</span>			
		  </td>
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