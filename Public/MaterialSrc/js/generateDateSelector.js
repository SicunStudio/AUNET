/**
 * Created by Brian on 2015/12/21.
 */
function generateDateSelector(ToY,StY,IfSelToday,Up,targetName,prefix,cssClass,cssStyle){
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
     *
     * prefix 创建的日期选单包括结果input的id前缀，注意，如果一个页面有多个日期选单，请**务必**使此参数不同
     *
     * cssClass 创建选单的CSS类，如没有请赋值 ""
     *
     * cssStyle 创建选单的样式，如没有请赋值 ""
     *
     */
    console.log(typeof (Up?StY:ToY));
    var mydate=new Date();
    var i=0;
    var htmlstr="";
    var YearSelectorID=(prefix?prefix+"-" : "")+"DateSelector-Year";
    var MonthSelectorID=(prefix?prefix+"-" : "")+"DateSelector-Month";
    var DaySelectorID=(prefix?prefix+"-" : "")+"DateSelector-Day";
    htmlstr+="<input name='"+targetName+"' type='hidden'>";
    htmlstr+="<select class='" + (cssClass?cssClass:"") + "' style='"+(cssStyle?cssStyle:"")+"' data-element-type='DateSelector' data-DateSelector-role='Year'  id='"+ YearSelectorID +"' data-DateSelector-DayListID='"+DaySelectorID+"' data-DateSelector-MonthListID='"+MonthSelectorID+"' data-DateSelector-YearListID='"+YearSelectorID+"' >";
    for(i=(Up?StY:ToY);i<=(Up?ToY:StY); )
    {
        console.log(i);
        if(IfSelToday && i==mydate.getFullYear()){
            htmlstr+="<option value='"+ i.toString()+"' selected>" + i.toString() + "</option>";
        }
        else
        {
            htmlstr+="<option value='"+ i.toString()+"'>" + i.toString() + "</option>";
        }
        Up?(i++):(i--);
    }
    htmlstr+="</select>年";

    htmlstr+="<select data-element-type='DateSelector' data-DateSelector-role='Month'  id='"+ MonthSelectorID +"' data-DateSelector-DayListID='"+DaySelectorID+"' data-DateSelector-MonthListID='"+MonthSelectorID+"' data-DateSelector-YearListID='"+YearSelectorID+"' >";
    for(i=(Up?1:12);i<=(Up?12:1);(Up?(i++):(i--)))
    {
        if(IfSelToday && i==mydate.getMonth()){
            htmlstr+="<option value='"+ i.toString()+"' selected>" + i.toString() + "</option>";
        }
        else
        {
            htmlstr+="<option value='"+ i.toString()+"'>" + i.toString() + "</option>";
        }
    }
    htmlstr+="</select>月";
    htmlstr+="<select data-element-type='DateSelector' data-DateSelector-role='Day'  id='"+ DaySelectorID +"' data-DateSelector-DayListID='"+DaySelectorID+"' data-DateSelector-MonthListID='"+MonthSelectorID+"' data-DateSelector-YearListID='"+YearSelectorID+"' >";
    if(IfSelToday){
        var Daylist=new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
        Daylist[2]=(IsPingYear(mydate.getFullYear()) && mydate.getMonth()==2)?28:29;
        for(i=(Up?1:Daylist[mydate.getDate()]);i<=(Up?Daylist[mydate.getDate()]:1);i=(Up?(i+1):(i-1)))
        {
            if(IfSelToday && i==mydate.getDate()){
                htmlstr+="<option value='"+ i.toString()+"' selected>" + i.toString() + "</option>";
            }
            else
            {
                htmlstr+="<option value='"+ i.toString()+"'>" + i.toString() + "</option>";
            }
        }
    }
    htmlstr+="</select>日";
    return htmlstr;
}

function IsPingYear(year)//判断是否闰平年
{
    return(0 == year%4 && (year%100 !=0 || year%400 == 0));
}

$(document).on("changed","[data-element-type='DateSelector']",function(){
    $("#" + "$(this).attr['data-DateSelector-DayListID']").html();
});