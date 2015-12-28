/**
 * Created by Brian on 2015/12/22.
 */
$(document).on("click","[data-role='submit']",function(){
    $("input").removeClass("ErrorInput");
    $("#alert-danger").html("");
    $("#alert-danger").slideUp("fast");
    var msgNull=check_null();
    var msgNum=check_number();
    if(msgNull || msgNum){
        $("#alert-danger").html(msgNull + "<br>" + msgNum);

        $("#alert-danger").slideDown("fast");
        //alert(msg);
    }
});

$(document).on("change","#inputUploadFile",function(){
    if($("#inputUploadFile").val()!=undefined && $("#inputUploadFile").val()!=""){
        $("#ifUploadFile").val("file");
    }else {
        $("#ifUploadFile").val("none");
    }
});


