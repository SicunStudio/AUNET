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
 <title>社联简介</title>
 <link href="/AUNET/Public/AUSrc/style/catalog.css" type="text/css" rel="stylesheet">
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
	
	$(function() { 
	$(window).change(function(){

		})
		
		var lastswitch=1;
		
$(window).scroll(function() { 
 var scrolldistance=$(window).scrollTop(); 
 if(scrolldistance>=550)
 {
 document.getElementById("z_catalog").style.top=scrolldistance -550+"px";
 }
 else
 {document.getElementById("z_catalog").style.top="5px";}

		var permove=document.getElementById("z_catalog").height / 4;
if(scrolldistance<=660 && lastswitch!=1)
{
	$("#catalog_indicator").animate({top:'3px'},'fast');
	lastswitch=1;
}

if(scrolldistance<=1350 && scrolldistance>660 && lastswitch!=2)
{
	$("#catalog_indicator").animate({top:'34px'},'fast');
	lastswitch=2;
}

if(scrolldistance<=3100 && scrolldistance>1350 && lastswitch!=3)
{
	$("#catalog_indicator").animate({top:'68px'},'fast');
	lastswitch=3;}

if(scrolldistance>3100 && lastswitch!=4)
{
	$("#catalog_indicator").animate({top:'97px'},'fast');
	lastswitch=4;
}
		
}); 
})
 </script>
<style>
#catalog_indicator{
	width:45px;
	height:24px;
	border-radius:2px 12px 12px 2px;
	background-color:#74b05c;
	position:absolute;
	top:3px;
	right:5px;
}
</style>
 </head>

 <body>
<a name="#top"></a>
<div id="backtotop">
 <a href="#top"><img src="/AUNET/Public/general/backtotop.png" id="backtotop_img" width="100%"  alt="返回顶端"/></a>
</div> 

