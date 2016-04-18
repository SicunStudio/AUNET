<?php
/**
 * Created by IntelliJ IDEA.
 * User: Brian
 * Date: 2015/12/21
 * Time: 14:44
 */
namespace Material\Controller;
use Think\Controller;
class ApplicationFormsController extends Controller
{
    public function loading() {
        $this -> show();
    }
    public function error(){
        $this -> show();
    }
    public function materialapply() {
        $this -> show();
    }
}
?>