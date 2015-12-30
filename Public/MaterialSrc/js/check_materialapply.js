/**
 * Created by Brian on 2015/12/21.
 */

function check_unique(){
    var msg="";
    var type=$("[name='action_type']").val();
    switch (type){
        case 'materialapply':
            msg=check_unique_materialapply();
            break;
        case 'colorprinting':
            msg=check_unique_colorprinting();
            break;
        case 'east4':
            msg=check_unique_east4();
            break;
        case 'sports':
            msg=check_unique_sports();
            break;
        case 'special':
            msg=check_unique_special();
            break;
        case 'teachingbuilding':
            msg=check_unique_teachingbuilding();
            break;
        case 'outdoor':
            msg=check_unique_outdoor();
            break;
        case 'sacenter':
            msg=check_unique_sacenter();
            break;
    }
    return msg;
}

/* MaterialApply */
function check_unique_materialapply(){
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
    return msg;
}

/* ColorPrinting */
function check_unique_colorprinting(){
    msg="";

    return msg;
}

/* east4 */
function check_unique_east4(){
    msg="";

    return msg;
}

/* sports*/
function check_unique_sports(){
    msg="";

    return msg;
}

/* special */
function check_unique_special(){
    msg="";

    return msg;
}

/* teachingbuilding */
function check_unique_teachingbuilding(){
    msg="";

    return msg;
}

/* outdoor */
function check_unique_outdoor(){
    msg="";

    return msg;
}

/* sacenter */
function check_unique_sacenter(){
    msg="";

    return msg;
}