<div id="wrap">
   <table width="99%" border="0" style="margin:25px 0px">
    <tbody>
       <tr>
        <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;社联&nbsp;&nbsp;</span><span style="font-size:24px">Association Union</span></td>
      </tr>
       <tr>
        <td width="27%" valign="top">
           <p><a href="index.html" class="slidebarlink now">▶&nbsp;社联简介</a></p>
           
           <p><a href="<?php echo U('/Home/AU/department');?>" class="slidebarlink">&gt;社联机构</a></p>
           <p><a href="<?php echo U('/Home/AU/regulation');?>" class="slidebarlink">&gt;制度汇编</a></p>
           <p><a href="<?php echo U('/Home/AU/event');?>" class="slidebarlink">&gt;社联大事记</a></p>
           <p><a href="#" class="slidebarlink">&gt;微仔说</a></p>
            <!-- 浮动分栏 -->
  <div id="z_catalog">
            <dl id="catalog">
               <dd class="catalog_li"><span class="catalog_dot">▪</span><a href="#001">历史沿革</a></dd>
               <dd class="catalog_li"><span class="catalog_dot">▪</span><a href="#002">机构设置</a></dd>
               <dd class="catalog_li"><span class="catalog_dot">▪</span><a href="#003">主办活动</a></dd>
               <dd class="catalog_li"><span class="catalog_dot">▪</span><a href="#004">社联会歌</a></dd>
             </dl>
             <div id="catalog_indicator"></div>
          </div>
         </td>
        <td width="73%" align="left" valign="top">
           <div id="catalog_content">
            <div id="lsyg"><a name="001"></a>
               <p><span class="content_num">1</span> <span class="content_item">历史沿革</span> <span class="content_line"></span> </p>
               <div class="para">1997年，华中科技大学社团联合会成立。2004年5月华中科技大学社联进行了机构改革，正式成立华中科技大学社团委员会。</div>
               <div class="para">2005年9月，创立AU创业中心和新闻发言人2个团队。2005年11月又进行的改革，将网络部改组为技术部，为重点扶植科技类社团，特增设科技创新部。
                <div class="para">2006年12月，为了适应新形势的需要，社联在以往的基础上又实行了具有深远意义的改革，将六大部合并成为社团中心，并新增信息中心。</div>
                <div class="para">2007年，将六大部合并成为社团中心，并新增信息中心。同时，社团联合会增强了主校区和同济校区之间社联、社团工作的交流与合作，为华中科技大学社团联合会的整体发展创造了新的局面。</div>
                <div class="para">2008年，华中科技大学社联改革创新，将媒体部技术组改组成为思存数字传媒工作室。同年，为进一步提高社团活动的质量，华中科技大学社联加入文艺事务部、文艺活动策划部和演艺部，演艺部下设表演队。同时，为进一步加强社团联合会的部门专业化建设，提高工作效率，社联采用大部门改制方案，媒体部、宣传部、思存数字传媒工作室合称传媒中心，演艺部、文艺活动策划部、文艺事务部合称文艺中心，中心主任分别由华中科技大学社团联合会副主席担任。</div>
                <div class="para">2009年，华中科技大学社联继续秉承改革创新的指导思想进行深入探索。社联人考虑到资源的充分利用问题，并希望藉此进一步提高各部门的办事效率，特将前文艺中心三部门合并为一个部门——文艺拓展部，又根据11个部门的各自工作特点，将它们划分至5大中心：常务人事中心，社团服务中心，传媒中心，外联信息中心，文艺中心。且将每个中心各交与一名副主席进行分管。</div>
                <div class="para">2011年，华中科技大学社团联合会正式更名为华中科技大学学生社团联合会。</div>
              </div>
               <div id="jgsz"><a name="002"></a>
                <p><span class="content_num">2</span> <span class="content_item">机构设置</span> <span class="content_line"></span> </p>
                <div class="para">社联主校区共设置五大中心，13个部门。五大中心有：常务人事中心,社团服务中心，传媒中心，外事信息中心，文艺中心。每个中心由一名副主席分管，并下属自己的部门。其中财务部，社团外联企划小组由主席直接分管。常务人事中心下属的部门有:秘书部，人力资源部。社团服务中心下属的有：行政监察部，社团部。传媒中心下属：宣传部，媒体部，新媒体工作室，思存工作室。外事信息中心下属：外联部，公共关系部。文艺中心下属：文艺拓展部。</div>
                <div class="para">同济校区共设置八个部门：秘书部、财务部、人力资源部、外事信息部、社团部、权益部、宣传部和DD studio。</div>
                <div class="para">由主席团统筹规划整体工作，各部门各团体各司其责，相互配合。</div>
                <div id="content_diagram"> <img src="/AUNET/Public/AUSrc/image/au_structure.png"/></div>
              </div>
               <div id="zbhd"><a name="003"></a>
                <p><span class="content_num">3</span> <span class="content_item">主办活动</span> <span class="content_line"></span> </p>
                <div class="para">由华中科技大学学生社团联合会主导、各社团协办的诸多传统大型活动，塑造了青春健康、昂扬向上的社团文化。每学年社联都开展了“社团风采月”，“社团文化节”，“校园文化节”，“十佳社团”评估、答辩及网上投票，A级社团评定，社团干部培训会，迎新晚会，社团统一招新，社联干部招聘会，权益接待日，新闻发布会，社团活动竞标会，文化节设计大赛，武汉高校歌手大赛，武汉高校系列征文大赛，武汉高校外联联席会议，并参与了“大学开放日”等一系列大型全校性的活动。</div>
                <h><span class="content_leadword">社团文化节</span></h>
                <div class="para">每年10月中下旬至11月，一年一度的华中科技大学社团文化节更是全校师生共同期待的文化盛宴，是社联携手全校所有社团举办一次独具特色、继往开来的盛会，一直以来受到校党委、校团委的高度重视和全校各部门的大力支持，同时也逐渐受到社会各界特别是媒体的普遍关注。举办社团文化节的目的在于整合现有的校园文化活动内容，集中在一段时间内形成声势和规模，展示校园社团风采，提高会员的综合素质，打造新的社团品牌活动，创造有利于学生健康成长的校园氛围。</div>
                <div class="para">社团文化节一般由开幕式、诸多社团活动、闭幕式三个环节组成。各届文化节精彩纷呈，特色各异：</div>
                <div class="para">1.2003年第一届社团文化节以笛箫协会专场晚会开幕、以韵苑体育馆晚会闭幕，期间有艺术设计协会大型作品展以及写生展、夏雨诗社诗会、喻园舞社锐舞专场舞会等特色活动；</div>
                <div class="para">2.2004年第二届社团文化节以十佳社团、优秀社团和会旗、会标、文化衫征集大赛的颁奖晚会开幕、以“超级盛典2005”新年晚会闭幕，闭幕式从2004年12月31日19：30开始持续到2005年1月1日00：15，一起期待2005年第一分钟的到来。期间有笛箫协会十周年会庆系列活动、武汉高校跆拳道联赛、电子竞技大赛（HEGC）等特色活动；</div>
                <div class="para">3.2005年第三届社团文化节以西边篮球场游园会、韵苑体育馆“蓝色海洋——盛大之夜”专题晚会开幕，以社团工作年度报告会闭幕。文化节由快乐之旅、健康之旅、成长之旅三大主题构成，精品节目有：高等学校学生事务国际学术研讨会社团展示暨第三届社团文化节之“灵动世界”社团风采展、第二届万圣节假面舞会、2005“快乐人生微笑心灵”之夜、模拟法庭等等。</div>
                <div class="para">4.2006年第四届社团文化节以“青春流韵，梦翔喻园”为主题，以大雨中的“梦翔之夜”大型露天晚会开幕，子活动分为分为“智之明,艺之魂,德之光,体之魄”四个环节，期间有新生杯辩论赛、武汉市社团嘉年华、校园趣味长跑等专题活动。</div>
                <div class="para">5.2007年第五届社团文化节以“放歌青春，畅想奥运”为主题，融合社团风采Show、奥运主题园、互动游戏休闲吧的大型嘉年华，游园狂欢盛典和梦幻的虚拟童话城堡，在韵苑足球场举办了为期两天的开幕式。文化节由“CreatYourWorld”科技创新类社团活动、“天地·人和”科普公益类社团活动、“hust成长-ing”理论研究类社团活动、“箭在弦上”技能培养类社团活动、“文化盛宴”文学艺术类社团活动、“放飞的理想·青春的活力”体育休闲类社团活动构成。期间有计算机协会仿真机器人足球赛、碧水蓝天协会垃圾艺术品展、法律协会八校联合“德赛金台杯”未来律师大赛等特色活动。</div>
                <div class="para">6.2011年第九届社团文化节以“时光海洋，蓝色梦想”为主题，其中开幕式游园会以时光沙漏，穿越的形式吸引了大量的同学游览参与，其后一天的晚会以时光的变迁为主线，美轮美奂。</div>
                <h><span class="content_leadword">社团进班级</span></h>
                <div class="para">每年4月至6月，由共青团华中科技大学委员会、学生社团联合会联合主办，全校各学生社团承办的“社团进班级”活动，是华中科技大学社团联合会的专项、品牌性活动。通过院系、班级或者团党支部与社团的紧密合作，保证社团这个学生成长的平台可以紧密的联系广大同学，并进一步营造浓厚的校园文化氛围,丰富学生课余文化生活,展示学生社团风采,深化社团文化的影响力，全面提高大学生综合素质。</div>
                <h><span class="content_leadword">大学开放日</span></h>
                <div class="para">每年6月，华中科技大学面向各高中举办大学开放日，展示大学校园与文化。学生社团联合会组织各社团搭建社团展示区，全面展示华中科技大学各类社团风采，让参观者充分体会到大学社团生活的丰富多彩，全面了解大学生的课余生活。社团展区通过新颖的布置、精彩的表演和新奇的互动活动吸引了众多前来参观的学生和家长。</div>
                <h><span class="content_leadword">社团评估评优</span></h>
                <div class="para">每年5月至6月，社联行政监察部组织对全校在册社团进行大型评估，由社联各部门部分成员组成的评估委员会按照最新评估制度进行公正平的打分评估。而全校社团也借此机会对自己的工作与发展成果进行整体总结，积极为评估准备。</div>
                <div class="para">6月中旬社联会举办大型优秀社团答辩会和优秀社团颁奖晚会。在前期评估中得分前三十名优秀社团将在优秀社团答辩会中进行答辩，由社员委员会、学生社团联合会和其他校级学生组织组成的评优委员会对其答辩评优，选出全校十佳社团。而随后进行的优秀社团颁奖晚会则对所有获奖社团进行颁奖，是所有社团人的分享荣誉与喜悦的时刻，是学校对社团工作的充分肯定。</div>
                <h><span class="content_leadword">社团进军营</span></h>
                <div class="para">每年9月初军训期间，社联便组织社团表演队深入到军训队伍中进行露天表演，每期活动累计表演20场左右。该活动在新生中产生强烈影响，并引发新生参与社团的高潮。</div>
                <h><span class="content_leadword">社团迎新晚会</span></h>
                <div class="para">2008年9月，社联在韵苑体育馆组织举办了第一届“社团盛典”大型社团迎新晚会，学生社团联合会文艺中心表演队和部分表演类学生社团给全校新生展现了激情昂扬的社团文化表演者的实力给众多学弟学妹留下了深刻的印象，赢得了满场观众的掌声，更收获了新生们对社团的期待。</div>
                <h><span class="content_leadword">社团迎新晚会</span></h>
                <div class="para">每年9月中旬，社联组织学校所有在册社团统一招新，各社团展台首尾相连，分成两列于韵苑、紫崧入口处，规模可观、气氛活跃。军训休息时间段，各社团新颖的宣传和各新生无限的热情营造了招新现场火爆的氛围。2008年的招新盛大场面给前来交流的湖南大学学生社团联合会成员留下了深刻印象。</div>
              </div>
               <div id="slhg"><a name="004"></a>
                <p><span class="content_num">4</span> <span class="content_item">社联会歌</span> <span class="content_line"></span> </p>
                <h><span class="content_leadword">歌词</span></h>
                <div class="para">《蓝色海洋》- 华中科技大学社团联合会会歌</div>
                <div class="para">作词：华中科技大学社团联合会</div>
                <div class="para">作曲：张波（吉他协会03级会长）</div>
                <div class="para">01　是谁点亮了那座灯塔</div>
                <div class="para">02　驱散我所有的迷茫</div>
                <div class="para">03　在一个欢乐的乐园</div>
                <div class="para">04　用汗水挥洒着热望</div>
                <div class="para">05　心像自由的精灵</div>
                <div class="para">06　游荡在浩瀚的海洋</div>
                <div class="para">07　蓝色天空是我的向往</div>
                <div class="para">08　朵朵白云在肆意张扬</div>
                <div class="para">09　海风是多彩蜡笔</div>
                <div class="para">10　描绘那未知的方向</div>
                <div class="para">11　最简陋的那艘航船</div>
                <div class="para">12　她教会我乘风破浪</div>
                <div class="para">13　忘记我们的不同</div>
                <div class="para">14　用快乐证明对生活的热爱</div>
                <div class="para">15　只因为有着独特的理想</div>
                <div class="para">15　才让我们学会了坚强</div>
                <div class="para">16　灵动世界 我不再寂寞</div>
                <div class="para">17　因为有你们左右陪伴我</div>
                <div class="para">18　灵动世界 我不再沉默</div>
                <div class="para">19　要让世界听到我的脉搏</div>
                <div class="para">20 拥抱新的希望 忘掉昔日彷徨</div>
                <div class="para">21 在蓝色海洋留下永恒的欢畅</div>
                <div class="para">22 拥抱新的希望 唤醒梦的力量</div>
                <div class="para">23　给自己为冲动而拼搏的胆量</div>
              </div>
               <h><span class="content_leadword">歌词释义</span></h>
               <div class="para">用蓝色海洋比喻社团是大家可以自由展示的广阔空间，</div>
               <div class="para">蓝色又是社联的主题颜色，</div>
               <div class="para">同时蓝色也是梦想的代表色，</div>
               <div class="para">应该能很好地契合社团的初衷。</div>
               <div class="para">全词以"我"为主体，</div>
               <div class="para">描绘"我"眼中的社团，</div>
               <div class="para">使其具有感染力。</div>
               <div class="para">第01、02行表明社团给大学生以展示的空间，</div>
               <div class="para">驱除了很多大学生生活迷茫的现象，给他们的生活增添了活力。</div>
               <div class="para">03、04行，表明社团人正在为自己的事业而努力工作。</div>
               <div class="para">05、06行表明每个社团人的心都象游荡在自由的领地，自由舒展。</div>
               <div class="para">07、08行用蓝天、白云直观地表示社团给"我"的真切印象。</div>
               <div class="para">09、10行用蜡笔寓意为社团，她绘出自己以后前进的方向，是社团给了"我"这样的认识。</div>
               <div class="para">11、12行将社团比作简陋的航船，她让我们懂得了怎么样去面对生活中各种困难。</div>
               <div class="para">13-15行说明社团人生活的状态和各自拥有独特的理想。</div>
               <div class="para">16-19行中，社团口号"灵动社团，自有我主张"化作"灵动世界"，"让世界听到我的脉搏"，其中还包含了社团人之间很亲密的朋友关系。</div>
               <div class="para">20-23行是鼓舞性的言词。</div>
             </div>
          </div>
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