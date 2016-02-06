$(document).ready(function(){
    //为审批状态文字设置颜色
    $(".Applylist-ApproveState[data-approvestate='未通过']").addClass("ApproveState-Rejected");
    $(".Applylist-ApproveState[data-approvestate='已通过']").addClass("ApproveState-Pass");
    $(".Applylist-ApproveState[data-approvestate='未审批']").addClass("ApproveState-Wait");

    // 设置未审批数量
    var TobeApproved=0;
    TobeApproved=$(".list-container[data-approvestate='未审批']").size();
    $("#TobeApproveNum").text(TobeApproved);

    // 只显示未审批
    $(".list-container[data-approvestate!='未审批']").css("display","none");

    // 更改已审批项的审批按钮
    $(".list-container[data-approvestate!='未审批'] .Applylist-Approve button").text("更改审批");
    $(".list-container[data-approvestate!='未审批'] .Applylist-Approve button").removeClass("btn-info");
    $(".list-container[data-approvestate!='未审批'] .Applylist-Approve button").addClass("btn-default");
});

$('#modalPreview').on("hide.bs.modal",function(e){
    $("#modalPreview-UserName").text("---");
    $("#modalPreview-TableContainer").html("&nbsp;");
    $("#modalPreview-ApproveState").val("未审批");
    $("#modalPreview-ApproveNote").val("");
});

$(document).on("click",".btn-approve", function() {
    var dom=$(this);
    $("#modalPreview-UserName").text(dom.attr("data-username"));
    $("#modal-footer-UserName").val(dom.attr("data-username"));
    $("#modal-footer-ID").val(dom.attr("data-id"));
    $("#modal-footer-action-type").val(dom.attr("data-action-type"));
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

$(document).on("click","#approveform-save",function(){
    $("#approveform").submit();
});
