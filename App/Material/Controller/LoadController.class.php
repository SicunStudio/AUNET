<?php
namespace Material\Controller;
use Think\Upload;
use Think\Controller;
class LoadController extends CommonController
{
	/*
	var $ID;
	var $type;
	var $table;
	public function __construct(){
		$this->ID = I('POST.ID');
		$this->type = I('POST.action_type');
		$table = strtolower($this->type);
	}*/
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
		//echo $this->ID;
		$ID = I('POST.ID');
		$type = I('POST.action_type');
		$table = strtolower($type);
		$sql = M("aunet.$table" , 'aunet_material_');
		$file_data = $sql->where("id=".$ID)->limit(1)->select()[0];
		foreach($file_data as $key => $val){
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
		}
		//print_r($file_data);
		switch($type){
			case colorprinting:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>彩喷悬挂申请</h4></li>
        </ol>
        <form id=\"applicationForm\" action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"colorprinting\">
            <div class=\"tableContainer\">
                <table class=\"table-bordered table FillForm\" width=\"700\" border=\"0\">
                    <tbody>
                    <tr>
                        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" scope=\"col\">申请单位</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" scope=\"col\">$file_data[associationname]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"53\" height=\"50\" align=\"center\" valign=\"middle\">姓名</td>
                        <td width=\"178\" height=\"50\" align=\"center\" valign=\"middle\">$file_data[name]</td>
                        <td width=\"41\" height=\"50\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[phone]</td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\">$file_data[activitycontent]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[usetime]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[location]</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">彩喷是否具有商业性质</td>
                        <td width=\"166\" height=\"50\" align=\"center\" valign=\"middle\">$file_data[commercial]
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[remark]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"81\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"92\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"4\" align=\"left\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"6\" align=\"center\" valign=\"middle\">东四食堂三楼</td>
                    </tr>
                    <tr>
                        <td height=\"150\" align=\"center\" valign=\"middle\"><p>活动内容（主题， 目的， 流程， 安全负责人） </p></td>
                        <td height=\"150\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"100\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationname]
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
            
        </form>

    </body>
</html>
			";
			break;
			case materialapply:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"UTF-8\">
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
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[associationname]</td>
        <td width=\"86\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">$file_data[activityname]</td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动地点</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[activitylocation]
        </td>
        <td height=\"50\" align=\"center\" valign=\"middle\">借用日期</td>
        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" id=\"borrowTimeArea\">
            $file_data[borrowtime]
        </td>
        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
        <td width=\"90\" height=\"50\" align=\"center\" valign=\"middle\">
            $file_data[joinnumber]
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
            $file_data[projectornumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">归还日期</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\" id=\"PReturnTimeArea\">
            $file_data[preturntime]
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">电力<br></td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">瓦数</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[powerwattage]
        </td>
        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">（注：瓦数超过2000W须要到主校区配电房签字）</td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">大量桌椅</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">桌子数量</td>
        <td width=\"90\" height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[desknumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"89\">椅子数量</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">
            $file_data[chairnumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"86\">归还日期</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"92\" id=\"DCReturnTimeArea\">
            $file_data[dcreturntime]
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">校车</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">运送桌子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[carrydesknumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">运送椅子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\">
            $file_data[carrychairnumber]
        </td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动负责人</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[activitychargeperson]
        </td>
        <td width=\"50\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
            $file_data[activityphone]
        </td>
    </tr>
    <tr>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">社团意见</td>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[associationcomment]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"84\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td width=\"111\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"75\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容 （主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" class=\"inputArea\" data-check-null=\"notnull\" value=\"$file_data[activitycontent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名 及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationname]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">普通教室<br>（50人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[normalclassroom]
                        </td>
                        <td colspan=\"2\" rowspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[queried]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">阶梯教室<br>（300人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[ladderclassroom]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationcomment]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]\">
                        </td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                        	$file_data[queried]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">
                        $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationcomment]
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
                            $file_data[applyname]
                        </td>
                    </tr>
                    <tr>
                        <td rowspan=\"2\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"62\" height=\"35\" align=\"center\" valign=\"middle\">姓名</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[operatorname]
                        </td>
                        <td width=\"111\" height=\"35\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[operatorphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"35\" align=\"center\" valign=\"middle\">学号</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[operatorid]
                        </td>
                        <td height=\"35\" align=\"center\" valign=\"middle\">所在院（系）</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[operatordepartment]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td width=\"76\" height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[usetime]
                        </td>
                        <td width=\"74\" height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[uselocation]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[remark]
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
                            $file_data[associationnamea]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td width=\"124\" height=\"50\" align=\"center\" valign=\"middle\" id=\"dateSelAreaA\">
                            $file_data[activitytimea]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"40\" colspan=\"6\" align=\"center\" valign=\"middle\">活动内容（目的，流程，安全负责人，主讲人简介等）</td>
                    </tr>
                    <tr>
                        <td height=\"550\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">会长签字</td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">
                            $file_data[presidentsignal]
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
                                $file_data[associationnameb]
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">教室容量</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                $file_data[classroomcapacity]
                            </span>
                                <span>人</span>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人姓名</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                $file_data[applyername]
                            </span>
                            <span>
                                $file_data[applyerattr]
                            </span>
                            </td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">教室功能</td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[classroomfunction]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人<br>联系电话</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">办公电话号码</td>
                            <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                                $file_data[officephone]
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">手机号码</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[mobilephone]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动、讲座时间</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" id=\"dateSelAreaB\">
                                $file_data[activitytimeb]
                            </td>
                            <td width=\"73\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">节次</td>
                            <td width=\"234\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                                $file_data[classtime]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">周次</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[week]
                            </td>
                            <td width=\"72\" height=\"50\" align=\"center\" valign=\"middle\">星期</td>
                            <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                                $file_data[day]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">教学楼选择 </td>
                            <td height=\"50\" colspan=\"7\" align=\"center\" valign=\"middle\">
                                $file_data[teachingbuilding]
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
                                    $file_data[normalconferencecontent]
                                </div>
                                <div style=\"height:36px\">
                                    <span>主持人姓名</span>
                                <span>
                                    $file_data[hostname]
                                </span>
                                    <span>单位</span>
                                <span>
                                   $file_data[hostcompany]
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    $file_data[hostpost]
                                </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"82\" height=\"120\" align=\"center\" valign=\"middle\">授课、讲座人员情况(申请多媒体教室) </td>
                            <td height=\"120\" colspan=\"7\" align=\"left\" valign=\"top\">授课（讲座）内容:
                                <div style=\"height:83px;margin-bottom: 2px\">
                                    $file_data[lecturecontent]
                                </div>
                                <div style=\"height:36px\">
                                    <span>授课（讲座）姓名</span>
                                <span>
                                    $file_data[speakername]
                                </span>
                                    <span>单位</span>
                                <span>
                                    $file_data[speakercompany]
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    $file_data[speakerpost]
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

