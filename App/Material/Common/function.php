<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/24
 * Time: 10:36
 */
function addRemarkbyId($remark, $id) {
     return M("user")->where(array("id"=>$id))->setField("remark",$remark);
}