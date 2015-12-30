/**
 * Created by Brian on 2015/12/21.
 */

function check_unique(){
    var msg="";
    var countNum1=((check_value_null($("#inputProjectorNum").val())==false||check_value_null($("#PReturnTime_DateInput").val())==false)?1:0);
    var countNum2=((check_value_null($("#PowerWattage").val())==false)?1:0);
    var countNum3=((check_value_null($("#DeskNumber").val())==false || check_value_null($("#ChairNumber").val())==false || check_value_null($("#DCReturnTime_DateInput").val())==false)?1:0);
    var countNum4=((check_value_null($("#CarryChairNumber").val())==false||check_value_null($("#CarryDeskNumber").val())==false)?1:0);
    if((countNum1+countNum2+countNum3+countNum4)!=1){
        msg+="必须只借用一样物资！";
    }else{
        if(countNum1 == 1){
            (check_value_null($("#inputProjectorNum").val())==false && check_value_null($("#PReturnTime_DateInput").val())==false)==false?msg+="物资申请信息未填完整":"";
        }
        if(countNum2 == 1){
            check_value_null($("#PowerWattage").val())?msg+="物资申请信息未填完整":"";
        }
        if(countNum3 == 1){
            (check_value_null($("#DeskNumber").val())==false && check_value_null($("#ChairNumber").val())==false && check_value_null($("#DCReturnTime_DateInput").val())==false)==false ?msg+="物资申请信息未填完整":"";
        }
        if(countNum4 == 1){
            (check_value_null($("#CarryChairNumber").val())==false && check_value_null($("#CarryDeskNumber").val())==false)==false?msg+="物资申请信息未填完整":"";
        }
    }
    /*console.log(countNum1);
    console.log(countNum2);
    console.log(countNum3);
    console.log(countNum4);
    console.log(countNum1+countNum2+countNum3+countNum4);
    console.log(msg);*/
    return msg;
}