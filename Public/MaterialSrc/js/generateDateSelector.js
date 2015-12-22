/**
 * Created by Brian on 2015/12/21.
 */
function generateDateSelector(ToY,ToM,ToD,StY,StM,StD,IfSelToday,Up,targetName,prefix,cssClass,cssStyle){
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
    var ChangeNum=-1; //每次增加或者减少的量
    if(Up){
        ChangeNum=1;
    }
}

function IsPingYear(year)//判断是否闰平年
{
    return(0 == year%4 && (year%100 !=0 || year%400 == 0));
}