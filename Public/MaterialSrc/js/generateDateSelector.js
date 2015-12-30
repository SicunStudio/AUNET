/**
 * Created by Brian on 2015/12/21.
 */
function generateDateSelector(ToY,StY,IfSelToday,Up,targetName,targetID,format,prefix,cssClass,cssStyle,appendAttr){
    /**
     * 参数解释
     *
     * ToY 生成选项列表的截止年份
     * ToM 生成选项列表的截止月份
     * ToD 生成选项列表的截止日
     *
     * StY 生成选项列表的起始年份
     * StM 生成选项列表的起始月份
     * StD 生成选项列表的起始日
     *
     * IfSelToday 是否默认选中今日
     *
     * Up 排序为升序还是降序（true：升序，false 降序）
     *
     * targetName 要把选中的日期赋给的input的name，注意，这个input将会自动创建且不可见
     * targetName 要把选中的日期赋给的input的id，注意，这个input将会自动创建且不可见
     * format 生成日期字符串的格式，最终会将YY替换为年，MM替换为月，DD替换为日，
     * ****例如: YY-MM-DD 2000-1-1
     * ******** YY年MM月DD日 2000年1月1日
     *
     * prefix 创建的日期选单包括结果input的id前缀，注意，如果一个页面有多个日期选单，请**务必**使此参数不同
     *
     * cssClass 创建选单的CSS类，如没有请赋值 ""
     *
     * cssStyle 创建选单的样式，如没有请赋值 ""
     *
     */
    var mydate=new Date();
    var i=0;
    var htmlstr="";
    var YearSelectorID=(prefix?prefix+"-" : "")+"DateSelector-Year";
    var MonthSelectorID=(prefix?prefix+"-" : "")+"DateSelector-Month";
    var DaySelectorID=(prefix?prefix+"-" : "")+"DateSelector-Day";
    IfSelToday=false;
    if(IfSelToday){
        StY=mydate.getFullYear();
    }
    var infostr="class='" + (cssClass?cssClass:"") + "' style='"+(cssStyle?cssStyle:"")+"' data-element-type='DateSelector' data-DateSelector-Up='"+Up+"' data-DateSelector-DayListID='"+DaySelectorID+"' data-DateSelector-MonthListID='"+MonthSelectorID+"' data-DateSelector-YearListID='"+YearSelectorID+"' data-DateSelector-TargetInputID='"+targetID+"'   data-DateSelector-DateStringFormat='"+format+"'";

    htmlstr+="<input id='"+targetID+"' name='"+targetName+"' type='hidden' "+(appendAttr!=undefined?appendAttr:"")+">";
    htmlstr+="<select data-DateSelector-role='Year' id='"+ YearSelectorID +"' " + infostr + " >";
    htmlstr+="<option value=''>--</option>";
    for(i=(Up?StY:ToY);(Up?i<=ToY:i>=StY); )
    {

        if(IfSelToday && i==mydate.getFullYear()){
            htmlstr+="<option value='"+ i.toString()+"' selected='selected'>" + i.toString() + "</option>";
        }
        else
        {
            htmlstr+="<option value='"+ i+"'>" + i.toString() + "</option>";
        }
        Up?(i++):(i--);
    }
    htmlstr+="</select>年";

    htmlstr+="<select data-DateSelector-role='Month' id='"+ MonthSelectorID +"' " + infostr + " >";
    htmlstr+="<option value=''>--</option>";
    for(i=(Up?1:12);(Up?i<=12:i>=1);(Up?(i++):(i--)))
    {
        /*if(IfSelToday){
            htmlstr+="<option value='"+ i+"'"+(i==(mydate.getMonth()+1)?" selected":"")+">" + i.toString() + "</option>";
        }
        else
        {
            htmlstr+="<option value='"+ i+"'"+(i==1?" selected='selected'":"")+">" + i.toString() + "</option>";
        }*/
        htmlstr+="<option value='"+ i+"'>" + i.toString() + "</option>";
    }
    htmlstr+="</select>月";
    htmlstr+="<select data-DateSelector-role='Day' id='"+ DaySelectorID +"'  " + infostr + " >";
    htmlstr+="<option value=''>--</option>";
    /*if(IfSelToday){
        var Daylist=new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
        Daylist[2]=(IsRunYear(mydate.getFullYear()) && (mydate.getMonth()+1)==2)?29:28;
        for(i=(Up?1:Daylist[mydate.getMonth()+1]);(Up?i<=Daylist[mydate.getMonth()+1]:i>=1);i=(Up?(i+1):(i-1)))
        {
            if(i==mydate.getDate()){
                htmlstr+="<option value='"+ i+"' selected='selected'>" + i.toString() + "</option>";
            }
            else
            {
                htmlstr+="<option value='"+ i+"'>" + i.toString() + "</option>";
            }
        }
    }*/

    htmlstr+="</select>日";
    return htmlstr;
}

