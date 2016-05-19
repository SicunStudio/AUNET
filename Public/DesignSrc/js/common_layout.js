	
var date=new Date();			//get the year
year=date.getFullYear();
document.getElementsByClassName("year")[0].innerHTML=year;
//heights=document.getElementsByClassName("top")[0].clientHeight;
//styles=document.getElementsByClassName("style")[0];
$(document).ready(function(){
	n=0;
	thisUrl=window.location.pathname.split("/");
	while(1)
		{
			if(thisUrl[n]==undefined){break;}
			n++;
		}
	switch (thisUrl[n-1])
	{
		case "design_design.html":newCss(0);document.getElementsByClassName("apartments")[0].setAttribute("class","");break;
		case "design_notice.html":newCss(1);break;
		case "design_apply.html":newCss(2);break;
	}

	function newCss(x){
			document.getElementsByClassName("appoint")[x].setAttribute("id","active");		
		}
  /*$(".appoint:first").click(function(){
    $(".apartments").stop().slideToggle("fast");
  });*/
 /* $(".appoint").click(function()
  {
  	$(this).css("background","#74b05c");
  	$(this).css("color","#fff");
  });*/

});