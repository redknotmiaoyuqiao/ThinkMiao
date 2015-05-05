<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/14
 * Time: 1:58
 */
class ModuleActivityModel extends Model
{

    public function getAll()
    {
        $Dao = M('module_activity');
        $res = $Dao->order('kepu_module_activity_time desc')->select();

        return $res;
    }

    public function getView()
    {
        $Dao = M('module_activity');
        $res = $Dao->order('kepu_module_activity_time desc')->select();

        $out = '';

        for ($i = 0; $i < ((count($res)) / 3); $i++) {
            $out = $out . '<div class="row-fluid">';
            $w = $i * 3;
            for ($j = $w; $j < $w + 3; $j++) {
                $item = $res[$j];
                if ($item) {
                    $out = $out . '<div class="span4" style="height:350px;border: 1px solid #dfdfdf;border-top: 5px solid #CC0000;">';
                    $out = $out . '<h4 style="margin-left: 10px;">' .$item['kepu_module_activity_title'] . '</h4>';
                    $out = $out . '<img style="height:210px;width:90% ;margin-left:10px;margin-right:10px" src="'.$item['kepu_module_activity_img'].'"/>';
                    $out = $out . '<div style="overflow:hidden;text-overflow:ellipsis;white-apace:nowrap;height:80px;height:45px;width:90% ;margin-top:10px;margin-left:10px;margin-right:10px">';
                    $out = $out . '<small>'.$item['kepu_module_activity_show'].'</small>';
                    $out = $out . '</div>';
                    $out = $out . '<a href="'.$item['kepu_module_activity_url'].'"><h5 style="margin-left: 10px; color:#CC0000">了解活动</h5></a>';
                    $out = $out . '</div>';
                }
            }
            $out = $out . '</div><br>';
        }
        return $out;
    }

    public function del($id)
    {
        if (empty($id)) {
            return false;
        }
        $Dao = M('module_activity');
        $con['kepu_module_activity_id'] = $id;
        $re = $Dao->where($con)->delete();

        if ($re) {
            return true;
        }
        return false;
    }
}