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
<title>社联大事记</title>
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
	
	function ShowMonth(yr){
		
		HideBox(yr);
		var elementid="#"+yr+"_month";		
			$(elementid).slideToggle("fast");	
					
		}
		
	function ShowBox(yr,mon)
	{
		var allbox = document.getElementsByClassName("eventbox");
		
		for(var j=0;j<allbox.length;j=j+1){
		allbox[j].style.display='none';
		}
		
		var box = document.getElementsByClassName("eventbox "+ yr+" "+mon);
		for(var i=0;i<box.length;i=i+1){
				box[i].style.display='block';
		}
        
		var allindicator=document.getElementsByClassName("li_list_indicator");
		
		for(var i=0;i<allindicator.length;i=i+1)
		{
			//alert("indicator i: "+i)
			allindicator[i].style.backgroundColor="transparent";
		}
		
		var liindicatorid="li_list_indicator_id_" +yr + "_" + mon;
		//alert(liindicatorid);
		document.getElementById(liindicatorid).style.backgroundColor="#59a642";

     }
    
	function HideBox(avoidyr)
	{
		
		 var mydate=new Date();
	  var thisyear=mydate.getFullYear();
	  
	      for(var i=2008;i<=thisyear;i++)
		  {
			  if(i!=avoidyr){
			  var element="#"+i+"_month";
			  $(element).slideUp("fast");
			  }
			  
		  }
		
	}
 </script>
 <style>
.li_list
{
	width:55px;
	font-size:18px;
	transition:.2s;
	color:#000000;
	margin-top:3px;
	padding:5px auto;
	border-radius:2px;
	}
	

	
.li_list:hover
{
	color:#ffffff;
	background-color:#59a642;
}

.li_list_indicator
{
	background-color: transparent;
    width:12px; 
	height:12px;
    border-radius:6px; 
    float:left;
	margin-top:7px;
	margin-right:3px;}

.monthlist{
	list-style-type:none;
	font-size:25px;
	margin-top:5px;
	}
	
.eventbox{
		width:80%;
		height:150px;
		margin:20px auto;
		display:none; 
		background-color:#ffd739;
		color:#FFFFFF;
		}
		
		
.eventbox_time{
	float:left;
	font-size:34px;
	margin:5px 8px;
	}

.eventbox_imgcontainer{
	width:35%;
	height:80%;
	overflow:hidden;
	float:left;
	margin:15px 5px 15px 15px;
	}

.eventbox_imgbox{
	margin:0px auto;
	display:block;}

.eventbox_text{
	width:60%;
	height:40%;
	right:10px;
	font-size:17px;
	float:right;
	
	}

 </style>
 
</head>

<body>


 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="3" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span style="font-size:24px">Association Union</span></td>
      </tr>
    <tr>
      <td width="27%" valign="top">
        <p><a href="<?php echo U('/Home/AU/index');?>" class="slidebarlink">&gt;社联简介</a></p>
        <p><a href="<?php echo U('/Home/AU/department');?>" class="slidebarlink">&gt;社联机构</a></p>
        <p><a href="<?php echo U('/Home/AU/regulation');?>" class="slidebarlink">&gt;制度汇编</a></p>
        <p><a href="<?php echo U('/Home/AU/event');?>" class="slidebarlink now">▶&nbsp;社联大事记</a></p>
        <p><a href="#" class="slidebarlink">&gt;微仔说</a></p>
        </td>
      <td width="58%" align="left" valign="top">
            
      
       <!-- 写大事件的区域  -->
      <div class="eventbox 2014 1">
          <div class="eventbox_imgcontainer">
          <img src="event_img/2008/颁奖晚会.jpg" class="eventbox_imgbox" height="100%" alt=""/>
          </div>    
          <div class="eventbox_time">2008.1.1</div>
          <div class="eventbox_text">开展2007“感动社团十大人物”评选活动暨主席团换届大会，诞生以高一峰为领导的第十一届主席团。</div>     
      </div>    
      
      <!-- 样例 -->
          <!-- EventBox包裹层 使用类：eventbox yyyy m -->
      <div class="eventbox 2014 1">
          <!-- 图片包裹层 使用类：eventbox_imgcontainer -->
          <div class="eventbox_imgcontainer">
                <!-- 图片标签 使用类：eventbox_imgbox  -->
                <!-- 注意：标签中height="100%" width不要写 -->
         		<img src="aaaa.jpg" class="eventbox_imgbox" height="100%" alt=""/>
          </div>
          <!-- 图片包裹层 结束 -->
          <!-- 时间 使用类：eventbox_imgcontainer -->
          <div class="eventbox_time">2008.1.1</div>
          <!-- 内容 限定76中文字以内-->
          <div class="eventbox_text">一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十</div>          
      </div>
          <!-- EventBox包裹层结束 -->
          
       <div class="eventbox 2014 5">201405</div>
      <div class="eventbox 2014 3">201403</div>
       <div class="eventbox 2015 1">201501</div>
      <div class="eventbox 2014 6">201406</div>
       <div class="eventbox 2015 1">201501</div>
      <div class="eventbox 2014 1">201401</div>
       <div class="eventbox 2015 1">201501</div>
      <div class="eventbox 2015 12">201512</div>
            <div class="eventbox 2009 12">200912</div>
      </td>
      
      <td width="15%" align="left" valign="top"> 
  
      
      <script>
	  var mydate=new Date();
	  var thisyear=mydate.getFullYear();
	  var thismonth=mydate.getMonth();
	  thismonth++;
	  <!-- 本年度月份列表 -->
	  document.writeln("<a onClick='ShowMonth(" + thisyear + ")'>" + thisyear + "年</a>");
	  document.writeln(" <ul id='"+ thisyear+"_month' class='monthlist' style='display:none'>");
	  for(var mon=1;mon<=thismonth;mon++)
	  {
		  document.writeln("<li class='li_list' id='li_" + thisyear + "_" + mon + "' onClick='ShowBox("+thisyear+","+mon+")'>"+ "<div class='li_list_indicator ' id='li_list_indicator_id_" + thisyear+ "_" + mon + "'></div>" +mon+"月</li>");	  
	 }
	  document.writeln("</ul>");
	  document.writeln("<br>");
	  
      for(var yr=thisyear-1;yr>=2008;yr--)
	  {
		  document.writeln("<a onClick='ShowMonth(" + yr + ")'>" + yr + "年</a>");
		   document.writeln(" <ul id='"+ yr+"_month' class='monthlist' style='display:none'>");
	       for(var mon=1;mon<=12;mon++)
	       {
		     document.writeln("<li class='li_list' id='li_" + yr + "_" + mon + "' onClick='ShowBox("+yr+","+mon+")'>"+ "<div class='li_list_indicator' id='li_list_indicator_id_" + yr+ "_" + mon + "'></div>" +mon+"月</li>");	  
		   }
	      document.writeln("</ul>");
	  document.writeln("<br>");
		  
	  }
    </script>
     
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