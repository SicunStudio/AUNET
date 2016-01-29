$(document).on("click",".switchTab",function(){
    var tabtype=$(this).attr("data-tabtype");
    var num=0;
    $(".list-container").css("display","none");
    $(".Applylist .Applylist-Nodata").css("display","none");
    switch (tabtype){
        case "未审批":
            $(".list-container[data-approvestate='未审批']").css("display","block");
            num=$(".list-container[data-approvestate='未审批']").size();
            break;
        case "已通过":
            $(".list-container[data-approvestate='已通过']").css("display","block");
            num=$(".list-container[data-approvestate='已通过']").size();
            break;
        case "未通过":
            $(".list-container[data-approvestate='未通过']").css("display","block");
            num=$(".list-container[data-approvestate='未通过']").size();
            break;
        case "已审批":
            $(".list-container[data-approvestate!='未审批']").css("display","block");
            num=$(".list-container[data-approvestate!='未审批']").size();
            break;
        case "所有":
            $(".list-container").css("display","block");
            num=$(".list-container").size();
            break;
    }
    //console.log($(".list-container[data-approvestate='"+tabtype+"']").size());
    if(num==0){
        $(".Applylist .Applylist-Nodata").css("display","block");
    }
});

