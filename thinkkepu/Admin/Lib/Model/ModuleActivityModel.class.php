<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/14
 * Time: 1:58
 */

class ModuleActivityModel extends Model{

    public function getAll(){
        $Dao = M('module_activity');
        $res = $Dao->select();

        return $res;
    }

    public function del($id){
        if(empty($id)){
            return false;
        }
        $Dao = M('module_activity');
        $con['kepu_module_activity_id'] = $id;
        $re = $Dao->where($con)->delete();

        if($re){
            return true;
        }
        return false;
    }
}