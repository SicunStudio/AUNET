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
    <title>社联机构</title>
    <script>
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
        }

        #caiwu {
            width: 20px;
            height: 80px;
        }

        #waiqi {
            width: 20px;
            height: 190px;
            margin-top: 110px;
        }

        #mishu {
            width: 20px;
            height: 80px;
        }

        #renzi {
            width: 20px;
            height: 120px;
            margin-top: 40px;
        }

        #shetuan {
            width: 20px;
            height: 80px;
        }

        #xingjian {
            width: 20px;
            height: 60px;
            height: 120px;
            margin-top: 40px;
        }

        #wailian {
            width: 20px;
            height: 80px;
        }

        #gongguan {
            width: 20px;
            height: 120px;
            margin-top: 50px;
        }

        #meiti {
            width: 20px;
            height: 80px;
            padding-left: 5px;
        }

        #xuanchuan {
            width: 20px;
            height: 60px;
        }

        #sicun {
            width: 20px;
            height: 120px;
            margin-top: 50px;
        }

        #xinmeiti {
            width: 20px;
            height: 120px;
            margin-top: 50px;
            margin-left: 5px;
        }

        #wentuo {
            width: 20px;
            height: 120px;
            margin-top: 65px;
            margin-left: 2px;
        }

        #zhuxituan {
            width: 150px;
            height: 40px;
            margin-top: -50px;
            margin-left: 225px;
        }
    </style>
</head>

<body>

<div id="wrap">
    <table width="99%" border="0" style="margin:25px 0px">
        <tbody>
        <tr>
            <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span
                    style="font-size:24px">Association Union</span></td>
        </tr>
        <tr>
            <td width="27%" valign="top">
                <p><a href="<?php echo U('/Home/AU/index');?>" class="slidebarlink">&gt;社联简介</a></p>

                <p><a href="<?php echo U('/Home/AU/department');?>" class="slidebarlink now">▶&nbsp;社联机构</a></p>

                <p><a href="<?php echo U('/Home/AU/regulation');?>" class="slidebarlink">&gt;制度汇编</a></p>

                <p><a href="<?php echo U('/Home/AU/event');?>" class="slidebarlink">&gt;社联大事记</a></p>

                <p><a href="#" class="slidebarlink">&gt;微仔说</a></p>
            </td>
            <td width="73%" style="background:url(/AUNET/Public/AUSrc/image/au_structure.png); background-repeat:no-repeat;" height="520px">
                <table width="79%" height="600px" class="de_link" align="top" style="margin-top:0px">
                    <tr>
                        <td colspan="13"><a href="<?php echo U('/Home/Department/zhuxituan');?>" name="zhuxituan">
                            <div id="zhuxituan"></div>
                        </a></td>
                    </tr>
                    <tr>
                        <td><a href="<?php echo U('/Home/Department/caiwu');?>" name="caiwu">
                            <div id="caiwu"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/waiqi');?>" name="waiqi">
                            <div id="waiqi"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/mishu');?>" name="mishu">
                            <div id="mishu"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/renzi');?>" name="renzi">
                            <div id="renzi"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/shetuan');?>" name="shetuan">
                            <div id="shetuan"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/xingjian');?>" name="xingjian">
                            <div id="xingjian"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/wailian');?>" name="wailian">
                            <div id="wailian"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/gongguan');?>" name="gongguan">
                            <div id="gongguan"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/meiti');?>" name="meiti">
                            <div id="meiti"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/xuanchuan');?>" name="xuanchuan">
                            <div id="xuanchuan"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/sicun');?>" name="sicun">
                            <div id="sicun"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/xinmeiti');?>" name="xinmeiti">
                            <div id="xinmeiti"></div>
                        </a></td>
                        <td><a href="<?php echo U('/Home/Department/wentuo');?>" name="wentuo">
                            <div id="wentuo"></div>
                        </a></td>
                    </tr>
                </table>
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