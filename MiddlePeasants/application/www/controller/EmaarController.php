<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/13 0013
 * Time: 15:09
 */

namespace app\www\controller;


use think\Controller;

class EmaarController extends Controller
{
    public function index(){
        return $this->fetch('index');
    }
}