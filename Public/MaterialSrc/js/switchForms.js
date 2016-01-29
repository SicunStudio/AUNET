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

var loadingMsg="<h2>请稍候，正在加载</h2><h4>若长时间未响应，请在左侧重新选择表格或刷新再试</h4>";
var errorMsg="<h2>抱歉，加载失败</h2><h3>该表格不可用</h3>";
$(document).on("click",".FormSwitcher",function(){
    //TODO 如果当前表格已经填写，询问是否离开
    //收起警告框
    $("#alert-danger").html("");
    $("#alert-danger").slideUp("fast");

    //切换背景

    $(".FormSwitcher").removeClass("active");
    $("#FormArea").html(loadingMsg);
    //$("#FormArea").load("../ApplicationForms/loading.html");
    $("#FormArea").html();
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
    $("#FormArea").html("");

    if(tableURL=="None"){
        $("#FormArea").html(errorMsg + "<h4>此表格不存在</h4>");
    }
    else{
            $("#FormArea").load(tableURL,function(response,status,xhr){
                if(status!="success"){
                    $("#FormArea").html(errorMsg + "<h4>表格错误或网络有问题</h4>");
                }
            });
    }


    //Set Switch Active
    $(this).addClass("active");

    //Add DateSelector if necessary

});