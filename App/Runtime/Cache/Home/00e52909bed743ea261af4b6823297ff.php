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
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>社团网-华中科技大学学生社团联合会</title>
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/new.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/NewsSrc/style/button.css">
    <link rel="stylesheet" type="text/css" href="/AUNET/Public/NewsSrc/style/flexslider.css"/>

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
</head>

<body>

<!-- HeadAreaStart -->


<!-- HeadAreaEnd -->
<div class="flexslider" id="flexsliderarea">
    <ul class="slides">
        <li><img src="/AUNET/Public/NewsSrc/imgs/1.jpg" class="slideimgs"/></li>
        <li><img src="/AUNET/Public/NewsSrc/imgs/2.jpg" class="slideimgs"/></li>
        <!--<li><img src="/AUNET/Public/NewsSrc/imgs/3.jpg" class="slideimgs"/></li>-->
        <!--<li><img src="/AUNET/Public/NewsSrc/imgs/4.jpg" class="slideimgs"/></li>-->

    </ul>
</div>

<div id="wrap">


    <table width="90%" border="0" style="margin:5px auto;">
        <tbody>
        <tr>
            <td height="56" colspan="2" align="center" valign="middle"><p style="color:#74b05c; font-size:30px">Weekly
                News</p></td>
        </tr>


        <tr>
            <td valign="middle">
                <div class="new-small new1">
                  <div class="newsblock_container">
                    <a href="#">
                        <p class="new-head1"><span class="first"><?php echo (msubstr($news[0]["title"],0,1)); ?></span><?php echo msubstr($news[0]['title'],1,strlen($news[0]['title']));?></p>
                        <p class="new-xiaoxi1"><?php echo ($news[0]["text"]); ?></p>
                    </a>
                  </div>
                </div>
            </td>
            <td align="left">
              <div class="newsblock_container">
                <div class="new-small new2">
                    <a href="#">
                        <p class="new-head1"><span class="first"><?php echo (msubstr($news[1]["title"],0,1)); ?></span><?php echo msubstr($news[1]['title'],1,strlen($news[1]['title']));?></p>
                        <p class="new-xiaoxi1"><?php echo ($news[1]["text"]); ?></p>
                    </a>
                </div>
              </div>
            </td>
        </tr>


        <tr>
            <td valign="middle" >
              <div class="newsblock_container">
                <div class="new-small new3">
                    <a href="#">
                        <p class="new-head1"><span class="first"><?php echo (msubstr($news[2]["title"],0,1)); ?></span><?php echo msubstr($news[2]['title'],1,strlen($news[2]['title']));?></p>
                        <p class="new-xiaoxi1"><?php echo ($news[2]["text"]); ?></p>
                    </a>
                </div>
              </div>
            </td>
            <td align="left">
              <div class="newsblock_container">
                <div class="new-small new4">
                    <a href="#">
                        <p class="new-head1"><span class="first"><?php echo (msubstr($news[3]["title"],0,1)); ?></span><?php echo msubstr($news[3]['title'],1,strlen($news[3]['title']));?></p>
                        <p class="new-xiaoxi1"><?php echo ($news[3]["text"]); ?></p>
                    </a>
                </div>
              </div>
            </td>
        </tr>


        </tbody>
    </table>


    <table width="99%" border="0" style="margin:5px auto;">
        <tbody>
        <tr>
            <td height="55" colspan="4" align="center" valign="middle">
                <p style="color:#74b05c; font-size:30px">Things We Do</p>
            </td>
        </tr>
        <tr>
            <td width="24%">
                <div class="button button1">
                    <a class="buttonlink" href="#"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button2">
                    <a class="buttonlink" href="<?php echo U('/Design/Index/index');?>"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button3">
                    <a class="buttonlink" href="<?php echo U('/Material/Index/index');?>"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button4">
                    <a class="buttonlink" href="<?php echo U('/Grade/Index/index');?>"></a>
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