/**
 * Created by Litingjun on 2015/12/22.
 */

/* 检查表单 */
$(document).on("click","[data-role='submit']",function(){
    $("[class*='ErrorInput']").removeClass("ErrorInput");
    $("#alert-danger").html("");
    $("#alert-danger").slideUp("fast");
    var msgNull=check_null();
    var msgNum=check_number();
    var msgUnique=check_unique();
    if(msgNull || msgNum || msgUnique){
        $("#alert-danger").html((msgNull!=""?msgNull+"<br>":"") + (msgNum!=""?msgNum+"<br>":"")+(msgUnique!=""?msgUnique:""));

        $("#alert-danger").slideDown("fast");
        //alert(msg);
    }
    else {
        //TODO 提交表单
    }
});

$(document).on("change","#inputUploadFile",function(){
    if($("#inputUploadFile").val()!=undefined && $("#inputUploadFile").val()!=""){
        $("#ifUploadFile").val("file");
    }else {
        $("#ifUploadFile").val("none");
    }
});


