$(document).on("click",".switchTab",function(){
    filterDOM();
    //console.log($("li[role='presentation'].active a").attr("data-tabtype"));
});

$(document).on("change","#filter-type",function(){
    filterDOM();
    //console.log($("#filter-type").val());
});

function filterDOM(){
    var approveState=$("li[role='presentation'].active a").attr("data-tabtype");
    var type=$("#filter-type").val();
    var num=0;

    $(".Applylist .Applylist-Nodata").hide("fast");
    $(".list-container").css("display","none");
    $(".list-container").each(function(){
        var dom_approvestate=$(this).attr("data-approvestate");
        var dom_type=$(this).attr("data-action-type");

        var bool_as=false;
        switch (approveState){
            case "所有":
                bool_as=true;
                break;
            case "已审批":
                bool_as=(dom_approvestate!="未审批");
                break;
            default:
                bool_as=(dom_approvestate==approveState);
                break;
        }
        var bool_type=(type=="__ALL__"? 1 : dom_type==type);
        if(approveState==undefined){ bool_as=true; }
        if(type==undefined) { bool_type=true; }
        if(bool_as && bool_type){
            $(this).fadeIn("fast");
            num=num+1;
        }
    });
    //console.log(num);
    if(num==0){
        $(".Applylist .Applylist-Nodata").fadeIn(100);
    }

}

