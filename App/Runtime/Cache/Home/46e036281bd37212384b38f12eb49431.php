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
<title>社团成立指南</title>
 <link type="text/css" rel="stylesheet" href="style/general.css">
 <link type="text/css" rel="stylesheet" href="style/content.css">
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
#note{
	width:80%;
	border:none;
	margin-left:10px;
	font-size:25px;
	}

.regularmodel{
	margin:10px 5px;
	}
	
.text{
	margin-left:20px;
	margin-right:20px;
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
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;FAQ&nbsp;&nbsp;</span><span style="font-size:24px">常见问题&amp;解答</span></td>
      </tr>
    <tr>
      <td width="27%" valign="top">
        <p><a href="FAQ.html" class="slidebarlink">&gt;FAQ首页</a></p>
        <p><a href="FAQ_question.html" class="slidebarlink">&gt;常见问题</a></p>
        <p><a href="FAQ_financial.html" class="slidebarlink">&gt;财务部</a></p>
        <p><a href="FAQ_secretary.html" class="slidebarlink">&gt;秘书部</a></p>
        <p><a href="FAQ_media.html" class="slidebarlink">&gt;新媒体工作室</a></p>  
        <p><a href="FAQ_art.html" class="slidebarlink">&gt;文艺拓展部</a></p>   
        <p><a href="FAQ_supervise.html" class="slidebarlink">&gt;财监委</a></p>  
        <p><a href="FAQ_guide.html" class="slidebarlink now">▶&nbsp;社团成立指南</a></p>  
        </td>
      <td width="73%" align="left" valign="top">
      <div class="content_container">
      	<div class="content_title">一 致社团朋友们</div>
        <div class="content_text">
          <p>亲爱的社团朋友们： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 你们好！ <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 首先，学生社团联合会对你们的到来表示由衷的欢迎！ <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 优秀的社团成立之初即应进行完备的准备工作，打造坚实的基础。这样才能使自身长久、稳定地运行和发展，使会员们能够更好地在其中娱乐、锻炼和学习，并不断为校园文化注入新的活力！ <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 因而，每一个进行筹备的社团都将接受社员联合会权益部的考核，只有优秀的社团才能走到最后。为了方便社团朋友及审批人员工作的开展，社团联合会权益部特别为大家制作了《社团成立指南》，希望能为你们予以方向性指导，以减少筹备中过多不必要的麻烦。 <br> 
&nbsp;&nbsp;&nbsp;&nbsp; 最后，预祝你们在社团成立及后续的工作中一帆风顺，为我校社团文化做出贡献！</p>
          <Br>
<p style="text-align:right">学生社团联合会权益部<br>
2013年9月
</p>

         </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">二 初期准备工作</div>
        <div class="content_text">
          <p>如果你们有： <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 1、至少4名社团发起人。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 2、社团名称及主旨。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 3、对社团活动的初步规划。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 4、清晰的社团构想，明确的社团主题。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 请联系我们，行政监察部将派出工作人员与发起人进行初步沟通了解，并对初步筹备工作予以帮助指导。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 发起人在与行政监察部工作人员初步沟通后，开始着手拟定《社团筹建申请》。申请中应包括发起人对社团的初步构想，如社团的名称、宗旨、性质，及社团活动的初步规划等。 <br>
             &nbsp;&nbsp;&nbsp;&nbsp; 《社团筹建申请》（附上社团发起人简历，及学生证复印件和社团主要成员通讯录）拟定后由发起人交至行政监察部，行政监察部将对申请予以审议，并派出工作人员与发起人进行进一步的筹建洽谈以了解社团的发展前景和发起人对社团发展的看法等。 </p>
        </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">三 筹建洽谈简介 </div>
        <div class="content_text">
          <p>权益部在充分研究《社团筹建申请》的基础上，如果社团确有发展前景，将派出工作人员与发起人进行进一步的、面对面的洽谈，筹建洽谈的主要目的是双方交换社团理念并对整体社团成立工作进行说明和帮助指导。 </p>
          <p><br>
            &nbsp;&nbsp;&nbsp;&nbsp; 发起人在筹建洽谈前应该仔细思考以下两个问题： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、为什么发起该社团，社团在学校会有怎样的影响？社团内部有怎样的文化氛围？ <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、希望在社团里获得什么？社团又能带给会员什么？ <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 正式洽谈时，社团方面需要至少两名核心发起人到场。筹建洽谈将以沟通交流的方式全面且深入地了解发起人对社团的构想，并且共同探讨适合社团发展的运营模式。希望发起人能在洽谈过程中充分展示其成立协会的热情和发起人自身的组织才能。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 洽谈结束后，行政监察部将在认真研讨社团发展前景及发起人的初步规划后，于三天内给出筹建洽谈报告，在报告中确定社团是否有成立的资格。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 若社团有成立的资格，行政监察部将对该社团予以进一步帮助和指导并派出一名工作人员作为协会的临时副会长，全面协助协会筹建工作。 </p>
            </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">四 试运行简介</div>
        <div class="content_text">
          <p>试运行时间为1至2个月。社团发起人在试运行期间需完成以下工作： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、管理层的招募与构建。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、各项规章制度的制定。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 3、挂靠院系与指导老师的联系。 <br>
           &nbsp;&nbsp;&nbsp;&nbsp;  4、举办三次或三次以上活动。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 5、招收一定数量的的会员（志愿者），并举办一次会员大会对会员所拥有的权利和义务进行说明。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 6、归划具有社团特色的品牌活动。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 试运行期间，临时副会长将参与协会的各项筹建工作，并负责协会与社联相关的联系等事务。社团可通过临时副会长向社联申请教室、户外场地，或参与社联其他部门对正式社团做的外联干训、财务干训、宣传干训、会长干训等。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 社团在使用&ldquo;华中科技大学XX社团&rdquo;的称呼时需要在社团名称后注明&ldquo;筹建&rdquo;字样。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 社团可以招募志愿者（即正式社团的会员）参与试运行期间的活动，但必须告知志愿者社团正处于筹建阶段，且社团不得收取活动成本以外的任何会费和其他费用。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 试运行结束前，社团发起人正式拟定好社团章程并提交试运行总结报告。 </p>
        </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">五 社团成立审批简介</div>
        <div class="content_text">
          <p>&nbsp;&nbsp;&nbsp;&nbsp; 筹建社团完成试运行，并提交完整成立申请材料后（准备材料如下），行政监察部将对社团管理层的构建、活动跟进了解得到情况以及社团章程等进行初步审议。如初步审议通过，将在一周内安排正式的成立审批。届时，社团方面需由主要管理层2-4名成员到场，其中必须包括会长。成立审批将以答辩的方式深入审查待建社团的各方面情况，以考察其是否具备成立的资质。审批结果会在一周内通知社团。一旦审批通过，社团即正式成立，进入正常运行阶段。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 附：社团成立申请材料： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、社团章程 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、试运行总结报告 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 3、社团挂靠协议 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 4、《学生社团审批表》 </p>
        </div>
      </div>
      
      <div class="content_container">
      	<div class="content_title">六 学生俱乐部帮扶计划</div>
        <div class="content_text">
          <p>&nbsp;&nbsp;&nbsp;&nbsp; 学生社团联合会为充分发展校园文化，丰富校园生活，提出了对校园内学生俱乐部的帮扶计划，并呼吁我校各俱乐部成为正式校级注册社团，共同为校园文化注入新的活力。学生社团联合会权益部也制定了快速注册方案，帮助民间俱乐部快速转型并正式注册。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 如果你们有： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、20人以上的固定会员； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、已进行五个月以上的常规活动； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 3、较为完备的管理层； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 4、其他相关的成熟的社团发展模式。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 请联系我们，权益部将派出工作人员与管理层进行接洽，并由社团提交相应的社团章程、活动资料、发展历程和经验总结等资料，作为初步的评价标准。并耗时约两周进行转正前的准备工作，主要包括： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、联系挂靠院系与指导老师； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、举办一到两次活动； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 3、完善管理层的构建； <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 4、完善各项规章制度。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 以上工作结束后，权益部将就社团管理模式的转型、活动跟进了解得到的情况以及社团章程决定准备工作是否合格。如合格，权益部将尽快对社团进行成立审批。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 正式注册校级社团将享有以下权利： <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 1、可以对外使用&ldquo;华中科技大学XX社团&rdquo;的称呼。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 2、社团可以参加社联的统一宣传和招新。（也可组织独立招新） <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 3、向社联及团委申请横幅、使用教室、户外场地、社团发展基金等资源。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 4、可以接受团委指导老师的指导帮助。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 5、有社团或社联组织的相关干训、会长沙龙、校际交流出访等活动。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 6、年度社团评估评优资格。 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; 7、社联的橱窗、展板、社团网、人人主页等线上线下宣传平台的使用。<br>
            &nbsp;&nbsp;&nbsp;&nbsp; 8、其他资源、政策等方面的优势。 </p></div>
      </div>
      
      <div>
        <p align="center" style="font-size:28px;">激情澎湃  社团地带 <br>
          我们期待你们的加入！！ </p>
        <p align="right">学生社团联合会行政监察部 <br>
          2013年9月 </p>
      </div>
      <br>
      <div class="content_container">
      	<div class="content_title">附件：社团章程制定说明</div>
        <div class="content_text">
          <p align="center"><strong>社团章程制定说明</strong><strong> </strong></p>
            <p class="regularmodel">校级社团，区别于可以随时聚散的民间团队，必须有一定的组织性、传承性，能够稳定、长久的发展。因此，社团需要有一份完备的章程来予以保证。以下是社团章程模板： </p>
            <p class="regularmodel" align="center" style="font-size:25px;">华中科技大学XX协会章程 </p>
            <p class="regularmodel">一、总则 </p>
           <p class="regularmodel text">此章主要说明社团的特色及创办目的，为社团的发展制定一个明确的方向。 <br>
            主要内容：社团名称、性质及宗旨，与社团的挂靠单位及指导老师 </p>
            <p class="regularmodel">二、组织框架 </p>
             <p class="regularmodel text">此章主要说明社团的管理机制。完善的管理层组织方式及职能分配是协会活动开展的前提。公平、公正、公开的干部产生机制能充分利用社团的人才资源。良好的会员培养计划与维权投诉机制也能减少后期的会员流失，使社团更加蓬勃发展。 <br>
            主要内容：社团管理层的结构及职能分配、社团干部产生机制、会员的权利与义务，与会员维权投诉机制 </p>
            <p class="regularmodel">三、活动规划 </p>
             <p class="regularmodel text">良好的活动规划是社团稳定运行的基础，其中日常活动规划尤为重要。而其关键在于场地与内容。而品牌活动对增强社团内部凝聚力与扩大对外影响力有着极其重要的作用。 <br>
            主要内容：1、日常活动：活动周期、活动地点及主要活动形式 <br>
            2、品牌活动：活动时间、面向对象及活动形式 </p>
            <p class="regularmodel">四、财务外联 </p>
             <p class="regularmodel text">社团必须有专人负责对财务的日常管理，并且定期向会员进行财务公示。社团应注意钱账分管，并且会长不得参与钱款管理。 <br>
            主要内容：社团经费使用制度、报账制度、财务监督制度、财务公开制度 <br>
            以上内容皆为行政监察部根据校内优秀社团章程总结而来，社团可在此基础上根据社团特色及试运行经验做适当调整，积极创新，做出符合社团特色的章程。 </p>
          <p align="right">学生社团联合会行政监察部 <br>
            二○一三年九月十日 </p>
        </div>
      </div>
     
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