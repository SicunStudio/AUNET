/**
 * Created by Brian on 2015/12/21.
 */
var FormAddress=new Array();
FormAddress[0]=new Array("materialapply","../ApplicationForms/materialapply.html");
FormAddress[1]=new Array("colorprinting","../ApplicationForms/colorprinting.html");
FormAddress[2]=new Array("east4","../ApplicationForms/east4.html");
FormAddress[3]=new Array("sports","../ApplicationForms/sports.html");
FormAddress[4]=new Array("special","../ApplicationForms/special.html");
FormAddress[5]=new Array("teachingbuilding","../ApplicationForms/teachingbuilding.html");
FormAddress[6]=new Array("outdoor","../ApplicationForms/outdoor.html");
FormAddress[7]=new Array("sacenter","../ApplicationForms/sacenter.html");
FormAddress[8]=new Array("apply_state","apply_state.html");
FormAddress[9]=new Array("apply_procedure","apply_procedure.html");

var loadingMsg="<div style='margin-left: 10px'><div style='width: 100px; height: 100px; border-radius: 50px; border: solid 5px #505050; line-height: 50px; font-size: 56px; text-align: center;display: inline-block'>...</div><h2>请稍候，正在加载</h2><h3>若长时间未响应，请在左侧重新选择表格或刷新再试</h3></div>";
var errorMsg="<div style='margin-left: 10px'><div style='width: 100px; height: 100px; border-radius: 50px; border: solid 5px #505050; line-height: 80px; font-size: 56px; text-align: center;display: inline-block'>!</div><h2>Oops，好像出了一些问题</h2><h3>暂时无法加载，你可以稍后再试，也可以联系思存工作室</h4></div>";
$(document).on("click",".FormSwitcher",function(){
    //TODO 如果当前表格已经填写，询问是否离开
    //收起警告框
    $("#alert-danger").html("");
    $("#alert-danger").slideUp("fast");

    //切换背景

    $(".FormSwitcher").removeClass("active");
    $("#FormArea").html(loadingMsg);
    //$("#FormArea").load("../ApplicationForms/loading.html");
    //$("#FormArea").html();
    var FormName=$(this).attr("data-formname");

    //Fetch Table
    //var tableURL="../ApplicationForms/error.html";
    var tableURL="None";
    for(var i=0;i<FormAddress.length;i++)
    {
        if(FormAddress[i][0]==FormName)
        {
            tableURL=FormAddress[i][1];
        }
    }

    //Show Table
    //$("#FormArea").html("");

    if(tableURL=="None"){
        $("#FormArea").html(errorMsg + "<h4>错误原因：此表格不存在</h4>");
    }
    else{
            $("#FormArea").load(tableURL,function(response,status,xhr){
                if(status!="success"){
                    $("#FormArea").html(errorMsg + "<h4>错误原因：表格获取错误或网络有问题</h4>");
                }
            });
    }


    //Set Switch Active
    $(this).addClass("active");

    //Add DateSelector if necessary

});