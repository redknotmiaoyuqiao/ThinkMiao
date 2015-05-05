<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/3/18
 * Time: 14:44
 */

class CommonAction  extends Action{
    public function getCodeImage(){
        session_start();
        getCode(4,60,20);
    }
}