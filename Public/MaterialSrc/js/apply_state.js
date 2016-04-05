//为审批状态文字设置颜色
$(document).ready(function(){
    filterDOM();
    $("span[data-approvestate='未通过']").addClass("ApproveState-Rejected");
    $("span[data-approvestate='已通过']").addClass("ApproveState-Pass");
    $("span[data-approvestate='审批中']").addClass("ApproveState-Wait");
    $("tr[data-approvestate='未通过']").addClass("danger");
    $("tr[data-approvestate='已通过']").addClass("success");
    console.log($("tr[data-approvestate='审批中']").length);
    $("#TobeApproveNum").text($("tr[data-approvestate='审批中']").length);
});

//设置预览
$(document).on("click",".btn-preview",function(){
    var dom=$(this);
    $.post(dom.attr("data-action-target"),
        {
            ID:dom.attr("data-id"),
            action_type:dom.attr("data-action-type")
        },
        function(data,status){
            if(!status){
                $("#modalPreview-TableContainer").html(status);
            }else{
                $("#modalPreview-TableContainer").html(data);
            }
        });
});