/**
 * Created by Brian on 2015/12/21.
 */
/** General Check */
/**
 * 所有想检查的input必须包含data-check-notice属性，值为检查未通过时的提示内容
 */


/**
 * 检查非空
 * 在目标input加入data-check-null="notnull"
 */
function check_null(){
    var MsgString="";
    $("[data-check-null='notnull']").each(function(){
        //console.log($(this).attr("value"));
        if(check_value_null($(this).val())){
            MsgString+=$(this).attr("data-check-notice");
            MsgString+=": 不能为空&nbsp;&nbsp;";
            AddErrorMark($(this));

        }
    });
    return MsgString;
}

/**
 * 检查数字
 * 在目标input加入data-check-type="number"
 */
function check_number(){
    var MsgString="";
    $("input[data-check-type='number']").each(function(){
        if($(this).val()!="" && $(this).val()!=undefined && isNaN($(this).val()) ){
            MsgString+=$(this).attr("data-check-notice");
            MsgString+=": 必须为数字&nbsp;&nbsp;";
            AddErrorMark($(this));
        }
    });
    return MsgString;
}

/**
 * 检查上传文件类型
 */
function check_file(){
    var MsgString="";
    $("input[data-check-type='file']").each(function(){
        var filename=$(this).val();
        var filetype="";
        if(filename!=undefined && filename!=""){
            filetype=filename.substr(filename.lastIndexOf(".")+1);
            if(filetype=='doc'||filetype=='docx'||filetype=='txt'||filetype=='pdf'||filetype=='zip'||filetype=='rar'||filetype=='7z'){
                MsgString="";
            }else
            {
                MsgString="上传文件类型错误：允许的文件类型：doc、docx、pdf、txt、zip、7z、rar";
            }
        }
    });
    return MsgString;
}

/**
 * 每页独有检查
 *
 */

function check_unique(){
    var msg="";
    var type=$("[name='action_type']").val();
    switch (type){
        case 'materialapply':
            msg=check_unique_materialapply();
            break;
        case 'colorprinting':
            msg=check_unique_colorprinting();
            break;
        case 'east4':
            msg=check_unique_east4();
            break;
        case 'sports':
            msg=check_unique_sports();
            break;
        case 'special':
            msg=check_unique_special();
            break;
        case 'teachingbuilding':
            msg=check_unique_teachingbuilding();
            break;
        case 'outdoor':
            msg=check_unique_outdoor();
            break;
        case 'sacenter':
            msg=check_unique_sacenter();
            break;
    }
    return msg;
}

/* MaterialApply */
function check_unique_materialapply(){
    var msg="";
    var countNum1=((check_value_null($("#inputProjectorNum").val())==false||check_value_null($("#PReturnTime_DateInput").val())==false)?1:0);
    var countNum2=((check_value_null($("#PowerWattage").val())==false)?1:0);
    var countNum3=((check_value_null($("#DeskNumber").val())==false || check_value_null($("#ChairNumber").val())==false || check_value_null($("#DCReturnTime_DateInput").val())==false)?1:0);
    var countNum4=((check_value_null($("#CarryChairNumber").val())==false||check_value_null($("#CarryDeskNumber").val())==false)?1:0);
    if((countNum1+countNum2+countNum3+countNum4)!=1){
        msg+="必须只借用一样物资！";
    }else{
        if(countNum1 == 1){
            (check_value_null($("#inputProjectorNum").val())==false && check_value_null($("#PReturnTime_DateInput").val())==false)==false?msg+="物资申请信息未填完整":"";
        }
        if(countNum2 == 1){
            check_value_null($("#PowerWattage").val())?msg+="物资申请信息未填完整":"";
        }
        if(countNum3 == 1){
            (check_value_null($("#DeskNumber").val())==false && check_value_null($("#ChairNumber").val())==false && check_value_null($("#DCReturnTime_DateInput").val())==false)==false ?msg+="物资申请信息未填完整":"";
        }
        if(countNum4 == 1){
            (check_value_null($("#CarryChairNumber").val())==false && check_value_null($("#CarryDeskNumber").val())==false)==false?msg+="物资申请信息未填完整":"";
        }
    }
    return msg;
}

/* ColorPrinting */
function check_unique_colorprinting(){
    var msg="";

    return msg;
}

/* east4 */
function check_unique_east4(){
    var msg="";

    return msg;
}

/* sports*/
function check_unique_sports(){
    var msg="";

    return msg;
}

/* special */
function check_unique_special(){
    var msg="";

    return msg;
}

/* teachingbuilding */
function check_unique_teachingbuilding(){
    var msg="";
    /* 申请人联系电话 */
    if(check_value_null($("#OfficePhone").val()) && check_value_null($("#MobilePhone").val())){
        AddErrorMark($("#OfficePhone"));
        AddErrorMark($("#MobilePhone"));
        msg+="申请人联系电话：必须填写至少一项";
    }

    /* 形式内容 */
    var normalConf=check_value_null($("#NormalConferenceContent").val())||check_value_null($("#HostName").val())||check_value_null($("#HostCompany").val())||check_value_null($("#HostPost").val());
    var lect=check_value_null($("#LectureContent").val())||check_value_null($("#SpeakerName").val())||check_value_null($("#SpeakerCompany").val())||check_value_null($("#SpeakerPost").val());
    if((normalConf&&lect)||((normalConf||lect)==false)){
        msg=msg+(msg==""?"":" ")+"形式和内容：填写一项";
        AddErrorMark($("#NormalConferenceContent"));
        AddErrorMark($("#HostName"));
        AddErrorMark($("#LectureContent"));
        AddErrorMark($("#SpeakerName"));
    }
    return msg;
}

/* outdoor */
function check_unique_outdoor(){
    var msg="";

    return msg;
}

/* sacenter */
function check_unique_sacenter(){
    var msg="";

    return msg;
}


/**
 *单个值测试
 *
 */

/**
 * 检查是否为空
 * 为空则返回true，不为空则返回false
 */
function check_value_null(str){
    return str==""||str==undefined;
}

function check_value_num(){

}

/**
 * 为不符合的input加上标记
 */
function AddErrorMark(elem){
    //if(!elem.parent().hasClass("FillForm")){ elem.parent().addClass("has-error"); };
    //var elemP=elem.parent() ;
    //if(!elemP.parent().hasClass("FillForm")){ elemP.parent().addClass("has-error"); };
    var elemP=elem;
    for(;;){
        if(!elemP.hasClass("form-group")) {
            elemP = elemP.parent();
        }else {
            break;
        }
    }
    elemP.addClass("has-error");

}

/**
 * 页面初始化时移除不符合标记
 */
function RemoveErrorMark(){
    $("[class*='has-error']").removeClass("has-error");
}
