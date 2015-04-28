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
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('/Home/Association/index');?>"
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
<title>FAQ首页</title>
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

#note{
	width:80%;
	border:none;
	margin-left:10px;
	font-size:25px;
	}

.subtitle_container{
	width:250px;
	font-size:22px;
	margin:20px auto;
	background-color:#9bd288;
	color:#ffffff;
	border:none;
	border-radius:2px;
	line-height:50px;
	text-align:center;
}

.namecontainer{
	padding:10px auto;
	overflow:auto;
	margin-bottom:20px;

}


.name{
	padding:10px;
	line-height:30px;
	height:30px;
	font-size:20px;
	display:block;
	margin-left:10px;
	margin-top:10px;
	float:left;
	background-color:#e6f6c5;
	border-radius:5px;
	}



</style>
 
</head>

<body>


 
 <div id="wrap">
     <div id="title_container">
         <p id="title">TODO:添加标题内容</p>
     </div>
     <div id="list">
         <div class="subtitle_container">
             科技创新类
         </div>
         
         <div class="namecontainer">
             <div class="name">A+U协会</div>
             <div class="name">数学建模协会</div>
             <div class="name">计算机协会</div>
             <div class="name">电子商务协会</div>
             <div class="name">科幻协会</div>
             <div class="name">iRobot团队</div>
         </div>
         
         <div class="subtitle_container">
             科普公益类
         </div>
         <div class="namecontainer">
           <div class="name">图书馆学生管理委员会</div>
           <div class="name">援之缘支教协会</div>
           <div class="name">安全知识普及协会</div>
           <div class="name">碧水环保协会</div>
           <div class="name">爱心协会</div>
           <div class="name">国防协会</div>
           <div class="name">红十字队</div>
           <div class="name">微梦社会工作者空间协会</div>
         </div>
         <div class="subtitle_container">
             理论研究类
         </div>
         <div class="namecontainer">
             <div class="name">市场营销协会</div>
             <div class="name">法律协会</div>
             <div class="name">未来精英俱乐部</div>
             <div class="name">创业者协会</div>
             <div class="name">未来领导者协会</div>
         </div>
       
         <div class="subtitle_container">
             技能培养类
         </div>
         <div class="namecontainer">
            <div class="name">大学生辩论社</div>
            <div class="name">英语协会</div>
            <div class="name">学生国际交流协会</div>
            <div class="name">记忆协会</div>
            <div class="name">服装设计与剪裁协会</div>
            <div class="name">心语手语协会</div>
            <div class="name">口语沙龙协会</div>
            <div class="name">演讲与口才协会</div>
            <div class="name">德语协会</div>
            <div class="name">法语协会</div>
            <div class="name">日语协会</div>
            <div class="name">IS口语协会</div>
            <div class="name">读书会</div>
            <div class="name">海之盾海洋协会</div>
            <div class="name">爱唱歌协会</div>
            <div class="name">美食协会</div>
            <div class="name">粤语协会</div>
       </div>
       
         <div class="subtitle_container">
             文艺表演类
         </div>
         <div class="namecontainer">
            <div class="name">笛箫协会</div>
            <div class="name">蓝天剧社</div>
            <div class="name">魔术协会</div>
            <div class="name">喻园舞社</div>
            <div class="name">吉他协会</div>
            <div class="name">风蓝动漫社</div>
            <div class="name">拉丁舞协会</div>
            <div class="name">博雅古典爱乐协会</div>
         </div>
       
         <div class="subtitle_container">
             艺术创作类
         </div>
       <div class="namecontainer">
            <div class="name">陶艺学社</div>
            <div class="name">摄影协会</div>
            <div class="name">书画协会</div>
            <div class="name">夏雨诗社</div>
            <div class="name">铎声文学社</div>
            <div class="name">华中篆刻社</div>
            <div class="name">瑜山国学社</div>
            <div class="name">手绘POP协会</div>
            <div class="name">电影协会</div>
       </div>
       
         <div class="subtitle_container">
             体育休闲类
         </div>
         <div class="namecontainer">
            <div class="name">华中科技大学网球社</div>
            <div class="name">桥牌协会</div>
            <div class="name">泊心瑜伽协会</div>
            <div class="name">篮球协会</div>
            <div class="name">乒乓球协会</div>
            <div class="name">喻家山围棋社</div>
            <div class="name">跆拳道协会</div>
            <div class="name">武术协会</div>
            <div class="name">羽毛球协会</div>
            <div class="name">远征协会</div>
            <div class="name">自行车协会</div>
            <div class="name">滑板社</div>
            <div class="name">排球协会</div>
            <div class="name">566轮滑协会</div>
            <div class="name">星空网球俱乐部</div>
            <div class="name">台球协会</div>
            <div class="name">象棋人生协会</div>
         </div>
       
     
     
     
     
     </div><!-- 列表层结束 -->

 
 </div>
 <!-- wrap层结束 -->
 

</body>
</html>

<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>