function IsRunYear(year)//判断是否闰年
{
    var IsRun=false;
    if(year%100==0){ if(year%400==0) IsRun=true; }
    else { IsRun=(year%4==0?true:false); }
    return IsRun;
}

function generateDaySelector(YearSelectorID,MonthSelectorID,DaySelectorID,Up) //generateDateList
{
    var year=$("#"+YearSelectorID).val();
    var month=$("#"+MonthSelectorID).val();
    var htmlstr="<option value=''>--</option>";
    var Daylist=new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
    Daylist[2]=(IsRunYear(year) && (month==2)?29:28);
    for(i=(Up?1:Daylist[month]);(Up?i<=Daylist[month]:i>=1);i=(Up?(i+1):(i-1)))
    {
            htmlstr+="<option value='"+ i.toString()+"'"+(i==1?" selected='selected'":"")+">" + i.toString() + "</option>";
    }
    return htmlstr;
}

//generate Date String
function generateDateString(YearSelectorID,MonthSelectorID,DaySelectorID,format){

    var year=$("#"+YearSelectorID).val();
    var month=$("#"+MonthSelectorID).val();
    var day=$("#"+DaySelectorID).val();
    var str=format;
    str=str.replace(/YY/g,(year!=undefined?year:""));
    str=str.replace(/MM/g,(month!=undefined?month:""));
    str=str.replace(/DD/g,(day!=undefined?day:""));
    if(year==undefined || month == undefined || day==undefined || year=="" || month == "" || day=="") str="";
    return str;
}

function InitializeInputStr(){
    $("[data-element-type='DateSelector']").each(
        function(){
            var YearSelectorID=$(this).attr('data-DateSelector-YearListID');
            var MonthSelectorID=$(this).attr('data-DateSelector-MonthListID');
            var DaySelectorID=$(this).attr('data-DateSelector-DayListID');
            var str=generateDateString($("#"+YearSelectorID).val(),$("#"+MonthSelectorID).val(),$("#"+DaySelectorID).val(),$(this).attr('data-DateSelector-DateStringFormat'));
            $("#"+$(this).attr('data-DateSelector-TargetInputID')).val(str);
        }
    );
}

$(document).on("change","[data-DateSelector-role='Year']",function(){
    var str=generateDaySelector($(this).attr('data-DateSelector-YearListID'),$(this).attr('data-DateSelector-MonthListID'),$(this).attr('data-DateSelector-DayListID'),$(this).attr('data-DateSelector-Up'));
    //console.log(str);
    $("#" + $(this).attr('data-DateSelector-DayListID')).html(str);
});

$(document).on("change","[data-DateSelector-role='Month']",function(){
    var str=generateDaySelector($(this).attr('data-DateSelector-YearListID'),$(this).attr('data-DateSelector-MonthListID'),$(this).attr('data-DateSelector-DayListID'),$(this).attr('data-DateSelector-Up'));
    //console.log(str);
    $("#" + $(this).attr('data-DateSelector-DayListID')).html(str);
});

$(document).on("change","[data-element-type='DateSelector']",function(){
    var str=generateDateString($(this).attr('data-DateSelector-YearListID'),$(this).attr('data-DateSelector-MonthListID'),$(this).attr('data-DateSelector-DayListID'),$(this).attr('data-DateSelector-DateStringFormat'));
    $("#" + $(this).attr('data-DateSelector-TargetInputID')).val(str);
});