/**
 * Created by Litingjun on 2015/12/22.
 */

/* 检查表单 */
$(document).on("click","[data-role='submit']",function(){
    //移除错误标记
    RemoveErrorMark();
    $("#alert-danger").html("");
    $("#alert-danger").slideUp("fast");
    var msgNull=check_null();
    var msgNum=check_number();
    var msgUnique=check_unique();
    if(msgNull || msgNum || msgUnique){
        $("#alert-danger").html((msgNull!=""?msgNull+"<br>":"") + (msgNum!=""?msgNum+"<br>":"")+(msgUnique!=""?msgUnique:""));
        $("body").animate({scrollTop: $("#TableArea").offset().top}, 500,"swing");
        $("#alert-danger").slideDown("fast");

        //return false;// 返回false可以避免在原链接后加上#
        //alert(msg);
    }
    else {
        //TODO 提交表单
        $("form").submit();
    }
});

$(document).on("change","#inputUploadFile",function(){
    if($("#inputUploadFile").val()!=undefined && $("#inputUploadFile").val()!=""){
        $("#ifUploadFile").val("file");
    }else {
        $("#ifUploadFile").val("none");
    }
});


