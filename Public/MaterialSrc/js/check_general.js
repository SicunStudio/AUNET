/**
 * Created by Brian on 2015/12/21.
 */
/* General Check */
/**
 * 所有想检查的input必须包含data-check-notice属性，值为检查未通过时的提示内容
 */


/**
 * 检查非空
 * 在目标input加入data-check-null="notnull"
 */
function check_null(){
    var MsgString="";
    $("input[data-check-null='notnull']").each(function(){
        //console.log($(this).attr("value"));
        if($(this).val()==""||$(this).val()==undefined){
            MsgString+=$(this).attr("data-check-notice");
            MsgString+=": 不能为空&nbsp;&nbsp;";
            $(this).addClass("ErrorInput");
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
            $(this).addClass("ErrorInput");
        }
    });
    return MsgString;
}