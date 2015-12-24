/* 
* @Author: LITNGJUN
* @Date:   2015-12-20 00:03:04
* @Last Modified by:   Brian
* @Last Modified time: 2015-12-21 11:28:50
*/

/*$(document).ready(function(){
  $("[data-role='SlideMenu']").addClass("SlideMenu-SlideContainer");
  $("[data-role='MainContent']").addClass("SlideMenu-MainContent");
  $("body").prepend("<div class='SlideMenu-CoverLayer' data-role='SlideMenuCoverLayer'>&nbsp;</div>");
  
  $("[data-role='SlideMenuToggleButton']").on("click",function(){
    $("body").addClass("SlideMenu-CoverBody");
    $("[data-role='SlideMenuCoverLayer']").fadeIn("fast");
    $("[data-role='SlideMenu']").addClass("SlideToShow");
    //$("[data-role='SlideMenu']").animate({left:'20px'},"fast");
   });

  $("[data-role='SlideMenuCoverLayer']").on("click",function(){
    $("[data-role='SlideMenu']").removeClass("SlideToShow");
    $("[data-role='SlideMenu']").addClass("SlideToHide");
    $("[data-role='SlideMenuCoverLayer']").fadeOut("fast");
    $("body").removeClass("SlideMenu-CoverBody");
  });
});*/

$(document).ready(function(){
  $("[data-role='SlideMenu']").addClass("SlideMenu-SlideContainer");
  $("[data-role='MainContent']").addClass("SlideMenu-MainContent");
  $("[data-role='SlideMenuToggleButton']").addClass("SlideMenu-SlideButton");
  $("body").prepend("<div class='SlideMenu-CoverLayer' data-role='SlideMenuCoverLayer'>&nbsp;</div>");
});

$(document).on("click","[data-role='SlideMenuToggleButton']",function(){
  $("body").addClass("SlideMenu-CoverBody");
  $("[data-role='SlideMenuCoverLayer']").fadeIn("fast");
  $("[data-role='SlideMenu']").addClass("SlideToShow");
  //$("[data-role='SlideMenu']").animate({left:'20px'},"fast");
});

$(document).on("click","[data-role='SlideMenuCoverLayer']",function(){
  $("[data-role='SlideMenu']").removeClass("SlideToShow");
  $("[data-role='SlideMenu']").addClass("SlideToHide");
  $("[data-role='SlideMenuCoverLayer']").fadeOut("fast");
  $("body").removeClass("SlideMenu-CoverBody");
});

$(document).on("click","[data-role='SlideMenuHide']",function(){
  $("[data-role='SlideMenu']").removeClass("SlideToShow");
  $("[data-role='SlideMenu']").addClass("SlideToHide");
  $("[data-role='SlideMenuCoverLayer']").fadeOut("fast");
  $("body").removeClass("SlideMenu-CoverBody");
});
