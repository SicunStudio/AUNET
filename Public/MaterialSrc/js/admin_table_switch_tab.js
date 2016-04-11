$(document).on("click",".switchTab",function(){
    filterDOM();
    //console.log($("li[role='presentation'].active a").attr("data-tabtype"));
});

$(document).on("change","#filter-type",function(){
    filterDOM();
    //console.log($("#filter-type").val());
});
$(document).on("change","#filter-date",function(){
    filterDOM();
    //console.log($("#filter-type").val());
});

$(document).on("click",".date-clear",function(){
    $("#filter-date").val("");
    filterDOM();
});

function filterDOM(){
    var approveState=$("li[role='presentation'].active a").attr("data-tabtype");
    var type=$("#filter-type").val();
    var filterdate=$("#filter-date").val();
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
                bool_as=(dom_approvestate!="审批中");
                break;
            default:
                bool_as=(dom_approvestate==approveState);
                break;
        }
        var bool_type=(type=="ALL"? 1 : dom_type==type);
        var bool_date=(filterdate==""?true:false);
        // 过滤日期
        if(!bool_date){
            var createdate=$(this).attr('data-createtime');
            createdate=createdate.substr(0,createdate.indexOf(" "));
            bool_date=(createdate==filterdate);
        }

        if(approveState==undefined){ bool_as=true; }
        if(type==undefined) { bool_type=true; }
        if(filterdate==undefined) { bool_date=true; }
        if(bool_as && bool_type && bool_date){
            $(this).fadeIn("fast");
            num=num+1;
        }
    });
    //console.log(num);



    if(num==0){
        $(".Applylist .Applylist-Nodata").fadeIn(100);
    }

}

