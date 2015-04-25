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
            border: 1px solid red;
        }

        .content_table {
            font-family: 微软雅黑;
            font-size: 18px;
        }

        .intro {
            display: inline-block;
            padding-left: 20px;
            font-size: 18px;
            font-weight: 600;
            padding-top: 20px;
        }

        .infor {
            display: inline-block;
        }

        .background_content {
            background: url(/AUNET/Public/NewsSrc/im/dh.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 200px 50px;
        }
    </style>
</head>

<body>


<td width="73%" height="520px">
    <table width="100%" class="content_table" cellspacing="0" cellpadding="0" height="500px">
        <tr>
            <td width="30%" align="center" valign="center" style="font-size:30px" colspan="3">主席团</td>
        </tr>
        <tr>
            <td colspan="3">
                <table class="background_content" width="100%">
                    <tr>
                        <td align="left" valign="center" colspan="3" width="100%">&nbsp;&nbsp;&nbsp;&nbsp;华中科技大学社团联合会是在华中科技大学党委的统一领导下，由学校团委直接指导开展工作的全校性学生组织。社联一直以“增大学景，滋大学情，弘大学德，扬大学名”为不懈追求的目标；以“服务于社团，服务于会员”为恒久不变的宗旨。华中科技大学学生社团联合会是校团委直接领导下的社团管理部门。学生社团联合会实行主席负责制。主要职责具体如下：<br>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="3" width="100%"><span class="intro">主席工作职责:</span><br>
                            <span class="infor">1．全面负责学生社团联合会工作，并主持召开主席团会议。</span><br>
                            <span class="infor">2．及时向校团委汇报工作情况，经常同校团委保持联系，自觉接受团委的领导。</span><br>
                            <span class="infor">3．代表学生社团联合会与外界进行交流研讨。</span><br>
                            <span class="infor">4．主席对社团代表大会负责，并接受大会的监督。</span><br>
                            <span class="infor">5．指导和监督学生社团联合会各部门开展工作，协调各部门之间的关系。</span><br>
                            <span class="infor">6．审核和确定各部部长及成员。</span><br>
                            <span class="infor">7．把握和规划社联、社团发展方向。</span><br></td>
                    </tr>
                    <tr>
                        <td valign="top" colspan="3" width="100%">
                            <span class="intro">副主席工作职责：</span><br>
                            <span class="infor">1．协助主席开展各项工作。</span><br>
                            <span class="infor">2．定期召开所辖部门部长会议，指导所辖部门的工作，协调各部门间的工作。</span><br>
                            <span class="infor">3．完成主席交办的各项任务。</span><br>
                            <span class="infor">4．及时了解社团的最新发展动态，协调各社团组织和安排活动。</span><br></td>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>


        <tr>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/刘溪.jpg" width="60%">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会主席<br>
                            刘溪<br>
                            社会学系
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/韩江影.jpg" width="60%">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会副主席<br>
                            韩江影<br>
                            经济学院
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/李雅倩.jpg" width="60%">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会副主席<br>
                            李雅倩<br>
                            材料科学与工程学院
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/郑青南.jpg" width="60%"
                                                                                        height="250px"></td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会副主席<br>
                            郑青南<br>
                            光学与电子信息学院
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/邱方洋.jpg" width="60%">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会副主席<br>
                            邱方洋<br>
                            经济学院
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/杨超仪.jpg" width="62%"
                                                                                        height="250px"></td>
                    </tr>
                    <tr>
                        <td align="center">学生社团联合会副主席<br>
                            杨超仪<br>
                            管理学院
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/李文杰.jpg" width="60%">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">主席团助理<br>
                            李文杰<br>
                            光学与电子信息学院
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/王成旭.jpg" width="60%"
                                                                                        height="250px"></td>
                    </tr>
                    <tr>
                        <td align="center">主席团助理<br>
                            王成旭<br>
                            光学与电子信息学院
                        </td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table cellspacing="0" cellpadding="0" height="250px">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/周宇森.jpg" width="60%"
                                                                                        height="250px"></td>
                    </tr>
                    <tr>
                        <td align="center">主席团助理<br>
                            周宇森<br>
                            材料科学与工程学院
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="33%">
                <table width="100%" height="250px" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="100%" valign="top" align="center" height="100%"><img src="/AUNET/Public/AUSrc/photo/陈高杰 助理.jpg"
                                                                                        width="65%" height="250px"></td>
                    </tr>
                    <tr>
                        <td align="center">主席团助理<br>
                            陈高杰<br>
                            自动化学院
                        </td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;</td>
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