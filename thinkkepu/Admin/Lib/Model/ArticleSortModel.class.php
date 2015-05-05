<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/6
 * Time: 23:30
 */

class ArticleSortModel extends Model{

    public function insertSort($name){
        $Dao = M('sort');
        if(empty($name)){
            return false;
        }
        $data['kepu_sort_name'] = $name;
        $res = $Dao->add($data);

        if($res){
            return true;
        }
    }

    public function delSort($id){
        $Dao = M('sort');
        if(empty($id)){
            return false;
        }
        $con['kepu_sort_id'] = $id;
        $re = $Dao->where($con)->delete();
        if($re){
            return true;
        }
    }

    public function getAllSort(){
        $Dao = M('sort');
        $res = $Dao->select();
        if($res){
            return $res;
        }
        else{
            return false;
        }
    }
}