        </form>
    </body>
</html>
			";
			break;
		}
		//$this->html=$html;
		//$this->display();
		//echo $html;

		//Show into html
		$this->show($html);
	}
	
	public function downloadword(){
		$ID = I('POST.ID');
		$type = I('POST.action_type');
		$table = strtolower($type);
		$sql = M("aunet.$table" , 'aunet_material_');
		$file_data = $sql->where("id=".$ID)->limit(1)->select()[0];
		foreach($file_data as $key => $val){
            $file_data[$key] = mb_convert_encoding($val, "HTML-ENTITIES", "UTF-8");
		}
		
		switch($type){
			case colorprinting:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
    <head>
        <meta charset=\"utf-8\">
    </head>
    <body>
        <ol class=\"breadcrumb\">
            <li><h4>彩喷悬挂申请</h4></li>
        </ol>
        <form id=\"applicationForm\" action=\"{:U('Material/Material/material_upload')}\" enctype=\"multipart/form-data\" method=\"POST\">
            <input type=\"hidden\" name=\"action_type\" value=\"colorprinting\">
            <div class=\"tableContainer\">
                <table class=\"table-bordered table FillForm\" width=\"700\" border=\"0\">
                    <tbody>
                    <tr>
                        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" scope=\"col\">申请单位</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" scope=\"col\">$file_data[associationname]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"53\" height=\"50\" align=\"center\" valign=\"middle\">姓名</td>
                        <td width=\"178\" height=\"50\" align=\"center\" valign=\"middle\">$file_data[name]</td>
                        <td width=\"41\" height=\"50\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[phone]</td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\">$file_data[activitycontent]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[usetime]</td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[location]</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">彩喷是否具有商业性质</td>
                        <td width=\"166\" height=\"50\" align=\"center\" valign=\"middle\">$file_data[commercial]
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[remark]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"81\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"92\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                            <script>
                                var mydate=new Date();
                                $(\"#ActivityDateArea\").html(generateDateSelector(mydate.getFullYear()+1,mydate.getFullYear(),true,true,\"ActivityDate\",\"ActivityDateArea_DateInput\",\"YY年MM月DD日\",\"adt\",\"\",\"\",\"data-check-notice='活动日期' data-check-null='notnull'\"));
                            </script>
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"4\" align=\"left\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"6\" align=\"center\" valign=\"middle\">东四食堂三楼</td>
                    </tr>
                    <tr>
                        <td height=\"150\" align=\"center\" valign=\"middle\"><p>活动内容（主题， 目的， 流程， 安全负责人） </p></td>
                        <td height=\"150\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"100\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationname]
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
            
        </form>

    </body>
</html>
			";
			break;
			case materialapply:
			$html = "
			<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"UTF-8\">
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
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">$file_data[associationname]</td>
        <td width=\"86\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">$file_data[activityname]</td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动地点</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[activitylocation]
        </td>
        <td height=\"50\" align=\"center\" valign=\"middle\">借用日期</td>
        <td width=\"98\" height=\"50\" align=\"center\" valign=\"middle\" id=\"borrowTimeArea\">
            $file_data[borrowtime]
        </td>
        <td width=\"82\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
        <td width=\"90\" height=\"50\" align=\"center\" valign=\"middle\">
            $file_data[joinnumber]
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
            $file_data[projectornumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">归还日期</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\" id=\"PReturnTimeArea\">
            $file_data[preturntime]
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">电力<br></td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">瓦数</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[powerwattage]
        </td>
        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">（注：瓦数超过2000W须要到主校区配电房签字）</td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">大量桌椅</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">桌子数量</td>
        <td width=\"90\" height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[desknumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"89\">椅子数量</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">
            $file_data[chairnumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"86\">归还日期</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"92\" id=\"DCReturnTimeArea\">
            $file_data[dcreturntime]
        </td>
    </tr>
    <tr>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"71\">校车</td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"90\">运送桌子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"90\">
            $file_data[carrydesknumber]
        </td>
        <td height=\"35\" align=\"center\" valign=\"middle\" width=\"109\">运送椅子数量</td>
        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\" width=\"86\">
            $file_data[carrychairnumber]
        </td>
    </tr>
    <tr>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动负责人</td>
        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[activitychargeperson]
        </td>
        <td width=\"50\" height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
            $file_data[activityphone]
        </td>
    </tr>
    <tr>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">社团意见</td>
        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
            $file_data[associationcomment]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"84\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td width=\"111\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"75\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容 （主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <textarea name=\"ActivityContent\" class=\"inputArea\" data-check-null=\"notnull\" value=\"$file_data[activitycontent]\"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名 及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"80\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationname]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">普通教室<br>（50人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[normalclassroom]
                        </td>
                        <td colspan=\"2\" rowspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[queried]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">阶梯教室<br>（300人） </td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[ladderclassroom]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationcomment]
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
                            $file_data[associationname]
                        </td>
                        <td width=\"89\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            $file_data[activitytime]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]\">
                        </td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">是否经系统查询</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                        	$file_data[queried]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容<br>（主题， 目的， 流程， 安全负责人） </td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"80\" align=\"center\" valign=\"middle\">有无商业赞助</td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">
                            $file_data[commercial]
                        </td>
                        <td height=\"80\" align=\"center\" valign=\"middle\">赞助方名及赞助方式（如有） </td>
                        <td height=\"80\" colspan=\"5\" align=\"center\" valign=\"middle\">
                        $file_data[commercialpart]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动负责人</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activitychargeperson]
                        </td>
                        <td width=\"91\" align=\"center\" valign=\"middle\">联系电话</td>
                        <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                            $file_data[activityphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">社团意见</td>
                        <td height=\"100\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[associationcomment]
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
                            $file_data[applyname]
                        </td>
                    </tr>
                    <tr>
                        <td rowspan=\"2\" align=\"center\" valign=\"middle\">经办人信息</td>
                        <td width=\"62\" height=\"35\" align=\"center\" valign=\"middle\">姓名</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[operatorname]
                        </td>
                        <td width=\"111\" height=\"35\" align=\"center\" valign=\"middle\">联系方式</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[operatorphone]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"35\" align=\"center\" valign=\"middle\">学号</td>
                        <td height=\"35\" colspan=\"3\" align=\"center\" valign=\"middle\">
                            $file_data[operatorid]
                        </td>
                        <td height=\"35\" align=\"center\" valign=\"middle\">所在院（系）</td>
                        <td height=\"35\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[operatordepartment]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"120\" align=\"center\" valign=\"middle\">活动内容</td>
                        <td height=\"120\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动日期</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\" id=\"ActivityDateArea\">
                            $file_data[activitydate]
                        </td>
                        <td width=\"76\" height=\"50\" align=\"center\" valign=\"middle\">使用时间</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[usetime]
                        </td>
                        <td width=\"74\" height=\"50\" align=\"center\" valign=\"middle\">使用地点</td>
                        <td width=\"153\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[uselocation]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">备注</td>
                        <td height=\"100\" colspan=\"7\" align=\"center\" valign=\"middle\">
                            $file_data[remark]
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
                            $file_data[associationnamea]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动名称</td>
                        <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">
                            $file_data[activityname]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50\" align=\"center\" valign=\"middle\">活动时间</td>
                        <td width=\"124\" height=\"50\" align=\"center\" valign=\"middle\" id=\"dateSelAreaA\">
                            $file_data[activitytimea]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">活动地点</td>
                        <td height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[activitylocation]
                        </td>
                        <td width=\"112\" height=\"50\" align=\"center\" valign=\"middle\">参与人数</td>
                        <td width=\"114\" height=\"50\" align=\"center\" valign=\"middle\">
                            $file_data[joinnumber]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"40\" colspan=\"6\" align=\"center\" valign=\"middle\">活动内容（目的，流程，安全负责人，主讲人简介等）</td>
                    </tr>
                    <tr>
                        <td height=\"550\" colspan=\"6\" align=\"center\" valign=\"middle\">
                            $file_data[activitycontent]
                        </td>
                    </tr>
                    <tr>
                        <td height=\"100\" align=\"center\" valign=\"middle\">会长签字</td>
                        <td height=\"100\" align=\"center\" valign=\"middle\">
                            $file_data[presidentsignal]
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
                                $file_data[associationnameb]
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">教室容量</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                $file_data[classroomcapacity]
                            </span>
                                <span>人</span>
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人姓名</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\">
                            <span style=\"width: 150px; height: 100%\">
                                $file_data[applyername]
                            </span>
                            <span>
                                $file_data[applyerattr]
                            </span>
                            </td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">教室功能</td>
                            <td height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[classroomfunction]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">申请人<br>联系电话</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">办公电话号码</td>
                            <td height=\"50\" colspan=\"4\" align=\"center\" valign=\"middle\">
                                $file_data[officephone]
                            </td>
                            <td width=\"73\" height=\"50\" align=\"center\" valign=\"middle\">手机号码</td>
                            <td width=\"234\" height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[mobilephone]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">活动、讲座时间</td>
                            <td height=\"50\" colspan=\"5\" align=\"center\" valign=\"middle\" id=\"dateSelAreaB\">
                                $file_data[activitytimeb]
                            </td>
                            <td width=\"73\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">节次</td>
                            <td width=\"234\" height=\"50\" rowspan=\"2\" align=\"center\" valign=\"middle\">
                                $file_data[classtime]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">周次</td>
                            <td width=\"80\" height=\"50\" align=\"center\" valign=\"middle\">
                                $file_data[week]
                            </td>
                            <td width=\"72\" height=\"50\" align=\"center\" valign=\"middle\">星期</td>
                            <td height=\"50\" colspan=\"3\" align=\"center\" valign=\"middle\">
                                $file_data[day]
                            </td>
                        </tr>
                        <tr>
                            <td height=\"50\" colspan=\"2\" align=\"center\" valign=\"middle\">教学楼选择 </td>
                            <td height=\"50\" colspan=\"7\" align=\"center\" valign=\"middle\">
                                $file_data[teachingbuilding]
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
                                    $file_data[normalconferencecontent]
                                </div>
                                <div style=\"height:36px\">
                                    <span>主持人姓名</span>
                                <span>
                                    $file_data[hostname]
                                </span>
                                    <span>单位</span>
                                <span>
                                   $file_data[hostcompany]
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    $file_data[hostpost]
                                </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"82\" height=\"120\" align=\"center\" valign=\"middle\">授课、讲座人员情况(申请多媒体教室) </td>
                            <td height=\"120\" colspan=\"7\" align=\"left\" valign=\"top\">授课（讲座）内容:
                                <div style=\"height:83px;margin-bottom: 2px\">
                                    $file_data[lecturecontent]
                                </div>
                                <div style=\"height:36px\">
                                    <span>授课（讲座）姓名</span>
                                <span>
                                    $file_data[speakername]
                                </span>
                                    <span>单位</span>
                                <span>
                                    $file_data[speakercompany]
                                </span>
                                    <span>职务（职称）</span>
                                <span>
                                    $file_data[speakerpost]
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

        </form>
    </body>
</html>
			";
			break;
		}
		
		$this->start(); 
		$wordname = $table.$ID.".doc";
		//$this->preview();
		echo $html;
		$this->save($wordname); 
		$this->display();
		ob_flush();//每次执行前刷新缓存 
		flush();
		
       // header("Content-Disposition:attachment;filename='$type-$ID.doc'");
       
	}
}
?>