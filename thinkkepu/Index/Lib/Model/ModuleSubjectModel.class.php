<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/14
 * Time: 0:34
 */

class ModuleSubjectModel extends Model{
    public function getAll(){
        $Dao = M('subjectlist');
        $res = $Dao->select();

        return $res;
    }

    public function getView(){
        $Dao = M('subjectlist');
        $res = $Dao->order('kepu_subjectlist_time desc')->select();

        $str = '';

        for($i=0;$i<count($res);$i++){
            $item = $res[$i];
            $str = $str.'<div style="width:100% ;height:250px;border: 1px solid #dfdfdf;border-top: 5px solid #CC0000;">';
            $str = $str.'<a href="'.$item['kepu_subjectlist_url'].'">';
            $str = $str.'<h4 style="margin-left: 10px;">'.$item['kepu_subjectlist_title'].'</h4>';
            $str = $str.'<img style="height:200px;width:97% ;margin-left:10px;margin-right:10px" src="'.$item['kepu_subjectlist_img'].'"/>';
            $str = $str.'</a>';
            $str = $str.'</div><br>';
        }

        return $str;
    }

    public function del($id){
        if(empty($id)){
            return false;
        }
        $Dao = M('subjectlist');
        $con['kepu_subjectlist_id'] = $id;
        $re = $Dao->where($con)->delete();

        if($re){
            return true;
        }
        return false;
    }
}