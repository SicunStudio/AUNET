<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/17
 * Time: 23:01
 */
namespace Admin\Controller;

use Think\Controller;

class MaterialController extends CommonController
{
    private static $ON_CHECKED = 0;
    private static $IS_PASSED = 1;
    private static $PASSED_FAILED = 2;


    private static $type = array('power' => 0,
        'monitor' => 1,
        'bus' => 2,
        'decoration' => 3,
        'activity_center' => 4,
        'ground' => 5,
        'class' => 6,
        'special_place' => 7,
        'sport' => 8,
        'east_side' => 9,
        'others' => 10);

    public function material_index()
    {
        $this->display();
    }
}