<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class loadController extends CommonController
{
	$ID = I('POST.ID');
	$type = I('POST.action_type');
	$table=strtolower($type);
	$sql = M("aunet.$table" , 'aunet_material_');
	$file_data = $type ->where("ID = $ID")->limit(1)->select()[0];
	foreach($file_data as $key => $val){
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
	}
	public function start(){
		ob_start();
		echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"
		xmlns:w="urn:schemas-microsoft-com:office:word"
		xmlns="http://www.w3.org/TR/REC-html40">';
	}
	public function save($path){
		echo "</html>";
		$data = ob_get_contents();
		ob_end_clean();
		$this->wirtefile ($path,$data);
	}
	public function wirtefile ($fn,$data){
		$fp=fopen($fn,"wb");
		fwrite($fp,$data);
		fclose($fp);
	}
	
	public function preview(){
		switch($type){
			case colorprinting:
			$html ="
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
        <script>
            $(document).on(\"click\",\"#ajax_submit\",function(){
                alert(\"get\");$(\"#myModal\").modal('show');
                $.post(\"{:U('Material/Material/material_upload')}\",$(\"#applicationForm\").serializeArray(),function(){

                });
            });

        </script>
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>彩喷悬挂申请</h4></li>
        </ol>
        <form id=\"applicationForm\" action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"colorprinting\">
            <div class=\"tableContainer\">
                <table class=\"table-bordered FillForm\" width=\"700\" border=\"0\">
                    <tbody>
                    <tr>
                        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" scope=\"col\">申请单位</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" scope=\"col\"><input type=\"text\" name=\"AssociationName\" class=\"inputArea h50\" value=\"$file_data[AssociationName]\"></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"53\" height=\"50\" align=\"center\" valign=\"middle\">姓名</td>
                        <td width=\"178\" height=\"50\" align=\"center\" valign=\"middle\"><input type=\"text\" name=\"Name\" class=\"inputArea h50\" value=\"$file_data[Name]\"></td>
                        <td width=\"41\" height=\"50\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><input type=\"text\" name=\"Phone\" class=\"inputArea h50\" value=\"$file_data[Phone]\"></td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\"><textarea name=\"ActivityContent\" id=\"\" class=\"inputArea\" value=\"$file_data[ActivityContent]\"></textarea></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><input type=\"text\" name=\"UseTime\" class=\"inputArea h50\" value=\"$file_data[UseTime]\"></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><input type=\"text\" name=\"Location\" class=\"inputArea h50\" value=\"$file_data[Location]\"></td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">彩喷是否具有商业性质</td>
                        <td width=\"166\" height=\"50\" align=\"center\" valign=\"middle\">
                            <select name=\"Commercial\" id=\"\" class=\"form-control\" value=\"$file_data[Commercial]\">
                                <option value=\"有\" selected>有</option>
                                <option value=\"无\">无</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <textarea name=\"Remark\" id=\"\" class=\"inputArea\" value=\"$file_data[Remark]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"208\" colspan=\"3\" align=\"right\" valign=\"bottom\"><span class=\"disable-area\"></span><p>校团委意见（盖章）</p>
                            <p>年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日 </p></td>
                        <td height=\"208\" colspan=\"3\" align=\"right\" valign=\"bottom\"><span class=\"disable-area\"></span><p>场地审批单位意见（盖章）</p>
                            <p>年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日 </p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case east4:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>东四食堂三楼申请</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"east4\">
            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"95\" height=\"50\" align=\"center\" valign=\"middle\">协会名称</td>
                        <td width=\"171\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"AssociationName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[AssociationName]\">
                        </td>
                        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityName]\">
                        </td>
                        <td width=\"81\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"92\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"JoinNumber\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[JoinNumber]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"4\" align=\"left\" valign=\"middle\">
                            <select name=\"ActivityTime\" class=\"form-control\" value=\"$file_data[ActivityTime]\">
                                <option value=\"上午\" selected>上午</option>
                                <option value=\"下午\">下午</option>
                                <option value=\"晚上\">晚上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"6\" align=\"center\" valign=\"middle\">东四食堂三楼</td>
                    </tr>
                    <tr>
                        <td height=\"150\" align=\"center\" valign=\"middle\"><p>活动内容（主题， 目的， 流程， 安全负责人） </p></td>
                        <td height=\"150\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" id=\"\" class=\"inputArea\" data-check-null=\"notnull\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            <select name=\"Commercial\" class=\"form-control\" value=\"$file_data[Commercial]\">
                                <option value=\"有\" selected>有</option>
                                <option value=\"无\">无</option>
                            </select>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <textarea name=\"CommercialPart\" id=\"\" class=\"inputArea\" value=\"$file_data[CommercialPart]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityChargePerson\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityChargePerson]\">
                        </td>
                        <td width=\"100\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityPhone\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityPhone]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <textarea name=\"AssociationComment\" id=\"\" class=\"inputArea\" value=\"$file_data[AssociationName]\"></textarea>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社联意见</td>
                        <td height=\"80\" colspan=\"3\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">社联经手人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">共青团<br>华中科技大学委员会意见 </td>
                        <td height=\"120\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td height=\"120\" align=\"center\" valign=\"middle\">华中科技大学<br>学生工作处意见 </td>
                        <td height=\"120\" colspan=\"3\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case materialapply:
			$html = "
			<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>物资申请表</title>
    <script src=\"__PUBLIC__/MaterialSrc/js/check_materialapply.js\"></script>
</head>
<body>

<ol class=\"breadcrumb\">
    <li><h4>物资借用</h4></li>
</ol>
<form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
    <input type=\"hidden\" name=\"action_type\" value=\"materialapply\">
    <div class=\"tableContainer\">
        <table class=\"table-bordered FillForm\" width=\"700px\">
    <tbody>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">协会名称</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"协会名称\" name=\"AssociationName\" value=\"$file_data[AssociationName]\"></td>
        <td width=\"86\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\"><input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"活动名称\" name=\"ActivityName\" value=\"$file_data[ActivityName]\"></td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动地点</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            <input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"活动地点\" name=\"ActivityLocation\" value=\"$file_data[ActivityLocation]\">
        </td>
        <td height=\"50\" align=\"center\" valign=\"middle\">借用日期</td>
        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" id=\"borrowTimeArea\">
            <input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"借用日期\" name=\"BorrowTime\" value=\"$file_data[BorrowTime]\">
            <script>
                var mydate=new Date();
                $(\"#borrowTimeArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"BorrowTime\",\"borrowTimeArea_DateInput\",\"YY年MM月DD日\",\"bt\",\"\",\"\",\"data-check-notice='借用日期' data-check-null='notnull'\"));
            </script>
        </td>
        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
        <td width=\"90\" height=\"50\" align=\"center\" valign=\"middle\">
            <input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"参与人数\" data-check-type=\"number\" name=\"JoinNumber\" value=\"$file_data[JoinNumber]\">
        </td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"8\" align=\"center\" valign=\"middle\">注：每张申请表只能借用一种物资</td>
    </tr>
    <tr>
        <td width=\"40\" rowspan=\"4\" align=\"center\" valign=\"middle\" width=\"39\">物资种类</td>
        <td width=\"69\" height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">投影仪</td>
        <td width=\"111\" height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">台数</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            <input type=\"text\" id=\"inputProjectorNum\" class=\"inputArea h35\" data-check-type=\"number\" data-check-notice=\"投影仪台数\" name=\"ProjectorNumber\" value=\"$file_data[ProjectorNumber]\">
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">归还日期</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\" id=\"PReturnTimeArea\">
            <input type=\"text\" id=\"inputProjectorReturn\" class=\"inputArea h35\"  data-check-notice=\"投影仪归还日期\" name=\"PReturnTime\" value=\"$file_data[PReturnTime]\">
            <script>
                var mydate=new Date();
                $(\"#PReturnTimeArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"PReturnTime\",\"PReturnTime_DateInput\",\"YY年MM月DD日\",\"prt\",\"\",\"\",\"data-check-notice='投影仪归还日期'\"));
            </script>
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">电力<br></td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">瓦数</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            <input type=\"text\" class=\"inputArea h35\" data-check-notice=\"瓦数\" data-check-type=\"number\" id=\"PowerWattage\" name=\"PowerWattage\" value=\"$file_data[PowerWattage]\">
        </td>
        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">（注：瓦数超过2000W须要到主校区配电房签字）</td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">大量桌椅</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">桌子数量</td>
        <td width=\"90\" height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">
            <input type=\"text\" class=\"inputArea h35\"  data-check-type=\"number\" data-check-notice=\"桌子数量\" id=\"DeskNumber\" name=\"DeskNumber\" value=\"$file_data[DeskNumber]\">
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"89\">椅子数量</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">
            <input type=\"text\" class=\"inputArea h35\" data-check-notice=\"椅子数量\" data-check-type=\"number\" id=\"ChairNumber\" name=\"ChairNumber\" value=\"$file_data[ChairNumber]\">
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"86\">归还日期</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"92\" id=\"DCReturnTimeArea\">
            <input type=\"text\" class=\"inputArea h35\" data-check-notice=\"桌椅归还日期\" name=\"DCReturnTime\" value=\"$file_data[DCReturnTime]\">
            <script>
                var mydate=new Date();
                $(\"#DCReturnTimeArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"DCReturnTime\",\"DCReturnTime_DateInput\",\"YY年MM月DD日\",\"dcrt\",\"\",\"\",\"data-check-notice='桌椅归还日期'\"));
            </script>
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">校车</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">运送桌子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            <input type=\"text\" class=\"inputArea h35\" data-check-notice=\"运送桌子数量\" data-check-type=\"number\" name=\"CarryDeskNumber\" id=\"CarryDeskNumber\" value=\"$file_data[CarryDeskNumber]\">
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">运送椅子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\">
            <input type=\"text\" class=\"inputArea h35\" data-check-notice=\"运送椅子数量\" data-check-type=\"number\" name=\"CarryChairNumber\" id=\"CarryChairNumber\" value=\"$file_data[CarryChairNumber]\">
        </td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动负责人</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            <input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"活动负责人\" name=\"ActivityChargePerson\" value=\"$file_data[ActivityChargePerson]\">
        </td>
        <td width=\"50\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
            <input type=\"text\" class=\"inputArea h50\" data-check-null=\"notnull\" data-check-notice=\"联系电话\" name=\"ActivityPhone\" value=\"$file_data[ActivityPhone]\">
        </td>
    </tr>
    <tr>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">社团意见</td>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
            <textarea type=\"text\" class=\"inputArea\" data-check-notice=\"社团意见\" name=\"AssociationComment\" value=\"$file_data[AssociationComment]\"></textarea>
        </td>
        <td height=\"80\" align=\"center\" valign=\"middle\">社联意见</td>
        <td height=\"80\" colspan=\"3\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">社联经手人</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
    </tr>
    <tr>
        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">共青团<br>华中科技大学委员会意见</td>
        <td height=\"100\" colspan=\"6\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
    </tr>
    </tbody>
</table>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <input type=\"button\" class=\"btn btn-success btn-lg\" data-role=\"addDoc\" value=\"提交策划\">
        </div>
        <div class=\"col-sm-6\">
            <input type=\"button\" class=\"btn btn-primary btn-lg\" data-role=\"submit\" value=\"提交申请\">
        </div>
    </div>
    <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
    <input type=\"submit\">
</form>
</body>
</html>
			";
			break;
			case outdoor:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>户外路演场地</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"outdoor\">
            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">协会名称</td>
                        <td width=\"139\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"AssociationName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[AssociationName]\">
                        </td>
                        <td width=\"84\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td width=\"111\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityName]\">
                        </td>
                        <td width=\"75\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"JoinNumber\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[JoinNumber]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            <select name=\"ActivityTime\" class=\"form-control\" value=\"$file_data[ActivityTime]\">
                                <option value=\"上午\" selected>上午</option>
                                <option value=\"下午\">下午</option>
                                <option value=\"晚上\">晚上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <select name=\"ActivityLocation\" id=\"\" class=\"form-control\" value=\"$file_data[ActivityLocation]\">
                                <option value=\"韵苑路口\" selected>韵苑路口</option>
                                <option value=\"紫菘路口\">紫菘路口</option>
                                <option value=\"沁苑路口\">沁苑路口</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容 （主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" class=\"inputArea\" data-check-null=\"notnull\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            <select name=\"Commercial\" id=\"\" class=\"form-control\" value=\"$file_data[Commercial]\">
                                <option value=\"有\" selected>有</option>
                                <option value=\"无\">无</option>
                            </select>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名 及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            <textarea name=\"CommercialPart\" class=\"inputArea\" value=\"$file_data[CommercialPart]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityChargePerson\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityChargePerson]\">
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityPhone\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityPhone]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <textarea name=\"AssociationComment\" class=\"inputArea\" data-check-null=\"notnull\" value=\"$file_data[AssociationName]\"></textarea>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社联意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <span class=\"disable-area\"></span>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">社联经手人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <span class=\"disable-area\"></span>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <span class=\"disable-area\"></span>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">共青团 华中科技大学委员会意见 </td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <span class=\"disable-area\"></span>
                        </td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">华中科技大学 保卫处意见 </td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <span class=\"disable-area\"></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case sacenter:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>大学生活动中心教室申请</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"sacenter\">
            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"104\" height=\"50\" align=\"center\" valign=\"middle\">协会名称</td>
                        <td width=\"122\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"AssociationName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[AssociationName]\">
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityName]\">
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"JoinNumber\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[JoinNumber]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <select name=\"ActivityTime\" class=\"form-control\" value=\"$file_data[ActivityTime]\">
                                <option value=\"上午\" selected>上午</option>
                                <option value=\"下午\">下午</option>
                                <option value=\"晚上\">晚上</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">普通教室<br>（50人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <select name=\"NormalClassroom\" id=\"\" class=\"form-control\" value=\"$file_data[NormalClassroom]\">
                                <option value=\"\" selected>-</option>
                                <option value=\"302\">302</option>
                                <option value=\"303\">303</option>
                                <option value=\"304\">304</option>
                                <option value=\"603\">603</option>
                            </select>

                        </td>
                        <td colspan=\"2\" rowspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                            <select name=\"Queried\" id=\"\" class=\"form-control\" value=\"$file_data[Queried]\">
                                <option value=\"否\" selected>否</option>
                                <option value=\"是\">是</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">阶梯教室<br>（300人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <select name=\"LadderClassroom\" id=\"\" class=\"form-control\" value=\"$file_data[LadderClassroom]\">
                                <option value=\"\" selected>-</option>
                                <option value=\"305\">305</option>
                                <option value=\"513\">513</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" class=\"inputArea\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            <select name=\"Commercial\" id=\"\" class=\"form-control\" value=\"$file_data[Commercial]\">
                                <option value=\"有\" selected>有</option>
                                <option value=\"无\">无</option>
                            </select>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <textarea name=\"CommercialPart\" class=\"inputArea\" value=\"$file_data[CommercialPart]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityChargePerson\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityChargePerson]\">
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityPhone\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityPhone]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <textarea name=\"AssociationComment\" class=\"inputArea\" value=\"$file_data[AssociationComment]\"></textarea>
                        </td>
                        <td align=\"center\" valign=\"middle\">社联意见</td>
                        <td height=\"100\" colspan=\"4\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">社联经手人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">共青团<br>华中科技大学<br>委员会意见 </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case special:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>特殊场地申请</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"special\">
            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"104\" height=\"50\" align=\"center\" valign=\"middle\">协会名称</td>
                        <td width=\"122\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"AssociationName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[AssociationName]\">
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityTime\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityTime]\">
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"JoinNumber\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[JoinNumber]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityTime\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityTime]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityLocation\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityLocation]\">
                        </td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                            <select name=\"Queried\" id=\"\" class=\"form-control\" value=\"$file_data[Queried]\">
                                <option value=\"否\" selected>否</option>
                                <option value=\"是\">是</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            <textarea name=\"\" class=\"inputArea\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            <select name=\"\" id=\"\" class=\"form-control\" value=\"$file_data[]\">
                                <option value=\"有\" selected>有</option>
                                <option value=\"无\">无</option>
                            </select>
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">//少了
                            <textarea name=\"ActivityContent\" class=\"inputArea\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityChargePerson\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityChargePerson]\">
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityPhone\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityPhone]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <textarea name=\"AssociationComment\" class=\"inputArea\" value=\"$file_data[AssociationComment]\"></textarea>
                        </td>
                        <td align=\"center\" valign=\"middle\">社联意见</td>
                        <td height=\"100\" colspan=\"4\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">社联经手人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">共青团<br>华中科技大学<br>委员会意见 </td>
                        <td height=\"120\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td height=\"120\" align=\"center\" valign=\"middle\">审批单位<br>意见 </td>
                        <td height=\"120\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                        <td height=\"120\" align=\"center\" valign=\"middle\">审批单位<br>意见 </td>
                        <td height=\"120\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"disable-area\"></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case sports:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>体育场馆使用申请</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"sports\">
            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"88\" height=\"50\" align=\"center\" valign=\"middle\">申请单位</td>
                        <td height=\"50\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ApplyName\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ApplyName]\">
                        </td>
                    </tr>
                    <tr>
                        <td rowspan=\"2\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"62\" height=\"35\" align=\"center\" valign=\"middle\">姓名</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"OperatorName\" class=\"inputArea h35\" data-check-null=\"notnull\" value=\"$file_data[OperatorName]\">
                        </td>
                        <td width=\"111\" height=\"35\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"OperatorPhone\" class=\"inputArea h35\" data-check-null=\"notnull\" value=\"$file_data[OperatorPhone]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"35\" align=\"center\" valign=\"middle\">学号</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"OperatorID\" class=\"inputArea h35\" data-check-null=\"notnull\" value=\"$file_data[OperatorID]\">
                        </td>
                        <td height=\"35\" align=\"center\" valign=\"middle\">所在院（系）</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"OperatorDepartment\" class=\"inputArea h35\" data-check-null=\"notnull\" value=\"$file_data[OperatorDepartment]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" class=\"inputArea\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            <input type=\"text\" name=\"ActivityDate\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[ActivityDate]\">
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td width=\"76\" height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"UseTime\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[UseTime]\">
                        </td>
                        <td width=\"74\" height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"UseLocation\" class=\"inputArea h50\" data-check-null=\"notnull\" value=\"$file_data[UseLocation]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            <textarea name=\"Remark\" class=\"inputArea\" value=\"$file_data[Remark]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"150\" colspan=\"8\" align=\"left\" valign=\"top\">
                            <p>院（系）或部门负责人意见</p><br><br>
                            <p style=\"text-align:right\">院（系）或部门公章</p>
                            <p style=\"text-align:right\">年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日 </p>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"150\" colspan=\"5\" align=\"right\" valign=\"bottom\"> 保卫处审批意见(盖章)<br>年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日 </td>
                        <td height=\"150\" colspan=\"3\" align=\"right\" valign=\"bottom\"> 体育场管中心审批意见(盖章)<br>年&nbsp;&nbsp;&nbsp;&nbsp;月&nbsp;&nbsp;&nbsp;&nbsp;日 </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>

    </body>
