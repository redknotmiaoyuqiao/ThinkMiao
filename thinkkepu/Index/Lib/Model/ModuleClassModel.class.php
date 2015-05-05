<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/16
 * Time: 1:03
 */
class ModuleClassModel extends Model{
    public function getView(){
        $Dao = M('sort');
        $res = $Dao->select();

        $out = '';
        $out = $out.'<p>';
        for($i=0;$i<count($res);$i++){
            $item = $res[$i];
            $out = $out.'<span class="badge badge-info">';
            $out = $out.'<a style="color:#FFFFFF" href="/thinkkepu/index.php/Index?id=9&class='.$item['kepu_sort_id'].'">';
            $out = $out.$item['kepu_sort_name'];
            $out = $out.'</a>';
            $out = $out.'</span>&nbsp&nbsp&nbsp';

        }

        $out = $out.'</p><br>';
        return $out;
    }
}