</html>
			";
			break;
			case teachingbuilding:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>教学楼教室申请</h4></li>
        </ol>
        <form action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"teachingbuilding\">
            <div style=\"text-align: center\">
                <h2>社团活动申请表</h2>
                <h3>（教学楼专用）</h3>
            </div>

            <div class=\"tableContainer\">
                <table width=\"700\" class=\"table-bordered FillForm\">
                    <tbody>
                    <tr>
                        <td width=\"100\" height=\"50\" align=\"center\" valign=\"middle\">社团名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"AssociationNameA\" class=\"inputArea h50\" data-check-notice=\"社团名称\" data-check-null=\"notnull\" value=\"$file_data[AssociationNameA]\">
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityName\" class=\"inputArea h50\" data-check-notice=\"活动名称\" data-check-null=\"notnull\" value=\"$file_data[ActivityName]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td width=\"124\" height=\"50\" align=\"center\" valign=\"middle\" id=\"dateSelAreaA\">
                            <input type=\"text\" name=\"ActivityTimeA\" class=\"inputArea h50\" data-check-notice=\"活动时间\" data-check-null=\"notnull\" value=\"$file_data[ActivityTimeA]\">
                            <script>
                                var mydate=new Date();
                                $(\"#dateSelAreaA\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityTimeA\",\"ActivityTimeA_DateInput\",\"YY年MM月DD日\",\"ata\",\"\",\"\",\"data-check-notice='活动时间' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"ActivityLocation\" class=\"inputArea h50\" data-check-notice=\"活动地点\" data-check-null=\"notnull\" value=\"$file_data[ActivityLocation]\">
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"JoinNumber\" class=\"inputArea h50\" data-check-notice=\"参与人数\" data-check-null=\"notnull\" value=\"$file_data[JoinNumber]\">
                        </td>
                    </tr>
                    <tr>
                        <td height=\"40\" colspan=\"6\" align=\"center\" valign=\"middle\">活动内容（目的，流程，安全负责人，主讲人简介等）</td>
                    </tr>
                    <tr>
                        <td height=\"550\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\"  data-check-notice=\"活动内容\" class=\"inputArea\" value=\"$file_data[ActivityContent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">会长签字</td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">
                            <input type=\"text\" name=\"PresidentSignal\" class=\"inputArea h100\" data-check-notice=\"会长签字\" data-check-null=\"notnull\" value=\"$file_data[PresidentSignal]\">
                        </td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社联<br>审批意见 </td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">&nbsp;</td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">团委<br>审批意见 </td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>

                <div style=\"text-align: center; margin-top: 20px;\">
                    <span style=\"font-size: 30px\">华中科技大学教室申请表</span><span style=\"font-size: 20px\">（非计划内教学—学生专用）</span>
                </div>
                <div class=\"tableContainer\">
                    <table width=\"700\" class=\"table-bordered FillForm\">
                        <tbody>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">院（系）名称 </td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                                <input type=\"text\" name=\"AssociationNameB\" data-check-notice=\"院（系）名称\" data-check-null=\"notnull\" placeholder=\"请填写协会名称\" class=\"inputArea h50\"  value=\"$file_data[AssociationNameB]\">
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">教室容量</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                <input type=\"text\" name=\"ClassroomCapacity\" data-check-notice=\"教室容量\" data-check-null=\"notnull\" class=\"inputArea h50 underlined\" style=\"display: inline-block; width: 150px;\" value=\"$file_data[ClassroomCapacity]\">
                            </span>
                                <span>人</span>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人姓名</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                <input type=\"text\" name=\"ApplyerName\" data-check-notice=\"申请人姓名\" class=\"inputArea h50 underlined\" style=\"display: inline-block; width: 150px;\" value=\"$file_data[ApplyerName]\">
                            </span>
                            <span>
                                <select name=\"ApplyerAttr\" style=\"display: inline-block;\" value=\"$file_data[ApplyerAttr]\">
                                    <option selected>本科生</option>
                                    <option>研究生</option>
                                    <option>助管</option>
                                    <option>教师</option>
                                </select>
                            </span>
                            </td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">教室功能</td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">
                                <select name=\"ClassroomFunction\" class=\"form-control\" value=\"$file_data[ClassroomFunction]\">
                                    <option selected>多媒体教室</option>
                                    <option>普通教室</option>
                                    <option>阶梯教室</option>
                                    <option>联体教室</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人<br>联系电话</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">办公电话号码</td>
                            <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                                <input type=\"text\" data-check-notice=\"办公电话号码\" name=\"OfficePhone\" class=\"inputArea h50\" value=\"$file_data[OfficePhone]\">
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">手机号码</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                                <input type=\"text\" data-check-notice=\"手机号码\" name=\"MobilePhone\" class=\"inputArea h50\" value=\"$file_data[MobilePhone]\">
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动、讲座时间</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" id=\"dateSelAreaB\">
                                <input type=\"text\" data-check-notice=\"活动、讲座时间\" name=\"ActivityTimeB\" class=\"inputArea h50\" value=\"$file_data[ActivityTimeB]\">
                                <script>
                                    var mydate=new Date();
                                    $(\"#dateSelAreaB\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityTimeB\",\"ActivityTimeB_DateInput\",\"YY年MM月DD日\",\"atb\",\"\",\"\",\"data-check-notice='活动时间' data-check-null='notnull'\"));
                                </script>
                            </td>
                            <td width=\"73\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">节次</td>
                            <td width=\"234\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                                <input type=\"text\" name=\"ClassTime\" class=\"inputArea h50\" value=\"$file_data[ClassTime]\">
                                A、1—    2节（   ） <br>
                                B、3—    4节（   ） <br>
                                C、5—    6节（   ） <br>
                                D、7—    8节（   ） <br>
                                E、9—11节（   ） </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">周次</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">
                                <input type=\"text\" name=\"Week\" class=\"inputArea h50\" value=\"$file_data[Week]\">
                            </td>
                            <td width=\"72\" height=\"50\" align=\"center\" valign=\"middle\">星期</td>
                            <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                                <input type=\"hidden\" name=\"\" class=\"inputArea h50\" value=\"$file_data[]\">
                                <select name=\"Day\" id=\"\" class=\"form-control\" value=\"$file_data[Day]\">
                                    <option value=\"一\" selected>一</option>
                                    <option value=\"二\">二</option>
                                    <option value=\"三\">三</option>
                                    <option value=\"四\">四</option>
                                    <option value=\"五\">五</option>
                                    <option value=\"六\">六</option>
                                    <option value=\"日\">日</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">教学楼选择 </td>
                            <td height=\"50\" colspan=\"7\" align=\"center\" valign=\"middle\">
                                <select name=\"TeachingBuilding\" class=\"form-control\" value=\"$file_data[TeachingBuilding]\">
                                    <option selected>西十二楼</option>
                                    <option>西五</option>
                                    <option>东五</option>
                                    <option>东九</option>
                                    <option>东十二</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"101\" colspan=\"2\" align=\"center\" valign=\"middle\">说明 </td>
                            <td colspan=\"7\" align=\"left\" valign=\"middle\">节次说明：1—4节为上午；5—8节为下午；9—11节为晚上。<br>作息时间：秋、夏季1—4节：8：00-11：50；<br>秋季5—8节：14：00—17：30；<br>夏季5—8节：14：30—18：00；<br>秋季9—11节：18：30—21：50；<br>夏季9—11节：19：00—22：20</td>
                        </tr>
                        <tr>
                            <td width=\"16\" height=\"120\" rowspan=\"2\" align=\"center\" valign=\"middle\">形式和内容 </td>
                            <td width=\"82\" height=\"120\" align=\"center\" valign=\"middle\">一般活动、会议 </td>
                            <td height=\"120\" colspan=\"7\" align=\"left\" valign=\"top\">
                                <div style=\"height:83px;margin-bottom: 2px\">
                                    <textarea name=\"NormalConferenceContent\" class=\"inputArea\" value=\"$file_data[NormalConferenceContent]\"></textarea>
                                </div>
                                <div style=\"height:36px\">
                                    <span>主持人姓名</span>
                                <span>
                                    <input type=\"text\" name=\"HostName\" class=\"inputArea h35 underlined\" style=\"width: 100px; display: inline-block;\" value=\"$file_data[HostName]\">
                                </span>
                                    <span>单位</span>
                                <span>
                                    <input type=\"text\" name=\"HostCompany\" class=\"inputArea h35 underlined\" style=\"width: 140px; display: inline-block;\" value=\"$file_data[HostCompany]\">
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    <input type=\"text\" class=\"inputArea h35 underlined\" style=\"width: 120px; display: inline-block;\">
                                </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"82\" height=\"120\" align=\"center\" valign=\"middle\">授课、讲座人员情况(申请多媒体教室) </td>
                            <td height=\"120\" colspan=\"7\" align=\"left\" valign=\"top\">授课（讲座）内容:
                                <div style=\"height:83px;margin-bottom: 2px\">
                                    <textarea name=\"LectureContent\" class=\"inputArea\" value=\"$file_data[LectureContent]\"></textarea>
                                </div>
                                <div style=\"height:36px\">
                                    <span>授课（讲座）姓名</span>
                                <span>
                                    <input type=\"text\" name=\"SpeakerName\" class=\"inputArea h35 underlined\" style=\"width: 100px; display: inline-block;\" value=\"$file_data[SpeakerName]\">
                                </span>
                                    <span>单位</span>
                                <span>
                                    <input type=\"text\" name=\"SpeakerCompany\" class=\"inputArea h35 underlined\" style=\"width: 120px; display: inline-block;\" value=\"$file_data[SpeakerCompany]\">
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    <input type=\"text\" name=\"SpeakerPost\" class=\"inputArea h35 underlined\" style=\"width: 120px; display: inline-block;\" value=\"$file_data[SpeakerPost]\">
                                </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"100\" colspan=\"2\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                                院（系）<br>
                                审核意见
                            </td>
                            <td height=\"100\" colspan=\"5\" align=\"left\" valign=\"top\">院（系）分管辅导员意见：<br><br><br>签名： </td>
                            <td height=\"100\" colspan=\"2\" align=\"left\" valign=\"top\">院（系）学工组意见：<br>
                                <br>
                                <br>
                                签名：</td>
                        </tr>
                        <tr>
                            <td height=\"100\" colspan=\"7\">团委领导审核结果和意见： <br>
                                职 务：               签 名： <br>
                                盖 章：                      年    月    日 </td>
                        </tr>
                        <tr>
                            <td height=\"120\" colspan=\"2\" align=\"center\" valign=\"middle\">教务处<br>审批意见</td>
                            <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">                                                                                                                                                               年    月    日 </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type=\"file\" name=\"file\" id=\"inputUploadFile\"><input type=\"hidden\" name=\"ifUploadFile\" id=\"ifUploadFile\" value=\"none\">
            <input type=\"submit\">
        </form>
    </body>
</html>
			";
			break;
		}
		$this->html=$html;
		$this->display();
		//echo $html;
	}
	
	public function downloadword(){ 
		$this->start(); 
		$wordname = $table.$ID.".doc";
		$this->preview();
		//$this->value = $file_data;
		//$this->wordname = $wordname;
		echo $html; 
		$this->save($wordname); 
		$this->display();
		ob_flush();//每次执行前刷新缓存 
		flush(); 
	}
}
?>